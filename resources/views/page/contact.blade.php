<!DOCTYPE html>
<html lang="en">
<head>
	@include('head')
</head>
<body class="animsition">

	@include('header')

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(public/source/images/form/img-02-preset-1-1920x300.jpg);">
		<h2 class="l-text2 t-center">
			Liên Hệ
		</h2>
	</section>
	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.777146476794!2d108.24673531436493!3d15.973010146253195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDU4JzIyLjgiTiAxMDjCsDE0JzU2LjEiRQ!5e0!3m2!1sen!2s!4v1553500627850" width="550" height="450" frameborder="5" style="border:0" allowfullscreen></iframe>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<form  action="{{route('dong-gop')}}" autocomplete="off" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<h4 class="m-text26 p-b-36 p-t-15">
							Gởi thư nhận xét của bạn
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Tên của bạn">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone" placeholder="Số điện thoại">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Địa chỉ email ">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Nội dung góp ý"></textarea>

						<div class="w-size25">
							<!-- Button -->
							<button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Gởi
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	@include('footer')
	@include('script')
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="public/source/js/map-custom.js"></script>
</body>
</html>
