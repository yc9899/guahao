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
	<form  action="/Home/Customer/ad" method="post">
<table class="table table-bordered">
<th>创建新的客户</th>
<tr>
<td>姓名:</td>
<td>
<?php echo ($list["name"]); ?>
</td>
</tr>
<tr>
<td>性别:</td>
<td>
<?php echo ($list["gender"]); ?>
</td>
</tr>
<tr>
<td>年龄:</td>
<td><?php echo ($list["age"]); ?></td>
</tr>
<tr>
<td>手机号:</td>
<td><?php echo ($list["telephone"]); ?></td>

</tr>
<tr>
<td>录入时间：</td>
<td><?php echo ($list["date"]); ?></td>

</tr>


<tr>
<td>预约时间:</td>
<td><?php echo ($list["yydate"]); ?></td>

</tr>

<tr>
<td>科室:</td>
<td><?php echo ($list["department"]); ?></td>

</td>
</tr>

<tr>
<td>是否到院:</td>
<td><?php echo ($list["yuyue"]); ?></td>

</td>
</tr>
<tr>
<td>到院时间:</td>
<td><?php echo ($list["todate"]); ?></td>

</td>
</tr>
<tr>
<td>备注:</td>
<td>
<?php echo ($list["data"]); ?>
</td>
</tr>
</table>
</form>
</body>
</html>