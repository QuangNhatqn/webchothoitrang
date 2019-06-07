@extends('admin.layout.index')

@section('content')
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      COINTRADINGs
    </li>
    <li class="breadcrumb-item active">List</li>
  </ol>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
    Danh Sách COINTRADINGs:</div>
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
              <th>ID</th>
              <th>Khách hàng</th>
              <th>Số tiền giao dịch</th>
              <th>Thời gian giao dịch</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Khách hàng</th>
              <th>Số tiền giao dịch</th>
              <th>Thời gian giao dịch</th>
              <th>Delete</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($cointradings as $ct)
            <tr>
              <td>{{$ct->id}}</td>
              <td>{{$ct->users->FullNames}}</td>
              <td>{{$ct->Valuess}}</td>
              <td>{{$ct->TransactionTimes}}</td>
              <td><a href="admin/cointradings/xoa/{{$ct->id}}"><i class="far fa-trash-alt"></i>Delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    {{-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> --}}
  </div>

  <p class="small text-center text-muted my-5">
    {{-- <em>More table examples coming soon...</em> --}}
  </p>

</div>
@endsection