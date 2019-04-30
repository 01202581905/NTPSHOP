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
			Bài Viết
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-75">
					<div class="p-r-50 p-r-0-lg">
						@foreach($blog as $b)
						<!--------------- bài viết nè ------------>
						<div class="item-blog p-b-80">
							<a href="{{route('chi-tiet-bai-viet',$b->ID_Blog)}}" class="item-blog-img pos-relative dis-block hov-img-zoom">
								<img src="public/source/images/blog/{{$b->Image_blog}}" alt="IMG-BLOG">

								<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
									{{$b->created_at}}
								</span>
							</a>

							<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11">
									<a href="{{route('chi-tiet-bai-viet',$b->ID_Blog)}}" class="m-text24">
										{{$b->Title_Blog}}
									</a>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By {{$b->created_by}}
										<span class="m-l-3 m-r-6">|</span>
									</span>
									<!--
									<span>
										Cooking, Food
										<span class="m-l-3 m-r-6">|</span>
									</span>
									
									<span>
										8 Comments
									</span>
									-->
								</div>

								<p class="p-b-12">
									{{$b->Description}}
								</p>

								<a href="{{route('chi-tiet-bai-viet',$b->ID_Blog)}}" class="s-text20">
									Đọc tiếp
									<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
								</a>
							</div>
						</div>
						<!--------------- bài viết nè  ------------>
						@endforeach
					</div>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-r-50">
						{{$blog->links()}}
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-75">
					<div class="rightbar">
						<!-- Search -->
						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							Danh mục bài viết
						</h4>

						<ul>
							@foreach($type as $t)
							<!-------------- Danh mục bài viết------------------->
							<li class="p-t-6 p-b-8 bo6">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									{{$t->blogtype_name}}
								</a>
							</li>
							<!-------------- Danh mục bài viết------------------->
							@endforeach
						</ul>

						<!-- Featured Products -->
						<h4 class="m-text23 p-t-65 p-b-34">
							Featured Products
						</h4>

						<ul class="bgwhite">
						@foreach($product as $pro)
							<li class="flex-w p-b-20">
								<a href="{{route('chi-tiet-san-pham',$pro->Product_ID)}}" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
									<img src="public/source/images/product/{{$pro->Image_Product}}" alt="IMG-PRODUCT">
								</a>

								<div class="w-size23 p-t-5">
									<a href="{{route('chi-tiet-san-pham',$pro->Product_ID)}}" class="s-text20">
										{{$pro->Name_Product}}
									</a>

									<span class="dis-block s-text17 p-t-6">
										@if($pro->Discount != 0)
											{{number_format($pro->Discount)}} đồng
										@else
											{{number_format($pro->Price_Product)}} đồng
										@endif
									</span>
								</div>
							</li>
						@endforeach
						</ul>

						<!--------------------------------------------------------------------- 
							<h4 class="m-text23 p-t-50 p-b-16">
								Archive
							</h4>

							<ul>
								<li class="flex-sb-m">
									<a href="#" class="s-text13 p-t-5 p-b-5">
										July 2018
									</a>

									<span class="s-text13">
										(9)
									</span>
								</li>

								<li class="flex-sb-m">
									<a href="#" class="s-text13 p-t-5 p-b-5">
										June 2018
									</a>

									<span class="s-text13">
										(39)
									</span>
								</li>

								<li class="flex-sb-m">
									<a href="#" class="s-text13 p-t-5 p-b-5">
										May 2018
									</a>

									<span class="s-text13">
										(29)
									</span>
								</li>

								<li class="flex-sb-m">
									<a href="#" class="s-text13 p-t-5 p-b-5">
										April  2018
									</a>

									<span class="s-text13">
										(35)
									</span>
								</li>

								<li class="flex-sb-m">
									<a href="#" class="s-text13 p-t-5 p-b-5">
										March 2018
									</a>

									<span class="s-text13">
										(22)
									</span>
								</li>

								<li class="flex-sb-m">
									<a href="#" class="s-text13 p-t-5 p-b-5">
										February 2018
									</a>

									<span class="s-text13">
										(32)
									</span>
								</li>

								<li class="flex-sb-m">
									<a href="#" class="s-text13 p-t-5 p-b-5">
										January 2018
									</a>

									<span class="s-text13">
										(21)
									</span>
								</li>

								<li class="flex-sb-m">
									<a href="#" class="s-text13 p-t-5 p-b-5">
										December 2017
									</a>

									<span class="s-text13">
										(26)
									</span>
								</li>
							</ul>
						--------------------------------------------------------------------->
					</div>
				</div>
			</div>
		</div>
	</section>
	@include('footer')
	@include('script')
</body>
</html>
