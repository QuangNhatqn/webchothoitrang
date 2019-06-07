@extends('admin.layout.index')

@section('content')
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      SERVICESs
    </li>
    <li class="breadcrumb-item active">List</li>
  </ol>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
    Danh Sách SERVICESs: </div>
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
            <th>Giá dịch vụ</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>id</th>
            <th>Loại dịch vụ</th>
            <th>Giá dịch vụ</th>
            <th>Edit</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach($services as $sv)
          <tr>
            <td>{{$sv->id}}</td>
            <td>{{$sv->Typess}}</td>
            <td>{{$sv->ServiceCosts}}</td>
           <td><a href="admin/services/sua/{{$sv->id}}"><i class="far fa-edit"></i>Edit</a></td>
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