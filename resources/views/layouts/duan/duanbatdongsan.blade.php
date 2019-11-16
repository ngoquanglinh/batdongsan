@extends('layouts.master')
@section('tittle','Cập nhật tin tức dự án bất động sản mới nhất 2019 từ Batdongsan.com.vn')
@section('content')
<div class="content">
    <div class="row prj-top-search">
        <div class="col1">
            <h2>TÌM KIẾM DỰ ÁN</h2>
        </div>
        <div class="col2">
            <input type="text" placeholder="nhập từ khóa tìm kiếm">
            <div class="showAdressSearch d-flex">
                <div>
                    <select name="" id="">
                        <option value=""> Loại dự án</option>
                    </select>
                </div>
                <div>
                    <select name="" id="">
                        <option value="">Tỉnh thành</option>
                    </select>
                </div>
                <div>
                    <select name="" id="">
                        <option value="">Quận huyện</option>
                    </select>
                </div>
                <div>
                    <select name="" id="">
                        <option value="">Mức giá</option>
                    </select>
                </div>
            </div>
            <div class="showSearchDuAn">
                <p id="moreLinkSearch">Mở rộng tiêu chí tìm kiếm <img src="uploads/logo/downarrow.jpg" alt=""></p>
                <p id="compactLinkSearch">Thu gọn tiêu chí tìm kiếm <img src="uploads/logo/downarrow.jpg" alt=""></p>
            </div>
        </div>
        <div class="col3">
            <p>Tìm kiếm</p>
        </div>
    </div>
</div>
<div class="row">
    <div id="slideDuan" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#slideDuan" data-slide-to="0" class="active"></li>
            <li data-target="#slideDuan" data-slide-to="1"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active d-flex slide-img">
                <img src="uploads/images/20181227104344-8690.jpg" alt="Los Angeles">
                <div class="slide-du-an">
                    <h3 class="title"><a href="">Căn hộ CT4 VCN Phước Hải</a></h3>
                    <p>
                        An Phát Luxury do Công ty CP Đầu tư và xây dựng địa ốc An Phát làm chủ đầu tư, triển khai trên quỹ đất rộng 5,045m2 tại TX. Thuận An, tỉnh Bình Dương.</p>
                </div>
            </div>
            <div class="carousel-item d-flex slide-img">
                <img src="uploads/images/20181227104344-8690 (1).jpg" alt="Chicago">
                <div class="slide-du-an">
                    <h3 class="title"><a href="">Căn hộ CT4 VCN Phước Hải</a></h3>
                    <p>
                        An Phát Luxury do Công ty CP Đầu tư và xây dựng địa ốc An Phát làm chủ đầu tư, triển khai trên quỹ đất rộng 5,045m2 tại TX. Thuận An, tỉnh Bình Dương.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<div class="row d-flex prj-inline">
    <div class="col1">

    </div>
    <div class="col2">
        <h2>Dự án mới cập nhật</h2>
    </div>
    <div class="col1">

    </div>
</div>
<!-- end row -->
<div>
    <div class="row prj-inline-list">
        <ul>
            <li>
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20190422114017-56bb.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Lộc Phát Residence</a>
                </div>
                <div class="prj-address">
                    <p>Đường 22/12, Phường Thuận Giao, Thuận An, Bình Dương</p>
                </div>
                <div class="prj-price">Giá từ: <strong>25 triệu/m2 </strong></div>
            </li>
            <li>
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20190422114017-56bb.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Lộc Phát Residence</a>
                </div>
                <div class="prj-address">
                    <p>Đường 22/12, Phường Thuận Giao, Thuận An, Bình Dương</p>
                </div>
                <div class="prj-price">Giá từ: <strong>25 triệu/m2 </strong></div>
            </li>
            <li>
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20190422114017-56bb.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Lộc Phát Residence</a>
                </div>
                <div class="prj-address">
                    <p>Đường 22/12, Phường Thuận Giao, Thuận An, Bình Dương</p>
                </div>
                <div class="prj-price">Giá từ: <strong>25 triệu/m2 </strong></div>
            </li>
            <li>
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20190422114017-56bb.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Lộc Phát Residence</a>
                </div>
                <div class="prj-address">
                    <p>Đường 22/12, Phường Thuận Giao, Thuận An, Bình Dương</p>
                </div>
                <div class="prj-price">Giá từ: <strong>25 triệu/m2 </strong></div>
            </li>
            <li>
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20190422114017-56bb.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Lộc Phát Residence</a>
                </div>
                <div class="prj-address">
                    <p>Đường 22/12, Phường Thuận Giao, Thuận An, Bình Dương</p>
                </div>
                <div class="prj-price">Giá từ: <strong>25 triệu/m2 </strong></div>
            </li>
            <li>
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20190422114017-56bb.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Lộc Phát Residence</a>
                </div>
                <div class="prj-address">
                    <p>Đường 22/12, Phường Thuận Giao, Thuận An, Bình Dương</p>
                </div>
                <div class="prj-price">Giá từ: <strong>25 triệu/m2 </strong></div>
            </li>
            <li>
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20190422114017-56bb.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Lộc Phát Residence</a>
                </div>
                <div class="prj-address">
                    <p>Đường 22/12, Phường Thuận Giao, Thuận An, Bình Dương</p>
                </div>
                <div class="prj-price">Giá từ: <strong>25 triệu/m2 </strong></div>
            </li>
            <li>
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20190422114017-56bb.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Lộc Phát Residence</a>
                </div>
                <div class="prj-address">
                    <p>Đường 22/12, Phường Thuận Giao, Thuận An, Bình Dương</p>
                </div>
                <div class="prj-price">Giá từ: <strong>25 triệu/m2 </strong></div>
            </li>
        </ul>
    </div>
</div>
<!-- end list -->
<div class="row d-flex prj-inline">
    <div class="col1">

    </div>
    <div class="col2">
        <h2>CĂN HỘ MẪU</h2>
    </div>
    <div class="col1">

    </div>
</div>
<!-- end row -->
<div>
    <div class="row prj-inline-list">
        <ul>
            <li class="list-house">
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20191029161810-a7be.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Dự án: Panomax River Villas</a>
                </div>
                <div class="prj-address">
                    <p>Dự án: Panomax River Villas</p>
                </div>
            </li>
            <li class="list-house">
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20191029161810-a7be.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Dự án: Panomax River Villas</a>
                </div>
                <div class="prj-address">
                    <p>Dự án: Panomax River Villas</p>
                </div>
            </li>
            <li class="list-house">
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20191029161810-a7be.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Dự án: Panomax River Villas</a>
                </div>
                <div class="prj-address">
                    <p>Dự án: Panomax River Villas</p>
                </div>
            </li>
            <li class="list-house">
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20191029161810-a7be.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Dự án: Panomax River Villas</a>
                </div>
                <div class="prj-address">
                    <p>Dự án: Panomax River Villas</p>
                </div>
            </li>
            <li class="list-house">
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20191029161810-a7be.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Dự án: Panomax River Villas</a>
                </div>
                <div class="prj-address">
                    <p>Dự án: Panomax River Villas</p>
                </div>
            </li>
            <li class="list-house">
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20191029161810-a7be.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Dự án: Panomax River Villas</a>
                </div>
                <div class="prj-address">
                    <p>Dự án: Panomax River Villas</p>
                </div>
            </li>
            <li class="list-house">
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20191029161810-a7be.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Dự án: Panomax River Villas</a>
                </div>
                <div class="prj-address">
                    <p>Dự án: Panomax River Villas</p>
                </div>
            </li>
            <li class="list-house">
                <div class="duan-img">
                    <a href=""><img src="uploads/images/20191029161810-a7be.jpg" alt=""></a>
                </div>
                <div class="prj-name">
                    <a href="">Dự án: Panomax River Villas</a>
                </div>
                <div class="prj-address">
                    <p>Dự án: Panomax River Villas</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- end-list -->
<div class="row">
    <div class="col-md-8">
        <div class="row prj-top-by-cate">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#tab1" role="tab" data-toggle="tab"><span>Khu nghỉ dưỡng, Sinh thái</span></a></li>
                <li><a href="#tab2" role="tab" data-toggle="tab"><span>Khu công nghiệp</span></a></li>
                <li><a href="#tab3" role="tab" data-toggle="tab"><span>Căn hộ, Chung cư</span></a></li>
            </ul>
        </div>
        <div class="row tab-content prj-top-by-content">
            <div class="tab-pane active" id="tab1">
                <ul>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190814111028-d758.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                                Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                            </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190814111028-d758.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                                Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                            </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190814111028-d758.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                                Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                            </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190814111028-d758.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                                Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                            </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190814111028-d758.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                                Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                            </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190814111028-d758.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                                Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                            </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="tab2">
                <ul>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20180724153531-e033.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                            Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                        </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20180724153531-e033.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                            Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                        </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190814111028-d758.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                            Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                        </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190814111028-d758.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                            Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                        </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190814111028-d758.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                            Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                        </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190814111028-d758.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                            Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                        </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="tab3">
                <ul>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190924165540-1f92.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                        Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                    </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190924165540-1f92.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                        Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                    </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190814111028-d758.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                        Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                    </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190814111028-d758.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                        Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                    </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190814111028-d758.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                        Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                    </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="tab-left">
                                <img src="uploads/images/20190814111028-d758.jpg" alt="">
                            </div>
                            <div class="tab-right">
                                <h2 class="title-tab"><a href="">Đại Lộc Garden</a></h2>
                                <div class="tab-right-address">
                                    <span>Địa chỉ:</span>
                                    <span>
                        Đường Quốc lộ 1A, Xã Gia Ninh, Quảng Ninh, Quảng Bình
                    </span>
                                </div>
                                <div class="tab-right-price">
                                    <span>Giá từ: </span>
                                    <span class="price-bold">450 nghìn/m²</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end-left -->
    <div class="col-md-4">
        <div class="row hot-article">
            <div class="prj-line-normal">
                <span>Tin nổi bật</span>
            </div>
            <div class="hot-article-box">
                <div>
                    <a href="">
                        <img src="uploads/images/20180924112907-a4c6.jpg" alt="">
                        <p class="hot-article-title">Đầu tư 3.872 tỷ làm tuyến đường bộ ven biển Thái Bình</p>
                    </a>
                </div>
                <div class=" hot-article-list">
                    <ul>
                        <li><a href="">Hà Nội sẽ xây khu đô thị 48,56ha tại quận Bắc Từ Liêm</a></li>
                        <li><a href="">Hà Nội sẽ xây khu đô thị 48,56ha tại quận Bắc Từ Liêm</a></li>
                        <li><a href="">Hà Nội sẽ xây khu đô thị 48,56ha tại quận Bắc Từ Liêm</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end  row -->
        <div class="row hot-article">
            <div class="prj-line-normal tt-child">
                <span>Tiến độ dự án</span>
            </div>
            <div class="prjProgress">
                <div id="prjProgresso" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active prjProgress-list">
                            <ul>
                                <li>
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191023164732-3a86.jpg" alt="">
                                        </div>
                                        <div>
                                            <a href="">Sài Gòn Star City 2</a>
                                            <div>
                                                Tiến độ dự án cập nhật ngày 23/10/2019
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191023164732-3a86.jpg" alt="">
                                        </div>
                                        <div>
                                            <a href="">Sài Gòn Star City 2</a>
                                            <div>
                                                Tiến độ dự án cập nhật ngày 23/10/2019
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191023164732-3a86.jpg" alt="">
                                        </div>
                                        <div>
                                            <a href="">Sài Gòn Star City 2</a>
                                            <div>
                                                Tiến độ dự án cập nhật ngày 23/10/2019
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191023164732-3a86.jpg" alt="">
                                        </div>
                                        <div>
                                            <a href="">Sài Gòn Star City 2</a>
                                            <div>
                                                Tiến độ dự án cập nhật ngày 23/10/2019
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191023164732-3a86.jpg" alt="">
                                        </div>
                                        <div>
                                            <a href="">Sài Gòn Star City 2</a>
                                            <div>
                                                Tiến độ dự án cập nhật ngày 23/10/2019
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="carousel-item prjProgress-list">
                            <ul>
                                <li>
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191023164732-3a86.jpg" alt="">
                                        </div>
                                        <div>
                                            <a href="">Sài Gòn Star City 2</a>
                                            <div>
                                                Tiến độ dự án cập nhật ngày 23/10/2019
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191023164732-3a86.jpg" alt="">
                                        </div>
                                        <div>
                                            <a href="">Sài Gòn Star City 2</a>
                                            <div>
                                                Tiến độ dự án cập nhật ngày 23/10/2019
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191023164732-3a86.jpg" alt="">
                                        </div>
                                        <div>
                                            <a href="">Sài Gòn Star City 2</a>
                                            <div>
                                                Tiến độ dự án cập nhật ngày 23/10/2019
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191023164732-3a86.jpg" alt="">
                                        </div>
                                        <div>
                                            <a href="">Sài Gòn Star City 2</a>
                                            <div>
                                                Tiến độ dự án cập nhật ngày 23/10/2019
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191023164732-3a86.jpg" alt="">
                                        </div>
                                        <div>
                                            <a href="">Sài Gòn Star City 2</a>
                                            <div>
                                                Tiến độ dự án cập nhật ngày 23/10/2019
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row fb-fanpage-du-an">
            <div class="fb-fanpage">
                <div id="fb-root" class=" fb_reset">
                    <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                        <div>
                            <iframe name="fb_xdm_frame_https" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://staticxx.facebook.com/connect/xd_arbiter.php?version=44#channel=f13b18c0413e578&amp;origin=https%3A%2F%2Fbatdongsan.com.vn" style="border: none;"></iframe>
                        </div>
                        <div></div>
                    </div>
                </div>
                <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/Batdongsandv/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=302507473246792&amp;container_width=320&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FBatdongsandv%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"><span style="vertical-align: bottom; width: 320px; height: 214px;"><iframe name="f1038762985a434" width="1000px" height="1000px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.10/plugins/page.php?adapt_container_width=true&amp;app_id=302507473246792&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df2d26ac6ad11d54%26domain%3Dbatdongsan.com.vn%26origin%3Dhttps%253A%252F%252Fbatdongsan.com.vn%252Ff13b18c0413e578%26relation%3Dparent.parent&amp;container_width=320&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FBatdongsandv%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 320px; height: 214px;" class=""></iframe></span></div>
            </div>
        </div>
        <!-- end -->
    </div>
    <!-- end-right -->
</div>
@endsection('content')

<!--ket thuc noi dung</!-->