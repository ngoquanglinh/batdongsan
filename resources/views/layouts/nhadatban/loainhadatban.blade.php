@extends('layouts.master')
@section('tittle',$tinrao->b_tieude)
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-9">
            <div class="pm-title">
                <h1>
                    {{$tinrao->b_tieude}}
                </h1>
            </div>
            <div class="diadiem-title">
                <span><b>Khu vực:</b><a href="">{{$tinrao->loaibds->d_tendanhmuc}}</a> - {{$tinrao->huyen->name}} - {{$tinrao->tinh->name}} </span>
            </div>
            <div class="price-title">
                <span><b>Giá:</b><strong>{{$tinrao->b_gia}}{{$tinrao->donvibds->d_tendonvi}}&nbsp</strong></span>
                <span><b>Diện tích:</b><strong> {{$tinrao->b_dientich}}m²</strong></span>
            </div>
            <div class="pm-mota">
                Thông tin mô tả
            </div>
            <div class="pm-desc">
                {!!$tinrao->b_mota!!}
            </div>
            <!--  -->
            <div class="row">
                <div class="tab-wrapper">
                    <ul class="tab">
                        <li>
                            <a href="#tab-main-info">Xem ảnh</a>
                        </li>
                        <li>
                            <a href="#tab-image">Xem bản đồ</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-item" id="tab-main-info">
                            <div class="">
                                <div class="slider slider-for bgr-tab ">
                                    @foreach($tinrao->anhbds as $t)
                                    <img src="http://localhost:8000/assets/uploads/images/{{$t->a_anh}}" alt="">
                                    @endforeach
                                </div>
                                <div class="slider slider-nav list-tab-img">
                                    @foreach($tinrao->anhbds as $t)
                                    <div><img src="http://localhost:8000/assets/uploads/images/{{$t->a_anh}}" alt=""></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-item" id="tab-image">

                            <div id="googleMap" style="width:100%;height:380px;">
                            </div>
                            <input type="hidden" id="txtlat" value="{{$tinrao->b_lat}}" name="txtlat" class="form-control" />
                            <input type="hidden" id="txtlng" value="{{$tinrao->b_lng}}" name="txtlng" class="form-control" />
                        </div>
                    </div>
                </div>
                <!-- Nav tabs -->

            </div>
            <!--  -->
            <div class="row">
                <div class="col-md-7">
                    <div class="row mr-2">
                        <div>
                            <div class="header-table">
                                Đặc điểm bất động sản
                            </div>
                            <div class="box-table">
                                <div class="row-table d-flex">
                                    <div class="left-table">
                                        Loại tin rao
                                    </div>
                                    <div class="right-table">
                                        {{$tinrao->loaibds->d_tendanhmuc}}
                                    </div>
                                </div>
                                <div class="row-table d-flex">
                                    <div class="left-table">
                                        Địa chỉ
                                    </div>
                                    <div class="right-table">
                                        {{$tinrao->b_duong}},{{$tinrao->huyen->name}},{{$tinrao->tinh->name}}
                                    </div>
                                </div>
                                <div class="row-table d-flex">
                                    <div class="left-table">
                                        Số phòng ngủ
                                    </div>
                                    <div class="right-table">
                                        {{$tinrao->b_sophongngu}}
                                    </div>
                                </div>
                                <div class="row-table d-flex">
                                    <div class="left-table">
                                        Số toilet
                                    </div>
                                    <div class="right-table">
                                        {{$tinrao->b_idsotoilet}}
                                    </div>
                                </div>
                                <div class="row-table d-flex">
                                    <div class="left-table">
                                        Nội thất
                                    </div>
                                    <div class="right-table">
                                        {{$tinrao->b_noithat}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        @if($tinrao->b_idduan != '')
                        <div class="mt-2">
                            <div class="header-table add-btn-link">
                                {{$tinrao->duan->d_tenduan}}
                                <div class="link-infor-prj"><a href="">chi tiết dự án</a></div>
                            </div>
                            <div class="box-table">
                                <div class="row-table d-flex">
                                    <div class="left-table">
                                        {{$tinrao->duan->d_tenduan}}
                                    </div>
                                    <div class="right-table">
                                        {{$tinrao->duan->huyen->name}}, {{$tinrao->duan->tinh->name}}
                                    </div>
                                </div>
                                @if($tinrao->duan->d_chudautu != null)
                                <div class="row-table d-flex">
                                    <div class="left-table">
                                        CHủ đầu tư
                                    </div>
                                    <div class="right-table">
                                        {{$tinrao->duan->d_chudautu}}
                                    </div>
                                </div>
                                @endif
                                @if($tinrao->duan->d_quymo != null)
                                <div class="row-table d-flex">
                                    <div class="left-table">
                                        Quy mô
                                    </div>
                                    <div class="right-table">
                                        {{$tinrao->duan->d_quymo}}
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif
                        <!--  -->
                    </div>
                </div>
                <!-- end-left -->
                <div class="col-md-5">
                    <div class="">
                        <div>
                            <div class="header-table">
                                Liên hệ
                            </div>
                        </div>
                        <div class="box-contact">
                            <div class="row-contact d-flex">
                                <div class="contact-left">
                                    Tên liên lạc</div>
                                <div class="contact-right">
                                    {{$tinrao->user->name}}
                                </div>
                            </div>
                            @if($tinrao->user->u_idprovince != '')
                            <div class="row-contact d-flex">
                                <div class="contact-left">
                                    Địa chỉ</div>
                                <div class="contact-right">
                                    {{$tinrao->user->u_idprovince}}
                                </div>
                            </div>
                            @endif
                            @if($tinrao->user->u_dienthoai != '')
                            <div class="row-contact d-flex">
                                <div class="contact-left">
                                    Mobile</div>
                                <div class="contact-right">
                                    {{$tinrao->user->u_didong}}
                                </div>
                            </div>
                            @endif
                            <div class="row-contact d-flex">
                                <div class="contact-left">
                                    Email</div>
                                <div class="contact-right">
                                    {{$tinrao->user->email}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end right -->
            </div>
            <!-- endrow -->
            <div class="row d-flex prd-more-info">
                <div>
                    <span>Mã tin đăng:</span> {{$tinrao->id}}
                </div>
                <div>
                    <span> Loại hình tin đăng:</span>{{$tinrao->loaitinrao->l_tenloaitin}}
                </div>
                <div>
                    <span> Ngày đăng:</span> {{formatDateVN($tinrao->b_ngaydang)}}
                </div>
                <div>
                    <span> Ngày hết hạn:</span> {{formatDateVN($tinrao->b_ngayhethan)}}
                </div>
            </div>
            <!-- wnd-row -->
            <div class="row d-flex mt-3">
                <div class="btn-green">
                    <div class="btn-feedback"><span>phản hồi</span></div>
                </div>
                <div class="btn-gray">
                    <div class="btn-goback"><a href="javascript:window.history.back();">Quay lại</a></div>
                </div>
                <div class="btn-gray">
                    <div class="btn-print"><a href="">in bài này</a></div>
                </div>
                <div class="btn-gray">
                    <div class="btn-email"><a href="">Gửi tin này cho bạn bè</a></div>
                </div>
                <div>
                    <a href=""><img src="uploads/logo/btn-share-facebook.png" alt=""></a>
                </div>
                <div class="ml-1">
                    <a href=""><img src="uploads/logo/btn-share-twitter.png" alt=""></a>
                </div>
            </div>
            <!-- end row -->
            <div class="row box-news-dang">
                <div class="child-box-news">
                    <img src="uploads/logo/icon6.png" alt=""><span>Tin cùng người đăng (1)</span>
                </div>
            </div>
            <!--  -->
            <div class="more-news">
                <span>Xem thêm các bất động sản khác</span>
            </div>
            <div class="row header-news-kinds">
                <h2>Nhà đất bán</h2>
            </div>
            <div class="row">
                <div class="product-page-list">
                    <ul>

                        <li>
                            <div class="p-title">
                                <a href="">
                                    <h3>CHUNG CƯ CAO CẤP STELLAR GARDEN CHỈ TỪ 3.3 TỶ CĂN GÓC 3 NGỦ SIÊU ĐẸP, CK 1 TỶ, HT VAY 70% LS 0%</h3>
                                </a>
                            </div>
                            <div class="p-main d-flex">
                                <div class="product-avatar-img">
                                    <a href=""> <img src="uploads/images/20191026120729-96f5_wm.png" alt=""></a>
                                </div>
                                <div class="p-main-right">
                                    <div class="p-main-text">
                                        <p>Hotline: 0942.90.5151 1. Tổng quan dự án. - Tên dự án: Chung cư cao cấp Stellar Garden. - Chủ đầu tư: Công ty CP kinh doanh và xây dựng Quang Minh. - Vị trí đắc địa: Sở hữu 2 mặt đường đắt giá: Lê Văn Thiêm và Ngụy Như Kon Tum tại trung tâm quận Thanh Xuân, trường mầm non ngay l...</p>
                                    </div>
                                    <div class="p-main-text-bottom d-flex">
                                        <div class="swap">
                                            <span>Giá: <strong>29.5 triệu/m²</strong> Diện tích: <strong>111.8 m² </strong>Quận/Huyện: <strong>Thanh Xuân, Hà Nội</strong></span>
                                        </div>
                                        <span class="uptime">
                                            23/10/2019
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!--  -->
        </div>
        <!-- end left -->
        <div class="col-md-3">
            <div class="row">
                <div class="left-box-title">
                    Cập nhật thông tin thị trường
                </div>
                <div class="news-form-small">
                    <div class="newletter-content">
                        <form action="">
                            <div class="input-group">
                                <input type="text" placeholder="Nhập email của bạn" class="form-control">
                                <button type="submit">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row product-page-box">
                <div class="header-box-project">
                    <p>Tìm kiếm trong 1.000.000 tin rao</p>
                </div>
                <div class="product-box-address">
                    <form action="">
                        <input type="text" placeholder="Nhập địa điểm, vd: Sunrise City">
                        <select name="" id="">
                            <option value="">--Chọn loại tin rao--</option>
                            <option value="">Nhà đất bán</option>
                            <option value="">Nhà đất cho thuê</option>
                        </select>
                        <select name="" id="">
                            <option value="">--Chọn loại nhà đất--</option>
                            <option value="">Nhà đất bán</option>
                            <option value="">Nhà đất cho thuê</option>
                        </select>
                        <select name="" id="">
                            <option value="">--Chọn Tỉnh/Thành phố--</option>
                            <option value="">Nhà đất bán</option>
                            <option value="">Nhà đất cho thuê</option>
                        </select>
                        <select name="" id="">
                            <option value="">--Chọn Quận/Huyện--</option>
                            <option value="">Nhà đất bán</option>
                            <option value="">Nhà đất cho thuê</option>
                        </select>
                        <select name="" id="">
                            <option value="">--Chọn diện tích--</option>
                            <option value="">Nhà đất bán</option>
                            <option value="">Nhà đất cho thuê</option>
                        </select>
                        <select name="" id="">
                            <option value="">--Chọn mức giá--</option>
                            <option value="">Nhà đất bán</option>
                            <option value="">Nhà đất cho thuê</option>
                        </select>
                        <div class="searchadvanced" style="display: block;">
                            <select name="" id="">
                                <option value="">--Chọn phường/xã--</option>
                                <option value="">Nhà đất bán</option>
                                <option value="">Nhà đất cho thuê</option>
                            </select>
                            <select name="" id="">
                                <option value="">--Chọn đường/phố--</option>
                                <option value="">Nhà đất bán</option>
                                <option value="">Nhà đất cho thuê</option>
                            </select>
                            <select name="" id="">
                                <option value="">--Chọn số phòng ngủ--</option>
                                <option value="">Nhà đất bán</option>
                                <option value="">Nhà đất cho thuê</option>
                            </select>
                            <select name="" id="">
                                <option value="">--Chọn hướng nhà--</option>
                                <option value="">Nhà đất bán</option>
                                <option value="">Nhà đất cho thuê</option>
                            </select>
                            <select name="" id="">
                                <option value="">--Chọn dự án bất động sản--</option>
                                <option value="">Nhà đất bán</option>
                                <option value="">Nhà đất cho thuê</option>
                            </select>
                        </div>
                        <div class="btn-Search-Context">
                            <button type="submit">Tìm kiếm ngay</button>
                        </div>
                        <div class="link-advanced">
                            <p id="showSearchAdvanced" style="display: none;">Tìm nâng cao</p>
                            <p id="hideSearchBase" style="display: block;">Bỏ tìm nâng cao</p>
                        </div>
                    </form>
                </div>
            </div>
            <!--  -->
            <div class="row product-page-box">
                <div class="header-box-project">
                    <p>Liên kết nổi bật</p>
                </div>
                <div class="product-address">
                    <ul>
                        <li>
                            <a href="">Bán nhà mặt tiền</a>
                        </li>
                        <li>
                            <a href="">Hồ Chí Minh</a>
                        </li>
                        <li>
                            <a href="">Nhà đất Đà Nẵng</a>
                        </li>
                        <li>
                            <a href="">Nhà đất Đà Nẵng</a>
                        </li>
                        <li>
                            <a href="">Nhà đất Đà Nẵng</a>
                        </li>
                        <li>
                            <a href="">Nhà đất Đà Nẵng</a>
                        </li>
                        <li>
                            <a href="">Nhà đất Đà Nẵng</a>
                        </li>
                        <li>
                            <a href="">Bán nhà mặt phố</a>
                        </li>
                        <li>
                            <a href="">Bán nhà mặt phố</a>
                        </li>
                        <li>
                            <a href="">Nhà đất Đà Nẵng</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--  -->
            <div class="row product-page-box">
                <div class="header-box-project">
                    <p>hỗ trợ tiện ích</p>
                </div>
                <div class="suport-box">
                    <ul>
                        <li>
                            <a href="">
                                <div class="d-flex">
                                    <div>
                                        <img src="uploads/logo/icon-phongthuy.png" alt="">
                                    </div>
                                    <div>
                                        <p>Tư vấn phong thủy</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="d-flex">
                                    <div>
                                        <img src="uploads/logo/icon-chiphi.png" alt="">
                                    </div>
                                    <div>
                                        <p>Dự tính chi phí làm nhà</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="d-flex">
                                    <div>
                                        <img src="uploads/logo/icon-laisuat.png" alt="">
                                    </div>
                                    <div>
                                        <p>Tính lãi suất</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--  -->
            <div class="row ml-2">
                <div class="header-broker-bds">
                    <span>Các nhà môi giới Bán nhà riêng khu vực Vũng Tàu, Bà Rịa Vũng Tàu</span>
                </div>
                <div class="slide-box">
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item slide-list active">
                                <ul>
                                    <li><a href="">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="uploads/images/20190718101137-51a6.jpg" alt="">
                                                </div>
                                                <div>
                                                    <p>BẤT ĐỘNG SẢN ĐỨC PHÁT</p>
                                                </div>
                                            </div>
                                            <div class="vip-row"></div>
                                        </a></li>
                                    <li><a href="">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="uploads/images/20190718101137-51a6.jpg" alt="">
                                                </div>
                                                <div>
                                                    <p>CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ BĐS HỘI TỤ</p>
                                                </div>
                                            </div>
                                            <div class="vip-row"></div>
                                        </a></li>
                                    <li><a href="">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="uploads/images/20190718101137-51a6.jpg" alt="">
                                                </div>
                                                <div>
                                                    <p>BẤT ĐỘNG SẢN ĐỨC PHÁT</p>
                                                </div>
                                            </div>
                                            <div class="vip-row"></div>
                                        </a></li>
                                    <li><a href="">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="uploads/images/20190718101137-51a6.jpg" alt="">
                                                </div>
                                                <div>
                                                    <p>BẤT ĐỘNG SẢN ĐỨC PHÁT</p>
                                                </div>
                                            </div>
                                            <div class="vip-row"></div>
                                        </a></li>
                                    <li><a href="">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="uploads/images/20190718101137-51a6.jpg" alt="">
                                                </div>
                                                <div>
                                                    <p>BẤT ĐỘNG SẢN ĐỨC PHÁT</p>
                                                </div>
                                            </div>
                                            <div class="vip-row"></div>
                                        </a></li>
                                </ul>
                                <div class="link-all">
                                    <a href="">Xem thêm nhà môi giới khác</a>
                                </div>
                            </div>
                            <div class="carousel-item slide-list">
                                <ul>
                                    <li><a href="">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="uploads/images/20180710141143-5c21.png" alt="">
                                                </div>
                                                <div>
                                                    <p>BẤT ĐỘNG SẢN ĐỨC PHÁT</p>
                                                </div>
                                            </div>
                                            <div class="vip-row"></div>
                                        </a></li>
                                    <li><a href="">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="uploads/images/20180710141143-5c21.png" alt="">
                                                </div>
                                                <div>
                                                    <p>BẤT ĐỘNG SẢN ĐỨC PHÁT</p>
                                                </div>
                                            </div>
                                            <div class="vip-row"></div>
                                        </a></li>
                                    <li><a href="">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="uploads/images/20180710141143-5c21.png" alt="">
                                                </div>
                                                <div>
                                                    <p>BẤT ĐỘNG SẢN ĐỨC PHÁT</p>
                                                </div>
                                            </div>
                                            <div class="vip-row"></div>
                                        </a></li>
                                    <li><a href="">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="uploads/images/20180710141143-5c21.png" alt="">
                                                </div>
                                                <div>
                                                    <p>BẤT ĐỘNG SẢN ĐỨC PHÁT</p>
                                                </div>
                                            </div>
                                            <div class="vip-row"></div>
                                        </a></li>
                                    <li><a href="">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="uploads/images/20180710141143-5c21.png" alt="">
                                                </div>
                                                <div>
                                                    <p>BẤT ĐỘNG SẢN ĐỨC PHÁT</p>
                                                </div>
                                            </div>
                                            <div class="vip-row"></div>
                                        </a></li>
                                </ul>
                                <div class="link-all">
                                    <a href="">Xem thêm nhà môi giới khác</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!--ket thuc noi dung -->
@endsection('content')
@section('scripts')

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzlVX517mZWArHv4Dt3_JVG0aPmbSE5mE&callback=initialize&libraries=geometry,places" async defer></script>
<script>
    var map;
    var marker;
    const lat = parseFloat($("#txtlat").val());
    const lng = parseFloat($("#txtlng").val());
    var myPosition = {
        lat: lat,
        lng: lng
    }

    function initialize() {
        var mapOptions = {
            center: {
                lat: 18.665136,
                lng: 105.690173
            },
            zoom: 12
        };
        map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: myPosition,
            draggable: true,
            icon: "uploads/logo/gps.png",
            animation: google.maps.Animation.BOUNCE
        });
        marker.setMap(map);


    }
</script>
@endsection('scripts')