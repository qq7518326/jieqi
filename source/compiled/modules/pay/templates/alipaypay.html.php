<?php
echo '<table class="grid" width="600" align="center">
  <caption>支付宝支付</caption>
  <tr>
    <td class="even"><form name="frmalipay" method="post" action="'.$this->_tpl_vars['jieqi_modules']['pay']['url'].'/alipay.php">
      <table class="hide" width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="4%">&nbsp;</td>
          <td width="44%" valign="middle"><table class="hide" width="262" border="0" cellspacing="0" cellpadding="3">
              <tr>
                <td align="left">请选择购买类别</td>
              </tr>
              <tr>
                <td><input type="radio" name="egold" value="10000" class="radio">
            10000点'.$this->_tpl_vars['egoldname'].'（100元）</td>
              </tr>
              <tr>
                <td><input type="radio" name="egold" value="5000" class="radio">
            5000点'.$this->_tpl_vars['egoldname'].'（50元）</td>
              </tr>
              <tr>
                <td><input type="radio" name="egold" value="3000" class="radio">
            3000点'.$this->_tpl_vars['egoldname'].'（30元）</td>
              </tr>
              <tr>
                <td><input type="radio" name="egold" value="2000" class="radio">
            2000点'.$this->_tpl_vars['egoldname'].'（20元）</td>
              </tr>
              <tr>
                <td><input type="radio" name="egold" value="1000" class="radio">
            1000点'.$this->_tpl_vars['egoldname'].'（10元）</td>
              </tr>
              <tr>
                <td><input type="submit" name="Submit" value="进入下一步" class="button" >
                    <input type="hidden" name="action" value="bankpay"></td>
              </tr>
          </table></td>
          <td width="4%" valign="top">&nbsp;</td>
          <td width="48%" valign="top"><p>操作说明：<br />
            <br />
  &nbsp;&nbsp;&nbsp;&nbsp;使用支付宝支付，您需要先申请支付宝帐号，尚未申请的请点击下面连接进入支付宝官方网站申请。</p>
            <p>&nbsp; <a href="http://www.alipay.com" target="_blank">点击进入支付宝网站</a></p></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<br /><br />
';
?>