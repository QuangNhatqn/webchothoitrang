@extends('customer.layout.index')

@section('content')
  <div class="container" style="width: 50%">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Đăng nhập</div>
      <div class="card-body">

        @if(count($errors)>0)
      <div class="alert alert-danger">
        @foreach ($errors->all() as $err)
        {{$err}}<br>
        @endforeach
      </div>
      @endif

      @if (session('thongbao'))
       <div class="alert alert-danger">
          {{session('thongbao')}}
        </div>
      @endif

        <form action="customer/dangnhap" method="POST">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <div class="form-label-group">
              <p>Email:<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" name="em"></p>
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <p>Mật khẩu:<input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="pw" minlength="3" maxlength="32"></p>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Nhớ mật khẩu
              </label>
            </div>
          </div>
           <input class="btn btn-primary btn-block" type="submit" name="" value="Đăng nhập">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" >Đăng kí tài khoản</a>
          <a class="d-block small" >Quên mật khẩu?</a>
        </div>
      </div>
    </div>
  </div>
  <br><br> 
@endsection