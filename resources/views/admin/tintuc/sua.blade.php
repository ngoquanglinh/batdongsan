@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="">Tin tức
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('admin.layouts.error')
                @include('admin.layouts.message')
                <form action="admin/tintuc/sua/{{$tintuc->id}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!--  -->
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select name="danhmuc" class="form-control">
                            <option value="{{$tintuc->t_iddanhmuc}}">{{$tintuc->danhmuc->d_tendanhmuc}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên Tin Tức</label>
                        <input class="form-control" type="text" name="ten" placeholder="Tên tin tức" value="{{$tintuc->t_tentintuc}}" />
                    </div>
                    <div class="form-group">
                        <label>Ảnh</label>
                        <img src="assets/uploads/images/{{$tintuc->t_hinhanh}}" width="100px" height="100px;" alt=""><br>
                        <input class="form-control" type="file" name="anh" placeholder="ảnh tin tức" />
                    </div>
                    <div class="form-group">
                        <label>Mô tả ngắn</label>
                        <input class="form-control" type="text" name="motangan" value="{{$tintuc->t_motangan}}" />
                    </div>
                    <div class="form-group">
                        <label>Nội Dung</label>
                        <textarea id="demo" class="form-control ckeditor" name="mota" value="{!!$tintuc->t_mota!!}">
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label>Link bài viết</label>
                        <input class="form-control" type="text" name="link" value="{{$tintuc->t_nguontin}}" />
                    </div>
                    <div class="form-group">
                        <label>Người đăng</label>
                        <input class="form-control" type="text" name="nguoidang" value="{{$tintuc->t_nguoidang}}" />
                    </div>
                    <div class="form-group">
                        <label>Hoạt động</label>
                        <label class="radio-inline">
                            <input name="hoatdong" value="1" type="radio" @if($tintuc->t_hoatdong==1)
                            {{"checked"}}
                            @endif
                            >public
                        </label>
                        <label class="radio-inline">
                            <input name="hoatdong" value="0" type="radio" @if($tintuc->t_hoatdong==0)
                            {{"checked"}}
                            @endif
                            >private
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <label class="radio-inline">
                            <input name="trangthai" value="1" type="radio" @if($tintuc->t_hoatdong==1)
                            {{"checked"}}
                            @endif
                            >Hiện trang chủ
                        </label>
                        <label class="radio-inline">
                            <input name="trangthai" value="0" checked="" type="radio" @if($tintuc->t_hoatdong==0)
                            {{"checked"}}
                            @endif
                            >không hiện trang chủ
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Nổi bật</label>
                        <label class="radio-inline">
                            <input name="noibat" value="1" type="radio" @if($tintuc->t_hoatdong==1)
                            {{"checked"}}
                            @endif
                            >Nổi bật
                        </label>
                        <label class="radio-inline">
                            <input name="noibat" value="0" checked="" type="radio" @if($tintuc->t_hoatdong==0)
                            {{"checked"}}
                            @endif
                            >Không Nổi bật
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa Sản Phẩm</button>
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