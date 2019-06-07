@extends('admin.layout.index')

@section('content')
<div style="margin:auto;">


  <div class="container _3vPfpZTga335-oo9VimH3A">

   <ol class="breadcrumb">
    <li class="breadcrumb-item">
      SERVICETRADINGs
    </li>
    <li class="breadcrumb-item active">Edit</li>
  </li>
  <li class="breadcrumb-item active">Giao dịch số:{{$servicetradings->id}}</li>
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
       @if (session('errors1'))
        <div class="alert alert-danger">
          {{session('errors1')}}
        </div>
        
      @endif
      <form action="admin/servicetradings/sua/{{$servicetradings->id}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        
        <div style="display: block;">
          <p>Loại dịch vụ:<input type="text" name="loaidv" style="border-top: none; display: block; width: 100%;" value="{{$servicetradings->services->Typess}}" readonly></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Thuộc danh mục:<input type="text" name="danhmuc" style="border-top: none; display: block; width: 100%;" value="{{$servicetradings->postings->Categorys}}" readonly></p>
        </div>
        <br>

        <div style="display: block;">
          <p>Thời điểm giao dịch:<input type="datetime" name="tdgd" style="border-top: none; display: block; width: 100%;" value="{{$servicetradings->TransactionTimes}}" readonly></p>
        </div>
        <br>

        <div style="background-color: #bfff00;">
         <div style="display: block;">
          <p>Thời điểm thực hiện:<input type="datetime" name="tdth" style="border-top: none; display: block; width: 100%;" value="{{$servicetradings->ExecutionTimes}}" required></p>
        </div>
        <br>

        <div class="footer navbar-fixed-bottom U4cU8fUjvSGZlKNVCbX8p">
          <div class="container" style="display: block;">
            
            <input class="btn btn-lg btn-primary btn-primary-customized btn-block" type="submit" value="Sửa">
            <input class="btn btn-lg btn-primary btn-primary-customized btn-block" type="reset" value="Làm mới">
            
          </div>
        </div>
        </div>

      </form>

    </div>
  </div>
</div>
</div>
</div>
@endsection