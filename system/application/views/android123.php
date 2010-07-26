<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>小红马android资源（软件、游戏、图书、音乐、视频）</title>
</head>
<body>
<table width="300" border="0">
  <tr>
    <td width="100%" align="left" valign="top"><big><?=$category?> 网址</big>
      <table border="0">
<?php foreach($android123 as $item) {?>
        <tr>
          <td><a href="<?=$item->htmllink?>"><?=$item->htmltext?></a></td>
        </tr>
<?php };?>
      </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>
<br />
<p>你占有了服务器：{elapsed_time}秒时间。</p>
<p>小红马是您永远的朋友！</p>
</body>
</html>
