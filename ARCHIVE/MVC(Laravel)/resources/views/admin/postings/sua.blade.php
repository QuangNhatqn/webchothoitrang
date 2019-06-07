@extends('admin.layout.index')

@section('content')
<div style="margin:auto;">


  <div class="container _3vPfpZTga335-oo9VimH3A">

   <ol class="breadcrumb">
    <li class="breadcrumb-item">
      POSTINGs
    </li>
    <li class="breadcrumb-item active">Edit</li>
  </ol>

  @if (session('thongbao'))
        <div class="alert alert-success">
          {{session('thongbao')}}
        </div>
        
      @endif
  <!-- react-empty: 1082 -->
  <div style="margin: 1.5% 12.5%; border: 1px solid gray; padding: 30px;">
    <div class="_1usHJaFWWn4E6WcS4Kqg8c">
      <div class="_3zdnpg033Uf7k-qsiPg_NU">


        <div style="display: block;">
          <p>Tin số:<input type="number"  placeholder="Nhập số tiền.." name="id" style="border-top: none; display: block; width: 100%;" value="{{$postings->id}}" disabled="disabled"></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Khách hàng:<input type="text"  placeholder="Nhập họ tên.." name="hoten" style="border-top: none; display: block; width: 100%;" value="{{$postings->users->FullNames}}" disabled="disabled"></p>
        </div>
        <br>

        <form action="admin/postings/sua/{{$postings->id}}" method="POST">
         <input type="hidden" name="_token" value="{{csrf_token()}}">
         <div style="background-color:   #bfff00;">
          <div style="display: block;">
            <p style="display: inline;">Danh mục:</p>
            <select name="danhmuc" id="" style="display: block; width: 100%; border-top: none;" >
              <option value="Áo"
              @if ($postings->Categorys == "Áo")
              {{"selected"}}
              @endif>Áo</option>
              <option value="Quần"
              @if ($postings->Categorys == "Quần")
              {{"selected"}}
              @endif>Quần</option>
              <option value="Giày dép"
              @if ($postings->Categorys == "Giày dép")
              {{"selected"}}
              @endif>Giày dép</option>
              <option value="Mũ"
              @if ($postings->Categorys == "Mũ")
              {{"selected"}}
              @endif>Mũ</option>
              <option value="Đầm xinh"
              @if ($postings->Categorys == "Đầm xinh")
              {{"selected"}}
              @endif>Đầm xinh</option>
              <option value="Phụ kiện khác"
              @if ($postings->Categorys == "Phụ kiện khác")
              {{"selected"}}
              @endif>Phụ kiện khác</option>
            </select>
          </div>
          <br>
          <div class="footer navbar-fixed-bottom U4cU8fUjvSGZlKNVCbX8p">
            <div class="container" style="display: block;">

              <input class="btn btn-lg btn-primary btn-primary-customized " type="submit" value="Sửa" style="width: 48%; display: inline;">
              &nbsp
              <input class="btn btn-lg btn-primary btn-primary-customized btn-block" type="reset" value="Làm mới" style="width: 48%; display: inline;">

            </div>
          </div>
          <br>
        </form>

      </div>
      <div><button style="margin: 30px; border-radius: 5px; display: block; width: 30%;" onclick="document.getElementById('xemthem').style.display='block'">Xem thêm thông tin <i class="fas fa-caret-down"></i></button></div>

      <div id = "xemthem" style="display: none;">
        <div style="display: block;">
          <p style="display: inline;">Bạn đăng tin:</p>
          <select name="type1" id="" style="display: block; width: 100%; border-top: none;" disabled="disabled">
            <option value="Cần bán"
            @if ($postings->Type1s == "Cần bán")
            {{"selected"}}
            @endif>Cần bán</option>
            <option value="Cần mua"
            @if ($postings->Type1s == "Cần mua")
            {{"selected"}}
            @endif>Cần mua</option>
          </select>
        </div>
        <br>

        <div style="display: block;">
          <p style="display: inline;">Bạn là:</p>
          <select name="type2" id="" style="display: block; width: 100%; border-top: none;" disabled="disabled">
            <option value="Cá nhân"
            @if ($postings->Type2s == "Cá nhân")
            {{"selected"}}
            @endif>Cá nhân</option>
            <option value="Bán chuyên"
            @if ($postings->Type2s == "Bán chuyên")
            {{"selected"}}
            @endif>Bán chuyên</option>
          </select>
        </div>
        <br>

        <div style="display: block;">
          <p>Địa chỉ liên lạc:<input type="text"  placeholder="Nhập địa chỉ.." name="diachi" style="border-top: none; display: block; width: 100%;" value="{{$postings->Addresss}}" disabled="disabled"></p>
        </div>
        <br>

        <div style="display: block;">
          <div style="display: inline;">
            <p>Ảnh 1:</p>
            <img src="{{$postings->URLImage1s}}" width="200" height="150">
          </div>
          <div  style="display: inline;">
            <p>Ảnh 2:</p>
            <img src="{{$postings->URLImage2s}}" width="200" height="150">
          </div>
          <div  style="display: inline;">
            <p>Ảnh 3:</p>
            <img src="{{$postings->URLImage3s}}" width="200" height="150">
          </div>
        </div>

        <div style="display: block;">
          <p>Giá:<input type="number"  placeholder="Nhập giá bán.." name="gia" style="border-top: none; display: block; width: 100%;" value="{{$postings->Costs}}" disabled="disabled"></p>
        </div>
        <br>

        <div style="display: block;">
          <p style="display: inline;">Tình trạng:</p>
          <select name="tinhtrang" id="" style="display: block; width: 100%; border-top: none;" disabled="disabled">
            <option value="Mới"
            @if ($postings->Conditions == "Mới")
            {{"selected"}}
            @endif>Mới</option>
            <option value="Đã sử dụng"
            @if ($postings->Conditions == "Đã sử dụng")
            {{"selected"}}
            @endif>Đã sử dụng</option>
          </select>
        </div>
        <br>

        <div style="display: block;">
          <p>Tiêu đề:<input type="text"  placeholder="Nhập tiêu đề.." name="tieude" style="border-top: none; display: block; width: 100%;" value="{{$postings->Titles}}" disabled="disabled"></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Mô tả chi tiết:<input type="text" style="height: 100px; width: 100%; display: block;" placeholder="Nhập mô tả.." name="mota" style="border-top: none; display: block; width: 100%;" value="{{$postings->Details}}" disabled="disabled"></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Giao nhận:<input type="text"  placeholder="Nhập hình thức giao nhận.." name="giaonhan" style="border-top: none; display: block; width: 100%;" value="{{$postings->Transportations}}" disabled="disabled"></p>
        </div>
        <br>
      </div>


    </div>
  </div>
</div>
</div>
</div>
@endsection