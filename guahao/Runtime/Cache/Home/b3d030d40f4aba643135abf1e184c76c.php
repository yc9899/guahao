<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/Public/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
     <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<title>管理面板</title>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="padding:30px">
<form action="/Home/User/seting" method="post">
<table class="table table-bordered">
<th>系统设置</th>
<tr>
<td>网站名称：</td>
<td><input type="text" name="sitename" value="<?php echo ($list["site"]); ?>"></td>	
</tr>
<tr>
<td></td>
<td><button type="submit">设置</button></td>
</tr>
</table>
</form>
</body>
</html>