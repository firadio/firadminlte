<?php
include dirname(__DIR__) . '/inc/header.php';
?>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.10.0/js/md5.min.js"></script> -->
  <script src="<?php echo $url_static;?>/lib/md5.min.js"></script>
  <!--<script src="<?php echo $url_static;?>/vue/login.js"></script>-->
<script>
vue.data.disabled = false;
vue.data.form.email = '';
vue.data.form.password = '';
vue.methods.submit = function () {
    const that = this;
    const form = window.clone(that.form);
    form.password = md5(form.password);
    that.disabled = true;
    that.ApiPost('/public/email/login.php', form).then(function (data) {
        that.disabled = false;
        if (data.hasOwnProperty('flag')) {
            if (data.flag === 'logined') {
                location.href = '/admin.html'
            }
            return;
        }
        // alert(data);
    }, function (data) {
        that.disabled = false;
        console.log('reject:', data);
    }).catch(function (reason) {
        that.disabled = false;
        console.log('catch:', reason);
    })
};
</script>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $AdminLTE;?>/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $AdminLTE;?>/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
  <link rel="stylesheet" href="<?php echo $url_static;?>/css/gfonts.css">
<style>
    .login-box{
        margin-top: 0;
    }

</style>

</head>
<body class="hold-transition login-page">
<table height="100%" width="100%"><tr><td>
<div class="login-box" id="app">
  <div class="login-logo">
    <a href=""><b>飞儿云</b>管理系统</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
<!--
    <p class="login-box-msg">简单&nbsp;&nbsp;&nbsp;高效&nbsp;&nbsp;&nbsp;安全&nbsp;&nbsp;&nbsp;可靠</p>
-->
    <p class="login-box-msg">E-mail 账号登录</p>

    <form action="" method="post" v-on:submit="submit">
      <div class="form-group has-feedback">
        <input
        type="email"
        class="form-control"
        placeholder="请输入Email邮箱"
        v-model="form.email"
        :disabled="disabled"
        required="required"
        autocomplete="off"
        />
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" style="display: none;">
        <input
        type="text"
        class="form-control"
        placeholder="请输入登录密码"
        v-model="form.password"
        :disabled="disabled"
        required="required"
        onfocus="this.type='password'"
        autocomplete="off"
        />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row" style="float: right;">
        <div class="col-xs-8" style="display: none;">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" :disabled="disabled"> 记住账号
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat" :disabled="disabled">下一步</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
<!--
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    -->
    <!-- /.social-auth-links -->

    <a href="javascript:void(0)">忘记登录密码</a><br>
    <a href="javascript:void(0)" class="text-center">注册新账号</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</td></tr></table>
<!-- jQuery 3 -->
<script src="<?php echo $AdminLTE;?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo $AdminLTE;?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo $AdminLTE;?>/plugins/iCheck/icheck.min.js"></script>
<script>
  new Vue(vue);
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
    //*
    $('form').submit(function() {
      //alert('asdf');
      return false;
    });//*/
  });
</script>
</body>
</html>
