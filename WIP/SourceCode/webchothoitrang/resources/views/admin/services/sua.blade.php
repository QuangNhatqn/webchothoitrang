@extends('admin.layout.index')

@section('content')
<div style="margin:auto;">


  <div class="container _3vPfpZTga335-oo9VimH3A">

   <ol class="breadcrumb">
    <li class="breadcrumb-item">
      SERVICESs
    </li>
    <li class="breadcrumb-item active">Edit</li>
  </li>
  <li class="breadcrumb-item active">{{$services->Typess}}</li>
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
      <form action="admin/services/sua/{{$services->id}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div style="display: block;">
          <p>Loại dịch vụ:<input type="text"  placeholder="Nhập tên loại dịch vụ.." name="loaidv" style="border-top: none; display: block; width: 100%;" value="{{$services->Typess}}" required maxlength="100" minlength="3"></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Giá dịch vụ:<input type="number"  placeholder="Nhập số tiền.." name="gia" style="border-top: none; display: block; width: 100%;" value="{{$services->ServiceCosts}}" required min="1000" max="500000"></p>
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