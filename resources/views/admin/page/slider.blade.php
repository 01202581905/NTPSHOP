@extends('admin/master')
@section('content')
<div class="content-wrapper">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
</style>
	@if(isset($thaibai))
	<div class="w3-panel w3-red">
        <p>&nbsp;</p>
        	<center>
          		<h3>Lỗi ! Chúng tôi chỉ chấp nhận ảnh với đuôi .jpg , .png , .jpeg !</h3>
        	</center>
        <p>&nbsp;</p>
    </div>
    @elseif(isset($thaibai2))
    <div class="w3-panel w3-red">
        <p>&nbsp;</p>
        	<center>
          		<h3>Lỗi ! Vui lòng tải lên ảnh của bạn !</h3>
        	</center>
        <p>&nbsp;</p>
    </div>
    @endif
	<section class="content-header">
	          <h1>
	            Bảng điều khiển chính
	          </h1>
	</section>
	<br>	
	<div>
		<span>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Thêm sản phẩm mới</strong><br>&nbsp;&nbsp;
		<form action="{{route('newslide')}}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="file" name="file" style="margin-left: 50px" class="text-center center-block file-upload"><br>
			<input type="submit" value="Lưu ảnh " style="margin-left: 50px">
		</form>
		</span>
	</div>
	<br>
	<td data-th="Product"> 
	    <div class="row"> 
	     <div class="col-sm-2 hidden-xs">
	     	<img src="public/source/images/slide/heading.jpg" alt="Sản phẩm NTPSHOP" width="700" class="avatar">
	     </div>
	    </div> 
	</td>
	<hr><hr><hr>
	<div class="container"> 
	 <table id="cart" class="table table-hover table-condensed"> 
	  <thead> 
	   <tr> 
	    <th style="width:65%" class="text-center">Hình Ảnh</th>
	    <th style="width:1%"></th>
	    <th style="width:15%">Trình Trạng</th>   
	    <th style="width:15%">Tùy Chọn</th>  
	   </tr> 
	  </thead> 
	  <tbody>
	  <!----------------------------------sản phẩm------------------------------------------>
	  @foreach($slide as $slider)
	  <tr> 
	   <td data-th="Product"> 
	    <div class="row"> 
	     <div class="col-sm-2 hidden-xs">
	     	<img src="public/source/images/slide/{{$slider->Image}}" alt="Sản phẩm NTPSHOP" width="700">
	     </div>
	    </div> 
	   </td>
	   <td></td>
	   <td><br><br><br><br>
	   	<form action="{{route('updateStatus')}}" method="POST">
	   		<input type="hidden" name="_token" value="{{csrf_token()}}">
	   		<input type="hidden" name="id" value="{{$slider->id}}">
	   		<select name="status">
	   			@if($slider->Status == 1)
	   			<option value="1" selected="selected">Hiển Thị</option>
	   			<option value="0">Ẩn</option>
	   			@else
	   			<option value="1">Hiển Thị</option>
	   			<option value="0" selected="selected">Ẩn</option>
	   			@endif
	   		</select>
	   		&nbsp;&nbsp;
	   		<input type="submit" value="Lưu">
	   		&nbsp;&nbsp;
	   	</form>
	   </td> 
	   <td class="actions" data-th=""><br><br><br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <button class="btn btn-danger btn-sm" onclick="deleteslide({{$slider->id}})"><i class="fa fa-trash-o"></i>
		    </button>
	   </td> 
	  </tr>
	  @endforeach
	  <!-----------------------------------sản phẩm----------------------------------------->   
	  </tbody>
	 </table>
	</div>
	<div>
		{{$slide->links()}}
	</div>
</div>
	<script>
		function deleteslide(id) {

		  var r = confirm("Bạn có chắc chắn muốn xóa ảnh Slide này ?");
		  if (r == true) {
		    location.replace('deleteslider/'+id);

		  }
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
	</script>
@endsection