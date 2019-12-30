@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Loại Sản Phẩm
                    <small>{{$tinrao->c_tieude}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @include('admin.layouts.error')
                @include('admin.layouts.message')
            <form action="admin/tinraomua/sua/{{$tinrao->id  }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên tin rao/label>
                    <input class="form-control" name="ten" value="{{$tinrao->c_tieude}}" readonly />
                    </div>
                    <div class="form-group">
                         <label>Hoạt động</label>
                         <label class="radio-inline">
                             <input name="hoatdong" value="1" type="radio" @if($tinrao->c_hoatdong==1)
                            {{"checked"}}
                            @endif
                         >public
                         </label>
                         <label class="radio-inline">
                             <input name="hoatdong" value="0" type="radio"  @if($tinrao->c_hoatdong==0)
                            {{"checked"}}
                            @endif
                         >private
                         </label>
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