<?php
echo '<table class="grid" width="100%" align="center">
<form name="frmbatchclecn" method="post" action="'.$this->_tpl_vars['url_batchclean'].'" target="_blank">
<caption>������������</caption>
<tr>
  <td width="30%" align="right" class="odd">ִ�еĲ�����</td>
  <td width="70%" class="even">
  <input name="operate" type="radio" value="delarticle" checked> ɾ�����£�������Ӧ�½ڡ��������Ķ��ļ�<br />
  <input name="operate" type="radio" value="delchapter"> ɾ�������������µ������½ڣ������Ķ��ļ�������������Ϣ������<br />
  <input name="operate" type="radio" value="delattach"> ɾ�����������������и������½ڣ�ͨ����ָͼƬ����<br />  </td>
</tr>
<tr>
  <td width="30%" align="right" class="odd">��ѯ����һ��</td>
  <td width="70%" class="even">���(ID)�� <input name="startid" type="text" id="startid" size="10" maxlength="11" class="text"> �� <input name="stopid" type="text" id="stopid" size="10" maxlength="11" class="text"> ������</td>
</tr>
<tr>
  <td align="right" class="odd">��ѯ��������</td>
  <td class="even">��� <input name="upday" type="text" id="upday" size="10" maxlength="11" class="text"> ���� <select name="upflag">
    <option value="0">δ����</option>
    <option value="1">���¹�</option>
  </select> 
    ������</td>
</tr>
<tr>
  <td align="right" class="odd">��ѯ��������</td>
  <td class="even">
  <select name="visittype">
    <option value="allvisit">�ܵ��</option>
    <option value="monthvisit">�µ��</option>
	<option value="weekvisit">�ܵ��</option>
	<option value="allvote">���Ƽ�</option>
    <option value="monthvote">���Ƽ�</option>
	<option value="weekvote">���Ƽ�</option>
  </select>
  <select name="visitflag">
    <option value="0">С��</option>
    <option value="1">����</option>
  </select>
  <input name="visitnum" type="text" id="visitnum" size="10" maxlength="11" class="text"> ������  </td>
</tr>
<tr>
  <td align="right" class="odd">��ѯ�����ģ�</td>
  <td class="even">
  <input name="authorflag" type="radio" value="0" checked> ���� 
  <input name="authorflag" type="radio" value="1"> ԭ������
  <input name="authorflag" type="radio" value="2"> ת������  </td>
</tr>
<tr>
  <td align="right" class="odd">��ѯ�����壺<br />��ѯ�������(ID)����������<br />���ID��Ӣ�Ķ��ŷֿ�����Ҫ���У��磺<br />12,34,56,78<br /><br />�������������ÿ��һ�У��磺<br />����һ<br />���¶�<br />������</td>
  <td class="even"><input name="idname" type="radio" value="0" checked>��������ţ����ŷָ� &nbsp;<input name="idname" type="radio" value="1">����������ÿ��һ�� <br />
  <textarea class="textarea" name="articles" id="articles" rows="10" cols="70"></textarea></td>
</tr>
<tr>
  <td align="right" class="odd">�ر�˵����</td>
  <td class="odd"><span class="hottext">��������������ѡ���������ȫ�����ղ��������������½��д�����<br />�����������ɻָ��������ʹ�ã�</span></td> </tr> <tr> <td align="right" class="odd">&nbsp;</td>
  <td class="even"><input type="submit" name="btnclecn" value="��ʼ����" class="button"><input type="hidden" name="action" value="clean"></td>
</tr>
<tr>
  <td colspan="2" align="right" class="foot">&nbsp;</td>
</tr> 
</form> 
</table>
';
?>