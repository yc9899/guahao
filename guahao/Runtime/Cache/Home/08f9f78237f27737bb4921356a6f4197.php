<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<title></title>

</head>  
<body>
<nav class="navbar navbar-default ">
	
<div class="navbar-header">	
<a class="navbar-brand" href="#"><?php echo ($list["site"]); ?></a>

</div>	
  <ul class="nav navbar-nav " >
	  <li class="active"><a href="#"  target="mainFrame">首页</a></li>
	  	  	  <li><a href="/Home/Yuyue/add" target="mainFrame">预约登记</a></li>
	  	  <li><a href="/Home/keshi/lists" target="mainFrame">科室管理</a></li>
	  	  	  	  <li><a href="/Home/Yuyue/lists" target="mainFrame">预约查询</a></li>
	  	  	  	  	  	  <li><a href="/Home/Main/index" target="mainFrame">系统主页</a></li>
	  </ul>
  <ul class="nav navbar-nav navbar-rightt" style="float:right">
    <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo ($nick); ?></a></li>
         <li><a href="/Home/Index/out" target="_top">系统消息</a></li>
     <li><a href="/Home/Index/out" target="_top">退出登录</a></li>
 </ul>

</nav>




</body>