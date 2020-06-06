@extends('layouts.trangcanhan')
@section('trangcanhan')
<p class="ml-2 mt-2">danh sách</p>
<div class="row">
    <div class="col-12">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <div class="panel panel-primary">
            <div class="panel-heading">danh sách tin rao bán/cho thuê</div>
            <table class="table">
                <tr>
                    <th>Stt</th>
                    <th>Tiêu đề</th>
                    <th>Ngày đăng</th>
                    <th>Ngày hết hạn</th>
                    <th>delete</th>
                </tr>
                @php
                $i=1;
                @endphp
                @foreach($tinrao as $tr)
                <tr>
                    <td>{{$i}}</td>
                    <td class="titleNews">{{$tr->c_tieude}}</td>
                    <td>{{formatDateVN($tr->c_ngaydang)}}</td>
                    <td>{{formatDateVN($tr->c_ngayhethan)}}</td>
                    <th><button class="btn-danger deleteNews" data-id="{{$tr->id}}" data-user="{{$user->id}}" style="width: 50px;">delete</button></th>
                </tr>
                {{$i++}}
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('.titleNews').each(function() {
            var text = $(this).text();
            if (text.length > 50) {
                text = text.substring(0, 50);
            }
            $(this).text(text);
            $(this).append("...");
        });
        $('.deleteNews').click(function() {
            const id = $(this).attr("data-id");
            const userId = $(this).attr("data-user");
            if (confirm("bạn có chắc muốn xóa")) {
                fetch(`danh-sach-tin-rao-mua-thue/${userId}/delete/${id}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert(data.success);
                            location.reload();
                        }
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            }
        });
    })
</script>
@endsection