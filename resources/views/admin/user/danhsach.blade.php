@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Người Dùng
                    <small>Danh Sách</small>
                </h1>
                @include('admin.layouts.message');
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>Liên Hệ</th>
                        <th>Di Động</th>
                        <th>Ngày Tạo</th>
                        <th>Vai trò</th>
                        <th>Quyền</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1
                    ?>
                    @foreach($user as $us)
                    <tr class="odd gradeX" align="center">
                        <td>{{$i++}}</td>
                        <td>{{$us->name}}</td>
                        <td>{{$us->email}}</td>
                        <td>{{$us->u_lienhe}}</td>
                        <td>{{$us->u_didong}}</td>
                        <td>{{formatDateVn($us->created_at)}}</td>
                        <th>
                            <p>
                                @foreach($us->roles->pluck('name') as $role)
                                {{$role}}
                                @endforeach

                            </p>
                        </th>
                        <th>
                            @foreach($us->getAllPermissions() as $pe)
                            {{$pe->name}},
                            @endforeach
                        </th>
                        <td class="center">
                            <div class="d-flex">
                                <button class="btn btn-danger mr-1"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/{{$us->id}}" style="color:black">Delete</a></button>
                                <button class="btn btn-info"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/{{$us->id}}" style="color:black">Edit</a></button>
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