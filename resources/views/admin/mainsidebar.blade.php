<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="public/source/ADMIN/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Tên Admin</p>
              <a href="#"><i class="fa fa-circle text-success"></i>Trạng Thái </a>
            </div>
          </div>
          <!-- search form -->
          <br>
          <br>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Bộ điều khiển</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="{{route('indexadmin')}}"><i class="fa fa-circle-o"></i>Thống Kê</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Quản Lý</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('managerproduct')}}"><i class="fa fa-circle-o"></i>Quản Lý Sản Phẩm</a></li>
                <li><a href="{{route('managerblog')}}"><i class="fa fa-circle-o"></i> Quản Lý Bài Viết</a></li>
                <li><a href="{{route('managerslider')}}"><i class="fa fa-circle-o"></i>Quản Lý Slider</a></li>
              </ul>
            </li>
            <li>
              <a href="pages/widgets.html">
                <i class="fa fa-th"></i> <span>Đơn Đặt Hàng</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Đơn Góp Ý</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Tài Khoản Đăng Ký</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>