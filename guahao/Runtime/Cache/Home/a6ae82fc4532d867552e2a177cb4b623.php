<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<title>管理面板</title>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
     <script src="/Public/My97DatePicker/WdatePicker.js"></script>
</head>
<body style="padding:30px">
<table class="table table-bordered">
<div class="alert alert-warning" role="alert">
通知：如患者已经到院，点击 <b>已预约</b>可以确认到院！！！！查询系统，可以根据姓来查询，如不知道准确姓名，请根据患者姓来查询
    </div>
	</table>
<form class="form-inline" action="/Home/Yuyue/stat" method="get">
 开始时间：<input type="text" class="form-control" name="start" class="Wdate" onClick="WdatePicker()">
结束时间：  <input type="text" class="form-control" name="end" class="Wdate" onClick="WdatePicker()">
分类：<select name="status" class="form-control" ><option value="全部">全部</option>
              <option value="已预约">已预约</option>
              <option value="已到院">已到院</option>

</select>
    <button type="submit" class="btn btn-default">搜索</button>
<a href="/Home/Yuyue/statout/" class="btn btn-primary">导出报表</a>
    </form>
<div style="padding:10px">





<table class="table  table-bordered table-hover">
<tr>
<td>ID</td>
<td>部门：</td>
<td>姓名:</td>
<td>性别:</td>
<td>科室:</td>
<td>录入时间：</td>
<td>预约时间：</td>
<td>联系方式：</td>
<td>是否到院</td>
<td>操作</td>
</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($vo["id"]); ?></td>
<td><?php echo ($vo["source"]); ?></td>
<td><?php echo ($vo["name"]); ?></td>
<td><?php echo ($vo["gender"]); ?></td>
<td><?php echo ($vo["department"]); ?></td>
<td><?php echo ($vo["date"]); ?></td>
<td><?php echo ($vo["yydate"]); ?></td>
<td><?php echo ($vo["telephone"]); ?></td>
    <?php if($vo["yuyue"] == 已到院): ?><td><span class="label label-important">已到院</span></td>
    
    <?php else: ?>
 	<td><a  href="/Home/Yuyue/yy/id/<?php echo ($vo["id"]); ?>"><span class="label label-success"><?php echo ($vo["yuyue"]); ?></span></a></button></td><?php endif; ?>


<td><a href="/Home/Yuyue/more/id/<?php echo ($vo["id"]); ?>">查看</a>|
<a href="/Home/Yuyue/uplist/id/<?php echo ($vo["id"]); ?>">修改</a>|
<a href="/Home/Yuyue/del/id/<?php echo ($vo["id"]); ?>">删除</a>
</td>

</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<?php echo ($page); ?>




</body>
</html>