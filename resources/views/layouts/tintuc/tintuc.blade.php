@extends('layouts.master')
@section('tittle','Tin tức bất động sản | Chuyên trang về Tin tức bất động sản – bất động sản')
@section('content')
<div class="content">
    <div class="row flex-column position-relative">
        <div class="d-flex newletter-content mb-2 w-50">
            <input type="text" id="searchInput" class="w-75" placeholder="nhập tên tin tức..." style="outline: none !important">
            <button class="w-25">search</button>
        </div>
        <div id="resultSearch" class="w-50 position-absolute" style="top:100%; z-index:1000">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="row ">
                <div class="news-box-header">
                    <h2>
                        Tin tức bất động sản-Tin nổi bật
                    </h2>
                </div>
            </div>
            <div class="row left-news-page">
                <div class="col-md-6">
                    <div class="left-news-img">
                        <img src="assets/uploads/images/{{$tinnoibat1->t_hinhanh}}" alt="">
                    </div>
                    <div class="left-news-title">
                        <h3><a href="{{ route('tintuc.chitiet',['slug'=> $tinnoibat1->t_slug]) }}">
                                {{$tinnoibat1->t_tentintuc}}
                            </a></h3>
                    </div>
                    <div class="splice_mota">
                        <p>{{$tinnoibat1->t_motangan}}</p>
                    </div>
                </div>
                <div class="col-md-6 pl-2 pr-2">
                    <div class="row left-news-img1">
                        <ul>
                            @foreach($tinnoibat2 as $tnb2)
                            <li>
                                <div class="d-flex">
                                    <div>
                                        <a href="{{ route('tintuc.chitiet',['slug'=> $tnb2->t_slug]) }}"><img src="assets/uploads/images/{{$tnb2->t_hinhanh}}" alt=""></a>
                                    </div>
                                    <div class="left-news-link1 ">
                                        <a href="{{ route('tintuc.chitiet',['slug'=> $tnb2->t_slug]) }}">{{$tnb2->t_tentintuc}}</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end-row -->
                    <div class="row parent-cate-news p-3">
                        <ul>
                            @foreach($tinnoibat3 as $tnb3)
                            <li>
                                <a href="{{ route('tintuc.chitiet',['slug'=> $tnb3->t_slug]) }}">
                                    {{$tnb3->t_tentintuc}}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end-row -->
            <div class="row">
                <p><strong>Tin tức bất động sản</strong> theo chuyên mục:</p>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="borderbold">
                    <h2>
                        <a href="">Tin thị trường</a>
                    </h2>
                </div>
                <div class="borderbottom">
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 category-news">
                        <div>
                            <a href=""><img src="uploads/images/20191102104451-7ff8.png" alt=""></a>
                        </div>
                        <div class="category-news-float">
                            <h2><a href="">
                                    Nhà phố thương mại tăng giá liên tục vì sao?
                                </a></h2>
                            <p>Công an TP.HCM vừa khởi tố, bắt giam Phạm Thị Tuyết Nhung (Giám đốc Công ty CP Tư vấn và đầu tư Angel Lina). Bà Nhung bị cáo buộc vẽ hàng loạt dự án "ma", lừa bán cho nhiều người.</p>
                        </div>
                    </div>
                    <div class="col-md-6 category-news-right">
                        <div class="d-flex">
                            <div>
                                <img src="uploads/images/20191101153856-9f31.jpg" alt="">
                            </div>
                            <div class="category-news-right-title">
                                <a href="">
                                    Bất động sản nghỉ dưỡng (kỳ 1): Xu hướng tìm đến thị trường mới
                                </a>
                            </div>
                        </div>
                        <div class="category-news-right-list">
                            <ul>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row">
                <div class="borderbold">
                    <h2>
                        <a href="">phân tích-nhận định</a>
                    </h2>
                </div>
                <div class="borderbottom">
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 category-news">
                        <div>
                            <a href=""><img src="uploads/images/20191102104451-7ff8.png" alt=""></a>
                        </div>
                        <div class="category-news-float">
                            <h2><a href="">
                                    Nhà phố thương mại tăng giá liên tục vì sao?
                                </a></h2>
                            <p>Công an TP.HCM vừa khởi tố, bắt giam Phạm Thị Tuyết Nhung (Giám đốc Công ty CP Tư vấn và đầu tư Angel Lina). Bà Nhung bị cáo buộc vẽ hàng loạt dự án "ma", lừa bán cho nhiều người.</p>
                        </div>
                    </div>
                    <div class="col-md-6 category-news-right">
                        <div class="d-flex">
                            <div>
                                <img src="uploads/images/20191101153856-9f31.jpg" alt="">
                            </div>
                            <div class="category-news-right-title">
                                <a href="">
                                    Bất động sản nghỉ dưỡng (kỳ 1): Xu hướng tìm đến thị trường mới
                                </a>
                            </div>
                        </div>
                        <div class="category-news-right-list">
                            <ul>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row">
                <div class="borderbold">
                    <h2>
                        <a href="">chính sách - quản lý</a>
                    </h2>
                </div>
                <div class="borderbottom">
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 category-news">
                        <div>
                            <a href=""><img src="uploads/images/20191102104451-7ff8.png" alt=""></a>
                        </div>
                        <div class="category-news-float">
                            <h2><a href="">
                                    Nhà phố thương mại tăng giá liên tục vì sao?
                                </a></h2>
                            <p>Công an TP.HCM vừa khởi tố, bắt giam Phạm Thị Tuyết Nhung (Giám đốc Công ty CP Tư vấn và đầu tư Angel Lina). Bà Nhung bị cáo buộc vẽ hàng loạt dự án "ma", lừa bán cho nhiều người.</p>
                        </div>
                    </div>
                    <div class="col-md-6 category-news-right">
                        <div class="d-flex">
                            <div>
                                <img src="uploads/images/20191101153856-9f31.jpg" alt="">
                            </div>
                            <div class="category-news-right-title">
                                <a href="">
                                    Bất động sản nghỉ dưỡng (kỳ 1): Xu hướng tìm đến thị trường mới
                                </a>
                            </div>
                        </div>
                        <div class="category-news-right-list">
                            <ul>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row">
                <div class="borderbold">
                    <h2>
                        <a href="">Thông tin quy hoạch</a>
                    </h2>
                </div>
                <div class="borderbottom">
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 category-news">
                        <div>
                            <a href=""><img src="uploads/images/20191102104451-7ff8.png" alt=""></a>
                        </div>
                        <div class="category-news-float">
                            <h2><a href="">
                                    Nhà phố thương mại tăng giá liên tục vì sao?
                                </a></h2>
                            <p>Công an TP.HCM vừa khởi tố, bắt giam Phạm Thị Tuyết Nhung (Giám đốc Công ty CP Tư vấn và đầu tư Angel Lina). Bà Nhung bị cáo buộc vẽ hàng loạt dự án "ma", lừa bán cho nhiều người.</p>
                        </div>
                    </div>
                    <div class="col-md-6 category-news-right">
                        <div class="d-flex">
                            <div>
                                <img src="uploads/images/20191101153856-9f31.jpg" alt="">
                            </div>
                            <div class="category-news-right-title">
                                <a href="">
                                    Bất động sản nghỉ dưỡng (kỳ 1): Xu hướng tìm đến thị trường mới
                                </a>
                            </div>
                        </div>
                        <div class="category-news-right-list">
                            <ul>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row">
                <div class="borderbold">
                    <h2>
                        <a href="">bất động sản thế giới</a>
                    </h2>
                </div>
                <div class="borderbottom">
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 category-news">
                        <div>
                            <a href=""><img src="uploads/images/20191102104451-7ff8.png" alt=""></a>
                        </div>
                        <div class="category-news-float">
                            <h2><a href="">
                                    Nhà phố thương mại tăng giá liên tục vì sao?
                                </a></h2>
                            <p>Công an TP.HCM vừa khởi tố, bắt giam Phạm Thị Tuyết Nhung (Giám đốc Công ty CP Tư vấn và đầu tư Angel Lina). Bà Nhung bị cáo buộc vẽ hàng loạt dự án "ma", lừa bán cho nhiều người.</p>
                        </div>
                    </div>
                    <div class="col-md-6 category-news-right">
                        <div class="d-flex">
                            <div>
                                <img src="uploads/images/20191101153856-9f31.jpg" alt="">
                            </div>
                            <div class="category-news-right-title">
                                <a href="">
                                    Bất động sản nghỉ dưỡng (kỳ 1): Xu hướng tìm đến thị trường mới
                                </a>
                            </div>
                        </div>
                        <div class="category-news-right-list">
                            <ul>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row">
                <div class="borderbold">
                    <h2>
                        <a href="">Tài chính - chứng khoán-bds</a>
                    </h2>
                </div>
                <div class="borderbottom">
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 category-news">
                        <div>
                            <a href=""><img src="uploads/images/20191102104451-7ff8.png" alt=""></a>
                        </div>
                        <div class="category-news-float">
                            <h2><a href="">
                                    Nhà phố thương mại tăng giá liên tục vì sao?
                                </a></h2>
                            <p>Công an TP.HCM vừa khởi tố, bắt giam Phạm Thị Tuyết Nhung (Giám đốc Công ty CP Tư vấn và đầu tư Angel Lina). Bà Nhung bị cáo buộc vẽ hàng loạt dự án "ma", lừa bán cho nhiều người.</p>
                        </div>
                    </div>
                    <div class="col-md-6 category-news-right">
                        <div class="d-flex">
                            <div>
                                <img src="uploads/images/20191101153856-9f31.jpg" alt="">
                            </div>
                            <div class="category-news-right-title">
                                <a href="">
                                    Bất động sản nghỉ dưỡng (kỳ 1): Xu hướng tìm đến thị trường mới
                                </a>
                            </div>
                        </div>
                        <div class="category-news-right-list">
                            <ul>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row">
                <div class="borderbold">
                    <h2>
                        <a href="">Tư vấn luật</a>
                    </h2>
                </div>
                <div class="borderbottom">
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 category-news">
                        <div>
                            <a href=""><img src="uploads/images/20191102104451-7ff8.png" alt=""></a>
                        </div>
                        <div class="category-news-float">
                            <h2><a href="">
                                    Nhà phố thương mại tăng giá liên tục vì sao?
                                </a></h2>
                            <p>Công an TP.HCM vừa khởi tố, bắt giam Phạm Thị Tuyết Nhung (Giám đốc Công ty CP Tư vấn và đầu tư Angel Lina). Bà Nhung bị cáo buộc vẽ hàng loạt dự án "ma", lừa bán cho nhiều người.</p>
                        </div>
                    </div>
                    <div class="col-md-6 category-news-right">
                        <div class="d-flex">
                            <div>
                                <img src="uploads/images/20191101153856-9f31.jpg" alt="">
                            </div>
                            <div class="category-news-right-title">
                                <a href="">
                                    Bất động sản nghỉ dưỡng (kỳ 1): Xu hướng tìm đến thị trường mới
                                </a>
                            </div>
                        </div>
                        <div class="category-news-right-list">
                            <ul>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row">
                <div class="borderbold">
                    <h2>
                        <a href="">lời khuyên</a>
                    </h2>
                </div>
                <div class="borderbottom">
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 category-news">
                        <div>
                            <a href=""><img src="uploads/images/20191102104451-7ff8.png" alt=""></a>
                        </div>
                        <div class="category-news-float">
                            <h2><a href="">
                                    Nhà phố thương mại tăng giá liên tục vì sao?
                                </a></h2>
                            <p>Công an TP.HCM vừa khởi tố, bắt giam Phạm Thị Tuyết Nhung (Giám đốc Công ty CP Tư vấn và đầu tư Angel Lina). Bà Nhung bị cáo buộc vẽ hàng loạt dự án "ma", lừa bán cho nhiều người.</p>
                        </div>
                    </div>
                    <div class="col-md-6 category-news-right">
                        <div class="d-flex">
                            <div>
                                <img src="uploads/images/20191101153856-9f31.jpg" alt="">
                            </div>
                            <div class="category-news-right-title">
                                <a href="">
                                    Bất động sản nghỉ dưỡng (kỳ 1): Xu hướng tìm đến thị trường mới
                                </a>
                            </div>
                        </div>
                        <div class="category-news-right-list">
                            <ul>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                                <li><a href="">
                                        Giá đất Bình Dương dự kiến điều chỉnh tăng gấp đôi sau 2020
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
        <!-- end left -->
        <div class="col-md-3 mid-news-page">
            <div class="row">
                <div class="news-box-header">
                    <h2>
                        Tin nhiều người đọc
                    </h2>
                </div>
                <div class="news-box-box">
                    <ul>
                        @foreach($tinxemnhieu as $txn)
                        <li>
                            <a href="">
                                <div class="d-flex">
                                    <div>
                                        <a href="tin-tuc/{{$txn->t_slug}}"><img src="assets/uploads/images/{{$txn->t_hinhanh}}" alt=""></a>
                                    </div>
                                    <div class="ml-1">
                                        <p>
                                            {{$txn->t_tentintuc}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- end-row -->
            <div class="row mt-2">
                <div class="news-box-header">
                    <h2>
                        Chủ đề được quan tâm
                    </h2>
                </div>
                <div class=" news-box-list">
                    <ul>
                        <li>
                            <a href="">
                                Expert talk - Batdongsan.com.vn

                            </a>
                        </li>
                        <li>
                            <a href="">
                                Nhà đất thổ cư
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Nhà đất thổ cư
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Nhà đất thổ cư
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Nhà đất thổ cư
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Nhà đất thổ cư
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Nhà đất thổ cư
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Nhà đất thổ cư
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="a-link-show">
                        <a href="">
                            <div class="d-flex a-link">
                                <div>
                                    <img src="uploads/logo/broker_view_all.jpg" alt="">
                                </div>
                                <div>
                                    Xem Tất Cả
                                </div>
                            </div>

                        </a>
                    </div>
                </div>
            </div>
            <!-- endrow -->
            <div class="row">
                <div class="header-box-project">
                    <p>Dành cho người xây nhà</p>
                </div>
                <div class="product-build-house">
                    <ul>
                        <li><a href="">Quy trình xây nhà</a></li>
                        <li><a href="">xem tuổi làm nhà</a></li>
                    </ul>
                </div>
            </div>
            <!-- end-row -->
            <div class="row">
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
            <!-- end-row -->
        </div>
        <!-- end-mid -->
        <div class="col-md-3">
            <div class="row">
                <div class="news-form-small">
                    <div>
                        <img src="uploads/logo/icon-newsletter-small.jpg" alt=""><span>Nhận bản tin từ Batdongsan.com.vn</span>
                    </div>
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
            <!-- end-row -->
            <div class="row right-page-new">
                <img src="uploads/ads/20171101081951-d5f8.jpg" alt="">
            </div>
            <!-- end-row -->
            <div class="row">
                <div class="fb-fanpage">
                    <div id="fb-root" class=" fb_reset">
                        <div style="position: absolute; top: -10000px; width:0px; height: 0px;">
                            <div><iframe name="fb_xdm_frame_https" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://staticxx.facebook.com/connect/xd_arbiter.php?version=44#channel=f14a9cb560e4df4&amp;origin=https%3A%2F%2Fbatdongsan.com.vn" style="border: none;"></iframe></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/Batdongsandv/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=302507473246792&amp;container_width=240&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FBatdongsandv%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"><span style="vertical-align: bottom; width: 248px; height: 214px;"><iframe name="f9423b5d0dca0c" width="1000px" height="1000px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.10/plugins/page.php?adapt_container_width=true&amp;app_id=302507473246792&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Dfdd26826f38cd4%26domain%3Dbatdongsan.com.vn%26origin%3Dhttps%253A%252F%252Fbatdongsan.com.vn%252Ff14a9cb560e4df4%26relation%3Dparent.parent&amp;container_width=248&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FBatdongsandv%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 248px; height: 214px;" class=""></iframe></span></div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end-right -->
    </div>
</div>
@endsection('content')
@section('scripts')
<script>
    $(document).ready(function() {
        $(".splice_mota").each(function() {
            var text = $(this).text();
            var text_sub = text.replace("\\s{2,}", " ").trim();
            if (text_sub.length > 100) {
                text_sub = text_sub.substring(0, 400);
            }
            $(this).text(text_sub);
            $(this).append("...");
        });
        $('#searchInput').keyup(function() {
            $value = $(this).val();
            if ($value.length > 0) {
                $.ajax({
                    type: 'get',
                    url: 'tin-tuc/search',
                    data: {
                        'search': $value
                    },
                    success: function(data) {
                        if (data.success) {
                            var html = "<div class='list-group w-100'>";
                            data.success.map((item) => {
                                html += `<a href = "tin-tuc/${item.t_slug}" style="text-decoration: none;cursor: pointer;"><button type = "button" class = "list-group-item w-100" style = "outline: none !important;cursor: pointer;" >${item.t_tentintuc}</button></a>`;
                            });
                            html += "</div>";
                            $("#resultSearch").html(html);
                        }
                    }
                });
            } else {
                $("#resultSearch").html('');
            }
        })
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    })
</script>
@endsection