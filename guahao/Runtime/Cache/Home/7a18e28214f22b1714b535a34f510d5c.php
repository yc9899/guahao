<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/Public/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
     <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<title>管理面板</title>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="/public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="padding:30px">
<table class="table table-bordered">
	
<tr>
<td>科室名称</td>
<td>操作</td>

</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

<td><?php echo ($vo["dname"]); ?></td>
<td><a href="/Home/Keshi/uplist/id/<?php echo ($vo["id"]); ?>">修改</a>|<a href="/Home/Keshi/del/id/<?php echo ($vo["id"]); ?>">删除</a></td>

</tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>

</body>
</html>