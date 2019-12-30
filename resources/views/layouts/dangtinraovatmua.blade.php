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
                <div class="dang-tin-rao-tab1 "><a href="dang-tin-rao-vat-ban-nha-dat">Cần bán/Cho thuê</a></div>
                <div class="dang-tin-rao-tab2 active"><a href="dang-tin-rao-vat-mua-nha-dat">Cần mua/Cần thuê</a></div>
            </div> 
            <form action="dang-tin-rao-vat-mua-nha-dat" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="rowHeader">
                <h2>LỊCH ĐĂNG TIN</h2>
            </div>
            <div class="rowContent d-flex">
                <div class="begin-date"><span>Ngày bắt đầu</span>
                    <input type="text" id="date" name="ngaybatdau">
                         @if ($errors->has('ngaybatdau'))
                            <p class="text-danger">{{ $errors->first('ngaybatdau') }}</p>
                        @endif
                </div>
                <div class="end-date">
                    <span>
                    Ngày kết thúc</span>
                        <input type="text" id="dateEnd"  name="ngayketthuc">
                        @if ($errors->has('ngayketthuc'))
                            <p class="text-danger">{{ $errors->first('ngayketthuc') }}</p>
                        @endif
                        
                </div>
            </div>
            <!--  -->
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
                        <input type="text"  name="tieude" value="{{ old('tieude') }}">
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
                        <select name="hinhthuc" id="hinhthucmua">
                            <option value="">-- Hình thức --</option>
                            @foreach($hinhthuc as $ht)
                            <option value="{{$ht->id}}">{{$ht->d_tendanhmuc}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('hinhthuc'))
                            <p class="text-danger">{{ $errors->first('hinhthuc') }}</p>
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
                        <select name="phanmuc" id="loaitinmua">
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
                        <select name="tinh" id="province">
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
                        <select name="huyen" id="district">
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
                        <select name="phuong" id="ward">
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
                        <input type="text"  id="duong" name="duong" value="{{ old('duong') }}">
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
                    <div class="base2">
                        <select name="dientich" id="">
                            @foreach($dientich as $dt)
                            <option value="{{$dt->id}}">{{$dt->d_ten}}</option>
                            @endforeach
                        </select>
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
                        <select name="gia" id="">
                            @foreach($gia as $g)
                            <option value="{{$g->id}}">{{$g->g_ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="base1">
                        <div>                                          
                           
                        </div>
                    </div>
                    <div class="base2">
                        
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
                            <textarea name="mota" id=""></textarea>
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
                <h2>Hình ảnh và Video</h2>
            </div>
            <div class="rowContent pl-3">
                <div class="postRow">
                    <p>Tối đa 5 ảnh . Mỗi ảnh tối đa 2MB</p>
                </div>
                @for($i=1;$i<=5;$i++)
                <div class="postRow">
                    <div class="upload-btn-wrapper">
                        <button class="btn">Upload a file {!!$i!!}</button>
                        <input type="file" name="image[]" value="{{ old('image') }}" />
                        @if ($errors->has('image'))
                            <p class="text-danger">{{ $errors->first('image') }}</p>
                            @endif
                    </div>
                </div>    
                @endfor
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
                        <input type="text" name="tenlienhe" value="{{auth::user()->name}}" readonly>
                    </div>
                </div>
                <div class="postRow d-flex">
                    <div class="base1">                        
                        Địa chỉ:
                    </div>
                    <div class="base6">
                        <input type="text" name="diachilh" value="{{auth::user()->u_lienhe}}" readonly>
                    </div>
                </div>
                <div class="postRow d-flex">
                    <div class="base1">                                        
                        Điện thoại:
                    </div>
                    <div class="base7">
                        <input type="text" name="dienthoai" value="{{ auth::user()->u_dienthoai }}" readonly>
                    </div>
                </div>
                <div class="postRow d-flex">
                    <div class="base1">                                                   
                        Di động:
                    </div>
                    <div class="base7">
                        <input type="text"  name="didong" value="{{auth::user()->u_didong}}" readonly>
                    </div>
                </div>
                <div class="postRow d-flex">
                    <div class="base1">                                       
                        Email:
                    </div>
                    <div class="base7">
                        <input type="email"  name="email" value="{{ auth::user()->email}}" readonly>
                    </div>
                    <div class="ml-2">
                        <input type="checkbox" name="nhanmail" value="1">Nhận email phản hồi
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
                        <input type="text"  name="didong" value="{{ old('didong') }}">
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
                        <input type="email"  name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                    </div>
                    <div class="ml-2">
                        <input type="checkbox" name="nhanmail" value="1">Nhận email phản hồi
                    </div>
                </div>
            </div>
            @endif
            <!--  -->
            <div class="row btn-sumit-post">
                <button class="bluebotton" type="submit">
                Đăng tin 
                </button>
            </div>
            </form>
            <div class="mb-4">
                Nếu gặp bất kỳ khó khăn gì trong việc đăng ký, đăng nhập, đăng tin hay trong việc sử dụng website nói chung, Quý vị hãy liên hệ ngay với chúng tôi theo tổng đài CSKH: 1900 1881 hoặc email: <strong>hotro@batdongsan.com.vn</strong> để được trợ giúp
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
