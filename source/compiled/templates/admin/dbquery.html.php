<?php
echo '<table class="grid" width="100%" align="center">
  <caption>提示</caption>
  <tr class="odd"><td>
  <ul>
  <li>本功能用于程序升级后对数据库的升级操作。</li>
  <li>SQL是一种直接对数据库进行操作的语句，错误的语句有可能损坏数据，一般不建议执行自写的SQL。</li>
  <li>在执行SQL语句之前，请对数据库进行备份，以便于出错后可以恢复。</li>
  </ul>
  </td></tr>
</table>
<br />
<form action="'.$this->_tpl_vars['url_action'].'" method="post" name="checkform" id="checkform">
<table class="grid" width="100%" align="center">
<caption>数据库升级 - 请将SQL语句粘贴在下面</caption>
  <tr>
	<td class="odd" align="center"><textarea name="sqldata" cols="100" rows="15" class="textarea"></textarea></td>
  </tr>
  <tr>
    <td class="foot"><input name="action" type="hidden" value="execute" /><input type="submit" name="Submit" class="button" value=" 提 交 " /></td>
  </tr>
</table>
</form>
<br /><br />';
?>