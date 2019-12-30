@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Tức
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                @include('admin.layouts.error')
                @include('admin.layouts.message')
                <form action="admin/tintuc/them" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select name="danhmuc" class="form-control">
                        <?php
                            danhmuc_prent($danhmuc)
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên Tin Tức</label>
                        <input class="form-control" type="text" name="ten" placeholder="Tên tin tức" />
                    </div>
                    <div class="form-group">
                        <label>Ảnh</label>
                        <input class="form-control"  type="file" name="anh" placeholder="ảnh tin tức" />
                    </div>
                    <div class="form-group">
                        <label>Mô tả ngắn</label>
                        <input class="form-control"  type="text" name="motangan" placeholder="mô tả ngắn tin tức" />
                    </div>
                     <div class="form-group">
                        <label>Nội Dung</label>
                        <textarea  id="demo" class="form-control ckeditor" name="mota" placeholder="">
                        </textarea>
                    </div> 
                    <div class="form-group">
                         <label>Hoạt động</label>
                         <label class="radio-inline">
                             <input name="hoatdong" value="1" checked="" type="radio">public
                         </label>
                         <label class="radio-inline">
                             <input name="hoatdong" value="0" type="radio">private
                         </label>
                    </div>
                    <div class="form-group">
                         <label>Trạng thái</label>
                         <label class="radio-inline">
                             <input name="trangthai" value="1"  type="radio">hiện trang chủ
                         </label>
                         <label class="radio-inline">
                             <input name="trangthai" value="0" checked="" type="radio">không hiện trang chủ
                         </label>
                    </div>
                    <div class="form-group">
                         <label>Nổi bật</label>
                         <label class="radio-inline">
                             <input name="noibat" value="1"  type="radio">có
                         </label>
                         <label class="radio-inline">
                             <input name="noibat" value="0" checked="" type="radio">không
                         </label>
                    </div>
                    <div class="form-group">
                        <label>Link bài viết</label>
                        <input class="form-control"  type="text" name="link" placeholder="link tin tức" />
                    </div>
                    <div class="form-group">
                        <label>Người đăng</label>
                        <input class="form-control"  type="text" name="nguoidang" placeholder="link tin tức" />
                    </div>
            <button type="submit" class="btn btn-default">Thêm Tin</button>
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