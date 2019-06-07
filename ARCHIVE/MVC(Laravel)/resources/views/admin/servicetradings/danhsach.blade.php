@extends('admin.layout.index')

@section('content')
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      SERVICETRADINGs
    </li>
    <li class="breadcrumb-item active">List</li>
  </ol>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
    Danh Sách SERVICETRADINGs: </div>
    <div class="card-body">
      <div class="table-responsive">
       @if (session('thongbao'))
       <div class="alert alert-success">
        {{session('thongbao')}}
      </div>
      
      @endif
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>id</th>
            <th>Loại dịch vụ</th>
            <th>Thuộc danh mục</th>
            <th>Thời điểm giao dịch</th>
            <th>Thời điểm thực hiện</th>
            <th>Delete</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
           <th>id</th>
            <th>Loại dịch vụ</th>
            <th>Thuộc danh mục</th>
            <th>Thời điểm giao dịch</th>
            <th>Thời điểm thực hiện</th>
            <th>Delete</th>
            <th>Edit</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach($servicetradings as $st)
          <tr>
            <td>{{$st->id}}</td>
            <td>{{$st->services->Typess}}</td>
            <td>{{$st->postings->Categorys}}</td>
            <td>{{$st->TransactionTimes}}</td>
            <td>{{$st->ExecutionTimes}}</td>
            <td><a href="admin/servicetradings/xoa/{{$st->id}}"><i class="far fa-trash-alt"></i>Delete</a></td>
            <td><a href="admin/servicetradings/sua/{{$st->id}}"><i class="far fa-edit"></i>Edit</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
</div>

<p class="small text-center text-muted my-5">
  <!-- <em>More table examples coming soon...</em> -->
</p>

</div>
@endsection