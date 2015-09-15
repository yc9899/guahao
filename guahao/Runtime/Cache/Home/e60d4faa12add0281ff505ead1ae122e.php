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
          <script src="/Public/My97DatePicker/WdatePicker.js"></script>
</head>
<body style="padding:30px">
	<form  action="/Home/Yuyue/up" method="post">
<table class="table table-bordered">
<th>修改患者信息</th>
<tr>
<td>姓名:</td>
<td>
<input name="xingming" type="text" value="<?php echo ($list["name"]); ?>">
</td>
</tr>
<tr>
<td>性别:</td>
<td>
<input type="text" name="xingbie" value="<?php echo ($list["gender"]); ?>">
</td>
</tr>
<tr>
<td>年龄:</td>
<td><input type="text" name="nianling" value="<?php echo ($list["age"]); ?>"></td>
</tr>
<tr>
<td>手机号:</td>
<td><input type="text" name="phone" value="<?php echo ($list["telephone"]); ?>"></td>
</tr>
<tr>
<td>预约时间:</td>
<td><input type="text" name="yysj" class="Wdate" onClick="WdatePicker()" value="<?php echo ($list["yydate"]); ?>"></td>
</tr>
<tr>
<td>科室:</td>
<td><input type="text" name="keshi" value="<?php echo ($list["department"]); ?>"></td>
</tr>


<tr>
<td>备注:</td>
<td>
<textarea rows="5" name="ziliao"><?php echo ($list["data"]); ?></textarea>
</td>
</tr>

<tr>
<td><input type="hidden" name="hidd" value="<?php echo ($list["id"]); ?>"></td>
<td><button type="submit" class ="btn">修改</button></td>
</tr>
</table>
</form>
</body>
</html>