<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>小红马android资源（软件、游戏、图书、音乐、视频）</title>
</head>
<body>
<table width="300" border="0">
  <tr>
    <td width="150" align="left" valign="top"><big>软件下载</big>
      <table border="0">
<?php foreach($categorys as $key=>$value) {?>
        <tr>
          <td><?=anchor("software/index/$key", "$value")?></td>
        </tr>
<?php };?>
      </table></td>
    <td width="150" align="left" valign="top"><big>网址</big>
      <table border="0">
<?php 
$i=0;
for($j=0;$j<count($hao123categorys);$j++) {
if ($i==0) {
?>
        <tr>
          <td><?=anchor("android123/index/".$hao123categorys[$j]["key"], $hao123categorys[$j]["value"])?></td><td>&nbsp;&nbsp;&nbsp;</td><td><?=anchor("android123/index/".$hao123categorys[$j+1]["key"], $hao123categorys[$j+1]["value"])?></td>
        </tr>
<?php
  $i+=1;
} else {
  $i-=1;
}
};
?>
     </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><big>微博</big>
      <TABLE border="0">
        <tr>
          <TD><A href="http://t.sina.com.cn/">新浪微博</A></TD>
        </tr>
        <tr>
          <TD><A href="http://t.qq.com/">腾讯微博</A></TD>
        </tr>
        <tr>
          <TD><A href="http://t.163.com/">网易微博</A></TD>
        </tr>
        <tr>
          <TD><A href="http://t.sohu.com/">搜狐微博</A></TD>
        </tr>
        <tr>
          <TD><A href="http://t.ifeng.com/">凤凰微博</A></TD>
        </tr>
        <tr>
          <TD><A href="http://www.digu.com/">嘀咕</A></TD>
        </tr>
        <tr>
          <TD><A href="http://www.tongxue.com/">同学网</A></TD>
      </TABLE></td>
    <td align="left" valign="top"><big>邮件</big>
      <table border="0">
        <tr>
          <td><a href="http://email.163.com/">163邮箱</a></td>
        </tr>
        <tr>
          <td><a href="http://mail.cn.yahoo.com/">雅虎邮箱</a></td>
        </tr>
        <tr>
          <td><a href="http://www.126.com/">126邮箱</a></td>
        </tr>
        <tr>
          <td><a href="http://mail.sina.com.cn/">新浪邮箱</a></td>
        </tr>
        <tr>
          <td><a href="http://mail.qq.com/">QQ邮箱</a></td>
        </tr>
        <tr>
          <td><a href="http://www.hotmail.com/">Hotmail</a></td>
        </tr>
        <tr>
          <td><a href="http://mail.10086.cn/">139邮箱</a></td>
        </tr>
      </table></td>
  </tr>
</table>
<br />
<p>你占有了服务器：{elapsed_time}秒时间。</p>
<p>小红马是您永远的朋友！</p>
</body>
</html>
