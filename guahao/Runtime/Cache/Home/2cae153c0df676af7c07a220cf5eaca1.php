<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
    <script src="/public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="padding:30px">
<form action="/Home/User/groupadd/" method="post">
用户组名称：<input name="group" type="text">
<ul>
   <?php if(is_array($list)): foreach($list as $key=>$vo): ?><li>  <input type="checkbox" name="checkbox[]" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?> | <?php echo ($vo["name"]); ?></li><?php endforeach; endif; ?>
</ul>
<button class="btn btn-primary" type="submit">保存</button>
</form>



</body>
</html>