<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
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
<title>管理面板</title>
</head>

<body>
           <ul class="list-group">

    <a href="#" class="list-group-item disabled" ><span class="glyphicon glyphicon-th" aria-hidden="true"></span>预约管理</a>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><a href="/Home/Yuyue/add/" target="mainFrame">预约登记</a></li>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><a href="/Home/Yuyue/lists/" target="mainFrame">预约列表</a></li>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><a href="/Home/Yuyue/stat/" target="mainFrame">数据统计</a></li>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><a href="/Home/Yuyue/into/" target="mainFrame">批量导入</a></li>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><a href="/Home/Yuyue/import/" target="mainFrame">全部导出</a></li>
    <a href="#" class="list-group-item disabled" ><span class="glyphicon glyphicon-th" aria-hidden="true"></span>科室管理</a>
 <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><a href="/Home/keshi/add/" target="mainFrame">添加科室</a></li>
 <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><a href="/Home/keshi/lists/" target="mainFrame">科室管理</a></li>
     <a href="#" class="list-group-item disabled" ><span class="glyphicon glyphicon-th" aria-hidden="true"></span>用户管理</a>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><a href="/Home/User/add" target="mainFrame">增加用户</a></li>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><a href="/Home/User/passwd" target="mainFrame">修改密码</a></li>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><a href="/Home/User/lists" target="mainFrame">用户列表</a></li>
  <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><a href="/Home/User/group" target="mainFrame">用户组管理</a></li>
 <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><a href="/Home/User/seting" target="mainFrame">系统设置</a></li>
 <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><a href="/Home/Main/index" target="mainFrame">关于软件</a></li>

</ul>
<!--
      <div class="row">
        <div class="span3" style="width:200px">
          <div class="well"> 
            <ul class="nav nav-list">
              <li class="nav-header"><i class="icon-plus-sign"></i>预约管理</li>
              <li><a href="/Home/Yuyue/add/" target="I1"><i class="icon-ok-sign"></i>预约登记</a></li>
              <li><a href="/Home/Yuyue/lists/" target="I1"><i class="icon-ok-sign"></i>预约列表</a></li>
              <li><a href="/Home/Yuyue/stat/" target="I1"><i class="icon-ok-sign"></i>数据统计</a></li>
              
              <li class="nav-header"><i class="icon-eye-open"></i>科室管理</li>
              <li><a href="/Home/Keshi/add/" target="I1"><i class="icon-ok-sign"></i>添加科室</a></li>
              <li><a href="/Home/Keshi/lists/" target="I1"><i class="icon-ok-sign"></i>全部科室</a></li>

              <li class="nav-header"><i class="icon-user"></i>用户管理</li>
                            <li><a href="/Home/User/add" target="I1"><i class="icon-ok-sign"></i>增加用户</a></li>
                            <li><a href="/Home/User/lists" target="I1"><i class="icon-ok-sign"></i>用户列表</a></li>
                            <li><a href="/Home/User/group" target="I1"><i class="icon-ok-sign"></i>用户组管理</a></li>
                            <li><a href="/Home/User/seting" target="I1"><i class="icon-ok-sign"></i>系统设置</a></li>
                <li class="nav-header"><a href="/Home/Main/index/" target="I1"><i class="icon-cog"></i>关于软件</a></li>             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        </div>
</body>
</html>