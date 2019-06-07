@extends('customer.layout.index')

@section('content')

  <div style="margin:auto;">


  <div class="container _3vPfpZTga335-oo9VimH3A">

   <ol class="breadcrumb">
    <li class="breadcrumb-item">
      POSTINGs
    </li>
    <li class="breadcrumb-item active">Add</li>
  </ol>

@if(count($errors)>0)
      <div class="alert alert-danger">
        @foreach ($errors->all() as $err)
        {{$err}}<br>
        @endforeach
      </div>
      @endif

      @if (session('thongbao'))
        <div class="alert alert-success">
          {{session('thongbao')}}
        </div>
      @endif
  <!-- react-empty: 1082 -->
  <div style="margin: 1.5% 12.5%; border: 1px solid gray; padding: 30px;">
    <div class="_1usHJaFWWn4E6WcS4Kqg8c">
      <div class="_3zdnpg033Uf7k-qsiPg_NU">


        

       

        <form action="customer/dangtin/nhap/{{Auth::user()->id}}" method="POST">
         <input type="hidden" name="_token" value="{{csrf_token()}}">
         <div >
          <div style="display: block;">
            <p style="display: inline;">Danh mục:</p>
            <select name="danhmuc" id="" style="display: block; width: 100%; border-top: none;" required>
              <option value="Áo"
              >Áo</option>
              <option value="Quần"
              >Quần</option>
              <option value="Giày dép"
              >Giày dép</option>
              <option value="Mũ"
              >Mũ</option>
              <option value="Đầm xinh"
              >Đầm xinh</option>
              <option value="Phụ kiện khác"
             >Phụ kiện khác</option>
            </select>
          </div>
          <br>
         

      </div>
     

      <div >
        <div style="display: block;">
          <p style="display: inline;">Bạn đăng tin:</p>
          <select name="type1" id="" style="display: block; width: 100%; border-top: none;" required>
            <option value="Cần bán"
            >Cần bán</option>
            <option value="Cần mua"
           >Cần mua</option>
          </select>
        </div>
        <br>

        <div style="display: block;">
          <p style="display: inline;">Bạn là:</p>
          <select name="type2" id="" style="display: block; width: 100%; border-top: none;" required>
            <option value="Cá nhân"
            >Cá nhân</option>
            <option value="Bán chuyên"
            >Bán chuyên</option>
          </select>
        </div>
        <br>

         <div style="display: block;">
          <p>Up hình 1:<input type="file" name="hinh1" style="border-top: none; display: block; width: 100%;" value="" required></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Up hình 2:<input type="file" name="hinh2" style="border-top: none; display: block; width: 100%;" value=""></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Up hình 3:<input type="file" name="hinh3" style="border-top: none; display: block; width: 100%;" value=""></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Địa chỉ liên lạc:<input type="text"  placeholder="Nhập địa chỉ.." name="diachi" style="border-top: none; display: block; width: 100%;" value="" required minlength="4" maxlength="200"></p>
        </div>
        <br>

       

        <div style="display: block;">
          <p>Giá:<input type="number"  placeholder="Nhập giá bán.." name="gia" style="border-top: none; display: block; width: 100%;" value="" required min="1000"></p>
        </div>
        <br>

        <div style="display: block;">
          <p style="display: inline;">Tình trạng:</p>
          <select name="tinhtrang" id="" style="display: block; width: 100%; border-top: none;" required>
            <option value="Mới"
           >Mới</option>
            <option value="Đã sử dụng"
            >Đã sử dụng</option>
          </select>
        </div>
        <br>

        <div style="display: block;">
          <p>Tiêu đề:<input type="text"  placeholder="Nhập tiêu đề.." name="tieude" style="border-top: none; display: block; width: 100%;" value="" required minlength="3" maxlength="100"></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Mô tả chi tiết:<input type="text" style="height: 100px; width: 100%; display: block;" placeholder="Nhập mô tả.." name="mota" style="border-top: none; display: block; width: 100%;" value="" required minlength=10></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Giao nhận:<input type="text"  placeholder="Nhập hình thức giao nhận.." name="giaonhan" style="border-top: none; display: block; width: 100%;" value="" required minlength="3" maxlength="100"></p>
        </div>
        <br>
      </div>

       <div class="footer navbar-fixed-bottom U4cU8fUjvSGZlKNVCbX8p">
            <div class="container" style="display: block;">

              <input class="btn btn-lg btn-primary btn-primary-customized " type="submit" value="Thêm" style="width: 48%; display: inline;">
              &nbsp
              <input class="btn btn-lg btn-primary btn-primary-customized btn-block" type="reset" value="Làm mới" style="width: 48%; display: inline;">

            </div>
          </div>
          <br>
        </form>


    </div>
  </div>
</div>

  <!-- Page Content -->
    
@endsection