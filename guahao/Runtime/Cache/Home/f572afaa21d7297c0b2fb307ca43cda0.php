<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
  <link rel="stylesheet" href="/Public/dist/css/bootstrapValidator.css"/>

<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/dist/js/bootstrapValidator.js"></script>

<title>管理面板</title>
</head>
<body style="padding:30px">
   <div class="container">
        <div class="row">

<form id="defaultForm" class="form-horizontal"  action="/Home/User/add" method="post">
  <div class="col-lg-8 col-lg-offset-2">

                    <div class="page-header">

                        <h2>增加用户</h2>

                    </div>
   <div class="form-group">
 <label class="col-lg-3 control-label">用户名：</label>

<div class="col-lg-5"><input type="text" name="yonghu" class="form-control"></div>
</div>

   <div class="form-group">
 <label class="col-lg-3 control-label">密码：</label>

<div class="col-lg-5"><input type="text" name="mima" class="form-control"></div>
</div>

   <div class="form-group">
 <label class="col-lg-3 control-label">权限：</label>

<div class="col-lg-5"><select name="quanxian" class="form-control">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>

  </div>

<input type="checkbox"name="m" value="3">部门主管
</div>


                   <div class="form-group">

                            <div class="col-lg-9 col-lg-offset-3">

                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">修改</button>

</div>
</div>

</form>

 </div>
</div>



<script type="text/javascript">

$(document).ready(function() {

    // Generate a simple captcha

    function randomNumber(min, max) {

        return Math.floor(Math.random() * (max - min + 1) + min);

    };

    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));



    $('#defaultForm').bootstrapValidator({

//        live: 'disabled',

        message: 'This value is not valid',

        feedbackIcons: {

            valid: 'glyphicon glyphicon-ok',

            invalid: 'glyphicon glyphicon-remove',

            validating: 'glyphicon glyphicon-refresh'

        },

        fields: {

            yonghu: {

                validators: {

                    notEmpty: {

                        message: '用户名为必填，不能为空'

                    }

                }

            },

            mima: {

                validators: {

                    notEmpty: {

                        message: '密码为必填，不能为空'

                    }

                }

            },

            username: {

                message: 'The username is not valid',

                validators: {

                    notEmpty: {

                        message: 'The username is required and cannot be empty'

                    },

                    stringLength: {

                        min: 6,

                        max: 30,

                        message: 'The username must be more than 6 and less than 30 characters long'

                    },

                    regexp: {

                        regexp: /^[a-zA-Z0-9_\.]+$/,

                        message: 'The username can only consist of alphabetical, number, dot and underscore'

                    },

                    remote: {

                        url: 'remote.php',

                        message: 'The username is not available'

                    },

                    different: {

                        field: 'password',

                        message: 'The username and password cannot be the same as each other'

                    }

                }

            },

            email: {

                validators: {

                    emailAddress: {

                        message: 'The input is not a valid email address'

                    }

                }

            },

            password: {

                validators: {

                    notEmpty: {

                        message: 'The password is required and cannot be empty'

                    },

                    identical: {

                        field: 'confirmPassword',

                        message: 'The password and its confirm are not the same'

                    },

                    different: {

                        field: 'username',

                        message: 'The password cannot be the same as username'

                    }

                }

            },

            confirmPassword: {

                validators: {

                    notEmpty: {

                        message: 'The confirm password is required and cannot be empty'

                    },

                    identical: {

                        field: 'password',

                        message: 'The password and its confirm are not the same'

                    },

                    different: {

                        field: 'username',

                        message: 'The password cannot be the same as username'

                    }

                }

            },

            birthday: {

                validators: {

                    date: {

                        format: 'YYYY/MM/DD',

                        message: 'The birthday is not valid'

                    }

                }

            },

            gender: {

                validators: {

                    notEmpty: {

                        message: 'The gender is required'

                    }

                }

            },

            'languages[]': {

                validators: {

                    notEmpty: {

                        message: 'Please specify at least one language you can speak'

                    }

                }

            },

            'programs[]': {

                validators: {

                    choice: {

                        min: 2,

                        max: 4,

                        message: 'Please choose 2 - 4 programming languages you are good at'

                    }

                }

            },

            captcha: {

                validators: {

                    callback: {

                        message: 'Wrong answer',

                        callback: function(value, validator) {

                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);

                            return value == sum;

                        }

                    }

                }

            }

        }

    });



    // Validate the form manually

    $('#validateBtn').click(function() {

        $('#defaultForm').bootstrapValidator('validate');

    });



    $('#resetBtn').click(function() {

        $('#defaultForm').data('bootstrapValidator').resetForm(true);

    });

});

</script>

</body>
</html>