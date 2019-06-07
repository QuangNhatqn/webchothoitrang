@extends('customer.layout.index')

@section('content')

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <!-- /.col-lg-3 -->

      <div class="col-lg-9" style="margin-left: 12.5%">
        <br>

        <form action="customer/timkiem/danhsach/1" method="get">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Nhập từ khóa tìm kiếm..." name="timkiem" required minlength="3" maxlength="100">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Tìm Kiếm</button>
                </div>
              </div>
            </form>

        @if ($postings == "")
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
       
        @else


        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <h2 style="font-size: 20px">Tin đặc biệt</h2>
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <!--chèn thông tin panel-->
              <div class="card h-100">
                <a href="#"><img class="d-block img-fluid" src="img/quan_au_nam.jpg" alt="Quần âu nam các kiểu"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Quần âu nam các kiểu</a>
                  </h4>
                  <h5>200k</h5>
                  <p class="card-text">Bán lô quần âu nam mẫu như hình giá vô cùng rẻ cho các shop nguyên lô chỉ với 200k, mua lẻ tới số 5 Văn Cao, Phú Thạnh, Tân Phú để được giá tốt.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
              <!--chèn thông tin panel-->
            </div>

            <div class="carousel-item">
              <!--chèn thông tin panel-->
              <div class="card h-100">
                <a href="#"><img class="d-block img-fluid" src="img/aothun_cotron.jpg" alt="Áo thun cổ tròn"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Áo thun cổ tròn</a>
                  </h4>
                  <h5>70k</h5>
                  <p class="card-text">
                    Bên mình chuyên cung cấp áo thun cổ trơn giá rẻ.
                    Hàng đẹp ,chất liệu vải bên. 
                    Ít nhăn không bay màu. 
                    Size nhỏ s,l,m size lớn xl,xxl ,xxxl. 
                    Mẩu đa dạng ,màu sắc đầy đủ. 
                    Tem nhãn mác việt nam. 
                    Giao hàng tận nơi.
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
              <!--chèn thông tin panel-->
            </div>
            <div class="carousel-item">
              <!--chèn thông tin panel-->
              <div class="card h-100">
                <a href="#"><img class="d-block img-fluid" src="img/aothun_tron.jpg" alt="Áo thun trơn"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Áo thun trơn nam nữ đủ màu</a>
                  </h4>
                  <h5>50k</h5>
                  <p class="card-text">
                    .loại áo thun trơn
                    .kích cỡ : đủ size
                    .nhãn hiệu : hàng vnxk
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
              <!--chèn thông tin panel-->
            </div>

            <!--form hình gốc
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>-->

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
        <div class="khung">
          <h4 class="dexuat">Đề xuất: 
            <hr>
            <ul role="menu" itemscope="" itemtype="https://schema.org/SiteNavigationElement" class="khungdexuat1" width="100%" style="margin: 0px; padding: 0px 10px;">
              <li class="khungdexuat2" height="20" font-size="14" style="padding: 0px 10px;">
                <a href="aoquan.html" class="tendexuat">Tất cả</a>
              </li>
              &nbsp
              <li class="khungdexuat2" height="20" font-size="14" style="padding: 0px 10px;">
                <a href="aothun.html" class="tendexuat">Áo thun</a>
              </li>
              &nbsp
              <li class="khungdexuat2" height="20" font-size="14" style="padding: 0px 10px;">
                <a href="#" class="tendexuat">Áo sơ mi</a>
              </li>
              &nbsp
              <li class="khungdexuat2" height="20" font-size="14" style="padding: 0px 10px;">
                <a href="#" class="tendexuat">Quần jean</a>
              </li>
              &nbsp
              <li class="khungdexuat2" height="20" font-size="14" style="padding: 0px 10px;">
                <a href="#" class="tendexuat">Quần âu</a>
              </li>
              &nbsp
              <li  class="khungdexuat2" height="20" font-size="14" style="padding: 0px 10px;">
                <a href="#" class="tendexuat">Váy</a>
              </li>
              &nbsp
              <li  class="khungdexuat2" height="20" font-size="14" style="padding: 0px 10px;">
                <a href="#" class="tendexuat">Đầm</a>
              </li>
            </ul>

          </h4>
        </div>
        <hr>
        <div class="row">

          <!--item-->
          @foreach ($postings as $pt)
            {{-- expr --}}
         
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100" >
              <a href="#"><img class="card-img-top" src="{{$pt->URLImage1s}}" alt="{{$pt->URLImage1s}}" width="200" height="150"></a>

             <!--  <div class="label" style="border-color: rgb(245, 154, 0);color: rgb(255, 255, 255);">HOT</div> -->

              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$pt->Titles}}</a>
                </h4>
                <h5>{{$pt->Costs}}<sup>đ</sup></h5>
                <p class="card-text">{{$pt->Details}}</p>

              </div>
              <!--thong tin-->
              <div class="thongtin" style="text-align: right;">
                <div class="thongtin1">
                  <div class="thongtin2">
                    <span style="margin-left: 2px;"></span>
                    <!-- react-text: 2544 --><i class="far fa-user-circle"></i>{{$pt->users->FullNames}}<!-- /react-text -->
                    <span style="    border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                    <span style="margin-left: 2px;"></span>
                    <span ><i class="fas fa-medal"></i>{{$pt->PostTimes}}</span><!-- /react-text -->
                    <span style="    border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                    <span style="margin-left: 2px;"></span>
                    <span title="{{$pt->Addresss}}">ĐC</span>
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
           @endforeach
          <!--item-->

         

          

          
          <!--mẫu
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Two</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          mau-->

          

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
   @endif
  <!-- /.container -->
    
@endsection