<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
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
</head>
<body style="padding:30px">
<table class="table table-bordered">
<div class="alert alert-warning" role="alert">
通知：<b>导入导出.CSV</b>格式的文件，excel是可以正常打开的，如需要.xls格式，可以打开文件，然后另存为
    	</div>
	</table>

<!--外框-->
<div class="panel panel-default">
  <div class="panel-body">

<form class="form-inline" action="/Home/Yuyue/csvput/" method="post" enctype="multipart/form-data">
  <div class="form-group">
<input type="file" name="csv" id="exampleInputFile">
</div>
<button type="submit" class="btn btn-success">导入CSV</button>
<a href="/Home/Yuyue/out/" class="btn btn-primary">导出Excel</a>
</form>


   </div>
</div>









   </body>
</html>