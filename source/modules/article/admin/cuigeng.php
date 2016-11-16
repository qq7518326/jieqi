<?php 
define('JIEQI_MODULE_NAME', 'article');
require_once('../../../global.php');
jieqi_getconfigs(JIEQI_MODULE_NAME, 'power');
jieqi_getconfigs(JIEQI_MODULE_NAME, 'configs');
jieqi_checkpower($jieqiPower['article']['manageallarticle'], $jieqiUsersStatus, $jieqiUsersGroup, false, true);
jieqi_loadlang('manage', JIEQI_MODULE_NAME);
jieqi_loadlang('list', JIEQI_MODULE_NAME);
include_once($jieqiModules['article']['path'].'/class/article.php');
$article_handler =& JieqiArticleHandler::getInstance('JieqiArticleHandler');
include_once(JIEQI_ROOT_PATH.'/admin/header.php');

if($_GET['keytype'] == '0'){
	$where = ' WHERE `articlename` = \''.$_GET[keyword].'\'';
}elseif($_GET['keytype'] == '1'){
	$where = ' WHERE `uname` = \''.$_GET[keyword].'\'';
}
if($_GET['list'] == 'isok'){
	$where = ' WHERE `status` = \'1\'';
}elseif($_GET['list'] == 'nook'){
	$where = ' WHERE `status` = \'0\'';
}

if($_GET['action'] == 'jiesuan'){
	$jsid = $_GET['cgid'] ? (int)$_GET['cgid'] : '0';
	if($jsid=='0'){
		jieqi_jumppage('/modules/article/admin/cuigeng.php', '链接非法', '<font color="blue">正在跳转，请稍候...</font>');exit;
	}
	$dangesql = mysql_query("SELECT * FROM `jieqi_go123_cuigeng` WHERE `id` = '$jsid' LIMIT 1");
	while ($dangerow = mysql_fetch_array($dangesql,1)){
		$dangerows[] = $dangerow;
	}
	$articleid = $dangerows['0']['articleid'];
	$getauthoridsql = mysql_query("SELECT `authorid` FROM `jieqi_article_article` WHERE `articleid`='$articleid'");
	while ($authorrow = mysql_fetch_array($getauthoridsql,1)){
		$authorid = $authorrow['authorid'];
	}
	if(!$authorid){
		jieqi_jumppage($url, '该作者不存在', '<font color="blue">正在跳转，请稍候...</font>');exit;
	}
	$jsnums = $dangerows['0']['nums']*0.7;
	$tuinums = $dangerows['0']['nums'];
	mysql_query("UPDATE `jieqi_go123_cuigeng` SET `status` = '1' WHERE `id`='$jsid' limit 1");
	if($_GET['type'] == 'yes'){
		mysql_query("UPDATE `jieqi_system_users` SET `egold`=`egold`+'$jsnums' WHERE `uid`='$authorid'");
		jieqi_jumppage('/modules/article/admin/cuigeng.php', '催更结算成功', '<font color="blue">正在跳转，请稍候...</font>');exit;
	}else{
		mysql_query("UPDATE `jieqi_system_users` SET `egold`=`egold`+'$tuinums' WHERE `uid`='$_GET[fabuid]'");
		jieqi_jumppage('/modules/article/admin/cuigeng.php', '催更退款成功', '<font color="blue">正在跳转，请稍候...</font>');exit;
	}
}
$curpage = $_GET['page'] ? $_GET['page'] : '0';
$perpage = '20';
$beginsql = $curpage*$perpage;
$mpurl = $_SERVER["REQUEST_URI"];
if($_SERVER["REQUEST_URI"] == '/modules/article/admin/cuigeng.php'){
	$mpurl = '?';
}

$result = mysql_query("SELECT * FROM `jieqi_go123_cuigeng`"."$where"." ORDER BY `dateline` desc limit $beginsql,$perpage");
while($results = mysql_fetch_array($result,1)){
	$cuigenglist[] = $results;
}
$zongnums = count($cuigenglist);
//$jieqiTpl->assign('cuigenglist',$cuigenglist);
include('../templates/admintemp/cuigeng.php');
function getsize($dateline,$articleid){
	$year = date("Y",$dateline);$month = date("m",$dateline);$day = date("d",$dateline)+1;
	$begintime = mktime(0,0,0,$month,$day,$year);
	$endtime = mktime(23,59,59,$month,$day,$year);
	$sizesql = mysql_query("SELECT sum(size) as t FROM `jieqi_article_chapter` WHERE `articleid` = '$articleid' AND `postdate` > '$begintime' AND `postdate` < '$endtime'");
	while ($sizerows = mysql_fetch_array($sizesql,1)){
		$size = $sizerows['t'];
	}
	return $size?$size/2:'0';
}
/**
* 只有上一页下一页的分页（无需知道数据总数）
* @param $num - 本次所取数据条数
* @param $perpage - 每页数
* @param $curpage - 当前页
* @param $mpurl - 跳转的路径
* @return 返回分页代码
*/
function simplepage($zongnums, $perpage, $curpage, $mpurl) {
	$return = '';
	$next = $zongnums == $perpage ? '<a href="'.$mpurl.'&amp;page='.($curpage + 1).'" class="nxt">[下一页]</a>' : '';
	$prev = $curpage > 0 ? '<span class="pgb"><a href="'.$mpurl.'&amp;page='.($curpage - 1).'">[上一页]</a></span>' : '';
	if($next || $prev) {
		$return = '<div class="pg">'.$prev.$next.'</div>';
	}
	return $return;
}
include_once(JIEQI_ROOT_PATH.'/admin/footer.php');