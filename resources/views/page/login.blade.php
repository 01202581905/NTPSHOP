<!DOCTYPE html>
<html lang="en">
<head>
	@include('head')
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
						<strong>Đăng nhập để tiếp tục</strong>
					</div>
					<div class="panel-body">
						<form autocomplete="off" role="form" action="{{route('dang-nhap')}}" method="POST">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="public/source/images/icons/login.png">
									</div>
								</div>
								@if(Session::has('idcus'))
								<div class="alert alert-success">
    								<strong>Chúc mừng bạn đã đăng nhập thành công !</strong>
  								</div>
								@elseif(isset($thatbai))
								<div class="alert alert-danger">
    								<strong><center>Tài khoản hoặc mật khẩu sai ! <br>  Vui lòng nhập lại !</center></strong>
  								</div>	
  								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Tên tài khoản..." name="user_name" type="text" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Mật khẩu..." name="pass_word" type="password">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input type="checkbox" name="remember" value="1">&nbsp; Lưu tài khoản
											</div>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" value="Đăng Nhập">
										</div>
										<div class="form-group">
										</div>
									</div>
								</div>
								@else
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Tên tài khoản..." name="user_name" type="text" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Mật khẩu..." name="pass_word" type="password">
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input type="checkbox" name="remember" value="1">&nbsp; Lưu tài khoản
											</div>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" value="Đăng Nhập">
										</div>
										<div class="form-group">
										</div>
									</div>
								</div>
								@endif
							</fieldset>
						</form>
					</div>
					@if(Auth::check())
					@else
						<div class="panel-footer ">
						Bạn chưa có tài khoản? <a href="{{route('dang-ky')}}" onClick=""> Đăng kí tại đây ! </a>
					</div>
					@endif
                </div>
			</div>
		</div>
	</div>
		</div>
	@include('footer')
	@include('script')
</body>
</html>