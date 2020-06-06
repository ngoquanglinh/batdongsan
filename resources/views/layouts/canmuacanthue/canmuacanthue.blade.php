@extends('layouts.master')
@section('tittle','Nhà đất cho thuê, cho thuê nhà Việt Nam | Nhà đất cho thuê, cho thuê nhà tại Việt Nam')
@section('content')
<!--ket thuc menu</!-->
<div class="content">
    <div class="row prd-buy">
        <div class="col-md-9 prd-buy-left">
            <h1 class="prd-buy-title"> Nhà đất Cần mua - Cần thuê tại Việt Nam
            </h1>
            <div class="prd-buy-about">
                Có <strong class="greencolor">1,144</strong>bất động sản.
            </div>
            <div class="row">
                <div class="prd-buy-header">
                    <h2>
                        Nhà đất Cần mua - Cần thuê tại Việt Nam
                    </h2>
                </div>
            </div>
            <!-- end-row -->
            <div class="row prd-buy-list">
                <div class="vip0" style="width:100%">
                    <ul>
                        @foreach($canmuacanthue as $cmct)
                        <li>
                            <div class="vip0-title">
                                <a href="can-mua-can-thue/{{$cmct->c_slug}}">
                                    <h3>{{$cmct->c_tieude}}</h3>
                                </a>
                            </div>
                            <div class="d-flex">
                                <div>
                                    <a href="can-mua-can-thue/{{$cmct->c_slug}}">
                                        @foreach($cmct->anhcanmuacanthue as $a)
                                        @if($loop->first)
                                        <img src="http://localhost:8000/assets/uploads/images/{{$a->a_ten}}" alt="">
                                        @endif
                                        @endforeach
                                    </a>

                                </div>
                                <div class="vip0-main w-100">
                                    <div class="splice_mota">
                                        <p>{{$cmct->c_mota}}</p>
                                    </div>
                                    <div class="d-flex justify-content-between w-100">
                                        <div class=" ">
                                            Giá: <span>{{$cmct->gia->g_ten}}</span> Diện tích: <span>{{$cmct->dientich->d_ten}}</span>
                                            Quận/Huyện: <span>{{$cmct->huyen->name}}</span> Tỉnh/TP: <span>{{$cmct->tinh->name}}</span>
                                        </div>
                                        <div class="vip0-date">
                                            {{$cmct->c_ngaydang}}
                                        </div>
                                    </div>
                                </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- end-row -->
            <div>
                <span style="font-weight: bold;">Tìm Nhà đất Cần mua - Cần thuê khác tại Việt Nam</span>
            </div>
            <!-- end row -->
        </div>
        <!-- end-left -->
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
            <!-- end-row -->
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
                        <div class="searchadvanced">
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
                            <p id="showSearchAdvanced">Tìm nâng cao</p>
                            <p id="hideSearchBase">Bỏ tìm nâng cao</p>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end-row -->
            <div class="row product-page-box">
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
        </div>
        <!-- end-right -->
    </div>
</div>
<!--ket thuc noi dung</!-->
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
        })
    })
</script>

@endsection