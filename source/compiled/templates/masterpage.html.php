<?php
$_template_tpl_vars = $this->_tpl_vars;
 $this->_template_include(array('template_include_tpl_file' => 'themes/chaoliu/zzheader.html', 'template_include_vars' => array()));
 $this->_tpl_vars = $_template_tpl_vars;
 unset($_template_tpl_vars);
echo '<style type="text/css">
.zpgl{border: 2px solid #c99500;border-right:none;
background-color: white;}
.menu .cjzp{border:none;background:url(/themes/chaoliu/images/chuangjian_14.gif) 27px center no-repeat;}
body {
	background:url(/themes/chaoliu/images/bg_01.jpg) #ebe6d6 top center no-repeat;
}
#top {
	width:960px;
	margin:0 auto;
	height:30px;
	line-height:30px;
}
#top a {
	color:#666666;
}
.top_left {
	float:left;
}
.top_left a{
	padding-right:10px;
}
.top_right {
	float:right;
	width:300px;
	text-align:right;
}
.top_right a{
	padding-left:10px;
}
#head {
	width:960px;
	margin:0 auto;
	padding-top:30px;
}
.logo {
	display:block;
	float:left;
	width:219px;
	height:64px;
}
.top_nav {
	width:500px;
	padding-top:40px;
	text-align:right;
	float:right;
}
.top_nav  a {
	padding-left:20px;
	color:#863a16;
	font-weight:bold;
	font-size:14px;
}
#main {
	width:960px;
	min-height:560px;
    _height:560px;
    overflow:auto;
	_overflow:visible;
	margin:0 auto;
	margin-top:20px;
	background-color:white;
	border: 4px solid #c99500;
	border-radius: 12px;
	box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.2);
}
.menu {
	float: left;
	width: 172px;
	height:auto;
	padding-top: 50px;
	border-radius: 12px 0px 0px 0px;
	padding-bottom:30px;
	border-bottom:2px solid #c99500;
	background: url(/themes/chaoliu/images/menu_bg_03.gif) repeat-y left top;
}
.content {
	float:right;
	width:740px;
	height:auto;
	background-color:#fff;
	border-radius: 0px 12px 12px 0px;
	padding: 40px 20px;
}
.menu li a {
	font-weight:bold;
	font-size:14px;
	color:#505050;
}
.zzxx,.wzgg,.cjzp,.zpgl,.zpcj,.wdgf,.cgx,.znx{
	display:block;
	height: 50px;
	line-height: 50px;
	margin-left:15px;
	padding-left:65px;
	cursor:pointer;
}

.menu li a:hover{
	padding-left: 60px;
	margin-left: 15px;
	border:2px solid #c99500;
	border-right-color:white;
	background-color:white;
	background-position: 20px center;
}
.menu .zpgl {
	padding-left: 60px;
	margin-left: 15px;
	border:2px solid #c99500;
	border-right-color:white;
	background-color:white;
	background-position: 20px center;
}

.content h2 {
	color: rgb(102, 102, 102);
	width: 724px;
	font-size: 18px;
	height: 50px;
	line-height:25px;
	background:url(/themes/chaoliu/images/tanchu_03.gif) #fff 0px 40px repeat-x;	
}
.dingyuebiaoge {
	width:724px;
	table-layout:fixed;
	margin-top:10px;
}
.dingyuebiaoge tr:hover {
	background-color:#fbfafa;
}
.dingyuebiaoge thead,.dingyuebiaoge tfoot  {
	background-color:#f1f1f1;
	border-bottom:1px solid #dcdcdc;
}
.dingyuebiaoge th  {
	height:35px;
	line-height:35px;
}
.dingyuebiaoge td {
	height:40px;
	line-height:40px;
	border-bottom:1px dashed #dcdcdc;
}
.dingyuebiaoge td{
	color:#666666;
}
.dingyuebiaoge td a {
		color:#C30;
}
.dingyuebiaoge td a:hover{

	text-decoration:underline;
}
.shuming,.shuhao,.zhuangtai,.scs,.zhgxsj,.caozuo {
	text-align:left;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
.scs {
	width:10%
}
.shuming {
	width:25%
	padding-left:10px;
	cursor:pointer;
}
.shuhao {
	width:10%;
	text-align:center;
}

.zhgxsj {
	width:20%;
	text-align:left;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}
.zhuangtai {
	width:10%;
}
.caozuo {
	width:25%;
	text-align:center;
	padding-right:10px;
}






.tijiao {
	margin-left:75px;
	margin-top:25px;
	width:91px;
	height:25px;
	cursor:pointer;
	border:0px;
	background:url(/themes/chaoliu/images/tijiao_03.jpg) no-repeat left top;
}
.tijiao:hover {
	background:url(/themes/chaoliu/images/tijiao_03.jpg) no-repeat left bottom;
}


#footer {
	padding:25px 0px;
	width:960px;
	margin:0 auto;
	text-align:center;
	color:#999999;
}
#footer p {
	padding-top:10px;
}</style>

<link href="/themes/chaoliu/style.css" rel="stylesheet"/>
    	<h2>������Ʒ</h2>
      	<form action="'.$this->_tpl_vars['url_article'].'" method="post" name="checkform" id="checkform">
<div class="gridtop">'.$this->_tpl_vars['articletitle'].' [<a href="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/masterpage.php">ȫ������</a>] [<a href="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/masterpage.php?display=author">ԭ������</a>] [<a href="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/masterpage.php?display=poster">ת������</a>] [<a href="'.$this->_tpl_vars['jieqi_modules']['article']['url'].'/masterpage.php?display=agent">��������</a>]</div>
<table class="dingyuebiaoge">
                  <thead>
                    <tr>
                      <th class="shuming">����</th>
                      <th class="zhuangtai">����</th>
                      <th class="scs">�ղ���</th>
                      <th class="zhgxsj">������ʱ��</th>
                      <th class="caozuo">����</th>
                    </tr>
                  </thead>
                  <tbody>
				  ';
if (empty($this->_tpl_vars['articlerows'])) $this->_tpl_vars['articlerows'] = array();
elseif (!is_array($this->_tpl_vars['articlerows'])) $this->_tpl_vars['articlerows'] = (array)$this->_tpl_vars['articlerows'];
$this->_tpl_vars['i']=array();
$this->_tpl_vars['i']['columns'] = 1;
$this->_tpl_vars['i']['count'] = count($this->_tpl_vars['articlerows']);
$this->_tpl_vars['i']['addrows'] = count($this->_tpl_vars['articlerows']) % $this->_tpl_vars['i']['columns'] == 0 ? 0 : $this->_tpl_vars['i']['columns'] - count($this->_tpl_vars['articlerows']) % $this->_tpl_vars['i']['columns'];
$this->_tpl_vars['i']['loops'] = $this->_tpl_vars['i']['count'] + $this->_tpl_vars['i']['addrows'];
reset($this->_tpl_vars['articlerows']);
for($this->_tpl_vars['i']['index'] = 0; $this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['loops']; $this->_tpl_vars['i']['index']++){
	$this->_tpl_vars['i']['order'] = $this->_tpl_vars['i']['index'] + 1;
	$this->_tpl_vars['i']['row'] = ceil($this->_tpl_vars['i']['order'] / $this->_tpl_vars['i']['columns']);
	$this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['order'] % $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['column'] == 0) $this->_tpl_vars['i']['column'] = $this->_tpl_vars['i']['columns'];
	if($this->_tpl_vars['i']['index'] < $this->_tpl_vars['i']['count']){
		list($this->_tpl_vars['i']['key'], $this->_tpl_vars['i']['value']) = each($this->_tpl_vars['articlerows']);
		$this->_tpl_vars['i']['append'] = 0;
	}else{
		$this->_tpl_vars['i']['key'] = '';
		$this->_tpl_vars['i']['value'] = '';
		$this->_tpl_vars['i']['append'] = 1;
	}
	echo '
   <tr>
                      <td class="shuming"><a href="'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['url_articleinfo'].'" target="_blank">'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['articlename'].'</a></td>
                      <td class="zhuangtai">'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['poster'].'</td>
                      <td class="scs">'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['goodnum'].'</td>
                                            <td class="zhgxsj">'.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['lastupdate'].'</td>
                      <td class="caozuo"><a href="'.$this->_tpl_vars['article_static_url'].'/articlemanage.php?id='.$this->_tpl_vars['articlerows'][$this->_tpl_vars['i']['key']]['articleid'].'">��Ʒ����</a></td>
                    </tr>';
}
echo '
					                   </tbody>
			 </table>

</form>
<table width="100%"  border="0" cellspacing="2" cellpadding="3">
  <tr>
    <td width="12%" align="right"></td>
    <td width="88%" align="right">'.$this->_tpl_vars['url_jumppage'].'</td>
  </tr>
</table>
        
			    </div>
</div>
<div id="footer">
	<p>Copyright ? 2010-2013 ����ԭ����ѧ�� All rights reserved Powered by.����֮�����������Ƽ����޹�˾</p>
	<p>����ԭ����Ȩ���У�δ�����ɲ���ת�ء� �����������䣺SKY_editor@126.com ��ICP��13020644��-1 ��������</p>
    <p>���߷�����Ʒʱ�������ع��һ�������Ϣ�����취�涨����վ����¼��Ʒ���������⡢������۾����������Ϊ����������վ������ </p>
</div>
</body>
</html>

';
?>