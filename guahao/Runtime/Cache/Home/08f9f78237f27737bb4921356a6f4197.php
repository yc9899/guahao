<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/Public/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
     <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<title>在线预约系统</title>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../public/bootstrap/js/bootstrap.min.js"></script>
</head>
  <body>
      <div class="navbar">
    <div class="navbar-inner">
    <a class="brand" href="#"><?php echo ($list["site"]); ?></a>
    <ul class="nav">
    <li class="active"><a href="#">首页</a></li>
    <li><a href="/Home/Yuyue/add/" target="I1">预约登记</a></li>
    <li><a href="/Home/Keshi/lists/" target="I1">科室管理</a></li>
    <li><a href="/Home/Yuyue/lists/" target="I1">预约查询</a></li>
    <li><a href="/Home/Main/index/" target="I1">系统主页</a></li>
     <li><a href="/Home/Index/out" target="_top">退出登录</a></li>
    </ul>
    </div>
    </div>
</body>