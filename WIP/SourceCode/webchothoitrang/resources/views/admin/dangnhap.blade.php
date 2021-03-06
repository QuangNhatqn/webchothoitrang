<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chợ Thời Trang Admin - Login</title>
    <base href="{{asset('')}}">

    <!-- Bootstrap core CSS-->
    <link href="admin_asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 -->
    <!-- Custom styles for this template-->
    <link href="admin_asset/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
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
          <form action="admin/dangnhap" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Nhập Email" required="required" autofocus="autofocus" name="em">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="pw">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            {{-- <a class="btn btn-primary btn-block" type="submit">Login</a> --}}
            <input class="btn btn-primary btn-block" type="submit" name="" value="Login">
          </form>
         {{--  <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div> --}}
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin_asset/vendor/jquery/jquery.min.js"></script>
    <script src="admin_asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin_asset/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
