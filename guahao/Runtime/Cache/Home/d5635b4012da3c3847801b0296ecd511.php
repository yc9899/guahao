<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/Public/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
     <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<title>系统主页</title>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="/public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="padding:30px">
	
<div class="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
建议使用firefox或者是Chrome访问本网站，已便获的最佳的访问效果。
    </div>

<table class="table table-bordered">
<tr>
<th>当前信息	</th>
</tr>
<tr>
<td>
当前IP地址：<?php echo ($ip); ?><br/>
操作系统：<?php echo ($sys); ?><br/>
浏览器版本：<?php echo ($ex); ?><br/>
web服务器版本：<?php echo ($soft); ?><br/>
</td>
</tr>
<tr>
<th>版权声明</th>

</tr>
<td>
系统作者：杨超<br/>
系统作者以及公司保留本系统的所有权利。<br/>


</td>
<tr>
<th>技术支持</th>
</tr>
<tr>
<td>

在使用本系统的过程中如有困难和疑惑，售后服务专员将为您热忱解决。如果您对本系统有任何建设性意见，欢迎联系本系统的作者反馈交流。

注：因用户自行对系统文件进行更改或二次开发，或错误地安装更新补丁而造成的系统错误，不属于免费售后维护范畴。如需解决此类问题，将视具体情况酌情收费处理。
</td>

</tr>
<tr><th>售后服务</th></tr>
<tr>
<td>
售后服务电话：13853509280<br/>

售后服务QQ：295465800<br/>

售后服务Email：ychao0327@gmail.com<br/>
</td>

</tr>
<tr><th>更多服务</th></tr>
<tr>
<td>
需要网站建设可以找烟台易联网络。<br/>
提供强大的Linux服务器支持，以及PHP网站开发设计。
</td>
</tr>
<tr><th>鸣谢</th></tr>
<tr>
<td>本系统基于强大开源框架<a href="http://www.thinkphp.cn">Thinkphp</a>开发,环境基于LINUX下的nginx	</td>
</tr>


    </table>

</body>
</html>