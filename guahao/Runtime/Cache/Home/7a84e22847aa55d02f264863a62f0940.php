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
	<form  action="/Home/Yuyue/ad" method="post">
<table class="table table-bordered">
<th>预约登记</th>
<tr>
<td>姓名:</td>
<td>
<input name="xingming" type="text">
</td>
</tr>
<tr>
<td>性别:</td>
<td>
	

<input type="radio" name="xingbie" id="optionsRadios1" value="男" checked>男
<input type="radio" name="xingbie" id="optionsRadios2" value="女">女


</td>
</tr>
<tr>
<td>年龄:</td>
<td><input type="text" name="nianling"></td>
</tr>
<tr>
<td>手机号:</td>
<td><input type="text" name="phone"></td>
</tr>
<tr>
<td>预约时间:</td>
<td><input type="text" name="yysj" class="Wdate" onClick="WdatePicker()"></td>
</tr>

<tr>
<td>科室:</td>
<td>
<select name="keshi">
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo["dname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
</td>
</tr>

<tr>
<td>备注:</td>
<td>
<textarea rows="5" name="ziliao"></textarea>
</td>
</tr>

<tr>
<td></td>
<td><button type="submit" class ="btn">增加</button></td>
</tr>
</table>
</form>
</body>
</html>