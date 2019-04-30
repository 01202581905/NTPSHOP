<!DOCTYPE html>
<html lang="en">
<head>
	@include('head')
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="animsition">
	@include('header')
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(public/source/images/form/img-02-preset-1-1920x300.jpg);">
		<h2 class="l-text2 t-center">
			Giỏ Hàng
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			@if(Session::has('cart'))
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Sản phẩm</th>
							<th class="column-3 ">Giá</th>
							<th class="column-4 p-l-70">Số Lượng</th>
							<th class="column-5">Tổng Tiền</th>
						</tr>
					<!-------- danh sách sản phẩm có trong giỏ hàng -------->
					@foreach($product_cart as $product)
						<tr class="table-row">
							<td class="column-1">
								<a href="{{route('xoa-gio-hang',$product['item']['Product_ID'])}}">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="public/source/images/product/{{$product['item']['Image_Product']}}" alt="IMG-PRODUCT">
								</div>
								</a>
							</td>
							<td class="column-2">{{$product['item']['Name_Product']}}</td>
							<td class="column-3">
								@if($product['item']['Discount'] != 0)
									{{number_format($product['item']['Discount'])}} đồng
								@else
									{{number_format($product['item']['Price_Product'])}} đồng
								@endif
							</td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									@if($product['quantity'] > 1)
									<a href="{{route('giam',$product['item']['Product_ID'])}}">
									<button class="color1 flex-c-m size7 bg8 eff2">
											<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>
									</a>
									@else
									<a href="{{route('xoa-gio-hang',$product['item']['Product_ID'])}}">
									<button class="color1 flex-c-m size7 bg8 eff2">
											<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>
									</a>
									@endif
									<input class="size8 m-text18 t-center num-product" type="text" name="num-product2" readonly="" value="{{$product['quantity']}}">
									<a href="{{route('tang',$product['item']['Product_ID'])}}">
									<button class="color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
									</a>
								</div>
							</td>
							<td class="column-5">
								@if($product['item']['Discount'] != 0)
									{{number_format($product['item']['Discount']*$product['quantity'])}} đồng
								@else
									{{number_format($product['item']['Price_Product']*$product['quantity'])}} đồng
								@endif
							</td>
						</tr>
					@endforeach
				  <!-------- danh sách sản phẩm có trong giỏ hàng -------->
					</table>
				</div>
			</div>

			<!-- Total -->
		<form autocomplete="off" action="{{route('dat-hang')}}" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Thông Tin Đơn Hàng
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Tiền Ban Đầu : 
					</span>

					<span class="m-text21 w-size20 w-full-sm"> 
						{{number_format(Session('cart')->totalPrice)}} đồng
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Phí Ship :
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							@if(Session('cart')->totalPrice > 500000)
								{{0}}
							@else
								{{number_format(30000)}}đồng
							@endif
						</p>

						<span class="s-text19">
							Địa Chỉ Thanh Toán
						</span>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="tinh" placeholder="Tỉnh -/- Thành Phố">
						</div>

						<div class="size13 bo4 m-b-12">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="huyen" placeholder="Huyện -/- Quận">
						</div>

						<div class="size13 bo4 m-b-12">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="xa" placeholder="Xã -/- Thị Trấn">
						</div>

						<div class="size13 bo4 m-b-12">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="diachi" placeholder="Địa Chỉ Nhỏ Hơn">
						</div>

						<div class="size13 bo4 m-b-22">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="ten" placeholder="Tên Người Nhận">
						</div>
						<div class="size13 bo4 m-b-22">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="sdt" placeholder="Số điện  thoại">
						</div>

						<div class="size13 bo4 m-b-22">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="mail" placeholder="Email">
						</div>
						<div class="size13 bo4 m-b-22">
							<textarea class="sizefull s-text7 p-l-15 p-r-15" type="text" name="note" placeholder="Nhắn gửi shop"></textarea> 
						</div>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Tổng Tiền :
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						{{number_format(Session('cart')->totalPrice)}} đồng
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Xác Nhận Đơn Hàng
					</button>
				</div>
			</div>
		</form>
		</div>
	@else
		@if(isset($thanhcong1))
			<div class="w3-panel w3-green">
                          <p>&nbsp;</p>
                          <center>
                            <h3>Bạn vừa đặt hàng thành công ! Chúng tôi sẽ giao hàng sớm nhất có thể </h3>
                          </center>
                          <p>&nbsp;</p>
                        </div>
		@else
			<center><h2>	Bạn chưa mua bất kì sản phẩm nào ! </h2></center>
		@endif
	@endif
	</section>
	@include('footer')
	@include('script')
</body>
</html>
