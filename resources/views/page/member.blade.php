<!DOCTYPE html>
<html lang="en">
<head>
	@include('head')
<!--===============================================================================================--><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	@include('header')
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
      input[type=submit] {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
  </style>
</head>
<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
      <form action="{{route('up-load-anh')}}" autocomplete="off" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="text-center">
          @if($infouser->Avatar == "C1")
          <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
          @else
          <img src="public/source/images/avatar/{{$infouser->Avatar}}" class="avatar img-circle img-thumbnail" alt="avatar">
          @endif
          <h6>Tải lên ảnh đại diện của bạn &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Chọn"></h6>
          <input type="file" name="file" class="text-center center-block file-upload">
        </div>
      </form>
      </hr><br>
          <ul class="list-group">
            <li class="list-group-item text-muted">Hoạt động &nbsp;&nbsp;<i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Thời gian</strong></span> 12-12-2017</li>
            <li class="list-group-item text-right">
              <a href="{{route('thanh-vien')}}">
                <span class="pull-left"><strong>Thông tin cá nhân</strong>
                </span> 13
              </a>
            </li>
            <li class="list-group-item text-right">
            	<a href="{{route('don-dat-hang')}}">
            		<span class="pull-left"><strong>Lượt mua hàng</strong>
            		</span> 13
            	</a>
            </li>      	
            <li class="list-group-item text-right"><span class="pull-left"><strong>Lượt chia sẻ</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Lượt bình luận</strong></span> 78</li>
          </ul> 
        </div><!--/col-3-->
    	<div class="col-sm-9">    
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form autocomplete="off" class="form" action="{{route('thay-doi-thong-tin')}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Họ và tên</h4></label>
                              <input type="text" class="form-control" name="name" 
                              value="{{$infouser->Name_Customer}}">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Số điện thoại</h4></label>
                              <input type="text" class="form-control" name="phone" 
                              value="{{$infouser->Phone}}">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Giới tính</h4></label>
                              <input type="text" class="form-control" name="gender" 
                              value="{{$infouser->Gender}}" readonly="">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" 
                              value="{{$infouser->Email}}">
                          </div>
                      </div>
                      <div class="form-group"> 
                          <div class="col-xs-6">
                              <label for="email"><h4>Địa chỉ</h4></label>
                              <input type="text" class="form-control" name="address"
                               value="{{$infouser->Address}}">
                          </div>
                      </div>
                      @if(isset($thanhcong1))
                        &nbsp;
                        <br><br>
                      @else
                        <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>&nbsp;&nbsp;Lưu thông tin</button>
                            </div>
                        </div>
                      @endif
                    </form>
              		          <a href="{{route('mat-khau')}}">
                              	<button class="btn btn-lg btn-success"><i class="glyphicon glyphicon-repeat"></i>&nbsp;&nbsp;Đổi mật khẩu</button>
                            </a>
                    @if(isset($thatbai))
                    <div class="col-xs-12">
                        <div class="w3-panel w3-red">
                          <p>&nbsp;</p>
                          <center>
                            <h3>Lỗi ! Bạn phải chọn tệp tin ảnh để cài ảnh đại diện !</h3>
                          </center>
                          <p>&nbsp;</p>
                        </div>
                    </div>
                    @elseif(isset($thanhcong))
                    <div class="col-xs-12">
                        <div class="w3-panel w3-green">
                          <p>&nbsp;</p>
                          <center>
                            <h3>Chúc mừng bạn đã thay đổi ảnh đại diện thành công !</h3>
                          </center>
                          <p>&nbsp;</p>
                        </div>
                    </div>
                    @elseif(isset($thanhcong1))
                    <div class="col-xs-12">
                      <br><br>
                        <div class="w3-panel w3-green">
                          <p>&nbsp;</p>
                          <center>
                            <h3>Chúc mừng bạn đã thay đổi thông tin cá nhân thành công !</h3>
                          </center>
                          <p>&nbsp;</p>
                        </div>
                    </div>
                    @elseif(isset($thatbai1))
                    <div class="col-xs-12">
                        <div class="w3-panel w3-red">
                          <p>&nbsp;</p>
                          <center>
                            <h3>Lỗi ! Vui lòng chọn đúng định dạng ảnh để cài ảnh đại diện !</h3>
                          </center>
                          <p>&nbsp;</p>
                        </div>
                    </div>
                    @elseif(isset($thatbai2))
                    <div class="col-xs-12">
                        <div class="w3-panel w3-red">
                          <p>&nbsp;</p>
                          <center>
                            <h3>Lỗi ! Vui lòng điền đầy đủ và chính xác thông tin cá nhân!</h3>
                          </center>
                          <p>&nbsp;</p>
                        </div>
                    </div>
                    @endif
             </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
</div>
                                                      
	@include('footer')
	@include('script')
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
</body>
</html>