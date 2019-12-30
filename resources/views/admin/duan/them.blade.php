@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dự Án
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('admin.layouts.error');
                @include('admin.layouts.message');
                @if(session('loi'))
                    <div class="alert alert-success">
                        {{session('loi')}}
                    </div>
                @endif
                <form action="admin/duan/them" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Danh mục cha</label>
                        <select class="form-control" name="danhmuc" selected>
                           @foreach($danhmuc as $dm)
                            <option value="{{$dm->id}}">{{$dm->d_tendanhmuc}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên dự án</label>
                        <input class="form-control" name="tenduan" placeholder="Nhập tên dự án..." value="{{ old('tenduan') }}"/>
                    </div> 
                    <div class="form-group">
                        <label>Tỉnh</label>
                        <select class="form-control" name="tinh" selected id="province" value="{{ old('tinh') }}">
                           @foreach($tinh as $t)
                            <option value="{{$t->id}}">{{$t->name}}</option>
                            @endforeach
                        </select>
                    </div> 
                    <div class="form-group">
                        <label>Huyện</label>
                        <select class="form-control" name="huyen" id="district" value="{{ old('huyen') }}">
                            <option value="">-- Phường/xã --</option>
                        </select>
                    </div>  
                    <div class="form-group">
                        <label>Xã</label>
                        <select  name="xaduan" id="ward" class="form-control" value="{{ old('xa') }}">
                            <option value="">-- Phường/xã --</option>
                        </select>
                    </div> 
                    <div class="form-group">
                        <label>Đường</label>
                        <input class="form-control" name="duong" placeholder="Nhập đường dự án..." value="{{ old('duong') }}"/>
                    </div> 
                    <div class="form-group">
                        <label>Giá</label>
                        <input class="form-control" name="giaduan" placeholder="Nhập giá dự án..." value="{{ old('giaduan') }}"/>
                    </div> 
                    <div class="form-group">
                        <label>Ảnh</label>
                        <input class="form-control"  type="file" name="anh" placeholder="ảnh dự án" value="{{ old('anh') }}"/>
                    </div>
                    <div class="form-group">
                        <label>Thông tin dự án</label>
                        <textarea  id="demo" class="form-control ckeditor" name="motaduan" placeholder="thông tin dự án" row="6" value="{{ old('motaduan') }}">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Chủ đầu tư</label>
                        <input class="form-control" name="chuduan" placeholder="chủ đầu tư dự án..." value="{{ old('chuduan') }}"/>
                    </div> 
                    <div class="form-group">
                        <label>Tổng diện tích</label>
                        <input class="form-control" name="dientichduan" placeholder="diện tích dự án..." value="{{ old('dientichduan') }}"/>
                    </div> 
                    <div class="form-group">
                        <label>Quy mô dự án</label>
                        <input class="form-control" name="quymoduan" placeholder="quy mô dự án..." value="{{ old('quymoduan') }}"/>
                    </div> 
                    <div class="form-group">
                        <label>Bàn giao nhà</label>
                        <input class="form-control" name="bangiaonha" placeholder="bàn giao nhà..." value="{{ old('bangiaonha') }}"/>
                    </div> 
                    <div class="form-group">
                         <label>Trạng thái</label>
                         <label class="radio-inline">
                             <input name="trangthai" value="1" checked="" type="radio">Hiển thị trang chủ
                         </label>
                         <label class="radio-inline">
                             <input name="trangthai" value="0" type="radio">Không hiển thị
                         </label>
                    </div>
                    <div class="form-group">
                         <label>hoạt động</label>
                         <label class="radio-inline">
                             <input name="hoatdong" value="1" checked="" type="radio">public
                         </label>
                         <label class="radio-inline">
                             <input name="hoatdong" value="0" type="radio">private
                         </label>
                    </div>
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