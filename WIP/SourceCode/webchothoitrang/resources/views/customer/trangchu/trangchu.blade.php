@extends('customer.layout.index')

@section('content')

  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="./img/slide1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="./img/slide2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="./img/slide1.jpg" alt="Third slide">
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
      </div>
      <div><h2>Khám phá danh mục sản phẩm</h2></div><br>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="customer/danhmuc/danhsach/Áo"><img class="card-img-top" src="./img/aothun_trangthethao.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="customer/danhmuc/danhsach/Áo">Áo</a>
              </h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="customer/danhmuc/danhsach/Quần"><img class="card-img-top" src="./img/quần jean nam nữ.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="customer/danhmuc/danhsach/Quần">Quần</a>
              </h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="customer/danhmuc/danhsach/Giày dép"><img class="card-img-top" src="./img/giày dép.jpg" alt="" width="300px" height="200px" ></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="customer/danhmuc/danhsach/Giày dép">Giày dép</a>
              </h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="customer/danhmuc/danhsach/Đầm xinh"><img class="card-img-top" src="./img/đầm váy.jpg" alt="" width="300px" height="200px"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="customer/danhmuc/danhsach/Đầm xinh">Đầm xinh</a>
              </h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="customer/danhmuc/danhsach/Mũ"><img class="card-img-top" src="./img/mũ.jpg" alt="" width="300px" height="200px"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="customer/danhmuc/danhsach/Mũ">Mũ</a>
              </h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="customer/danhmuc/danhsach/Phụ kiện khác"><img class="card-img-top" src="./img/phụ kiện khác.jpg" alt="" width="300px" height="200px"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="customer/danhmuc/danhsach/Phụ kiện khác">Phụ kiện khác</a>
              </h4>
            </div>
          </div>
        </div>
      </div>  
      <div class="col-xs-12">
        <p>Chợ Thời Trang ...</p>
        <p>Với Chợ Thời Trang, bạn có thể dễ dàng mua bán, trao đổi bất cứ một loại mặt hàng quần áo thời trang nào, dù đó là đồ cũ hay đồ mới </p>
        <p>✓ Đồ dùng cá nhân: <a href="aoquan.html">quần áo</a>,
          <a href="#">giày dép</a>, <a href="#">túi xách</a>,
        </div>
      </div>
      <div class="_2TPj1HB4AMzPRjB65H7UfF col-md-12 col-sm-12 hidden-xs text-justify text-muted">
        <div>
          <h4 class="_3YiMzqqZx8k4ACDnRShenY large"><strong>Các từ khóa phổ biến</strong></h4>
          <ul itemscope="" itemtype="http://schema.org/ItemList">
            <li itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement" class="col-sm-4" style="float: left;">
              <meta itemprop="position" content="1">
              <a itemprop="url" class="_2TPj1HB4AMzPRjB65H7UfF" href="#">
                <span>Áo thun</span>
              </a>
            </li>

            <li itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement" class="col-sm-4" style="float: left;" >
              <meta itemprop="position" content="2">
              <a itemprop="url" class="_2TPj1HB4AMzPRjB65H7UfF" href="#">
                <span>Quần jean</span>
              </a>
            </li>

            <li itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement" class="col-sm-4" style="float: left;" >
              <meta itemprop="position" content="2">
              <a itemprop="url" class="_2TPj1HB4AMzPRjB65H7UfF" href="#">
                <span>Mũ lưỡi trai</span>
              </a>
            </li>

            <li itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement" class="col-sm-4" style="float: left;" >
              <meta itemprop="position" content="2">
              <a itemprop="url" class="_2TPj1HB4AMzPRjB65H7UfF" href="#">
                <span>Váy ngắn</span>
              </a>
            </li>

            <li itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement" class="col-sm-4" style="float: left;" >
              <meta itemprop="position" content="2">
              <a itemprop="url" class="_2TPj1HB4AMzPRjB65H7UfF" href="#">
                <span>Đầm</span>
              </a>
            </li>
            <li itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement" class="col-sm-4" style="float: left;" >
              <meta itemprop="position" content="2">
              <a itemprop="url" class="_2TPj1HB4AMzPRjB65H7UfF" href="#">
                <span>Giày adidas</span>
              </a>
            </li>
          </ul>
          <br>
          <br>
          <br>
        </div>
      </div>
    </div>

@endsection