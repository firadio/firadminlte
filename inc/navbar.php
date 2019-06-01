      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
<?php //include __DIR__ . '/navbar-messages.php';?>
          <!-- Notifications: style can be found in dropdown.less -->
<?php //include __DIR__ . '/navbar-notifications.php';?>
          <!-- Tasks: style can be found in dropdown.less -->
<?php //include __DIR__ . '/navbar-tasks.php';?>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $AdminLTE;?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">飞儿云用户</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $AdminLTE;?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  飞儿云用户（普通用户）
                  <small>个性签名。。。。。</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">我的粉丝</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">我的推广</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">我的朋友</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/admin/ucenter-profile" class="btn btn-default btn-flat">个人资料</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">退出登录</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
          -->
        </ul>
      </div>
