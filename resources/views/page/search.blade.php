<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
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
	<link rel="stylesheet" type="text/css" href="public/source/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/source/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/source/css/main.css">
</head>
<body class="animsition">
	@include('header')
	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(public/source/images/form/img-02-preset-1-1920x300.jpg);">
		<h2 class="l-text2 t-center">
			DANH SÁCH SẢN PHẨM

		</h2>
		<p class="m-text13 t-center">
			của NTP-SHOP 2019
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<br>
						<h4 class="m-text14 p-b-7">
							Danh mục sản phẩm
						</h4>
						<ul class="p-b-54">
						@foreach($typeproduct as $type)
							<li class="p-t-4">
								<a href="{{route('danh-sach-san-pham',$type->Category_ID)}}" class="s-text13 active1">
									{{$type->Name_Category}}
								</a>
							</li>
						@endforeach
						</ul>
						<!--  -->
						<h4 class="m-text14 p-b-32">
							Tìm Kiếm Sản Phẩm
						</h4>
						<form action="{{route('tim-kiem')}}" autocomplete="off" method="GET">
						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" autocomplete="off" type="text" name="search" placeholder="Tìm Kiếm Sản Phẩm">

							<button type="submit" class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
						</form>
						<br>
						<br>		
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Default Sorting</option>
									<option>Popularity</option>
									<option>Price: low to high</option>
									<option>Price: high to low</option>
								</select>
							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Price</option>
									<option>$0.00 - $50.00</option>
									<option>$50.00 - $100.00</option>
									<option>$100.00 - $150.00</option>
									<option>$150.00 - $200.00</option>
									<option>$200.00+</option>

								</select>
							</div>
						</div>

						<span class="s-text8 p-t-5 p-b-5">
							Tìm kiếm được  {{$product->count()}} sản phẩm
						</span>
					</div>

					<!-- Product -->
					<div class="row">
						@foreach($product as $pr)
						<!----------- sản phẩm ----------------->
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								@if($pr->New == 1)
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								@elseif($pr->Discount != 0)
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
								@else
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
								@endif
									<img src="public/source/images/product/{{$pr->Image_Product}}" alt="IMG-PRODUCT" height="280px">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="{{route('them-gio-hang',$pr->Product_ID)}}">
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
											</button>
											</a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="{{route('chi-tiet-san-pham',$pr->Product_ID)}}" class="block2-name dis-block s-text3 p-b-5">
										{{$pr->Name_Product}}
									</a>
									@if($pr->Discount != 0)
											<span class="block2-oldprice m-text7 p-r-5">
												{{number_format($pr->Price_Product)}} đồng
											</span>

											<span class="block2-newprice m-text8 p-r-5">
												{{number_format($pr->Discount)}} đồng
											</span>
										@else
											<span class="block2-price m-text6 p-r-5">
												{{number_format($pr->Price_Product)}} đồng
											</span>
										@endif
								</div>
							</div>
						</div>
						@endforeach
						<!----------- sản phẩm ----------------->
					</div>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a class="item-pagination flex-c-m trans-0-4">
						
						</a>
					</div>
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
	<script type="text/javascript" src="public/source/vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="public/source/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="public/source/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="public/source/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="public/source/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="public/source/vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="public/source/js/main.js"></script>

</body>
</html>
