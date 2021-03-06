<?php
define('JIEQI_MODULE_NAME', 'quiz');
if(!defined('JIEQI_GLOBAL_INCLUDE')) include_once('../../global.php');

if(!$jieqiLang['quiz']['list']) jieqi_loadlang('problems', JIEQI_MODULE_NAME);

jieqi_getconfigs('quiz', 'configs');
jieqi_getconfigs('quiz', 'problems_type_list','jieqiBlocks');

//必须和配置文件中的下标保持一致
$jieqiBlocks['0']['vars']=str_replace('null',htmlspecialchars($_REQUEST['type'],ENT_QUOTES),$jieqiBlocks['0']['vars']);

$linkurl=$jieqiConfigs['quiz']['domainname']==""?$jieqiModules['quiz']['url']:$jieqiConfigs['quiz']['domainname'];

include_once(JIEQI_ROOT_PATH.'/header.php');
$jieqiTpl->assign_by_ref('linkurl',$linkurl);
$jieqiTset['jieqi_contents_template'] = ''; 

include_once(JIEQI_ROOT_PATH.'/footer.php');
?>