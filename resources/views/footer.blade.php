<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Liên Lạc Với TÔi
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Bạn có câu hỏi gì về cửa hàng ? Hãy cho chúng tôi biết tại KTX A-CĐ CNTT-Hòa Quý-Ngũ Hành Sơn-Đà Nẵng . <br> hoặc liên lạc qua : 0702581905
					</p>

					<div class="flex-m p-t-30">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href=""><i class="fa fa-facebook-official" aria-hidden="true" title="FACEBOOK"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="#"><i class="fa fa-instagram" aria-hidden="true" title="INSTAGRAM"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="#"><i class="fa fa-envelope" aria-hidden="true" title="GMAIL"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="#"><i class="fa fa-github-alt" aria-hidden="true" title="GITHUB"></i></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Danh mục
				</h4>
				<ul>
					<li class="p-b-9">
						<a href="{{route('trang-chu')}}" class="s-text7">
							Trang Chủ
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('san-pham')}}" class="s-text7">
							Sản Phẩm
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('gio-hang')}}" class="s-text7">
							Giỏ Hàng
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('bai-viet')}}" class="s-text7">
							Bài Viết
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('dang-nhap')}}" class="s-text7">
							Đăng Nhập
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('dang-ky')}}" class="s-text7">
							Đăng Ký
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Sản Phẩm
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="{{route('danh-sach-san-pham',3)}}" class="s-text7">
							Khuyên Tai
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('danh-sach-san-pham',4)}}" class="s-text7">
							Dây Chuyền
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('danh-sach-san-pham',5)}}" class="s-text7">
							Vòng Tay
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('danh-sach-san-pham',6)}}" class="s-text7">
							Nhẫn
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('danh-sach-san-pham',7)}}" class="s-text7">					
							Đồng Hồ
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('danh-sach-san-pham',8)}}" class="s-text7">
							Lắc Chân
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Giúp Đỡ
				</h4>

				<ul>

					<li class="p-b-9">
						<a href="{{route('lien-he')}}" class="s-text7">
							Gởi Thư Nhận Xét
						</a>
					</li>

					<li class="p-b-9">
						<a href="{{route('thong-tin')}}" class="s-text7">
							Thông Tin SHOP
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Nhận Tin Mới ↓
				</h4>

				<form action="{{route('g-mail')}}" method="POST">
					<input autocomplete="off" type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" autocomplete="off" type="text" name="email" placeholder="email@gmail.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button type="submit" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Đăng Ký
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<div class="t-center s-text8 p-t-20">
				Website được thiết kế bởi <i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;&nbsp;<a href="https://www.facebook.com/nguyentran.thienphuc.7" target="_blank">Tsar Bomba</a>
			</div>
		</div>
	</footer>


<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>