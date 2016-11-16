<?php
/**
 * 带表格的窗口
 *
 * 带表格的窗口
 * 
 * 调用模板：无
 * 
 * @category   jieqicms
 * @package    system
 * @copyright  Copyright (c) Hangzhou Jieqi Network Technology Co.,Ltd. (http://www.jieqi.com)
 * @author     $Author: juny $
 * @version    $Id: tableform.php 201 2008-11-25 06:09:43Z juny $
 */

include_once(JIEQI_ROOT_PATH.'/lib/html/form/form.php');

class JieqiTableForm extends JieqiForm
{

	function render()
	{
		$ret = $this->getTitle()."\n<form name=\"".$this->getName()."\" id=\"".$this->getName()."\" action=\"".$this->getAction()."\" method=\"".$this->getMethod()."\"".$this->getExtra().">\n<table border=\"0\" width=\"100%\">\n";
		foreach ( $this->getElements() as $ele ) {
			if ( !$ele->isHidden() ) {
				$caption=$ele->getCaption();
				if(empty($caption)){
					$ret .= "<tr><td valign=\"top\" colspan=\"2\" align=\"center\">".$ele->render()."</td></tr>";
				}else{
					$ret .= "<tr valign=\"top\" align=\"left\"><td>".$caption;
					if ($ele->getDescription() != '') {
						$ret .= "<br /><br /><span style=\"font-weight: normal;\">".$ele->getDescription()."</span>";
					}
					$ret .= "</td><td>".$ele->render()."</td></tr>";
				}
			} else {
				$ret .= $ele->render()."\n";
			}
		}
		$ret .= "</table>\n</form>\n";
		return $ret;
	}
}
?>