<!DOCTYPE html>
<html lang="en">
<head>
	@include('head')
<!--===============================================================================================-->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--===============================================================================================-->
	<style type="text/css">
		.panel-heading {
    padding: 5px 15px;
}

.panel-footer {
	padding: 1px 15px;
	color: #A0A0A0;
}

.profile-img {
	width: 96px;
	height: 96px;
	margin: 0 auto 10px;
	display: block;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
}
	</style>
<!--===============================================================================================-->
</head>
<body class="animsition">
	@include('header')
	<div class="wrapper fadeInDown">
			<div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Đăng Ký Tài Khoản</strong>
					</div>
					<div class="panel-body">
						@if(isset($thanhcong))
							<div class="alert alert-success">
								<center>
    							<strong><h4>Chúc mừng ! </h2> Bạn đã tạo tài khoản thành công !
    								<br><br> <a href="{{route('dang-nhap')}}">Vui lòng đăng nhập tại đây </a>
    							</strong>
    							</center>
  							</div>
						@elseif(isset($thatbai))
							<div class="alert alert-danger">
    							<strong><center>Thông tin tài khoản chưa đúng ! <br>  Vui lòng nhập lại !</center></strong>
  							</div>
  							<form role="form" action="{{route('dang-ky')}}" autocomplete="off" method="POST">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="public/source/images/icons/login.png">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Tên khách hàng" name="name" type="text" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Giới tính" name="gender" type="text">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Email" name="email" type="email" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Số điện thoại" name="phone" type="text" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Địa Chỉ" name="address" type="text" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Tên tài khoản" name="user_name" type="text" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Mật khẩu" name="password" type="password">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Xác nhận mật khẩu" name="confirm" type="password">
											</div>
										</div>
										<div class="form-group">
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" value="Đăng Ký" name="dangky">
										</div>
									</div>
								</div>
						</form>
					</div>
					<div class="panel-footer ">
						Bạn đã có tài khoản ? <a href="{{route('dang-nhap')}}" onClick=""> Đăng nhập tại đây ! </a>
						@else
						<form role="form" action="{{route('dang-ky')}}" method="POST">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="public/source/images/icons/login.png">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Tên khách hàng" name="name" type="text" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Giới tính" name="gender" type="text">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Email" name="email" type="email" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Số điện thoại" name="phone" type="text" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Địa Chỉ" name="address" type="text" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Tên tài khoản" name="user_name" type="text" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Mật khẩu" name="password" type="password">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Xác nhận mật khẩu" name="confirm" type="password">
											</div>
										</div>
										<div class="form-group">
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" value="Đăng Ký" name="dangky">
										</div>
									</div>
								</div>
						</form>
					</div>
					<div class="panel-footer ">
						Bạn đã có tài khoản ? <a href="{{route('dang-nhap')}}" onClick=""> Đăng nhập tại đây ! </a>
						@endif
						
					</div>
                </div>
			</div>
		</div>
	</div>
		</div>
	@include('footer')
	@include('script')
</body>
</html>