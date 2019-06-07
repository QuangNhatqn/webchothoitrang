@extends('admin.layout.index')

@section('content')
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      POSTINGs
    </li>
    <li class="breadcrumb-item active">Duyệt tin</li>
  </ol>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
    Danh Sách Tin Cần Duyệt: </div>
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
            <th>Thời gian đăng</th>
            <th>Tin số</th>
            <th>Khách hàng</th>
            <th>Danh mục</th>
            <th>Phân loại 1</th>
            <th>Phân loại 2</th>
            <th>Địa chỉ</th>
            <th>Ảnh 1</th>
            <th>Ảnh 2</th>
            <th>Ảnh 3</th>
            <th>Giá</th>
            <th>Tình trạng</th>
            <th>Tiêu đề</th>
            <th>Chi Tiết</th>
            <th>Hình thức vận chuyển</th>
            <th>Trạng thái</th>
            <th>Hủy tin</th>
            <th>Duyệt</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Thời gian đăng</th>
            <th>Tin số</th>
            <th>Khách hàng</th>
            <th>Danh mục</th>
            <th>Phân loại 1</th>
            <th>Phân loại 2</th>
            <th>Địa chỉ</th>
            <th>Ảnh 1</th>
            <th>Ảnh 2</th>
            <th>Ảnh 3</th>
            <th>Giá</th>
            <th>Tình trạng</th>
            <th>Tiêu đề</th>
            <th>Chi Tiết</th>
            <th>Hình thức vận chuyển</th>
            <th>Trạng thái</th>
            <th>Hủy tin</th>
            <th>Duyệt</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach($postings as $pt)
          <tr>
            <td>{{$pt->PostTimes}}</td>
            <td>{{$pt->id}}</td>
            <td>{{$pt->users->FullNames}}</td>
            <td>{{$pt->Categorys}}</td>
            <td>{{$pt->Type1s}}</td>
            <td>{{$pt->Type2s}}</td>
            <td>{{$pt->Addresss}}</td>
            <td>{{$pt->URLImage1s}}
              <div><img width= "150" src="{{$pt->URLImage1s}}"></div>
            </td>
            <td>{{$pt->URLImage2s}}
              <div><img width= "150" src="{{$pt->URLImage2s}}"></div>
            </td>
            <td>{{$pt->URLImage3s}}
              <div><img width= "150" src="{{$pt->URLImage3s}}"></div>
            </td>
            <td>{{$pt->Costs}}</td>
            <td>{{$pt->Conditions}}</td>
            <td>{{$pt->Titles}}</td>
            <td>{{$pt->Details}}</td>
            <td>{{$pt->Transportations}}</td>
            
            <td>
              @if ($pt->Statuss == "1")
                {{'Chưa duyệt'}}
                @elseif ($pt->Statuss == "2") {{'Đã duyệt'}}
                @elseif ($pt->Statuss == "3") {{'Admin xóa'}}
                @else {{'Người dùng xóa'}}
              @endif</td>
            
            <td><a href="admin/postings/xoa/{{$pt->id}}"><i class="far fa-trash-alt"></i>Hủy tin</a></td>
            <td><a href="admin/postings/duyet/{{$pt->id}}"><i class="fas fa-check"></i></i>Duyệt</a></td>
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