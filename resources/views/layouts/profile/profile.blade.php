@extends('layouts.trangcanhan')
@section('trangcanhan')
<p class="ml-2 mt-2">sửa thông tin</p>
<div class="row">
    <div class="col-6">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <form action="trang-ca-nhan/{{$user->id}}/sua" method="Post">
            @csrf
            <div class="form-group">
                <label for="">Tên</label>
                <input type="text" name="name" id="" class="form-control" value="{{$user->name}}" aria-describedby="helpId">
                @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">di đông</label>
                <input type="text" name="u_didong" id="" class="form-control" value="{{$user->u_didong}}" aria-describedby="helpId">
                @if ($errors->has('u_didong'))
                <p class="text-danger">{{ $errors->first('u_didong') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">ngày sinh</label>
                <input type="text" name="u_ngaysinh" id="" class="form-control" value="{{$user->u_ngaysinh}}" aria-describedby="helpId">
                @if ($errors->has('u_ngaysinh'))
                <p class="text-danger">{{ $errors->first('u_ngaysinh') }}</p>
                @endif
            </div>
            <button class="btn btn-primary" type="submit">sửa</button>
        </form>

    </div>
</div>
@endsection