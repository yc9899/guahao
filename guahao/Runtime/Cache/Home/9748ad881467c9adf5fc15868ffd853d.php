<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<form action="/Home/Keshi/ad" method="post">
<table class="table table-bordered">
<th>增加科室</th>
<tr>
<td>科室名称：</td>
<td><input type="text" name="mingcheng"></td>	
<td><button type="submit">增加</button></td>
</tr>
</table>
</form>
</body>
</html>