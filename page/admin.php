<?php
include dirname(__DIR__) . '/inc/header.php';
?>
  <script src="<?php echo $url_static;?>/vue/admin.js?x"></script>
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo $AdminLTE;?>/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $AdminLTE;?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo $AdminLTE;?>/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
  <link rel="stylesheet" href="<?php echo $url_static;?>/css/gfonts.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" id="app">

  <header class="main-header">

    <!-- Logo -->
    <a href="/admin<?php echo $PageFileExt;?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>飞儿</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>飞儿</b>云平台</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
<?php include dirname(__DIR__) . '/inc/navbar.php';?>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $AdminLTE;?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>飞儿云用户</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form" style="display: none;">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
<?php

include dirname(__DIR__) . '/inc/admin/sidebar-menu.php';
?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        欢迎使用飞儿云平台
        <!--<small>Version 2.0</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li class="active">飞儿云平台</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
<?php
$paths1 = isset($paths[1]) ? $paths[1] : 'index';
$dirname = __FILE__;
$i = strrpos($dirname, '.');
if ($i !== FALSE) {
    // 如果存在扩展名，就去掉
    $dirname = substr($dirname, 0, $i);
}
$file = $dirname . DIRECTORY_SEPARATOR . $paths1 . '.php';
if (is_file($file)) {
    include($file);
} else {
    echo '文件丢失：' . $paths1;
}
?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.0.0
    </div>
    <strong>Copyright &copy; 2014-2018 <a href="javascript:void(0)">飞儿云平台</a></strong>
  </footer>

  <!-- Control Sidebar -->
<?php //include dirname(__DIR__) . '/inc/control.php';?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo $AdminLTE;?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo $AdminLTE;?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo $AdminLTE;?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $AdminLTE;?>/dist/js/adminlte.min.js"></script>

<script>
new Vue(vue);
</script>
</body>
</html>
