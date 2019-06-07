
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #FF6347">
  <div class="container">
    <a class="navbar-brand" href="customer/trangchu/trangchu">Chợ Thời Trang</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="customer/timkiem/danhsach"><i class="fas fa-search"></i></i>Tìm Kiếm
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer/dangnhap"><i class="fas fa-sign-in-alt"></i>Đăng Nhập</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="@if (Auth::user())customer/trangcanhan/thongtin/{{Auth::user()->id}}@else customer/dangnhap @endif"><i class="far fa-user"></i>Cá nhân</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customer/dangtin/nhap"><i class="fas fa-chevron-circle-up"></i>Đăng tin</a>
        </li>
        @if (Auth::user())
          <li class="nav-item">
          <a class="nav-link" href="customer/logout"><i class="fas fa-sign-out-alt"></i></i>Đăng xuất</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>