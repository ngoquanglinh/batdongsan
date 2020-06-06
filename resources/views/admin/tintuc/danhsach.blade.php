@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between align-content-center mt-3">
                    <h3>Tin Tức
                        <small>Danh Sách</small>
                    </h3>
                </div>
            </div>
            @include('admin.layouts.error')
            @include('admin.layouts.message')
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên tin tức</th>
                        <th>Ảnh</th>
                        <th>Người đăng</th>
                        <th>Ngày đăng</th>
                        <th>Hoạt Động</th>
                        <th>Lượt xem</th>
                        <th>Loại tin</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    ?>
                    @foreach($tintuc as $tt)
                    <tr class="odd gradeX" align="center">
                        <td>{{$i++}}</td>
                        <td>{{$tt->t_tentintuc}}</td>
                        <td><img src="assets/uploads/images/{{$tt->t_hinhanh}}" width="50px" height="50px" alt=""></td>
                        <td>{{$tt->t_nguoidang}}</td>
                        <td>{{formatDateVN($tt->created_at)}}</td>

                        <td>@if($tt->t_hoatdong==1)
                            {{"public"}}
                            @else
                            {{"private"}}
                            @endif
                        </td>
                        <td>{{$tt->t_luotxem}}</td>
                        <td>{{$tt->danhmuc->d_tendanhmuc}}</td>
                        <td class="center">
                            <div class="d-flex">
                                @can('delete')
                                <button type="button" class="btn btn-danger mr-1"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/tintuc/xoa/{{$tt->id}}" style="color:black">Delete</a></button>
                                @endcan
                                @can('edit')
                                <button type="button" class="btn btn-info"><i class="fa fa-pencil fa-fw"> </i><a href="admin/tintuc/sua/{{$tt->id}}" style="color:black">Edit</a></button></div>
                            @endcan
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