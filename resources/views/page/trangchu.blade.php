<!DOCTYPE html>
<html lang="en">
<head>
	@include('head')
</head>
<body class="animsition">

	<!-- header fixed -->
	@include('header')

	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<!-- silde show -->
				@foreach($slide as $sl)
				<div class="item-slick1 item1-slick1" style="background-image: url(public/source/images/slide/{{$sl->Image}});">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
							Leather Bags
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="fadeInDown">
							Sản phẩm mới của NTP-SHOP
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="{{route('san-pham')}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Mua Ngay
							</a>
						</div>
					</div>
				</div>
				@endforeach
				<!-- silde show -->
			</div>
		</div>
	</section>
	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					Sản phẩm
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Sản Phẩm Mới</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#featured" role="tab">Bán Chạy Nhất</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#sale" role="tab">Giảm Giá</a>
					</li>	
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-35">
					<!-- - -->
					<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
						<div class="row">
							<!-- sản phẩm mới  -->
							@foreach($new_product as $new)
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="public/source/images/product/{{$new->Image_Product}}" alt="IMG-PRODUCT" height="280px">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<a href="{{route('them-gio-hang',$new->Product_ID)}}">
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
														Add to Cart
												</button>
												</a>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="{{route('chi-tiet-san-pham',$new->Product_ID)}}" class="block2-name dis-block s-text3 p-b-5">
											{{$new->Name_Product}}
										</a>
										@if($new->Discount != 0)
											<span class="block2-oldprice m-text7 p-r-5">	
												{{number_format($new->Price_Product)}} đồng
											</span>
											<span class="block2-newprice m-text8 p-r-5">
												{{number_format($new->Discount)}} đồng
											</span>
										@else
											<span class="block2-price m-text6 p-r-5">
												{{number_format($new->Price_Product)}} đồng
											</span>
										@endif
									</div>
								</div>
							</div>
							@endforeach()
							<!-- sản phẩm mới -->
						</div>
					</div>

					<!-- - -->
					<div class="tab-pane fade" id="featured" role="tabpanel">
						<div class="row">
							<!-- sản phẩm bán chạy nhất -->
							@foreach($top_product as $top)
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									@if($top->New == 1)
										<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									@elseif($top->Discount != 0)
										<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
									@else
										<div class="block2-img wrap-pic-w of-hidden pos-relative">
									@endif
										<img src="public/source/images/product/{{$top->Image_Product}}" alt="IMG-PRODUCT" height="280px">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<a href="{{route('them-gio-hang',$top->Product_ID)}}">
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
														Add to Cart
												</button>
												</a>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="{{route('chi-tiet-san-pham',$top->Product_ID)}}" class="block2-name dis-block s-text3 p-b-5">
											{{$top->Name_Product}}
										</a>
										@if($top->Discount != 0)
											<span class="block2-oldprice m-text7 p-r-5">
												{{number_format($top->Price_Product)}} đồng
											</span>

											<span class="block2-newprice m-text8 p-r-5">
												{{number_format($top->Discount)}} đồng
											</span>
										@else
											<span class="block2-price m-text6 p-r-5">
												{{number_format($top->Price_Product)}} đồng
											</span>
										@endif
									</div>
								</div>
							</div>
							@endforeach
							<!-- sản phẩm bán chạy nhất -->
						</div>
					</div>

					<!--  -->
					<div class="tab-pane fade" id="sale" role="tabpanel">
						<div class="row">
							<!-- sản phẩm phần giảm giá  -->
							@foreach($sale_product as $sale)
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img src="public/source/images/product/{{$sale->Image_Product}}" alt="IMG-PRODUCT" height="280px">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<a href="{{route('them-gio-hang',$top->Product_ID)}}">
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
														Add to Cart
												</button>
												</a>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="{{route('chi-tiet-san-pham',$sale->Product_ID)}}" class="block2-name dis-block s-text3 p-b-5">
											{{$sale->Name_Product}}
										</a>

										<span class="block2-oldprice m-text7 p-r-5">	
											{{number_format($sale->Price_Product)}} đồng
										</span>
										<span class="block2-newprice m-text8 p-r-5">
											{{number_format($sale->Discount)}} đồng
										</span>
									</div>
								</div>
							</div>
							@endforeach
							<!-- sản phẩm phần giảm giá -->
						</div>
					</div>
					<!--  -->
				</div>
			</div>
		</div>
	</section>

	<!-- Blog -->
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Bài viết
				</h3>
			</div>
			<div class="row">
				@foreach($blog as $b)
				<!-- bài viết ----------------------------------------->
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="{{route('chi-tiet-bai-viet',$b->ID_Blog)}}" class="block3-img dis-block hov-img-zoom">
							<img src="public/source/images/blog/{{$b->Image_blog}}" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="{{route('chi-tiet-bai-viet',$b->ID_Blog)}}" class="m-text11">
									{{$b->Title_Blog}}
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">{{$b->created_by}}</span>
							<span class="s-text6">on</span> <span class="s-text7">{{$b->created_at}}</span>

							<p class="s-text8 p-t-16">
								{{$b->Description}}
							</p>
						</div>
					</div>
				</div>
				<!-- bài viết ------------------------------------------>
				@endforeach
			</div>
		</div>
	</section>
	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Giao hàng miễn phí
				</h4>

				<a href="#" class="s-text11 t-center">
					Dành cho đơn hàng giá trị trên 500.000 đồng
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					30 Ngày hoàn trả sản phẩm
				</h4>

				<span class="s-text11 t-center">
					Hoàn trả sản phẩm khi không giống quảng cáo
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Thời gian mở cửa
				</h4>

				<span class="s-text11 t-center">
					Cửa hàng mở cửa 24/24h phục vụ quý khách
				</span>
			</div>
		</div>
	</section>
	@include('footer')
	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

<!--====================================================================-->
	@include('script')
</body>
</html>
