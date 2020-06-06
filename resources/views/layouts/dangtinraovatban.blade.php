@extends('layouts.master')
@section('tittle','Rao vặt nhà đất | Quảng cáo nhà đất miễn phí')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-9">
            <div class="post-bg-Title">
                <h1 class="bluecolor">Đăng tin rao bán, cho thuê nhà đất</h1>
                <div class="graycolor">
                    (Quý vị nhập thông tin nhà đất cần bán hoặc cho thuê vào các mục dưới đây)
                </div>
            </div>
            @include('layouts.message')
            <!-- Nav tabs -->
            <div class="d-flex dang-tin-rao-tab">
                <div class="dang-tin-rao-tab1 active"><a href="dang-tin-rao-vat-ban-nha-dat">Cần bán/Cho thuê</a></div>
                <div class="dang-tin-rao-tab2"><a href="dang-tin-rao-vat-mua-nha-dat">Cần mua/Cần thuê</a></div>
            </div>
            <form action="dang-tin-rao-vat-ban-nha-dat" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="rowHeader">
                    <h2>Thông tin cơ bản</h2>
                </div>
                <div class="rowContent">
                    <div class="rowPost d-flex">
                        <div class="labeltitle">
                            <label>
                                Tiêu đề(
                            </label>
                            <span>*</span> )
                        </div>
                        <div>
                            <input type="text" name="tieude" value="{{ old('tieude') }}">
                            @if ($errors->has('tieude'))
                            <p class="text-danger">{{ $errors->first('tieude') }}</p>
                            @endif
                        </div>
                    </div>
                    <!--  -->
                    <div class="postRow d-flex mt-2">
                        <div class="base1">
                            <div>
                                <label>
                                    Hình thức(
                                </label>
                                <span>*
                                </span> )
                            </div>
                        </div>
                        <div class="base2">
                            <select id="hinhthucdang" name="hinhthuc">
                                <option value="">-- Hình thức --</option>
                                @foreach($hinhthuc as $ht)
                                <option value="{{$ht->id}}">{{$ht->d_tendanhmuc}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('hinhthucdang'))
                            <p class="text-danger">{{ $errors->first('hinhthucdang') }}</p>
                            @endif
                        </div>
                        <div class="base1">
                            <div>
                                <label>
                                    Loại(
                                </label>
                                <span>*
                                </span> )
                            </div>
                        </div>
                        <div class="base2">
                            <select id="loaitinban" name="phanmuc">
                                <option value="">-- Phân mục --</option>
                            </select>
                            @if ($errors->has('phanmuc'))
                            <p class="text-danger">{{ $errors->first('phanmuc') }}</p>
                            @endif
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="postRow d-flex">
                        <div class="base1">
                            <div>
                                <label>
                                    Tỉnh/Thành phố(
                                </label>
                                <span>*
                                </span> )
                            </div>
                        </div>
                        <div class="base2">
                            <select id="province" name="tinh">
                                <option value="">-- Tỉnh/thành phố --</option>
                                @foreach($tinh as $t)
                                <option value="{{$t->id}}">{{$t->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('tinh'))
                            <p class="text-danger">{{ $errors->first('tinh') }}</p>
                            @endif
                        </div>
                        <div class="base1">
                            <div>
                                <label>
                                    Quận/Huyện(
                                </label>
                                <span>*
                                </span> )
                            </div>
                        </div>
                        <div class="base2">
                            <select id="district" name="huyen">
                                <option value="">-- Quận/huyện --</option>
                            </select>
                            @if ($errors->has('huyen'))
                            <p class="text-danger">{{ $errors->first('huyen') }}</p>
                            @endif
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="postRow d-flex">
                        <div class="base1">
                            <div>
                                Phường/Xã
                            </div>
                        </div>
                        <div class="base2">
                            <select id="ward" name="phuong">
                                <option value="">-- Phường/xã --</option>
                            </select>
                            @if ($errors->has('phuong'))
                            <p class="text-danger">{{ $errors->first('phuong') }}</p>
                            @endif
                        </div>
                        <div class="base1">
                            <div>
                                Đường/Phố
                            </div>
                        </div>
                        <div class="base2">
                            <input type="text" id="duong" name="duong" value="{{ old('duong') }}">
                            @if ($errors->has('duong'))
                            <p class="text-danger">{{ $errors->first('duong') }}</p>
                            @endif
                        </div>
                    </div>
                    <!--  -->
                    <div class="postRow d-flex">
                        <div class="base1">
                            <div>
                                Dự án
                            </div>
                        </div>
                        <div class="base2">
                            <select name="duan" id="duan">
                                <option value="">-- Dự án --</option>
                            </select>
                            @if ($errors->has('duan'))
                            <p class="text-danger">{{ $errors->first('duan') }}</p>
                            @endif
                        </div>
                        <div class="base1">
                            <div>
                                Diện tích
                            </div>
                        </div>
                        <div class="base4">
                            <input type="text" name="dientich" value="{{ old('dientich') }}"> m<sup>2</sup>
                            @if ($errors->has('dientich'))
                            <p class="text-danger">{{ $errors->first('dientich') }}</p>
                            @endif
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="postRow d-flex">
                        <div class="base1">
                            <div>
                                Giá
                            </div>
                        </div>
                        <div class="base2">
                            <input type="text" name="giabds" value="{{ old('giabds') }}">
                            @if ($errors->has('giabds'))
                            <p class="text-danger">{{ $errors->first('giabds') }}</p>
                            @endif
                        </div>
                        <div class="base1">
                            <div>
                                Đơn vị
                            </div>
                        </div>
                        <div class="base2">
                            <select name="donvi" id="donvi"></select>
                            @if ($errors->has('donvi'))
                            <p class="text-danger">{{ $errors->first('donvi') }}</p>
                            @endif
                        </div>
                    </div>
                    <!--  -->
                    <div class="postRow d-flex">
                        <div class="base1">
                            <div>
                                <label>
                                    Địa chỉ (
                                </label>
                                <span>*
                                </span> )
                            </div>
                        </div>
                        <div class="base5">
                            <input type="text" id="diachi" name="diachi" value="{{ old('diachi') }}" readonly>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <!--  -->
                <div class="rowHeader mt-2">
                    <h2>Thông tin mô tả</h2>
                </div>
                <div class="rowContent">
                    <div class="product-description d-flex">
                        <div>
                            <p>
                                (<span class="redfont">*</span>)<span class="grayfont"> Tối đa chỉ 3000 ký tự</span>
                            </p>
                            <div>
                                <textarea name="mota" id="" style="padding:3px"></textarea>
                                @if ($errors->has('mota'))
                                <p class="text-danger">{{ $errors->first('mota') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="description-left">
                            <img src="uploads/logo/arrow.png" alt="">
                            Giới thiệu chung về bất động sản của bạn. Ví dụ: Khu nhà có vị trí thuận lợi: Gần
                            công viên, gần trường học ... Tổng diện tích 52m2, đường đi ô tô vào tận cửa.
                            <br>
                            <span style="color:red">Lưu ý: tin rao chỉ để mệnh giá tiền Việt Nam Đồng.</span>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="rowHeader mt-2">
                    <h2>Thông tin khác</h2>
                </div>
                <div class="rowContent">
                    <div class="moreInfo">
                        <div class="postRow d-flex">
                            <div class="base1">
                                Mặt tiền (m)
                            </div>
                            <div class="base2">
                                <input type="text" name="mattien" value="{{ old('mattien') }}">
                                @if ($errors->has('mattien'))
                                <p class="text-danger">{{ $errors->first('mattien') }}</p>
                                @endif
                            </div>
                            <div class="base1">
                                Đường vào (m)
                            </div>
                            <div class="base2">
                                <input type="text" name="duongvao" value="{{ old('duongvao') }}">
                                @if ($errors->has('duongvao'))
                                <p class="text-danger">{{ $errors->first('duongvao') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="postRow d-flex">
                            <div class="base1">
                                Hướng nhà
                            </div>
                            <div class="base2">
                                <select name="huongnha" id="">
                                    @foreach($huongnha as $hn)
                                    <option value="{{$hn->id}}">{{$hn->h_tenhuong}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('huongnha'))
                                <p class="text-danger">{{ $errors->first('huongnha') }}</p>
                                @endif
                            </div>
                            <div class="base1">
                                Hướng ban công
                            </div>
                            <div class="base2">
                                <select name="huongbancong" id="">
                                    @foreach($huongbancong as $hbc)
                                    <option value="{{$hbc->id}}">{{$hbc->h_tenhuongbancong}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('huongbancong'))
                                <p class="text-danger">{{ $errors->first('huongbancong') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="postRow d-flex">
                            <div class="base1">
                                Số Tầng
                            </div>
                            <div class="base2">
                                <input type="text" name="sotang" value="{{ old('sotang') }}">
                                @if ($errors->has('sotang'))
                                <p class="text-danger">{{ $errors->first('sotang') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="postRow d-flex">
                            <div class="base1">
                                Số phòng ngủ
                            </div>
                            <div class="base2">
                                <input type="text" name="sophongngu" value="{{ old('sophongngu') }}">
                                @if ($errors->has('sophongngu'))
                                <p class="text-danger">{{ $errors->first('sophongngu') }}</p>
                                @endif
                            </div>
                            <div class="base1">
                                Số toilet
                            </div>
                            <div class="base2">
                                <input type="text" name="sotoilet" value="{{ old('sotoilet') }}">
                                @if ($errors->has('sotoilet'))
                                <p class="text-danger">{{ $errors->first('sotoilet') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="postRow d-flex">
                            <div class="base1">
                                Nội thất
                            </div>
                            <div class="basearea">
                                <textarea name="noithat" id="" style="padding:3px"></textarea>
                                @if ($errors->has('noithat'))
                                <p class="text-danger">{{ $errors->first('noithat') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="rowHeader mt-2">
                    <h2>Hình ảnh và Video</h2>
                </div>
                <div class="rowContent pl-3">
                    <div class="postRow">
                        <p>Tối đa 5 ảnh . Mỗi ảnh tối đa 2MB</p>
                    </div>
                    <div class="postRow">
                        <div class="upload-btn-wrapper">
                            <button class="btn">Upload more file </button>
                            <input type="file" name="image[]" value="{{ old('image') }}" multiple />
                        </div>
                    </div>

                    <div class="postRow">
                        <p>Nếu bạn có nhu cầu Upload video, hãy liên hệ với chúng tôi để được hỗ trợ</p>
                    </div>
                </div>
                <!--  -->
                <div class="rowHeader mt-2">
                    <h2>BẢN ĐỒ</h2>
                </div>
                <div class="rowContent pl-3">
                    <div class="form-group">
                        <label>Địa chỉ bất động sản bán:</label> Bạn hãy chọn ví trí trên bản đồ trước
                        <input type="text" id="location-text-box" name="txtaddress" class="form-control" value="" />
                        <input type="hidden" id="txtaddress" name="txtaddress" value="" class="form-control" />
                        <input type="hidden" id="txtlat" value="" name="txtlat" class="form-control" />
                        <input type="hidden" id="txtlng" value="" name="txtlng" class="form-control" />
                    </div>
                    <div class="postRow ">
                        Để tăng độ tin cậy và tin rao được nhiều người quan tâm hơn, hãy sửa vị trí tin rao của bạn trên bản đồ bằng cách Chọn lại vị trí bản đồ
                    </div>
                    <div class="postRow ">
                        <div id="googleMap" style="width:720px;height:380px;"></div>
                    </div>
                    <div class="postRow ">
                        Có thể dữ liệu bản đồ không chính xác. Vì vậy nếu có bất kỳ sai xót nào xin bạn hãy báo cho chúng tôi để khắc phục kịp thời.
                    </div>
                </div>
                <!--  -->
                <div class="rowHeader mt-2">
                    <h2>Liên hệ</h2>
                </div>
                @if(Auth::check())
                <div class="rowContent pl-3">
                    <div class="postRow d-flex">
                        <div class="base1">
                            Tên liên hệ:
                        </div>
                        <div class="base6">
                            <input type="text" name="tenlienhe" value="{{Auth::user()->name}}" readonly>
                        </div>
                    </div>
                    <div class="postRow d-flex">
                        <div class="base1">
                            Địa chỉ:
                        </div>
                        <div class="base6">
                            <input type="text" name="diachilh" value="{{Auth::user()->u_lienhe}}" readonly>
                        </div>
                    </div>
                    <div class="postRow d-flex">
                        <div class="base1">
                            Điện thoại:
                        </div>
                        <div class="base7">
                            <input type="text" name="dienthoai" value="{{Auth::user()->u_dienthoai}}" readonly>
                        </div>
                    </div>
                    <div class="postRow d-flex">
                        <div class="base1">
                            Di động:
                        </div>
                        <div class="base7">
                            <input type="text" name="didong" value="{{Auth::user()->u_didong}}" readonly>
                        </div>
                    </div>
                    <div class="postRow d-flex">
                        <div class="base1">
                            Email:
                        </div>
                        <div class="base7">
                            <input type="text" name="email" value="{{Auth::user()->email}}" readonly>
                        </div>
                        <div class="ml-2">
                            <input type="checkbox" name="nhanmail" value="1"> Nhận email phản hồi
                        </div>
                    </div>
                </div>
                @else
                <div class="rowContent pl-3">
                    <div class="postRow d-flex">
                        <div class="base1">
                            Tên liên hệ:
                        </div>
                        <div class="base6">
                            <input type="text" name="tenlienhe" value="{{ old('tenlienhe') }}">
                            @if ($errors->has('tenlienhe'))
                            <p class="text-danger">{{ $errors->first('tenlienhe') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="postRow d-flex">
                        <div class="base1">
                            Địa chỉ:
                        </div>
                        <div class="base6">
                            <input type="text" name="diachilh" value="{{ old('diachilh') }}">
                            @if ($errors->has('diachilh'))
                            <p class="text-danger">{{ $errors->first('diachilh') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="postRow d-flex">
                        <div class="base1">
                            Điện thoại:
                        </div>
                        <div class="base7">
                            <input type="text" name="dienthoai" value="{{ old('dienthoai') }}">
                            @if ($errors->has('dienthoai'))
                            <p class="text-danger">{{ $errors->first('dienthoai') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="postRow d-flex">
                        <div class="base1">
                            Di động:
                        </div>
                        <div class="base7">
                            <input type="text" name="didong" value="{{ old('didong') }}">
                            @if ($errors->has('didong'))
                            <p class="text-danger">{{ $errors->first('didong') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="postRow d-flex">
                        <div class="base1">
                            Email:
                        </div>
                        <div class="base7">
                            <input type="text" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="ml-2">
                            <input type="checkbox" name="nhanmail" value="1"> Nhận email phản hồi
                        </div>
                    </div>
                </div>
                @endif
                <!--  -->
                <div class="rowHeader mt-2">
                    <h2>LỊCH ĐĂNG TIN</h2>
                </div>
                <div class="rowContent pl-3 date-add-news">
                    <div class="row rownews1">
                        <div class="colnews-1">
                            <p>Loại tin rao</p>
                            <select name="loaitin" id="optionNews">
                                @foreach($loaitinrao as $ltr)
                                <option value="{{$ltr->id}}">{{$ltr->l_tenloaitin}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="colnews-2">
                            <p>Ngày bắt đầu</p>
                            <input type="text" id="date" name="ngaybatdau">
                        </div>
                        <div class="colnews-3">
                            <p>Ngày kết thúc</p>
                            <input type="text" id="dateEnd" name="ngayketthuc">
                        </div>
                    </div>
                    <div class="row" id="tin-thuong">
                        <div class="tin-thuong">
                            <strong>Tin thường:</strong> Là loại tin đăng bằng chữ <span>màu xanh</span>, khung <span>màu xanh</span>
                        </div>
                    </div>
                    <div class="row" id="tin-uu-dai">
                        <div class="tin-thuong">
                            <strong>Vip ưu đãi:</strong> Là loại tin được hiển thị trong vòng 3 tháng, mỗi tuần sẽ được up tin tự động 1 lần. Tuần đầu tiên sẽ được hiển thị dưới hình thức VIP 2, các tuần tiếp theo hiển thị hình thức tin thường
                        </div>
                    </div>
                    <div class="row" id="tin-vip-3">
                        <div class="tin-vip-3">
                            <strong>Tin Vip 3:</strong> Là loại tin đăng bằng chữ <span>thường màu cam</span>, khung <span>màu cam</span>
                        </div>
                    </div>
                    <div class="row" id="tin-vip-2">
                        <div class="tin-vip-3">
                            <strong>Tin Vip 2:</strong> Là loại tin đăng bằng chữ <span>IN HOA MÀU CAM</span>, khung <span>màu cam</span>
                        </div>
                    </div>
                    <div class="row" id="tin-vip-1">
                        <div class="tin-vip-1">
                            <strong>Tin Vip 1:</strong> Là loại tin đăng bằng chữ <span>IN HOA MÀU ĐỎ</span>, khung <span>màu đỏ</span>
                        </div>
                    </div>
                    <div class="row" id="tin-dac-biet">
                        <div class="tin-vip-1">
                            <strong>Vip đặc biệt:</strong> Là loại tin đăng bằng chữ <span>IN HOA MÀU ĐỎ</span>, khung <span>màu đỏ</span> gắn biểu tượng ngôi sao vàng nổi bật ở tiêu đề tin đăng, hiển thị ở top đầu trang tin và được hưởng nhiều ưu tiên nhất
                        </div>
                    </div>
                    <div class="row">
                        <div class="tininfo">
                            <div>Đơn giá cuối cùng: <span>
                                    <span id="idgia"></span>
                                    đồng/Ngày</span> Số ngày: <span><span class="countDate" id="idngay"></span> ngày</span></div>
                        </div>
                    </div>
                    <div class="product-vipnotice">
                        <img alt="vip icon" src="uploads/logo/vip-icon.jpg" style="padding-top: 3px;">
                        <div>
                            Quý khách nên chọn đăng tin Vip để có hiệu quả cao hơn, ví dụ: tin Vip1 có lượt
                            xem trung bình cao hơn <strong>20 lần</strong> so với tin thường
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="rowHeader mt-2">
                    <h2>THÀNH TIỀN</h2>
                </div>
                <div class="rowContent pl-3">
                    <div class="price-news-post">
                        <div class="post-col-1">
                            <div class="post-col-1-header">
                                Phí đăng tin
                            </div>
                            <div class="post-col-1-bor">
                                <p><span id="phiDangTin" class="phiDangTin"></span> đồng</p>
                            </div>
                        </div>
                        <div class="post-col-1">
                            <div class="post-col-1-header">VAT(10%)</div>
                            <div class="post-col-1-bor">
                                <p><span id="phiVAT" class="phiVAT"></span> đồng</p>
                            </div>
                        </div>
                        <div class="post-col-3">
                            <div class="post-col-3-header">Thành tiền</div>
                            <div class="post-col-3-bor">
                                <p><span id="thanhTien" class="thanhTien"></span>đồng</p>
                                <input type="hidden" name="tien" id="tien" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="row btn-sumit-post">
                    <button class="bluebotton" type="submit">
                        Đăng tin không cần tài khoản
                    </button>
                </div>
            </form>
            <div class="mb-4">
                <p style="margin:0px">Lưu ý:</p>
                Quý khách đang sử dụng tính năng đăng tin nhanh của Batdongsan.com.vn. Tính năng này giúp Quý khách có thể đăng tin ngay mà không cần phải đăng ký hay đăng nhập như tại nhiều website khác. Tuy nhiên, để có thể quản lý được tin đăng của mình thuận lợi hơn thì Quý khách nên đăng ký và đăng nhập. Việc này cũng giúp Quý khách có thể đăng được nhiều tin hơn so với giới hạn tối đa 3 tin rao vặt nhà đất khi Quý khách không đăng nhập.
                Nếu gặp bất kỳ khó khăn gì trong việc đăng ký, đăng nhập, đăng tin hay trong việc sử dụng website nói chung, Quý vị hãy liên hệ ngay với tổng đài CSKH của chúng tôi: 1900 1881 hoặc email: <strong>hotro@batdongsan.com.vn</strong> để được trợ giúp
            </div>
            <!--  -->
        </div>
        <!-- end-left -->
        <div class="col-md-3">
            <div class="row">
                <div class="header-left-post">
                    <h3>HƯỚNG DẪN ĐĂNG TIN</h3>
                </div>
                <div class="header-left-bor">
                    <ul>
                        <li>Thông tin có dấu (*) là bắt buộc.</li>
                        <li>Không gộp nhiều bất động sản trong một tin rao.</li>
                        <li>Không đăng lại tin đã đăng trên www.batdongsan.com.vn.</li>
                        <li>Nên sử dụng trình duyệt FireFox 3.0, IE7 trở lên hoặc Google Chrome để việc đăng tin và truy cập website được thuận lợi.</li>
                        <li>Để quá trình đăng tin và duyệt nhanh hơn, xin lưu ý: gõ tiếng việt có dấu và không viết tắt...</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end-right -->
    </div>
</div>
@endsection('content')
<!--ket thuc noi dung</!-->
@section('scripts')
<!-- <script>
    var map;

    function initMap() {

        map = new google.maps.Map(document.getElementById('googleMap'), {
            center: {
                lat: 18.661380,
                lng: 105.697430
            },
            zoom: 12,
            draggable: true
        });
        var marker = new google.maps.Marker({
            position: {
                lat: 18.661380,
                lng: 105.697430
            },
            draggable: true,
            animation: google.maps.Animation.BOUNCE
        });
        marker.setMap(map);

    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzlVX517mZWArHv4Dt3_JVG0aPmbSE5mE&callback=initMap" async defer></script> -->


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzlVX517mZWArHv4Dt3_JVG0aPmbSE5mE&callback=initialize&libraries=geometry,places" async defer></script>
<script>
    var map;
    var marker;

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

        // Get GEOLOCATION
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = new google.maps.LatLng(position.coords.latitude,
                    position.coords.longitude);
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'latLng': pos
                }, function(results, status) {
                    if (status ==
                        google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            console.log(results[0].formatted_address);
                        } else {
                            console.log('No results found');
                        }
                    } else {
                        console.log('Geocoder failed due to: ' + status);
                    }
                });
                map.setCenter(pos);
                marker = new google.maps.Marker({
                    position: pos,
                    map: map,
                    draggable: true
                });
            }, function() {
                handleNoGeolocation(true);
            });
        } else {
            handleNoGeolocation(false);
        }

        function handleNoGeolocation(errorFlag) {
            if (errorFlag) {
                var content = 'Error: The Geolocation service failed.';
            } else {
                var content = 'Error: Your browser doesn\'t support geolocation.';
            }

            var options = {
                map: map,
                zoom: 19,
                position: new google.maps.LatLng(18.665136, 105.690173),
                content: content
            };

            map.setCenter(options.position);
            marker = new google.maps.Marker({
                position: options.position,
                map: map,
                zoom: 19,
                icon: "uploads/logo/gps.png",
                draggable: true
            });
            /* Dragend Marker */
            google.maps.event.addListener(marker, 'dragend', function() {
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'latLng': marker.getPosition()
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#location-text-box').val(results[0].formatted_address);
                            $('#txtaddress').val(results[0].formatted_address);
                            $('#txtlat').val(marker.getPosition().lat());
                            $('#txtlng').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });
            });
            /* End Dragend */

        }

        // get places auto-complete when user type in location-text-box
        var input = /** @type {HTMLInputElement} */
            (
                document.getElementById('location-text-box'));


        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        marker = new google.maps.Marker({
            map: map,
            anchorPoint: new google.maps.Point(0, -29),
            draggable: true
        });

        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                'latLng': place.geometry.location
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        $('#txtaddress').val(results[0].formatted_address);
                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);
                    }
                }
            });
            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17); // Why 17? Because it looks good.
            }
            marker.setIcon( /** @type {google.maps.Icon} */ ({
                url: "uploads/logo/gps.png"
            }));
            document.getElementById('txtlat').value = place.geometry.location.lat();
            document.getElementById('txtlng').value = place.geometry.location.lng();
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''), (place.address_components[1] && place.address_components[1].short_name || ''), (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }
            /* Dragend Marker */
            google.maps.event.addListener(marker, 'dragend', function() {
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'latLng': marker.getPosition()
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $('#location-text-box').val(results[0].formatted_address);
                            $('#txtlat').val(marker.getPosition().lat());
                            $('#txtlng').val(marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });
            });
            /* End Dragend */
        });

    }


    // google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection('scripts')