<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo ($list["site"]); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/Public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {

        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
  </head>

  <body>
      <div class="navbar">
    <div class="navbar-inner">
    <a class="brand" href="#"><?php echo ($list["site"]); ?></a>
    </div>
    </div>
    <div class="container">

      <form class="form-signin" action="/Home/Index/login" method="post">
        <h2 class="form-signin-heading">请登录系统</h2>
        <input name="name" type="text" class="input-block-level" placeholder="帐号">
        <input name="password" type="password" class="input-block-level" placeholder="密码">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> 记住我
        </label>
        <button class="btn btn-large btn-primary" type="submit">登 录</button>
      </form>

    </div> 
    <div style="padding-top:300px;padding-left:550px">
    
      <hr>
    技术支持：烟台易联网络科技有限公司
    
    </div>
  
  </body>
</html>