@extends('layouts.master')
@section('tittle','Nhà đất | Mua bán nhà đất | Cho thuê nhà đất - Batdongsan.com.vn')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-3">
            <div class="page-user">
                <h3>TRANG CÁ NHÂN</h3>
            </div>
            <div class="box-page">
                <div class="user-avatar">
                    <img src="uploads/logo/default-user-avatar-blue.jpg" alt="">
                </div>
                <div class="user-fullname">
                {{Auth::user()->name}}
                </div>
                <div class="user-blance">
                    <div>Tài khoản tin rao: <span>0</span></div>
                    <div>Tài khoản ngoài tin rao: <span>0</span></div>
                    <div>Tài khoản KM1: <span>0</span></div>
                    <div>Tài khoản KM2: <span>40.000</span></div>
                </div>
                <div class="btn-naptien">
                    <a href="">Nạp tiền</a>
                </div>
                <div class="user-title">
                Quản lý thông tin cá nhân
                </div>
                <div class="list-user">
                    <ul>
                        <li><a href="">Thay đổi thông tin cá nhân</a></li>
                        <li><a href="">Thay đổi mật khẩu</a></li>
                    </ul>
                </div>
                <div class="user-title">
                Quản lý tin rao
                </div>
                <div class="list-user">
                    <ul>
                        <li><a href="">Quản lý tin rao bán/cho thuê</a></li>
                        <li><a href="">Đăng tin rao bán/cho thuê</a></li>
                        <li><a href="">Quản lý tin cần mua/cần thuê</a></li>
                        <li><a href="">Đăng tin cần mua/cần thuê</a></li>
                        <li><a href="">Quản lý tin nháp</a></li>
                    </ul>
                </div>
                <div class="user-title">
                Quản lý tài chính
                </div>
                <div class="list-user">
                    <ul >
                        <li><a href="">Thông tin số dư</a></li>
                        <li><a href="">Lịch sử giao dịch</a></li>
                        <li><a href="">Nhóm khuyến mãi</a></li>
                        <li><a href="">Quản lý tài khoản Doanh nghiệp</a></li>
                        <li><a href="">Nạp tiền vào tài khoản</a></li>
                    </ul>
                </div>
                <div class="user-title">
                Tiện ích
                </div>
                <div class="list-user">
                    <ul>
                        <li><a href="">Thông báo </a></li>
                        <li><a href="">Quản lý đăng kí nhận email</a></li>
                        <li><a href="">Hộp tin nhắn</a></li>
                        <li><a href="">Quản lý điểm tích lũy</a></li>
                        <li><a href="">Yêu cầu khóa tài khoản</a></li>
                    </ul>
                </div>
                <div class="user-title">
                Hướng dẫn & báo giá
                </div>
                <div class="list-user">
                    <ul>
                        <li><a href="">Hướng dẫn sử dụng</a></li>
                        <li><a href="">Hướng dẫn thanh toán</a></li>
                        <li><a href="">Báo giá</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end-left -->
        <div class="col-md-9 left-user">
            <div class="quanly-title">
            QUẢN LÝ TIN RAO BÁN, CHO THUÊ
            </div>
            <form action="">
                @csrf
            <div class="d-flex content-news">
                <div class="content-news-col1">
                    <p>Từ ngày</p>
                    <input type="text" id="date">
                </div>
                <div class="content-news-col2">
                    <p>	Đến ngày</p>
                    <input type="text"  id="dateEnd">
                </div>
                <div class="content-news-col3">
                    <p>Loại tin</p>
                    <select name="" id="">
                        <option value="">Chọn loại tin</option>
                        <option value="">5</option>
                        <option value="">4</option>
                    </select>
                </div>
                <div class="content-news-col4">
                    <p>Trạng thái</p>
                    <select name="" id="">
                        <option value="">Tất cả</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
            </div>
            <div class="d-flex content-news">
                <div>
                    <p>Mã tin</p>
                    <input type="text">
                </div>
                <div class="btn-search-user">
                    <button type="submit">Tìm kiếm</button><span class="note-search">  (Lưu ý khi nhập mã tin thì các bộ lọc khác không có tác dụng)</span>
                </div>
            </div>
            </form> 
        </div>
        <!-- end-right -->
    </div>
</div>
@endsection('content')
<!--ket thuc noi dung</!-->
