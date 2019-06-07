<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Customer - Chợ Thời Trang</title>
  <base href="{{asset('')}}">

  <!-- Bootstrap core CSS -->
  <link href="customer_asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="customer_asset/css/shop-homepage.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!--them-->
  <style>
  .tendexuat{
    color: inherit;
    text-decoration: unset;
    background-color: transparent;
    text-align: center;

  }
  
  .khung{
    display: -webkit-box; 
    width: 100%;
    overflow-x: auto;
    padding: 15px 15px;
    border: 1px solid #cacaca;
  }
  .dexuat{
    font-family: Helvetica;
    font-size: 20px;
    color: #9b9b9b;
    text-align: left;
    margin: 0;
    line-height: 20px;
    font-weight: 500;
    display: block;
    margin-block-start: 1.33em;
    margin-block-end: 1.33em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    

    
  }
  .khungdexuat1{
    list-style-type: none;
    width: max-content;
    height: 100%;
    border: 0;
    display: -webkit-box;
    overflow-x: unset;
    box-sizing: border-box;
    pointer-events: initial;
    list-style: none;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
    font-family: Verdana,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857;
    color: #333;
  }
  .khungdexuat2{
    cursor: pointer;
    text-align: center;
    background: #eaeaea;
    border-radius: 100px;
    font-size: 14px;
    font-family: Helvetica;
    height: 20px;
    line-height: 20px;
    display: flex;
  }
}
.thongtin{
  color: #999999;
  position: relative;
  font-size: 11px;  
}
.thongtin1{
  display: inline-block;
  margin: 0;
  background-color: transparent;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  padding: 0;
  max-width: calc(100% - 35px);
}
.thongtin2{
  text-transform: capitalize;
  max-width: 270px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  font-size: 12px;

}
.label{
  background-color: rgb(245, 154, 0);
  border-color: rgb(245, 154, 0);
  color: rgb(255, 255, 255);
  right: -30px;
  position: absolute;
  display: block;
  padding: 0 30px;
  text-align: center;
  text-transform: uppercase;
  font-weight: bold;
  z-index: 9;
  height: 40px;
  line-height: 55px;
  top: -15px;
  font-size: 12px;
  transform: rotate(45deg);
  font-family: Verdana,Arial,sans-serif;
  
</style>

</head>

<body>
<!-- Navigation -->
 @include('customer.layout.header')

<!-- Page Content -->
@yield('content')

  <!-- /.container -->

  <!-- Footer -->
 
 @include('customer.layout.footer')
  <!-- Bootstrap core JavaScript -->
  <script src="customer_asset/vendor/jquery/jquery.min.js"></script>
  <script src="customer_asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  @yield('script')

</body>

</html>
