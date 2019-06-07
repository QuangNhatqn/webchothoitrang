@extends('customer.layout.index')

@section('content')

<!-- Page Content -->
<div class="container">

  <div class="row">

    <div class="col-lg-3">
      <br>
      <h1 class="my-4" style="font-size: 20px">Danh mục sản phẩm</h1>
      <div class="list-group">
        <a href="customer/danhmuc/danhsach/Áo" class="list-group-item">Áo</a>
        <a href="customer/danhmuc/danhsach/Quần" class="list-group-item">Quần</a>
        <a href="customer/danhmuc/danhsach/Giày dép" class="list-group-item">Giày dép</a>
        <a href="customer/danhmuc/danhsach/Đầm xinh" class="list-group-item">Đầm xinh</a>
        <a href="customer/danhmuc/danhsach/Mũ" class="list-group-item">Mũ</a>
        <a href="customer/danhmuc/danhsach/Phụ kiện khác" class="list-group-item">Phụ kiện khác</a>
      </div>

    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">
      <br>

      <h1>{{$postings->Titles}}</h1>

      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <h2 style="font-size: 20px; color: blue " ><i>Ảnh:</i></h2>
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">



          <div class="carousel-item active">
            <img class="d-block " src="{{$postings->URLImage1s}}" alt="{{$postings->URLImage1s}}" width="900" height="350" style="    object-fit: contain">
          </div>

          <div class="carousel-item">
            <img class="d-block" src="{{$postings->URLImage2s}}" alt="{{$postings->URLImage2s}}" width="900" height="350" style="object-fit: contain">
          </div>

          <div class="carousel-item">
            <img class="d-block" src="{{$postings->URLImage3s}}" alt="{{$postings->URLImage3s}}" width="900" height="350" style="object-fit: contain">
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <hr>
      <div >
        <h4 class="card-title">
          {{$postings->Titles}}
        </h4>
        <h5 style="color: blue;">{{$postings->Costs}}<sup>đ</sup></h5>
        <hr>
        <div>
          <a href=""style="color: blue; font-style: unset;font-size: 20px"; >
            <i class="fas fa-user"></i>{{$postings->users->FullNames}}
          </a>
        </div>
        <dir>
          <i class="fas fa-map-marker-alt" style="color:  #6a90bc"></i>
          <span style="font-size: 12px;margin-left: 2px;color: #6a90bc;    font-family: Verdana,Arial,sans-serif;">{{$postings->Addresss}}</span>
        </dir>
        <dir>
          <span style="    font-size: 85%;display: block;margin-bottom: 5px;color: #979797;">
            Ngày tham gia: {{$postings->users->ParticipateDates}}
          </span>
        </dir>
        <div>
         <h4 style="color: blue">
          <i>Liên hệ:</i> &nbsp;
          <span style="color: red; font-size: 20px">{{$postings->users->PhoneNumbers}}</span>
        </h4>
      </div>
      <hr>
      <p class="card-text">{{$postings->Details}}</p>
      <p><i><b>Tình trạng:</b></i> <span>{{$postings->Conditions}}</span></p>
    </div>
    <div style="text-align: center;">
      <button style="color: green">Phản hồi về tin đăng!</button>
    </div>

    <hr>

{{--           <h4 style="color: blue"><i>Tin tương tự</i></h4>

          <div class="row">

          <!--item-->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/aothun_mickey.jpg" alt="Áo thun Mickey" width="200" height="150"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Áo thun Mickey</a>
                </h4>
                <h5>99k</h5>
                <p class="card-text">Áo thun cổ trơn mickey, chất liệu cao cấp, bán tất cả các size.</p>

              </div>
              <!--thong tin-->
              <div class="thongtin" style="text-align: right;">
                <div class="thongtin1">
                  <div class="thongtin2">
                    <span style="margin-left: 2px;"></span>
                    <!-- react-text: 2544 --><i class="far fa-user-circle"></i>e.hien<!-- /react-text -->
                    <span style="    border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                    <span style="margin-left: 2px;"></span>
                    <span title="5 phút trước">5 phút trước</span><!-- /react-text -->
                    <span style="    border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                    <span style="margin-left: 2px;"></span>
                    <span title="Quận 1, TP.HCM">q1</span>
                    &nbsp;
                  </div>
                </div>
              </div>
              <!--Thông tin-->
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <!--item-->
          <!--item-->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/aothun_xanhinhinh.jpg" alt="Áo thun xanh in hình"  width="200" height="150"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Áo thun xanh in hình</a>
                </h4>
                <h5>69k</h5>
                <p class="card-text">Áo thun xanh cổ trơn in hình, chất liệu cao cấp, bán tất cả các size cho cả nam và nữ.</p>

              </div>
              <!--thong tin-->
              <div class="thongtin" style="text-align: right;">
                <div class="thongtin1">
                  <div class="thongtin2">
                    <span style="margin-left: 2px;"></span>
                    <!-- react-text: 2544 --><i class="far fa-user-circle"></i>thu trang<!-- /react-text -->
                    <span style="    border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                    <span style="margin-left: 2px;"></span>
                    <span title="1 ngày trước">1 ngày trước</span><!-- /react-text -->
                    <span style="    border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                    <span style="margin-left: 2px;"></span>
                    <span title="Quận Thủ Đức, TP.HCM">q.thủ đức</span>
                    &nbsp;
                  </div>
                </div>
              </div>
              <!--Thông tin-->
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <!--item-->

           <!--item-->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/aothun_trangthethao.jpg" alt="Áo thun trắng thể thao"  width="200" height="150"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Áo thun trắng thể thao</a>
                </h4>
                <h5>79k</h5>
                <p class="card-text">Áo thun trắng thể thao, thiết kế thoáng mát, chất liệu bền, phù hợp với người chơi thể thao, bán tất cả các size cho cả nam và nữ.</p>

              </div>
              <!--thong tin-->
              <div class="thongtin" style="text-align: right;">
                <div class="thongtin1">
                  <div class="thongtin2">
                    <span style="margin-left: 2px;"></span>
                    <!-- react-text: 2544 --><i class="far fa-user-circle"></i>thu trang<!-- /react-text -->
                    <span style="    border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                    <span style="margin-left: 2px;"></span>
                    <span title="2 ngày trước">2 ngày trước</span><!-- /react-text -->
                    <span style="    border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                    <span style="margin-left: 2px;"></span>
                    <span title="Quận Thủ Đức, TP.HCM">q.thủ đức</span>
                    &nbsp;
                  </div>
                </div>
              </div>
              <!--Thông tin-->
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <!--item-->
          --}}
          
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  <br>
  
  @endsection