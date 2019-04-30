<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="https://mail.google.com/mail/ca/u/0/#inbox?compose=fwmvGMBxfJkkVwTZLXWFnxglcZQbPKTdrSkqvznVfXVtZCklTRbMFNNnqNRBkvDQJGdSWSsVPZqQRKZwtPmKdJbVcnSTNsScCCvGXLbmxnJRkGKnKfZv" target="_blank">
						<span class="topbar-email">
							NTPSHOP@gmail.com
						</span>
					</a>
				</div>

				<span class="topbar-child1">
					Miễn Phí vận chuyển cho đơn hàng có giá trị trên 500.000 đồng
				</span>
				@if(Session::has('idcus'))
					<div class="topbar-child2">
						<span class="topbar-email">
							Xin chào : {{$namecus->Name_Customer}}
						</span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="{{route('dang-xuat')}}">
							<span class="topbar-email">
								<b> Đăng Xuất </b>
							</span>
						</a>
					</div>
				@else
				<div class="topbar-child2">
					<a href="{{route('dang-nhap')}}">
						<span class="topbar-email">
							Đăng Nhập
						</span>
					</a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="{{route('dang-ky')}}">
						<span class="topbar-email">
							Đăng Ký
						</span>
					</a>
				</div>
				@endif
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="{{route('trang-chu')}}" class="logo">
					<img src="public/source/images/icons/icon2.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="{{route('trang-chu')}}">Trang Chủ</a>
							</li>

							<li>
								<a href="{{route('san-pham')}}">Sản Phẩm</a>
								<ul class="sub_menu">
									@foreach($category as $type)
									<li><a href="{{route('danh-sach-san-pham',$type->Category_ID)}}">{{$type->Name_Category}}</a></li>
									@endforeach
								</ul>
							</li>

							<li>
								<a href="{{route('bai-viet')}}">Bài Viết</a>
							</li>

							<li>
								<a href="{{route('gio-hang')}}">Giỏ Hàng</a>
							</li>
							
							<li>
								<a href="{{route('thong-tin')}}">Thông Tin</a>
							</li>

							<li>
								<a href="{{route('lien-he')}}">Liên Hệ</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<a href="{{route('thanh-vien')}}" class="header-wrapicon1 dis-block">
						<img src="public/source/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
						Cá nhân
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="public/source/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">
							@if(Session::has('cart'))
								{{Session('cart')->totalQuantity}}
							@else
								0
							@endif
						</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
							@if(Session::has('cart'))
								@foreach($product_cart as $product)
					<!-- sản phẩm có trong giỏ hàng           ---------------->
									<li class="header-cart-item">
										
										<div class="header-cart-item-img">
										<a href="{{route('xoa-gio-hang',$product['item']['Product_ID'])}}">
											<img src="public/source/images/product/{{$product['item']['Image_Product']}}" alt="IMG">
										</a>
										</div>
										<div class="header-cart-item-txt">
											<a href="{{route('chi-tiet-san-pham',$product['item']['Product_ID'])}}" class="header-cart-item-name">
												{{$product['item']['Name_Product']}}
											</a>

											<span class="header-cart-item-info">
											{{$product['quantity']}} x 
											@if($product['item']['Discount'] != 0)
											{{number_format($product['item']['Discount'])}}
											@else
											{{number_format($product['item']['Price_Product'])}}
											@endif
											 = 
											@if($product['item']['Discount'] != 0)
									{{number_format($product['item']['Discount']*$product['quantity'])}}
								@else
									{{number_format($product['item']['Price_Product']*$product['quantity'])}}
								@endif
											</span>
										</div>
									</li>
					<!-- sản phẩm có trong giỏ hàng           ---------------->
							@endforeach
							
							</ul>

							<div class="header-cart-total">
								Tổng tiền: {{number_format(Session('cart')->totalPrice)}} đồng
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('xoa-toan-bo-gio-hang')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Xóa Giỏ Hàng
									</a>
								</div>
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('gio-hang')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Thanh Toán
									</a>
								</div>
							</div>
							@else
								<center> Bạn chưa mua bất kì sản phẩm nào !</center>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="home-02.html" class="logo-mobile">
				<img src="public/source/images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="{{route('thanh-vien')}}" class="header-wrapicon1 dis-block">
						<img src="public/source/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="public/source/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">
							@if(Session::has('cart'))
								{{Session('cart')->totalQuantity}}
							@else
								0
							@endif
						</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
						@if(Session::has('cart'))
							<ul class="header-cart-wrapitem">
								@foreach($product_cart as $product)
								<!-- sản phẩm trong giỏ hàng -->
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="public/source/images/product/{{$product['item']['Image_Product']}}" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											{{$product['quantity']}} x 
											@if($product['item']['Discount'] != 0)
											{{number_format($product['item']['Discount'])}}
											@else
											{{number_format($product['item']['Price_Product'])}}
											@endif
										</span>
									</div>
								</li>
								@endforeach
								<!-- sản phẩm trong giỏ hàng -->
							</ul>

							<div class="header-cart-total">
								Tổng tiền: {{number_format(Session('cart')->totalPrice)}} đồng
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('gio-hang')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Xem giỏ hàng
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('gio-hang')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Thanh toán
									</a>
								</div>
							</div>
						@else
							Bạn chưa mua bất kì sản phẩm nào !
						@endif
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Miễn phí đơn hàng có gái trị trên 500.000 đồng
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								NTPSHOP@gmail.com
							</span>
						</div>
					</li>
							<li class="item-menu-mobile">
								<a href="{{route('trang-chu')}}">Trang Chủ</a>
							</li>

							<li class="item-menu-mobile">
								<a href="{{route('san-pham')}}">Sản Phẩm</a>
							</li>

							<li class="item-menu-mobile">
								<a href="{{route('gio-hang')}}">Giỏ Hàng</a>
							</li>

							<li class="item-menu-mobile">
								<a href="{{route('bai-viet')}}">Bài Viết</a>
							</li>

							<li class="item-menu-mobile">
								<a href="{{route('thong-tin')}}">Thông Tin</a>
							</li>

							<li class="item-menu-mobile">
								<a href="{{route('lien-he')}}">Liên Hệ</a>
							</li>

				</ul>
			</nav>
		</div>
	</header>