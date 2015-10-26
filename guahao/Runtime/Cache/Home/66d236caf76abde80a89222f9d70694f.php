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
<form id="defaultForm" class="form-horizontal"  action="/Home/User/passwd" method="post">
  <div class="col-lg-8 col-lg-offset-2">

                    <div class="page-header">

                        <h2>修改密码</h2>

                    </div>


   <div class="form-group">
 <label class="col-lg-3 control-label">旧密码：</label>

<div class="col-lg-5"><input type="text" name="pass" class="form-control"></div>
</div>

   <div class="form-group">

      <label class="col-lg-3 control-label">新密码：</label>

<div class="col-lg-5"><input type="password" name="xin" class="form-control"></div>
</div>


   <div class="form-group">
  <label class="col-lg-3 control-label">重复密码：</label>
<div class="col-lg-5"><input type="password" name="xinpass" class="form-control"></div>
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

            firstName: {

                validators: {

                    notEmpty: {

                        message: 'The first name is required and cannot be empty'

                    }

                }

            },

            lastName: {

                validators: {

                    notEmpty: {

                        message: 'The last name is required and cannot be empty'

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
            pass: {

                validators: {

                    notEmpty: {

                        message: '密码为必填，不能为空'

                    }

                }
             },
            xin: {

                validators: {

                    notEmpty: {

                        message: '密码为必填，不能为空'

                    },

                    identical: {

                        field: 'xinpass',

                        message: '两次密码不一致'

                    },

                    different: {

                        field: 'pass',

                        message: '新密码不能与旧密码一样'

                    }

                }

            },

            xinpass: {

                validators: {

                    notEmpty: {

                        message: '与之前输入的密码不一致'

                    },

                    identical: {

                        field: 'xin',

                        message: '两次输入密码不一致'

                    },

                    different: {

                        field: 'pass',

                        message: '新密码不能与旧密码一样'

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