@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin rao mua
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @include('admin.layouts.message')
            @include('admin.layouts.error');
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Hình Thức</th>
                        </th>
                        <th>Loại bất động sản</th>
                        </th>
                        <th>Tên bất động sản</th>
                        </th>
                        <th>Địa chỉ</th>
                        </th>
                        <th>Tên Dự Án</th>
                        </th>
                        <th>Ngày đăng</th>
                        </th>
                        <th>Người đăng</th>
                        </th>
                        <th>Trạng thái</th>
                        </th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    ?>
                    @foreach($tinrao as $tr)
                    <tr class="odd gradeX" align="center">
                        <td>{{$i++}}</td>
                        <td>{{$tr->hinhthuc->d_tendanhmuc}}</td>
                        <td>{{$tr->loaibds->d_tendanhmuc}}</td>
                        <td>{{$tr->c_tieude}}</td>
                        <td>{{$tr->c_diachi}}</td>
                        @if($tr->d_idduan != '')
                        <td>{{$tr->duan->d_tenduan}}</td>
                        @else
                        <td>không thuộc dự án nào</td>
                        @endif
                        <td>{{formatDateVN($tr->created_at)}}</td>
                        <td>{{$tr->khachhang->name}}</td>
                        <td>@if($tr->c_hoatdong==0)
                            <span class='label label-success'>Private</span>
                            @else <span class="label label-primary">Public</span>
                            @endif</td>
                        <td class="center">
                            <div class="d-flex">
                                @can('delete')
                                <button type="button" class="btn btn-danger mr-1"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/tinraonua/xoa/{{$tr->id}}" style="color:black"> Delete</a></button>
                                @endcan
                                @can('edit')
                                <button type="button" class="btn btn-info"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tinraomua/sua/{{$tr->id}}" style="color:black">Edit</a></button>
                                @endcan
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection