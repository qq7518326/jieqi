<?php
echo '<table class="grid" width="600" align="center">
  <caption>֧����֧��</caption>
  <tr>
    <td class="even"><form name="frmalipay" method="post" action="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/alipay.php">
      <table class="hide" width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="4%">&nbsp;</td>
          <td width="44%" valign="middle"><table class="hide" width="262" border="0" cellspacing="0" cellpadding="3">
              <tr>
                <td align="left">��ѡ�������</td>
              </tr>
              <tr>
                <td><input type="radio" name="egold" value="10000" class="radio">
            10000��'.$this->_tpl_vars['egoldname'].'��100Ԫ��</td>
              </tr>
              <tr>
                <td><input type="radio" name="egold" value="5000" class="radio">
            5000��'.$this->_tpl_vars['egoldname'].'��50Ԫ��</td>
              </tr>
              <tr>
                <td><input type="radio" name="egold" value="3000" class="radio">
            3000��'.$this->_tpl_vars['egoldname'].'��30Ԫ��</td>
              </tr>
              <tr>
                <td><input type="radio" name="egold" value="2000" class="radio">
            2000��'.$this->_tpl_vars['egoldname'].'��20Ԫ��</td>
              </tr>
              <tr>
                <td><input type="radio" name="egold" value="1000" class="radio">
            1000��'.$this->_tpl_vars['egoldname'].'��10Ԫ��</td>
              </tr>
              <tr>
                <td><input type="submit" name="Submit" value="������һ��" class="button" >
                    <input type="hidden" name="action" value="bankpay"></td>
              </tr>
          </table></td>
          <td width="4%" valign="top">&nbsp;</td>
          <td width="48%" valign="top"><p>����˵����<br />
            <br />
  &nbsp;&nbsp;&nbsp;&nbsp;ʹ��֧����֧��������Ҫ������֧�����ʺţ���δ����������������ӽ���֧�����ٷ���վ���롣</p>
            <p>&nbsp; <a href="http://www.alipay.com" target="_blank">�������֧������վ</a></p></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<br /><br />
';
?>