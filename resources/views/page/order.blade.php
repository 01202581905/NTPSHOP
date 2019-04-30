<!DOCTYPE html>
<html lang="en">
<head>
  @include('head')
  <style type="text/css">
      .button {
  background-color: #555555; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
  </style>
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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <div class="container bootstrap snippet">
    <div class="row">
      <div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        @if($infouser->Avatar == "C1")
          <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
          @else
          <img src="public/source/images/avatar/{{$infouser->Avatar}}" class="avatar img-circle img-thumbnail" alt="avatar">
          @endif
      </div></hr><br><br><br><br>
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
              <div class="flex-w">
                <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                  <select class="selection-2" name="date">
                    <option>cc</option>
                  </select>
                </div>

                <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                  <button type="submit" 
                  class="button">
                     Chi Tiết Đơn Hàng
                  </button>
                </div>
            </div>
            <div class="container-table-cart pos-relative">
        <div class="wrap-table-shopping-cart bgwhite">
          <table class="table-shopping-cart">
            <tr class="table-head">
              <th class="column-1"></th>
              <th class="column-2">Sản phẩm</th>
              <th class="column-3">Giá</th>
              <th class="column-4 p-l-70">Số Lượng</th>
              <th class="column-5">Tổng</th>
            </tr>
          <!-------- danh sách sản phẩm có trong giỏ hàng -------->
            <tr class="table-row">
              <td class="column-1">
                <div class="cart-img-product b-rad-4 o-f-hidden">
                  <img src="public/source/images/product/" alt="IMG-PRODUCT">
                </div>
              </td>
              <td class="column-2">tên sản phẩm</td>
              <td class="column-3">
                30000 đồng
              </td>
              <td class="column-4">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                1
              </td>
              <td class="column-5">
                300000 đồng
              </td>
            </tr>
          <!-------- danh sách sản phẩm có trong giỏ hàng -------->
          </table>
        </div>
      </div>
             </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
</div>
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
    });

    $('.block2-btn-addwishlist').each(function(){
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
