@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Người dùng
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('admin.layouts.error');
                @include('admin.layouts.message');
                <form action="admin/user/sua/{{$user->id}}" method="POST">
                     @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" value="{{$user->name}}" class="form-control" name="name" placeholder="Nhập tên người dùng" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="changePassword" id="changePassword">
                        <label>Đổi Password</label>
                        <input type="password" value="{{$user->password}}" class="form-control password" name="password" placeholder="Mật khẩu" disabled="" />
                    </div>
                    <div class="form-group">
                        <label>Nhập Lại Password</label>
                        <input type="password" class="form-control  password" name="password_again" placeholder="Nhập lại mật khẩu" disabled="" />
                    </div>
                    <div class="form-group">
                        <label>quyền</label>
                        <select name="quyen" id="" class="form-control">
                            <option value="3">người dùng</option>
                            <option value="2">admin</option>
                            <option value="1">super admin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm Mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
@section('script')
    <script>
        $(document).ready(function(){
           $("#changePassword").change(function() {
               if($(this).is(":checked"))
               {
                    $(".password").removeAttr('disabled');
               }else{
                    $(".password").attr('disabled','');
               }
           });
        });
    </script>
@endsection