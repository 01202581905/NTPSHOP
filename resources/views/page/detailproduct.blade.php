<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
	<base href="{{asset(' ')}}"/> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="public/source/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/source/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/source/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/source/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/source/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/source/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/source/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/source/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/source/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/source/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/source/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/source/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/source/css/main.css">
</head>
<body class="animsition">

	@include('header')

	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="{{route('trang-chu')}}" class="s-text16">
			Trang Chủ
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="{{route('san-pham')}}" class="s-text16">
			Danh mục
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			Sản phẩm &nbsp;&nbsp;:&nbsp;&nbsp;{{$sanpham->Name_Product}}
		</span>
	</div>

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<!-------- hình ảnh của sản phẩm ----->
						<div class="item-slick3" data-thumb="public/source/images/product/{{$sanpham->Image_Product}}">
							<div class="wrap-pic-w">
								<img src="public/source/images/product/{{$sanpham->Image_Product}}" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="public/source/images/product/{{$sanpham->Image_Product}}">
							<div class="wrap-pic-w">
								<img src="public/source/images/product/{{$sanpham->Image_Product}}" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="public/source/images/product/{{$sanpham->Image_Product}}">
							<div class="wrap-pic-w">
								<img src="public/source/images/product/{{$sanpham->Image_Product}}" alt="IMG-PRODUCT">
							</div>
						</div>
						<!-------- hình ảnh của sản phẩm ----->
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					{{$sanpham->Name_Product}}
				</h4>
				@if($sanpham->Discount != 0)
					<span class="block2-oldprice m-text7 p-r-5">
						{{number_format($sanpham->Price_Product)}} đồng
					</span>
					<br>
					<span class="block2-price m-text8 p-r-5">
						{{number_format($sanpham->Discount)}} đồng
					</span>
				@else
					<span class="m-text17">
						{{number_format($sanpham->Price_Product)}} đồng
					</span>
				@endif
				<p class="s-text8 p-t-10">
					{{$sanpham->Description_Product}}
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Kích Cỡ
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="size">
								<option>Chọn Kích Cỡ</option>
								<option>Size S</option>
								<option>Size M</option>
								<option>Size L</option>
								<option>Size XL</option>
							</select>
						</div>
					</div>

					<div class="flex-m flex-w">
						<div class="s-text15 w-size15 t-center">
							Màu
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="color">
								<option>Chọn Màu</option>
								<option>Màu Xám</option>
								<option>Màu Đỏ</option>
								<option>Màu Đen</option>
								<option>Mày Xanh</option>
							</select>
						</div>
					</div>
					<form autocomplete="off" action="{{route('them-gio-hang-2',$sanpham->Product_ID)}}" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="numproduct" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>
					
				</div>
				<!--
					<span class="s-text8 m-r-35"><strong>LƯU Ý : sản phẩm chỉ được mua tối đa 3 sản phẩm trên một lần giao dịch . Xin quý khách thông cảm !</strong></span>
				<br><br>
				-->
				<div class="p-b-45">
					<span class="s-text8 m-r-35">Mã Sản Phẩm:</span><input type="text" name="id" size="2" value="{{$sanpham->Product_ID}}" readonly=""> 
					<span class="s-text8">Danh Mục Sản Phẩm : {{$sanpham->ID_Category}}</span>
				</div>
				</form>
				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Miêu Tả Sản Phẩm
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							{{$sanpham->Content_Product}}
						</p>
					</div>
				</div>

		<!--		<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Thông Tin Thêm
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							thông tin thêm nè
						</p>
					</div>
				</div>
		-->

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Đánh Giá (0)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							đánh giá nè	
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
			</div>
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Sản Phẩm Tương Tự
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					<!---- sản phẩm tương tự ------->
					@foreach($likeproduct as $lpro)
						<div class="item-slick2 p-l-15 p-r-15">
							<!-- Block2 -->
							<div class="block2">
								@if($lpro->New == 1)
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								@elseif($lpro->Discount != 0)
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
								@else
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
								@endif

									<img src="public/source/images/product/{{$lpro->Image_Product}}" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="{{route('chi-tiet-san-pham',$lpro->Product_ID)}}" class="block2-name dis-block s-text3 p-b-5">
										{{$lpro->Name_Product}}
									</a>

									@if($lpro->Price_Product != 0)
									<span class="block2-oldprice m-text7 p-r-5">
										{{number_format($lpro->Price_Product)}} đồng
									</span>

									<span class="block2-newprice m-text8 p-r-5">
										{{number_format($lpro->Discount)}} đồng
									</span>
									@else
									<span class="block2-price m-text6 p-r-5">
										{{number_format($lpro->Price_Product)}} đồng
									</span>
									@endif
								</div>
							</div>
						</div>
					@endforeach
					<!---- sản phẩm tương tự ------->
				</div>
			</div>

		</div>
	</section>
	@include('footer')
	<!--===============================================================================================-->
	<script type="text/javascript" src="public/source/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="public/source/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="public/source/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="public/source/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="public/source/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="public/source/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="public/source/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="public/source/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
		});

		$('.block2-btn-addwishlist').each(function(){
		});

		$('.btn-addcart-product-detail').each(function(){
		});
	</script>

<!--===============================================================================================-->
	<script src="public/source/js/main.js"></script>
</body>
</html>
