<?php
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset='.$this->_tpl_vars['jieqi_charset'].'">
<TITLE>'.$this->_tpl_vars['jieqi_pagetitle'].'</TITLE>
<meta name="keywords" content="'.$this->_tpl_vars['meta_keywords'].'" />
<meta name="Description"  content="'.$this->_tpl_vars['meta_description'].'" />
<link href="/themes/chaoliu/css/index.css" rel="stylesheet" />
<link href="/themes/chaoliu/css/nav.css" rel="stylesheet" />
<script type="text/javascript" src="/themes/chaoliu/js/jquery-1.9.1.min.js"></script>
<script src="/themes/chaoliu/js/jquery.nav.js" type="text/javascript"></script>
<script type="text/javascript" src="/themes/chaoliu/js/kxbdSuperMarquee.js"></script>
<script type="text/javascript" src="/themes/chaoliu/js/index.js"></script>
<script language="javascript" type="text/javascript" src="'.$this->_tpl_vars['jieqi_themeurl'].'theme.js"></script>
<!--[if IE 6]><script type="text/javascript" src="/themes/chaoliu/js/DD_belatedPNG.js">
</script>
<script>
 DD_belatedPNG.fix(".pngFix,.pngFix:hover,.pngFix img");
</script>
<![endif]-->
</head>
<body>
';
$_template_tpl_vars = $this->_tpl_vars;
 $this->_template_include(array('template_include_tpl_file' => 'themes/chaoliu/header.html', 'template_include_vars' => array()));
 $this->_tpl_vars = $_template_tpl_vars;
 unset($_template_tpl_vars);
echo '
<div id="main">
    <div class="main_inner">
        <img src="/themes/chaoliu/images/newfuli.gif" id="box" style="margin-bottom:10px;"/>
        <div class="gonggao" id="box">
            <ul>
              '.$this->_tpl_vars['jieqi_pageblocks']['bid82']['content'].'
             <div class="clear"></div>
            </ul>
        </div>
        <div class="main01">
            <div class="category" id="box">
                <div class="yanqing">
                    <a href="/men.php" class="dsyq"></a>
                    <ul class="cate_f1">
                        <li><a href="/modules/article/articlelist.php?class=1">玄幻</a></li>
						<li><a href="/modules/article/articlelist.php?class=2">奇幻</a></li>
						<li><a href="/modules/article/articlelist.php?class=3">仙侠</a></li>
						<li><a href="/modules/article/articlelist.php?class=4">武侠</a></li>
                        <div class="clear"></div>
                    </ul>
                    <ul class="cate_f2">
						<li><a href="/modules/article/articlelist.php?class=5">都市</a></li>
						<li><a href="/modules/article/articlelist.php?class=6">异能</a></li>
						<li><a href="/modules/article/articlelist.php?class=7">官场</a></li>
						<li><a href="/modules/article/articlelist.php?class=8">商战</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="xuanhuan">
                    <a href="/women.php" class="xhxx"></a>
                    <ul class="cate_f1">
                        <li><a href="/modules/article/articlelist.php?class=9">言情</a></li>
						<li><a href="/modules/article/articlelist.php?class=10">校园</a></li>
						<li><a href="/modules/article/articlelist.php?class=11">总裁</a></li>
						<li><a href="/modules/article/articlelist.php?class=12">同人</a></li>
                        <div class="clear"></div>
                    </ul>
                    <ul class="cate_f2">
						<li><a href="/modules/article/articlelist.php?class=13">穿越</a></li>
						<li><a href="/modules/article/articlelist.php?class=14">宫斗</a></li>
						<li><a href="/modules/article/articlelist.php?class=15">女尊</a></li>
						<li><a href="/modules/article/articlelist.php?class=16">耽美</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="lishi">
                    <a href="/jingdian.php" class="lsly"></a>
                    <ul class="cate_f1">
                       <li> <a href="/modules/article/articlelist.php?class=17">历史</a></li>
						<li><a href="/modules/article/articlelist.php?class=18">军事</a></li>
						<li><a href="/modules/article/articlelist.php?class=19">乡土</a></li>
                        <div class="clear"></div>
                    </ul>
                    <ul class="cate_f2">
						<li><a href="/modules/article/articlelist.php?class=20">科幻</a></li>
						<li><a href="/modules/article/articlelist.php?class=21">网游</a></li>
						<li><a href="/modules/article/articlelist.php?class=22">惊悚</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
            <div class="main01_mid" id="box">
                <div id="inner">
                    <div class="hot-event">
                <div class="switch-nav"><a href="#" onClick="return false;" class="prev"><i class="ico i-prev"></i><span class="hide-clip">上一个</span></a><a href="#" onClick="return false;" class="next"><i class="ico i-next"></i><span class="hide-clip">下一个</span></a></div>
                '.$this->_tpl_vars['jieqi_pageblocks']['bid83']['content'].'
                <div class="switch-tab">
                    <a href="#" onClick="return false;" class="current">1</a>
                    <a href="#" onClick="return false;">2</a>
                    <a href="#" onClick="return false;">3</a>
                    <a href="#" onClick="return false;">4</a>
                    <a href="#" onClick="return false;">5</a>
                </div>
            </div>
                </div>
                <script type="text/javascript">
                    $(\'#inner\').nav({ t: 5000, a: 1500 });
                </script>
                <div class="main_tab">
                    <div class="remenxiaoshuo">
                        <p class="main_tab_title">热门小说</p>
                        <div class="main_tab_con">
                            <ul class="main_tab_list ">
							'.$this->_tpl_vars['jieqi_pageblocks']['bid84']['content'].'
                               <div class="clear"></div>
                            </ul>
                            
                        </div>
                        
                    </div>
                    <div class="zuixinqianyue">
                        <p class="main_tab_title">最新签约作品</p>
                        <div class="main_tab_con" style="display: none;">
                            <ul class="main_tab_list">
                               '.$this->_tpl_vars['jieqi_pageblocks']['bid85']['content'].'
                                <div class="clear"></div>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="qiangtui pngFix"  id="box">
                <div class="nanpintui">
                    <p class="qiangtui_title">男频</p>
                    <ul>'.$this->_tpl_vars['jieqi_pageblocks']['bid86']['content'].'</ul>
                </div>
                <div class="nvpintui">
                    <p class="qiangtui_title">女频</p>
                    <ul style="display: none;">
                        '.$this->_tpl_vars['jieqi_pageblocks']['bid87']['content'].'
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>

        <div style="width:960px;">
            <div class="rxwbxstj" id="box">
                <p class="rxwb_more pngFix"><a href="/modules/article/articlelist.php?fullflag=1">更多+</a></p>
                <ul class="rxwb_con">
                           '.$this->_tpl_vars['jieqi_pageblocks']['bid88']['content'].'
                </ul>
            </div>
            <div class="ad_fang" id="box">
                '.$this->_tpl_vars['jieqi_pageblocks']['bid90']['content'].'
            </div>
            <div class="clear"></div>
        </div>
       
        <div class="maincon">
            <div class="maincon_l">
                <div class="f1" id="box">
                       <p  class="f_title"><a href="/men.php" class="f_more">更多+</a>
					   <a href="/modules/article/articlelist.php?class=1">玄幻</a> -
					   <a href="/modules/article/articlelist.php?class=2">奇幻</a> -
					   <a href="/modules/article/articlelist.php?class=3">仙侠</a> -
					   <a href="/modules/article/articlelist.php?class=4">武侠</a> -
					   <a href="/modules/article/articlelist.php?class=5">都市</a> -
					   <a href="/modules/article/articlelist.php?class=6">异能</a> -
					   <a href="/modules/article/articlelist.php?class=7">官场</a> -
					   <a href="/modules/article/articlelist.php?class=8">商战</a>
						<div class="clear"></div></p>
                    <div class="f_top">
                        <ul>
                             '.$this->_tpl_vars['jieqi_pageblocks']['bid91']['content'].'
 
                            <div class="clear"></div>
                        </ul>
                    </div>
                    <div class="f_list pngFix">
                            <ul>'.$this->_tpl_vars['jieqi_pageblocks']['bid92']['content'].'
                                <div class="clear"></div>
                            </ul>
                        </div>
                </div>
                <div class="f2" id="box">
                       <p class="f_title"><a href="/women.php" class="f_more">更多+</a>
					   <a href="/modules/article/articlelist.php?class=9">言情</a> -
						<a href="/modules/article/articlelist.php?class=10">校园</a> -
						<a href="/modules/article/articlelist.php?class=11">总裁</a> -
						<a href="/modules/article/articlelist.php?class=12">同人</a> -
						<a href="/modules/article/articlelist.php?class=13">穿越</a> -
						<a href="/modules/article/articlelist.php?class=14">宫斗</a> -
						<a href="/modules/article/articlelist.php?class=15">女尊</a> -
						<a href="/modules/article/articlelist.php?class=16">耽美</a>
						<div class="clear"></div></p>
                    <div class="f_top">
                        <ul>'.$this->_tpl_vars['jieqi_pageblocks']['bid93']['content'].'<div class="clear"></div>
                        </ul>
                    </div>
                     <div class="f_list pngFix">
                            <ul>'.$this->_tpl_vars['jieqi_pageblocks']['bid94']['content'].'<div class="clear"></div>
                            </ul>
                        </div>
                </div>
                <div class="f3" id="box">
                       <p class="f_title"><a href="/jingdian.php" class="f_more">更多+</a>
					   <a href="/modules/article/articlelist.php?class=17">历史</a> -
						<a href="/modules/article/articlelist.php?class=18">军事</a> -
						<a href="/modules/article/articlelist.php?class=19">乡土</a> -
						<a href="/modules/article/articlelist.php?class=20">科幻</a> -
						<a href="/modules/article/articlelist.php?class=21">网游</a> -
						<a href="/modules/article/articlelist.php?class=22">惊悚</a>
						<div class="clear"></div></p>
                    <div class="f_top">
                        <ul>'.$this->_tpl_vars['jieqi_pageblocks']['bid95']['content'].'<div class="clear"></div>
                        </ul>
                    </div>
                     <div class="f_list pngFix">
                            <ul>'.$this->_tpl_vars['jieqi_pageblocks']['bid96']['content'].'<div class="clear"></div>
                            </ul>
                        </div>
                </div>
                <div class="update" id="box">
                    <p class="update_more pngFix"></p>
                    <ul>
                        '.$this->_tpl_vars['jieqi_pageblocks']['bid97']['content'].'</ul>
                </div>
            </div>
            <div class="maincon_r" >
                <div class="fengyunbang" id="box">
                    <div class="fengyun_more" style="height:48px;"></div>
                    <ul>'.$this->_tpl_vars['jieqi_pageblocks']['bid98']['content'].'</ul>
                </div>
                <div class="renqibang" id="box">
                    <div class="renqi_more" style="height:48px;"></div>
                    <ul>'.$this->_tpl_vars['jieqi_pageblocks']['bid99']['content'].'</ul>
                </div>
                <div class="changxiaobang" id="box">
                    <div class="renqi_more" style="height:48px;"></div>
                    <ul>'.$this->_tpl_vars['jieqi_pageblocks']['bid100']['content'].'</ul>
                </div>
                <div class="qianlibang" id="box">
                    <div class="qianli_more" style="height:48px;"></div>
                    <ul>'.$this->_tpl_vars['jieqi_pageblocks']['bid101']['content'].'</ul>
                </div>
                <div class="talk pngFix" id="box">
                    '.$this->_tpl_vars['jieqi_pageblocks']['bid102']['content'].'
                </div>
                <div class="contact pngFix" id="box">
                    '.$this->_tpl_vars['jieqi_pageblocks']['bid103']['content'].'
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

';
$_template_tpl_vars = $this->_tpl_vars;
 $this->_template_include(array('template_include_tpl_file' => 'themes/chaoliu/footer.html', 'template_include_vars' => array()));
 $this->_tpl_vars = $_template_tpl_vars;
 unset($_template_tpl_vars);

?>