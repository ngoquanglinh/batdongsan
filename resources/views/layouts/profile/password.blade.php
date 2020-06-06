@extends('layouts.trangcanhan')
@section('trangcanhan')
<p class="ml-2 mt-2">sửa mật khẩu</p>
<div class="row">
    <div class="col-6">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <form action="trang-ca-nhan/{{$user->id}}/password" method="Post">
            @csrf
            <div class="form-group">
                <label for="">mật khẩu</label>
                <input type="password" name="password" class="form-control" value="{{$user->password}}" aria-describedby="helpId">
                @if ($errors->has('password'))
                <p class="text-danger">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="">nhập lại mật khẩu</label>
                <input type="password" name="passwordAgain" class="form-control" value="" aria-describedby="helpId">
                @if ($errors->has('passwordAgain'))
                <p class="text-danger">{{ $errors->first('passwordAgain') }}</p>
                @endif
            </div>
            <button class="btn btn-warning" type="submit">sửa</button>
        </form>

    </div>
</div>
@endsection