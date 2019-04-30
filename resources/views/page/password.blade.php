<!DOCTYPE html>
<html lang="en">
<head>
	@include('head')
<!--===============================================================================================-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--===============================================================================================-->
</head>
<body class="animsition">
	@include('header')
<!------ Include the above in your HEAD tag ---------->
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<div class="row">
<div class="col-sm-12">
  @if(isset($thanhcong))
    <?php
        Session::forget('idcus');
    ?>
  <div class="col-sm-6 col-sm-offset-3">
    <div class="w3-panel w3-green">
      <p>&nbsp;</p>
      <center>
        <h2>Bạn đã thay đổi mật khẩu thành công</h3><br>
          Vui lòng đăng nhập lại để tiếp tục sử dụng ! <br><br>
          <strong><a href="{{route('dang-nhap')}}">Đăng Nhập</a></strong>
      </center>
      <p>&nbsp;</p>
    </div>
  </div>
  @elseif(isset($thatbai3) || isset($thatbai4))
  <center><br><br><h1>Thay Đổi Mật Khẩu</h1></center><br><br>
  <div class="col-sm-6 col-sm-offset-3">
      <div class="alert alert-danger">
          <strong><center>
            @if(isset($thatbai3))
              Mật khẩu mới phải nhiều hơn 8 ký tự và ít hơn 20 kí tự !
            @else
              Xác nhận mật khẩu chưa chính xác !
            @endif
          </center></strong>
      </div>
    </div>
  </div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
    <form method="POST" action="{{route('doi-mat-khau')}}" autocomplete="off">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
    <p><font size="3px" color="#000000">Mật khẩu mới</font></p>
    <input type="password" class="input-lg form-control" name="newpassword" placeholder="Mật khẩu mới" autocomplete="off">
    <br>
    <br>
    <p><font size="3px" color="#000000">Xác nhận mật khẩu</font></p>
    <input type="password" class="input-lg form-control" name="newpassword2" placeholder="Xác nhận mật khẩu" autocomplete="off">
    <br>
    <input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" value="Thay Đổi Mật Khẩu">
    <br>
</form>
  @else
    <center><br><br><h1>Thay Đổi Mật Khẩu</h1></center><br><br>
  </div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
    <form method="POST" action="{{route('doi-mat-khau')}}">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
    <p><font size="3px" color="#000000">Mật khẩu mới</font></p>
    <input type="password" class="input-lg form-control" name="newpassword" placeholder="Mật khẩu mới" autocomplete="off">
    <br>
    <br>
    <p><font size="3px" color="#000000">Xác nhận mật khẩu</font></p>
    <input type="password" class="input-lg form-control" name="newpassword2" placeholder="Xác nhận mật khẩu" autocomplete="off">
    <br>
    <input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" value="Thay Đổi Mật Khẩu">
    <br>
</form>
  @endif
</div><!--/col-sm-6-->
</div><!--/row-->
</div>
<br><br>          
	@include('footer')
	@include('script')
</body>
</html>