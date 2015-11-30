<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>用户注册 | NiyunMMS | 倪云代理商会员管理系统</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/font-awesome.min.css">
    <!-- Ionicons -->
    <!--link rel="stylesheet" href="<?php echo base_url(); ?>static/css/ionicons.min.css"-->
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>static/js/html5shiv.min.js"></script>
        <script src="<?php echo base_url(); ?>static/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="<?php echo base_url(); ?>"><b>Niyun</b>MMS</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">注册一个新用户</p>
        
        <?php echo validation_errors(); ?>

         <?php //echo form_open('register'); ?>
        <form action="register" method="post" accept-charset="utf-8">
          <div class="form-group has-feedback">
            <input type="text" name="userlogin" value="<?php echo set_value('userlogin'); ?>" class="form-control"  placeholder="输入用户名">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" name="email"  value="<?php echo set_value('email'); ?>" class="form-control" placeholder="输入电子邮箱">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="passwd" value="<?php echo set_value('passwd'); ?>" class="form-control" placeholder="输入密码">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="repasswd" value="<?php echo set_value('repasswd'); ?>" class="form-control" placeholder="再次输入密码">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name='iagree' value="iagree" <?php echo set_checkbox('iagree', 'iagree'); ?> > 我同意使用 <a href="#">条款</a>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">注册</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- 或者 -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-qq"></i> 使用QQ账号登录</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-weibo"></i> 使用微博账号登录</a>
        </div>

        <a href="login" class="text-center">我已经有了一个登录账号</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>static/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>static/js/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
