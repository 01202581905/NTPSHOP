@extends('admin/master')
@section('content')
<div class="content-wrapper">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style type="text/css">.table&amp;amp;gt;tbody&amp;amp;gt;tr&amp;amp;gt;td, .table&amp;amp;gt;tfoot&amp;amp;gt;tr&amp;amp;gt;td {  
	vertical-align: middle;
	}
	 
	@media screen and (max-width: 400px) { 
	table#cart tbody td .form-control { 
	width:5%; 
	display: inline !important;
	} 
	 
	.actions .btn { 
	width:36%; 
	margin:1.5em 0;
	} 
	 
	.actions .btn-info { 
	float:left;
	} 
	 
	.actions .btn-danger { 
	float:right;
	} 
	 
	table#cart thead {
	display: none;
	} 
	 
	table#cart tbody td {
	display: block;
	padding: .6rem;
	min-width:250px;
	} 
	 
	table#cart tbody tr td:first-child {
	background: #333;
	color: #fff;
	} 
	 
	table#cart tbody td:before { 
	content: attr(data-th);
	font-weight: bold; 
	display: inline-block;
	width: 8rem;
	} 
	 
	table#cart tfoot td {
	display:block;
	} 
	table#cart tfoot td .btn {
	display:block;
	}
	}
</style>
	<section class="content-header">
	          <h1>
	            Bảng điều khiển chính
	          </h1>
	</section>
	<br>	
	<div>
		<span>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Thêm sản phẩm mới</strong>&nbsp;&nbsp;&nbsp;
		<a href="{{route('newproduct')}}">
		<button class="btn btn-info btn-sm"><i class="fa fa-plus" aria-hidden="true"></i></button>
		</a>
		</span>
	</div>
	<div class="container"> 
	 <table id="cart" class="table table-hover table-condensed"> 
	  <thead> 
	   <tr> 
	    <th style="width:55%">Sản phẩm</th> 
	    <th style="width:11%">Loại sản phẩm</th> 
	    <th style="width:11%">Giá mặc định</th> 
	    <th style="width:11%" class="text-center">Giá giảm giá</th> 
	    <th style="width:12%"> </th> 
	   </tr> 
	  </thead> 
	  <tbody>
	  <!----------------------------------sản phẩm------------------------------------------>
	  @foreach($product as $pro)
	  <tr> 
	   <td data-th="Product"> 
	    <div class="row"> 
	     <div class="col-sm-2 hidden-xs"><img src="public/source/images/product/{{$pro->Image_Product}}" alt="Sản phẩm NTPSHOP" class="img-responsive" width="120">
	     </div> 
	     <div class="col-sm-10"> 
	      <h4 class="nomargin">{{$pro->Name_Product}}</h4>  
	     </div> 
	    </div> 
	   </td> 
	   <td data-th="Price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   		{{$pro->ID_Category}}
		</td> 
	   <td data-th="Quantity">{{number_format($pro->Price_Product)}} đ
	   </td> 
	   <td data-th="Subtotal" class="text-center">{{number_format($pro->Discount)}} đ</td> 
	   <td class="actions" data-th="">
	   	<a href="">
		    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
		    </button>
	    </a>
	    &nbsp;&nbsp;
		    <button class="btn btn-danger btn-sm" onclick="myFunctiondelete({{$pro->Product_ID}})"><i class="fa fa-trash-o"></i>
		    </button>
	   </td> 
	  </tr>
	  @endforeach
	  <!-----------------------------------sản phẩm----------------------------------------->   
	  </tbody>
	 </table>
	 <div>
	 		{{$product->links()}}
	 </div>
	</div>
</div>
	<script>
		function myFunctiondelete(id) {

		  var r = confirm("Bạn có chắc chắn muốn xóa sản phẩm này ?");
		  if (r == true) {
		    location.replace('deleteproduct/'+id);

		  }
		}
	</script>
@endsection