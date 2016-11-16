<?php 
/**
 * 新建电子书
 *
 * 新建电子书
 * 
 * 调用模板：无
 * 
 * @category   jieqicms
 * @package    obook
 * @copyright  Copyright (c) Hangzhou Jieqi Network Technology Co.,Ltd. (http://www.jieqi.com)
 * @author     $Author: juny $
 * @version    $Id: newobook.php 286 2008-12-23 03:04:17Z juny $
 */

define('JIEQI_MODULE_NAME', 'obook');
require_once('../../global.php');
//<!--jieqi insert check code-->
jieqi_getconfigs(JIEQI_MODULE_NAME, 'power');
//发表文章权限
jieqi_checkpower($jieqiPower['obook']['newobook'], $jieqiUsersStatus, $jieqiUsersGroup, false);
jieqi_loadlang('obook', JIEQI_MODULE_NAME);
if (!isset($_REQUEST['action'])) $_REQUEST['action'] = 'obook';
jieqi_getconfigs(JIEQI_MODULE_NAME, 'configs');
$obook_static_url = (empty($jieqiConfigs['obook']['staticurl'])) ? $jieqiModules['obook']['url'] : $jieqiConfigs['obook']['staticurl'];
$obook_dynamic_url = (empty($jieqiConfigs['obook']['dynamicurl'])) ? $jieqiModules['obook']['url'] : $jieqiConfigs['obook']['dynamicurl'];

switch($_REQUEST['action']) {
	case 'newobook':
	$_POST['obookname'] = trim($_POST['obookname']);
	$_POST['author'] = trim($_POST['author']);
	$_POST['agent'] = trim($_POST['agent']);
	$errtext='';
	include_once(JIEQI_ROOT_PATH.'/lib/text/textfunction.php');
	//检查标题
	if (strlen($_POST['obookname'])==0) $errtext .= $jieqiLang['obook']['need_obook_title'].'<br />';
	elseif (!jieqi_safestring($_POST['obookname'])) $errtext .= $jieqiLang['obook']['limit_obook_title'].'<br />';
	if (!empty($_FILES['obookspic']['name'])){
		if(eregi("\.(gif|jpg|jpeg|png|bmp|swf|svg)$",$_FILES['obookspic']['name'])){
			if(strstr(strtolower($_FILES['obookspic']['name']),strtolower($jieqiConfigs['obook']['imagetype'])) != strtolower($jieqiConfigs['obook']['imagetype'])) $errtext .= sprintf($jieqiLang['obook']['simage_type_error'], $jieqiConfigs['obook']['imagetype']).'<br />';
		}else{
			$errtext .= sprintf($jieqiLang['obook']['simage_not_image'], $_FILES['obookspic']['name']).'<br />';
		}
		if(!empty($errtext)) jieqi_delfile($_FILES['obookspic']['tmp_name']);
	}
	if (!empty($_FILES['obooklpic']['name'])){
		if(eregi("\.(gif|jpg|jpeg|png|bmp|swf|svg)$",$_FILES['obooklpic']['name'])){
			if(strstr(strtolower($_FILES['obooklpic']['name']),strtolower($jieqiConfigs['obook']['imagetype'])) != strtolower($jieqiConfigs['obook']['imagetype'])) $errtext .= sprintf($jieqiLang['obook']['limage_type_error'], $jieqiConfigs['obook']['imagetype']).'<br />';
		}else{
			$errtext .= sprintf($jieqiLang['obook']['limage_not_image'], $_FILES['obooklpic']['name']).'<br />';
		}
		if(!empty($errtext)) jieqi_delfile($_FILES['obooklpic']['tmp_name']);
	}
	if(empty($errtext)) {
		include_once($jieqiModules['obook']['path'].'/class/obook.php');
		$obook_handler =& JieqiObookHandler::getInstance('JieqiObookHandler');
		//检查电子书是否已经发表
        if($jieqiConfigs['obook']['sameobookname'] != 1){
        	if($obook_handler ->getCount(new Criteria('obookname', $_POST['obookname'], '=')) > 0) jieqi_printfail(sprintf($jieqiLang['obook']['obooktitle_has_exists'], jieqi_htmlstr($_POST['articlename'])));
        }
		include_once(JIEQI_ROOT_PATH.'/class/users.php');
		$users_handler =& JieqiUsersHandler::getInstance('JieqiUsersHandler');
		$newObook = $obook_handler->create();
		$newObook->setVar('siteid', JIEQI_SITE_ID);
		$newObook->setVar('postdate', JIEQI_NOW_TIME);
		$newObook->setVar('lastupdate', JIEQI_NOW_TIME);
		$newObook->setVar('obookname', $_POST['obookname']);
		$newObook->setVar('keywords', trim($_POST['keywords']));
		$newObook->setVar('initial', jieqi_getinitial($_POST['obookname']));
		if(is_numeric($_POST['articleid'])) $_POST['articleid']=intval($_POST['articleid']);
		else{
			include_once($jieqiModules['article']['path'].'/class/article.php');
			$article_handler =& JieqiArticleHandler::getInstance('JieqiArticleHandler');
			$criteria=new CriteriaCompo(new Criteria('display', '0', '='));
			$criteria->add(new Criteria('articlename', $_POST['obookname'], '='));
			$article_handler->queryObjects($criteria);
			$article=$article_handler->getObject();
			if(is_object($article)) $_POST['articleid']=$article->getVar('articleid', 'n');
			$_POST['articleid']=0;
		}
		$newObook->setVar('articleid', $_POST['articleid']);
		$newObook->setVar('sortid', $_POST['sortid']);
		$newObook->setVar('intro', $_POST['intro']);
		$newObook->setVar('notice', $_POST['notice']);
		$newObook->setVar('setting', '');
		$newObook->setVar('lastvolumeid', 0);
		$newObook->setVar('lastvolume', '');
		$newObook->setVar('lastchapterid', 0);
		$newObook->setVar('lastchapter', '');
		$newObook->setVar('chapters', 0);
		$newObook->setVar('size', 0);

		if(jieqi_checkpower($jieqiPower['obook']['transobook'], $jieqiUsersStatus, $jieqiUsersGroup, true)){
			//允许转载的情况
			if(empty($_POST['author']) || (!empty($_SESSION['jieqiUserId']) && $_POST['author']==$_SESSION['jieqiUserName'])){
				if(!empty($_SESSION['jieqiUserId'])){
					$newObook->setVar('authorid', $_SESSION['jieqiUserId']);
					$newObook->setVar('author', $_SESSION['jieqiUserName']);
				}else{
					$newObook->setVar('authorid', 0);
					$newObook->setVar('author', '');
				}
			}else{
				//转载作品
				$newObook->setVar('author', $_POST['author']);
				if($_POST['authorflag']){
					$authorobj=$users_handler->getByname($_POST['author']);
					if(is_object($authorobj)) $newObook->setVar('authorid', $authorobj->getVar('uid'));
					else $newObook->setVar('authorid', 0);
				}else{
					$newObook->setVar('authorid', 0);
				}
			}

			$agentobj=false;
			if(!empty($_POST['agent'])) $agentobj=$users_handler->getByname($_POST['agent']);
			if(is_object($agentobj)){
				$newObook->setVar('agentid', $agentobj->getVar('uid'));
				$newObook->setVar('agent', $agentobj->getVar('uname', 'n'));
			}else{
				$newObook->setVar('agentid', 0);
				$newObook->setVar('agent', '');
			}
		}else{
			//不允许转载的情况
			if(!empty($_SESSION['jieqiUserId'])){
				$newObook->setVar('authorid', $_SESSION['jieqiUserId']);
				$newObook->setVar('author', $_SESSION['jieqiUserName']);
				$newObook->setVar('agentid', $_SESSION['jieqiUserId']);
				$newObook->setVar('agent', $_SESSION['jieqiUserName']);
			}else{
				$newObook->setVar('authorid', 0);
				$newObook->setVar('author', '');
				$newObook->setVar('agentid', 0);
				$newObook->setVar('agent', '');
			}
		}

		if(!empty($_SESSION['jieqiUserId'])){
			$newObook->setVar('posterid', $_SESSION['jieqiUserId']);
			$newObook->setVar('poster', $_SESSION['jieqiUserName']);
		}else{
			$newObook->setVar('posterid', 0);
			$newObook->setVar('poster', '');
		}

		jieqi_getconfigs(JIEQI_MODULE_NAME, 'publisher');
		if(!isset($_POST['publishid'])) $_POST['publishid']=0;
		$newObook->setVar('publishid', $_POST['publishid']);
		$newObook->setVar('tbookinfo', '');
		$newObook->setVar('toptime', 0);
		$newObook->setVar('goodnum', 0);
		$newObook->setVar('badnum', 0);
		$newObook->setVar('fullflag', 0);
		$newObook->setVar('saleprice', 0);
		$newObook->setVar('vipprice', 0);
		$newObook->setVar('sumegold', 0);
		$newObook->setVar('sumesilver', 0);
		$newObook->setVar('normalsale', 0);
		$newObook->setVar('vipsale', 0);
		$newObook->setVar('freesale', 0);
		$newObook->setVar('bespsale', 0);
		$newObook->setVar('totalsale', 0);
		$newObook->setVar('daysale', 0);
		$newObook->setVar('weeksale', 0);
		$newObook->setVar('monthsale', 0);
		$newObook->setVar('allsale', 0);
		$newObook->setVar('lastsale', 0);
		$newObook->setVar('canvip', 0);
		$newObook->setVar('canfree', 0);
		$newObook->setVar('canbesp', 0);
		$newObook->setVar('hasebook', 0);
		$newObook->setVar('hastbook', 0);
		$newObook->setVar('state', 0);
		$newObook->setVar('flag', 0);
		$newObook->setVar('display', 0);

		$imgflag=0;
		if (!empty($_FILES['obookspic']['name'])) $imgflag =$imgflag | 1;
		if (!empty($_FILES['obooklpic']['name'])) $imgflag =$imgflag | 2;
		$newObook->setVar('imgflag', $imgflag);
		if(jieqi_checkpower($jieqiPower['obook']['needcheck'], $jieqiUsersStatus, $jieqiUsersGroup, true)){
			$newObook->setVar('display', 0);
		}else{
			$newObook->setVar('display', 1);  //待审文章
		}
		if (!$obook_handler->insert($newObook)) jieqi_printfail($jieqiLang['obook']['add_obook_failure']);
		else {
			$id=$newObook->getVar('obookid');
			$imagedir=jieqi_uploadpath($jieqiConfigs['obook']['imagedir'], 'obook');
			if (!file_exists($imagedir)) jieqi_createdir($imagedir);
			$imagedir .= jieqi_getsubdir($id);
			if (!file_exists($imagedir)) jieqi_createdir($imagedir);
			$imagedir .= '/'.$id;
			if (!file_exists($imagedir)) jieqi_createdir($imagedir);

			//保存小图
			if (!empty($_FILES['obookspic']['name'])){
				if(strstr(strtolower($_FILES['obookspic']['name']),strtolower($jieqiConfigs['obook']['imagetype']))==strtolower($jieqiConfigs['obook']['imagetype'])){
					jieqi_copyfile($_FILES['obookspic']['tmp_name'], $imagedir.'/'.$id.'s'.$jieqiConfigs['obook']['imagetype'], 0777, true);
				}
			}
			//保存大图
			if (!empty($_FILES['obooklpic']['name'])){
				if(strstr(strtolower($_FILES['obooklpic']['name']),strtolower($jieqiConfigs['obook']['imagetype']))==strtolower($jieqiConfigs['obook']['imagetype'])){
					jieqi_copyfile($_FILES['obooklpic']['tmp_name'], $imagedir.'/'.$id.'l'.$jieqiConfigs['obook']['imagetype'], 0777, true);
				}
			}
			//增加发文积分
			if(!empty($jieqiConfigs['obook']['scoreobook'])){
				$users_handler->changeScore($_SESSION['jieqiUserId'], $jieqiConfigs['obook']['scoreobook'], true);
			}
			//把对应的文章设为vip
			if(!empty($_POST['articleid'])){
				if(!is_object($article)){
					include_once($jieqiModules['article']['path'].'/class/article.php');
					$article_handler =& JieqiArticleHandler::getInstance('JieqiArticleHandler');
					$article=$article_handler->get($_POST['articleid']);
				}
				if(is_object($article)){
					if(($article->getVar('articletype', 'n') & 2) != 2){
						$article->setVar('articletype', ($article->getVar('articletype', 'n') | 2));
						$article_handler->insert($article);
					}
				}
			}

			//更新最新入库
			if($newObook->getVar('display')==0){
				jieqi_getcachevars('obook', 'obookuplog');
				if(!is_array($jieqiObookuplog)) $jieqiObookuplog=array('obookuptime'=>0, 'chapteruptime'=>0);
				$jieqiObookuplog['obookuptime']=JIEQI_NOW_TIME;
				jieqi_setcachevars('obookuplog', 'jieqiObookuplog', $jieqiObookuplog, 'obook');
			}
			jieqi_jumppage($obook_static_url.'/obookmanage.php?id='.$id, LANG_DO_SUCCESS, $jieqiLang['obook']['add_obook_success']);
		}
	}else{
		jieqi_printfail($errtext);
	}
	break;
	case 'obook':
	default:
	//包含区块参数(定制区块)
	jieqi_getconfigs('obook', 'authorblocks', 'jieqiBlocks');
	include_once(JIEQI_ROOT_PATH.'/header.php');
	$jieqiTpl->assign('obook_static_url',$obook_static_url);
	$jieqiTpl->assign('obook_dynamic_url',$obook_dynamic_url);
	include_once(JIEQI_ROOT_PATH.'/lib/html/formloader.php');
	$obook_form = new JieqiThemeForm($jieqiLang['obook']['add_obook'], 'frmnewobook', $obook_static_url.'/newobook.php');
	$obook_form->setExtra('enctype="multipart/form-data"');
	jieqi_getconfigs(JIEQI_MODULE_NAME, 'sort');
	$aarticleid=0;
	$abookname='';
	$asortid=0;
	$asort='';
	$akeywords='';
	$aauthor='';
	$aauthorflag=0;
	$aagent='';
	$aintro='';
	$anotice='';
	$aimgflag=0;
	$abookname=$_REQUEST['obookname'];
	if(!empty($_REQUEST['obookname']) && is_file($jieqiModules['article']['path'].'/class/article.php')){
		include_once($jieqiModules['article']['path'].'/class/article.php');
		$article_handler =& JieqiArticleHandler::getInstance('JieqiArticleHandler');
		$criteria=new CriteriaCompo(new Criteria('display', '0', '='));
		$criteria->add(new Criteria('articlename', $_REQUEST['obookname'], '='));
		$article_handler->queryObjects($criteria);
		$article=$article_handler->getObject();
		if(is_object($article)){
			jieqi_getconfigs('article', 'sort');
			$aarticleid=$article->getVar('articleid', 'e');
			$abookname=$article->getVar('articlename', 'e');
			$asortid=$article->getVar('sortid', 'e');
			$asort=jieqi_htmlstr($jieqiSort['article'][$asortid]['caption']);
			if(!isset($jieqiSort['obook'][$asortid]['caption']) || jieqi_htmlstr($jieqiSort['obook'][$asortid]['caption']) != $asort) $asortid=0;
			$akeywords=$article->getVar('keywords', 'e');
			$aauthor=$article->getVar('author', 'e');
			if($article->getVar('authorid', 'n') > 0){
				$aauthorflag=1;
				$aagent=$aauthor;
			}
			$aintro=$article->getVar('intro', 'e');
			$anotice=$article->getVar('notice', 'e');
			$aimgflag=$article->getVar('imgflag', 'e');
		}
	}
	$obook_name=new JieqiFormText($jieqiLang['obook']['table_obook_obookname'], 'obookname', 30, 50, $abookname);
	$obook_name->setDescription($jieqiLang['obook']['obookname_note']);
	$obook_form->addElement($obook_name, true);

	$sort_select = new JieqiFormSelect($jieqiLang['obook']['table_obook_sortid'],'sortid', $asortid);
	if(!empty($asort)) $sort_select->setDescription($jieqiLang['obook']['sortid_note'].$asort);
	foreach($jieqiSort['obook'] as $key => $val){
		$tmpstr = '';
		if ($val['layer']>0){
			for($i=0; $i<$val['layer']; $i++) $tmpstr .= '&nbsp;&nbsp;';
			$tmpstr .= '├';
		}
		$tmpstr .= $val['caption'];
		$sort_select->addOption($key, $tmpstr);
	}
	$obook_form->addElement($sort_select, true);

	jieqi_getconfigs(JIEQI_MODULE_NAME, 'publisher');
	if(isset($jieqiPublisher) && count($jieqiPublisher)>1){
		$publisher_select = new JieqiFormSelect($jieqiLang['obook']['table_obook_publishid'],'publishid');
		foreach($jieqiPublisher as $key => $val){
			$publisher_select->addOption($key, $val['name']);
		}
		$obook_form->addElement($publisher_select, false);
	}
	$keywords=new JieqiFormText($jieqiLang['obook']['table_obook_keywords'], 'keywords', 30, 50, $akeywords);
	$keywords->setDescription($jieqiLang['obook']['keywords_note']);
	$obook_form->addElement($keywords);
	if(jieqi_checkpower($jieqiPower['obook']['transobook'], $jieqiUsersStatus, $jieqiUsersGroup, true)){
		$authorname=new JieqiFormText($jieqiLang['obook']['table_obook_author'], 'author', 30, 30, $aauthor);
		$authorname->setDescription($jieqiLang['obook']['author_note']);
		$obook_form->addElement($authorname);
		$authorflag=new JieqiFormRadio($jieqiLang['obook']['obook_author_flag'], 'authorflag', $aauthorflag);
		$authorflag->addOption('1', $jieqiLang['obook']['auth_to_author']);
		$authorflag->addOption('0', $jieqiLang['obook']['not_auth_author']);
		$obook_form->addElement($authorflag);
		$agentname=new JieqiFormText($jieqiLang['obook']['table_obook_agent'], 'agent', 30, 30, $aagent);
		$agentname->setDescription($jieqiLang['obook']['author_note']);
		$obook_form->addElement($agentname);
	}

	$obook_form->addElement(new JieqiFormTextArea($jieqiLang['obook']['table_obook_intro'], 'intro', $aintro, 6, 60));
	$obook_form->addElement(new JieqiFormTextArea($jieqiLang['obook']['table_obook_notice'], 'notice', $anotice, 6, 60));
	$spic=new JieqiFormFile($jieqiLang['obook']['obook_small_image'], 'obookspic', 30);
	$spic->setDescription(sprintf($jieqiLang['obook']['obook_image_type'], $jieqiConfigs['obook']['imagetype']));
	$obook_form->addElement($spic);
	$lpic=new JieqiFormFile($jieqiLang['obook']['obook_large_image'], 'obooklpic', 30);
	$lpic->setDescription(sprintf($jieqiLang['obook']['obook_image_type'], $jieqiConfigs['obook']['imagetype']));
	$obook_form->addElement($lpic);
	$obook_form->addElement(new JieqiFormHidden('articleid', $aarticleid));
	$obook_form->addElement(new JieqiFormHidden('action', 'newobook'));
	$obook_form->addElement(new JieqiFormButton('&nbsp;', 'submit', LANG_SUBMIT, 'submit'));
	
	$jieqiTset['jieqi_contents_template'] = $jieqiModules['obook']['path'].'/templates/newbook.html';
	$jieqiTpl->assign('contents', '<br />'.$obook_form->render(JIEQI_FORM_MIDDLE).'<br />');
	include_once(JIEQI_ROOT_PATH.'/footer.php');
	break;
}
?>