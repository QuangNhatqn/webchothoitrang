@extends('admin.layout.index')

@section('content')
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      USERS
    </li>
    <li class="breadcrumb-item active">List</li>
  </ol>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
    Danh Sách USERS: </div>
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
            <th>Họ Tên</th>
            <th>Email</th>
            <th>SĐT</th>
            <th>Ngày tham gia</th>
            <th>Coin</th>
            <th>Phân quyền</th>
            <th>Delete</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>id</th>
            <th>Họ Tên</th>
            <th>Email</th>
            <th>SĐT</th>
            <th>Ngày tham gia</th>
            <th>Coin</th>
            <th>Phân quyền</th>
            <th>Delete</th>
            <th>Edit</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach($users as $tl)
          <tr>
            <td>{{$tl->id}}</td>
            <td>{{$tl->FullNames}}</td>
            <td>{{$tl->email}}</td>
            <td>{{$tl->PhoneNumbers}}</td>
            <td>{{$tl->ParticipateDates}}</td>
            <td>{{$tl->Coins}}</td>
            <td>
              @if ($tl->UserTypes == "1")
                {{'Admin'}}
                @else {{'Khách hàng'}}
              @endif
              {{-- {{$tl->UserTypes}} --}}
            </td>
            <td><a href="admin/users/xoa/{{$tl->id}}"><i class="far fa-trash-alt"></i>Delete</a></td>
            <td><a href="admin/users/sua/{{$tl->id}}"><i class="far fa-edit"></i>Edit</a></td>
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