<?php
echo '<table class="grid" width="100%" align="center">
  <caption>��ʾ</caption>
  <tr class="odd"><td>
  <ul>
  <li>���������ڳ�������������ݿ������������</li>
  <li>SQL��һ��ֱ�Ӷ����ݿ���в�������䣬���������п��������ݣ�һ�㲻����ִ����д��SQL��</li>
  <li>��ִ��SQL���֮ǰ��������ݿ���б��ݣ��Ա��ڳ�������Իָ���</li>
  </ul>
  </td></tr>
</table>
<br />
<form action="'.$this->_tpl_vars['url_action'].'" method="post" name="checkform" id="checkform">
<table class="grid" width="100%" align="center">
<caption>���ݿ����� - �뽫SQL���ճ��������</caption>
  <tr>
	<td class="odd" align="center"><textarea name="sqldata" cols="100" rows="15" class="textarea"></textarea></td>
  </tr>
  <tr>
    <td class="foot"><input name="action" type="hidden" value="execute" /><input type="submit" name="Submit" class="button" value=" �� �� " /></td>
  </tr>
</table>
</form>
<br /><br />';
?>