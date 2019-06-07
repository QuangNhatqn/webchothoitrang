@extends('admin.layout.index')

@section('content')
<div style="margin:auto;">


  <div class="container _3vPfpZTga335-oo9VimH3A">

   <ol class="breadcrumb">
    <li class="breadcrumb-item">
      USERS
    </li>
    <li class="breadcrumb-item active">Edit</li>
  </li>
  <li class="breadcrumb-item active">{{$users->FullNames}}</li>
</ol>

<!-- react-empty: 1082 -->
<div style="margin: 1.5% 12.5%; border: 1px solid gray; padding: 30px;">
  <div class="_1usHJaFWWn4E6WcS4Kqg8c">
    <div class="_3zdnpg033Uf7k-qsiPg_NU">
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
      <form action="admin/users/sua/{{$users->id}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div style="display: block;">
          <p>Họ tên:<input type="text"  placeholder="Nhập họ tên.." name="hoten" style="border-top: none; display: block; width: 100%;" value="{{$users->FullNames}}"></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Email:<input type="text"  placeholder="Nhập Email.." name="email" style="border-top: none; display: block; width: 100%;" value="{{$users->Emails}}"></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Số điện thoại:<input type="tel"  placeholder="Nhập số điện thoại.." name="sdt" style="border-top: none; display: block; width: 100%;" value="{{$users->PhoneNumbers}}"></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Mật khẩu:<input type="password"  placeholder="Nhập mật khẩu.." name="pw" style="border-top: none; display: block; width: 100%;" value="{{$users->Passwords}}"></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Tài khoản tiền ảo:<input type="number"  placeholder="Nhập số tiền.." name="tien" style="border-top: none; display: block; width: 100%;" value="{{$users->Coins}}"></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Phân quyền:
          <select name="type" style="border-top: none; display: block; width: 100%;">
            <option value="1" @if ($users->UserTypes == 1)
              {{"selected"}}
            @endif>Admin</option>
            <option value="2"  @if ($users->UserTypes == 2)
              {{"selected"}}
            @endif>Khách hàng</option>
          </select>
          </p>
        </div>
        <br>

        <div class="footer navbar-fixed-bottom U4cU8fUjvSGZlKNVCbX8p">
          <div class="container" style="display: block;">
            
            <input class="btn btn-lg btn-primary btn-primary-customized btn-block" type="submit" value="Sửa">
            <input class="btn btn-lg btn-primary btn-primary-customized btn-block" type="reset" value="Làm mới">
            
          </div>
        </div>

      </form>

    </div>
  </div>
</div>
</div>
</div>
@endsection