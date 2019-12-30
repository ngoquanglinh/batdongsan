@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dự Án
                    <small>Danh Sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @include('admin.layouts.message');
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên Dự Án</th></th>
                        <th>Ảnh Dự Án</th></th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1;
                    ?>
                    @foreach($duan as $da)
                    <tr class="odd gradeX" align="center">
                        <td>{{$i++}}</td>
                        <td>{{$da->d_tenduan}}</td>
                        <td><img src="assets/uploads/images/{{$da->d_anh}}" alt="" style="width:233px;height:155px"></td>
                        <td class="center">
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/duan/xoa/{{$da->id}}"  style="color:black"> Delete</a></button></td>
                    <td class="center"><button type="button" class="btn btn-info"><i class="fa fa-pencil fa-fw"></i> <a href="admin/duan/sua/{{$da->id}}" style="color:black">Edit</a></button></td>
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