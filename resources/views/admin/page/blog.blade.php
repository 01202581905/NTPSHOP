<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN - Quản Lý NTP SHOP</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="public/source/ADMIN/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="public/source/ADMIN/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/source/ADMIN/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="public/source/ADMIN/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!--------------------- header -------------------->
      @include('admin/header')
      <!--------------------- header ------------------------>
      <!-- Left side column. contains the logo and sidebar -->
      @include('admin/mainsidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Danh sách bài viết</h3>
                  </div><!-- /.box-header -->
                  <div>
    <span>
    &nbsp;&nbsp;&nbsp;&nbsp;<strong>Thêm bài viết mới</strong>&nbsp;&nbsp;&nbsp;
    <a href="{{route('newblog')}}">
    <button class="btn btn-info btn-sm"><i class="fa fa-plus" aria-hidden="true"></i></button>
    </a>
    </span>
  </div>
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Tiêu đề bài viết</th>
                          <th>Thể loại bài viết</th>
                          <th>Viết bởi</th>
                          <th>Viết vào </th>
                          <th>Lượt xem</th>
                        </tr>
                      </thead>
                      <tbody>
                <!-------------------------------------------------->
                      @foreach($blog as $blogdetail)
                        <tr>
                          <td>{{substr($blogdetail->Title_Blog,0,100)."..."}}</td>
                          <td>{{$blogdetail->Type_Blog}}</td>
                          <td>{{$blogdetail->created_by}}</td>
                          <td>{{$blogdetail->created_at}}</td>
                          <td>
                            {{$blogdetail->view}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <span>
                            <a href="">
                              <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                              </button>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <button class="btn btn-danger btn-sm" onclick="deleteblog({{$blogdetail->ID_Blog}})"><i class="fa fa-trash-o"></i>
                            </button>
                          </span>
                          </td>
                        </tr> 
                      @endforeach
                <!-------------------------------------------------->
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Tiêu đề bài viết</th>
                          <th>Thể loại bài viết</th>
                          <th>Viết bởi</th>
                          <th>Viết vào </th>
                          <th>Lượt xem</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div><!-- /.box-body -->
              </div>
              <!-- /.box -->
            <!----------------------------------------->
              <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Danh sách Bình Luận Bài viết</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>ID Bài Viết</th>
                          <th>Tên Khách Hàng</th>
                          <th>Nội dung Bình Luận</th>
                          <th>Bình Luận Vvào</th>
                          <th>Hiển Thị Trên Bài Viết</th>
                        </tr>
                      </thead>
                      <tbody>
                  <!------------------------------------------------>
                      @foreach($comment as $cm)
                        <tr>
                          <td>{{$cm->Comment_BlogID}}</td>
                          <td>{{$cm->name}}</td>
                          <td>{{$cm->Comment_Content}}</td>
                          <td>{{$cm->created_at}}</td>
                          <td>
                            {{$cm->Comment_Status}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <span>
                            <a href="">
                              <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                              </button>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <button class="btn btn-danger btn-sm" onclick="deletecomment({{$blogdetail->ID_Blog}})"><i class="fa fa-trash-o"></i>
                            </button>
                          </span>
                          </td>
                        </tr>
                      @endforeach
                  <!------------------------------------------------>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>ID Bài Viết</th>
                          <th>Tên Khách Hàng</th>
                          <th>Nội dung Bình Luận</th>
                          <th>Bình Luận Vvào</th>
                          <th>Hiển Thị Trên Bài Viết</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div><!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section>
      </div>
      <!-- /.content-wrapper -->
      <!-- footer ------>
      @include('admin/footer')
      <!-- footer ------>

      <!-- Control Sidebar-->
      @include('admin/control')
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    <script src="public/source/ADMIN/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="public/source/ADMIN/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="public/source/ADMIN/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="public/source/ADMIN/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="public/source/ADMIN/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="public/source/ADMIN/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="public/source/ADMIN/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="public/source/ADMIN/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <script>
    function deleteblog(id) {

      var r = confirm("Bạn có chắc chắn muốn xóa bài viết này ?");
      if (r == true) {
        location.replace('deleteblogdetail/'+id);

      }
    }
  </script>
  <script>
    function deletecomment(id) {

      var r = confirm("Bạn có chắc chắn muốn xóa bình luận này ?");
      if (r == true) {
        location.replace('deletecomment/'+id);

      }
    }
  </script>
  </body>
</html>
