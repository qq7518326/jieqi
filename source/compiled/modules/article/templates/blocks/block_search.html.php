<?php
echo '<form name="articlesearch" method="post" action="'.$this->_tpl_vars['url_articlesearch'].'" target="_blank">
<ul class="ulrow">
<li>条&nbsp; 件：<select name="searchtype" id="searchtype" class="select">
    <option value="articlename" selected>文章名称</option>
    <option value="author">文章作者</option>
  </select></li>
<li>关键字：<input name="searchkey" type="text" class="text" id="searchkey" size="10" maxlength="50"></li>
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" class="button" value=" 搜 索 "></li>
</ul>
</form>';
?>