<!DOCTYPE html>
<html lang="en">
<head>
	@include('head')
	<style type="text/css">
		.thumbnail {
    padding:0px;
}
.panel {
	position:relative;
}
.panel>.panel-heading:after,.panel>.panel-heading:before{
	position:absolute;
	top:11px;left:-16px;
	right:100%;
	width:0;
	height:0;
	display:block;
	content:" ";
	border-color:transparent;
	border-style:solid solid outset;
	pointer-events:none;
}
.panel>.panel-heading:after{
	border-width:7px;
	border-right-color:#f7f7f7;
	margin-top:1px;
	margin-left:2px;
}
.panel>.panel-heading:before{
	border-right-color:#ddd;
	border-width:8px;
}
	</style>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body class="animsition">
	@include('header')
	<!-- Title Page -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="{{route('trang-chu')}}" class="s-text16">
			Trang chủ
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="{{route('bai-viet')}}" class="s-text16">
			Bài Viết
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			{{$blog->Title_Blog}}
		</span>
	</div>

	<!-- content page -->
	<section class="bgwhite p-t-60 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40">
							<div class="blog-detail-img wrap-pic-w">
								<img src="public/source/images/blog/{{$blog->Image_blog}}" alt="IMG-BLOG">
							</div>

							<div class="blog-detail-txt p-t-33">
								<h4 class="p-b-11 m-text24">
									{{$blog->Title_Blog}}
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By {{$blog->created_by}}
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										{{$blog->created_at}}
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

								<p class="p-b-25">
									{{$blog->Description}}
								</p>

								<p class="p-b-25">
									{{$blog->Content}}
								</p>
							</div>
							<hr>
							<h3 class="m-text25 p-b-14">
								 Bình luận Bài Viết
							</h3>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
		</div><!-- /col-sm-12 -->
	</div><!-- /row -->
	<!--------------------------commnet-------------------------------->
		@foreach($comment as $cm)
		<div class="row">
			<div class="col-sm-1">
				<div class="thumbnail">
					@if($cm->avatar == "C1")
					<img class="img-responsive user-photo" src=http://ssl.gstatic.com/accounts/ui/avatar_2x.png>
					@else
					<img class="img-responsive user-photo" src="public/source/images/avatar/{{$cm->avatar}}">
					@endif
				</div><!-- /thumbnail -->
			</div><!-- /col-sm-1 -->

			<div class="col-sm-5">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>{{$cm->name}}</strong><!-- <span class="text-muted">commented 5 days ago</span> -->
					</div>
					<div class="panel-body">
						{{$cm->Comment_Content}}
					</div><!-- /panel-body -->
				</div><!-- /panel panel-default -->
			</div><!-- /col-sm-5 -->
		</div>
		@endforeach
	<!---------------------------commnet------------------------------->
</div><!-- /container -->
						<!--				
							<div class="flex-m flex-w p-t-20">
								<span class="s-text20 p-r-20">
									Tags
								</span>

								<div class="wrap-tags flex-w">
									<a href="#" class="tag-item">
										Streetstyle
									</a>

									<a href="#" class="tag-item">
										Crafts
									</a>
								</div>
							</div>
						-->
						</div>

						<!-- Leave a comment -->
						@if(Session::has('idcus'))
						<form autocomplete="off" class="leave-comment" action="{{route('binh-luan-bai-viet')}}" method="POST">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="hidden" name="id" value="{{$blog->ID_Blog}}">
							<h4 class="m-text25 p-b-14">
								Để lại bình luận của bạn dưới đây
							</h4>

							<p class="s-text8 p-b-40">
								Góp phần đóng góp vào nội dung bài viết tốt hơn !
							</p>
							<textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" name="comment" placeholder="Bình luận..."></textarea>
							<div class="w-size24">
								<!-- Button -->
								<button type="submit" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									Đăng Bình Luận
								</button>
							</div>
						</form>
						@endif
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							Loại bài viết
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
							Sản phẩm nổi bật
						</h4>
						<!--------------danh sách sản phẩm nổi bật------------------------>
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
						<!--------------danh sách sản phẩm nổi bật------------------------>
						<!-- Archive -->
						<!--
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
					-->
					<!--
						
						<h4 class="m-text23 p-t-50 p-b-25">
							Tags
						</h4>

						<div class="wrap-tags flex-w">
							<a href="#" class="tag-item">
								Fashion
							</a>

							<a href="#" class="tag-item">
								Lifestyle
							</a>

							<a href="#" class="tag-item">
								Denim
							</a>

							<a href="#" class="tag-item">
								Streetstyle
							</a>

							<a href="#" class="tag-item">
								Crafts
							</a>
						</div>
					-->
					</div>
				</div>
			</div>
		</div>
	</section>
	@include('footer')
	@include('script')
</body>
</html>
