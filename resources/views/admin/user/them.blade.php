@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Người Dùng
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('admin.layouts.error');
                <form action="admin/user/them" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Nhập tên người dùng" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Nhập email" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Mật khẩu" />
                    </div>
                    <div class="form-group">
                        <label>Nhập Lại Password</label>
                        <input type="password" class="form-control" name="password_again" placeholder="Nhập lại mật khẩu" />
                    </div>
                    <div class="form-group">
                        <label>liên hệ</label>
                        <input type="text" class="form-control" name="lienhe" placeholder="liên hệ" />
                    </div>
                    <div class="form-group">
                        <label>di động</label>
                        <input type="text" class="form-control" name="didong" placeholder="di động" />
                    </div>
                    <!-- <div class="form-group">
                        <label>quyền</label>
                        <select name="quyen" id="" class="form-control">
                            <option value="3">người dùng</option>
                            <option value="2">admin</option>
                            <option value="1">super admin</option>
                        </select>
                    </div> -->
                    <button type="submit" class="btn btn-default">Thêm</button>
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