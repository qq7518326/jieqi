<?php
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>��������-����ԭ����ѧ��</title>
<link href="/themes/chaoliu/css/authorcenter.css" rel="stylesheet"/>
<style>
table tbody tr{height:30px;line-height:30px;}

.wdgf{border: 2px solid #c99500;border-right:none;
background-color: white;}
.menu .cjzp{border:none;background:url(/themes/chaoliu/images/chuangjian_14.gif) 27px center no-repeat;}
</style>
<script type="text/javascript" src="include/js/common.js"></script>

<script type="text/javascript" src="/template/newchaoliu/js/jquery-1.7.1.js"></script>


</head>
<body>

<div id="top" >
<div class="top_inner">
<div class="left orangea"><div style="float:left; height:30px; line-height:30px;"><img src="/themes/chaoliu/images/time.gif"
    align="absmiddle" /> <script type="text/javascript"  src="/themes/chaoliu/js/time.js"></script>&nbsp;  </div>
    <div style="float:right;">
		<div class="m_top">
&nbsp;';
if($this->_tpl_vars['jieqi_userid'] == 0){
echo $this->_tpl_vars['jieqi_sitename'].'��ӭ����������ѡ��[<a href="'.$this->_tpl_vars['jieqi_user_url'].'/register.php">��¼</a>]����[<a href="'.$this->_tpl_vars['jieqi_user_url'].'/register.php">ע�����û�</a>]��';
}else{
echo $this->_tpl_vars['jieqi_sitename'].'��ӭ����'.$this->_tpl_vars['jieqi_username'].'&nbsp; <span style="color:#dbdbdb;">|</span><a href="'.$this->_tpl_vars['jieqi_user_url'].'/userdetail.php" style="margin:0 8px;">��������</a><span style="color:#dbdbdb;">|</span><a href="'.$this->_tpl_vars['jieqi_url'].'/modules/article/bookcase.php" style="margin:0 8px;">�ҵ����</a><span style="color:#dbdbdb;">|</span><a href="'.$this->_tpl_vars['jieqi_url'].'/modules/article/myarticle.php" style="margin:0 8px;">����ר��</a><span style="color:#dbdbdb;">|</span><a href="'.$this->_tpl_vars['jieqi_url'].'/message.php?box=inbox" style="margin:0 8px;">����Ϣ</a><span style="color:#dbdbdb;">|</span><a target="_blank" href="'.$this->_tpl_vars['jieqi_user_url'].'/logout.php" style="margin:0 8px;">�˳���¼</a>';
}
echo '
</div>
    </div><div class="clear"></div></div>
</div>
</div>
<div id="head">
	<a class="logo"><img src="/themes/chaoliu/images/logo_03.gif" /></a>

	<div class="clear"></div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$(\'.head\').css(\'background\',\'url(/themes/chaoliu/images/g1-icon01.gif) no-repeat 15px 5px\')
	$(\'.head\').click(function(){
			$(\'.head\').css(\'background\',\'url(/themes/chaoliu/images/g1-icon01.gif) no-repeat 15px 5px\')
			$(this).css(\'background\',\'url(/themes/chaoliu/images/g1-icon02.gif) no-repeat 15px 5px\')
			$(\'#navigation li\').css(\'background\',\'#fff\')
			$(this).parent().css(\'background\',\'#f6f6f6\')
			$(this).next(\'.xinwen_con\').css(\'color\',\'#888\')
			$(\'.xinwen_con\').slideUp(200)
			if($(this).next(\'.xinwen_con\').css(\'display\')==\'none\'){
				$(this).next(\'.xinwen_con\').slideDown(200)
			}else{
				$(this).next(\'.xinwen_con\').slideUp(200)
			}
			})
			
		
	
})
</script>
<script language="javascript" type="text/javascript">
<!--
function frmnewarticle_validate(){
  if(document.frmnewarticle.sortid.value == ""){
    alert("���������");
    document.frmnewarticle.sortid.focus();
    return false;
  }
  if(document.frmnewarticle.articlename.value == ""){
    alert("��������������");
    document.frmnewarticle.articlename.focus();
    return false;
  }
}
//-->
</script>
<div id="main">
	<ul class="menu">
    	<li><a href="/modules/article/myarticle.php" class="wzgg">��վ����</a></li>
        <li><a href="/modules/article/newarticle.php" class="cjzp">������Ʒ</a></li>
        <li><a href="/modules/article/masterpage.php" class="zpgl">��Ʒ����</a></li>
        <li><a href="/modules/article/newdraft.php" class="cgx">�ݸ���</a></li>
        <li><a href="/modules/obook/newobook.php" class="wdgf">�½�������</a></li>
    	<li><a href="/modules/obook/masterpage.php" class="zzxx">�ҵĵ�����</a></li>
        <li><a href="/message.php?box=inbox" class="znx">վ����</a></li>
</ul>    <div class="content">
    	<h2>����������</h2>
		'.$this->_tpl_vars['contents'].'
    </div>
                
</div>

';
?>