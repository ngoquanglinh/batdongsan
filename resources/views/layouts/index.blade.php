@extends('layouts.master')
@section('tittle','Kênh thông tin bất động sản - Mua bán nhà đất số 1 Việt Nam')
@section('content')
<div class="content">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row mt-2">
                            <div class="col-md-4 search-box">
                                <div class="header-seacrh">
                                    <p>Công cụ tìm kiếm</p>
                                </div>
                                <div class="tab-search">
                                    <ul class="nav nav-tabs style-active" role="tablist">
                                        <li class="nav-item "><a href="#nhadatban" role="tab" data-toggle="tab" class="nav-link active">Nhà đất bán</a></li>
                                        <li><a href="#nhadatthue" role="tab" data-toggle="tab" class="nav-link ">Nhà đất cho thuê</a></li>
                                        <li><a href="#moigioi" role="tab" data-toggle="tab" class="nav-link ">Tìm môi giới</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content tab-option ">
                                        <div class="tab-pane active" id="nhadatban">
                                            <div class="set-height-box">
                                            <div>
                                                <input type="text" placeholder="Nhập địa điểm,vd cali city">
                                            </div>
                                            <div>
                                                <select name="" id="">
                                                    <option value="">--Chọn loại nhà đất--</option>
                                                    @foreach($nhadatban as $ndb)
                                                    <option value="{{$ndb->id}}">{{$ndb->d_tendanhmuc}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <select name="" id="province">
                                                    <option value="">--Chọn Tỉnh/Thành phố--</option>
                                                    @foreach($tinh as $t)
                                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <select name="" id="district">
                                                    <option value="">--Chọn Quận/Huyện--</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select name="" id="chooseDienTich">
                                                    <option value="">--Chọn loại diện tích--</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select name="" id="chooseMucGia">
                                                    <option value="">--Chọn loại mức giá--</option>
                                                    <option value="">b</option>
                                                </select>
                                            </div>
                                            <div class="showsearch-advanced">
                                                <div>
                                                    <select name="" id="chooseMucGia">
                                                        <option value="">--Chọn phường/xã--</option>
                                                        <option value="">b</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <select name="" id="chooseMucGia">
                                                        <option value="">--Chọn số phòng ngủ--</option>
                                                        <option value="">b</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <select name="" id="chooseMucGia">
                                                        <option value="">--Chọn hướng nhà--</option>
                                                        <option value="">b</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <select name="" id="chooseMucGia">
                                                        <option value="">--Chọn dự án--</option>
                                                        <option value="">b</option>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="search-leve-btn">
                                                <span class="TimKiemNangCao"><a >Tìm Nâng cao</a></span>
                                                <span class="BoTimKiemNangCao"><a>Bỏ Tìm Nâng cao</a></span>
                                                <span>
                                                    <button type="submit" class="btn-search">
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- end tab1 -->
                                        <div class="tab-pane tab-option" id="nhadatthue">
                                            <div class="set-height-box">
                                            <div>
                                                <input type="text" placeholder="Nhập địa điểm,vd cali city">
                                            </div>
                                            <div>
                                                <select name="" id="">
                                                    <option value="">--Chọn loại nhà đất--</option>
                                                    <option value="">b</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select name="" id="">
                                                    <option value="">--Chọn Tỉnh/Thành phố--</option>
                                                    <option value="">b</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select name="" id="">
                                                    <option value="">--Chọn Quận/Huyện--</option>
                                                    <option value="">b</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select name="" id="">
                                                    <option value="">--Chọn loại diện tích--</option>
                                                    <option value="">b</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select name="" id="">
                                                    <option value="">--Chọn loại mức giá--</option>
                                                    <option value="">b</option>
                                                </select>
                                            </div>
                                            <div class="showsearch-advanced">
                                                <div>
                                                    <select name="" id="chooseMucGia">
                                                        <option value="">--Chọn phường/xã--</option>
                                                        <option value="">b</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <select name="" id="chooseMucGia">
                                                        <option value="">--Chọn số phòng ngủ--</option>
                                                        <option value="">b</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <select name="" id="chooseMucGia">
                                                        <option value="">--Chọn hướng nhà--</option>
                                                        <option value="">b</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <select name="" id="chooseMucGia">
                                                        <option value="">--Chọn dự án--</option>
                                                        <option value="">b</option>
                                                    </select>
                                                </div>
                                            </div>   
                                            </div>
                                            <div class="search-leve-btn">
                                                <span class="TimKiemNangCao"><a>Tìm Nâng cao</a></span>
                                                <span class="BoTimKiemNangCao"><a>Bỏ Tìm Nâng cao</a></span>
                                                <span>
                                                    <button type="submit" class="btn-search">
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- endtab2 -->
                                        <div class="tab-pane" id="moigioi">
                                            <div>
                                                <select name="" id="">
                                                    <option value="">--Chọn loại giao dịch--</option>
                                                    <option value="">b</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select name="" id="">
                                                    <option value="">--Chọn nhà đất--</option>
                                                    <option value="">b</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select name="" id="">
                                                    <option value="">--Chọn loại Tỉnh/Thành phố--</option>
                                                    <option value="">b</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select name="" id="">
                                                    <option value="">--Chọn Quận/Huyện--</option>
                                                    <option value="">b</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select name="" id="">
                                                    <option value="">--Chọn dự án--</option>
                                                    <option value="">b</option>
                                                </select>
                                            </div>
                                            <div class="search-leve-btn">
                                                <span>
                                                    <button type="submit" class="btn-search-edit">
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- énd tab3 -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                        <!-- Indicators -->
                                       

                                        <!-- The slideshow -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row new-list">
                                                    <div class="col-md-5 slide-news-img">
                                                        <img src="uploads/images/20191012113752-0896.jpg" alt="Los Angeles">
                                                    </div>
                                                    <div class="col-md-7 slide-news">
                                                        <div>
                                                            <a href="">Sóng đầu tư dự án đẩy giá nhà đất các tỉnh Đồng bằng sông Cửu Long</a>
                                                        </div>
                                                        <div>
                                                            <p>Chẳng cần tốn tiền đi du lịch, cư dân ở đại đô thị Halong Marina sẽ được trải nghiệm kỳ nghỉ dưỡng kéo dài tại chính ngôi nhà của mình bên bờ vịnh di sản. Hơi thở của biển sẽ mang lại cho chủ nhân sinh khí, vượng khí và giá trị sống an lành.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item ">
                                                <div class="row new-list">
                                                    <div class="col-md-5 slide-news-img">
                                                        <img src="uploads/images/20191012113752-0896.jpg" alt="Los Angeles">
                                                    </div>
                                                    <div class="col-md-7 slide-news">
                                                        <div>
                                                            <a href="">Sóng đầu tư dự án đẩy giá nhà đất các tỉnh Đồng bằng sông Cửu Long</a>
                                                        </div>
                                                        <div>
                                                            <p>Chẳng cần tốn tiền đi du lịch, cư dân ở đại đô thị Halong Marina sẽ được trải nghiệm kỳ nghỉ dưỡng kéo dài tại chính ngôi nhà của mình bên bờ vịnh di sản. Hơi thở của biển sẽ mang lại cho chủ nhân sinh khí, vượng khí và giá trị sống an lành.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item ">
                                                <div class="row new-list">
                                                    <div class="col-md-5 slide-news-img">
                                                        <img src="uploads/images/20191012113752-0896.jpg" alt="Los Angeles">
                                                    </div>
                                                    <div class="col-md-7  slide-news">
                                                        <div>
                                                            <a href="">Sóng đầu tư dự án đẩy giá nhà đất các tỉnh Đồng bằng sông Cửu Long</a>
                                                        </div>
                                                        <div>
                                                            <p>Chẳng cần tốn tiền đi du lịch, cư dân ở đại đô thị Halong Marina sẽ được trải nghiệm kỳ nghỉ dưỡng kéo dài tại chính ngôi nhà của mình bên bờ vịnh di sản. Hơi thở của biển sẽ mang lại cho chủ nhân sinh khí, vượng khí và giá trị sống an lành.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row new-list">
                                                    <div class="col-md-5 slide-news-img">
                                                        <img src="uploads/images/20191012113752-0896.jpg" alt="Los Angeles">
                                                    </div>
                                                    <div class="col-md-7 slide-news">
                                                        <div>
                                                            <a href="">Sóng đầu tư dự án đẩy giá nhà đất các tỉnh Đồng bằng sông Cửu Long</a>
                                                        </div>
                                                        <div>
                                                            <p>Chẳng cần tốn tiền đi du lịch, cư dân ở đại đô thị Halong Marina sẽ được trải nghiệm kỳ nghỉ dưỡng kéo dài tại chính ngôi nhà của mình bên bờ vịnh di sản. Hơi thở của biển sẽ mang lại cho chủ nhân sinh khí, vượng khí và giá trị sống an lành.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row new-list">
                                                    <div class="col-md-5 slide-news-img">
                                                        <img src="uploads/images/20191012113752-0896.jpg" alt="Los Angeles">
                                                    </div>
                                                    <div class="col-md-7  slide-news">
                                                        <div>
                                                            <a href="">Sóng đầu tư dự án đẩy giá nhà đất các tỉnh Đồng bằng sông Cửu Long</a>
                                                        </div>
                                                        <div>
                                                            <p>Chẳng cần tốn tiền đi du lịch, cư dân ở đại đô thị Halong Marina sẽ được trải nghiệm kỳ nghỉ dưỡng kéo dài tại chính ngôi nhà của mình bên bờ vịnh di sản. Hơi thở của biển sẽ mang lại cho chủ nhân sinh khí, vượng khí và giá trị sống an lành.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Left and right controls -->
                                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">

                                        </a>
                                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">

                                        </a>
                                    </div>
                                    <!-- ket thuc slide tin -->
                                </div>
                                <div class="row">
                                    <div class="list-news">
                                        <ul>
                                            <li><a href="">Tin tức bất động sản nổi bật tuần từ 05/10 đến 12/10/2019</a></li>
                                            <li><a href="">Tin tức bất động sản nổi bật tuần từ 05/10 đến 12/10/2019</a></li>
                                            <li><a href="">Tin tức bất động sản nổi bật tuần từ 05/10 đến 12/10/2019</a></li>
                                            <li><a href="">Tin tức bất động sản nổi bật tuần từ 05/10 đến 12/10/2019</a></li>
                                            <li><a href="">Tin tức bất động sản nổi bật tuần từ 05/10 đến 12/10/2019</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ket thu phan slide-news -->
                        <div class="row ads-news">
                            <img src="uploads/ads/20191009111124-354a.jpg" alt="">
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="header-product">
                                    <p>Tin rao dành cho bạn</p>
                                </div>
                                <div class="line-gr">
                                </div>
                                <div class="product-group">
                                    <ul>
                                        <li>
                                            <div class="list-tinrao">
                                                <div>
                                                    <img src="uploads/images/20191012113752-0896.jpg" alt="">
                                                </div>
                                                <div class="product-infor">
                                                    <div class="product-title product-vip">
                                                        <a href="">Cần bán 67,5m2 đất nền khu phố chợ Lương Sơn, Hòa Bình</a> 
                                                    </div>
                                                    <div class="product-infor-content">
                                                     
                                                         <div class="product-infor-content-left">
                                                             <div class="">Giá</div>
                                                            <div class="">Diện tích</div>
                                                             <div class="">Quận/huyện</div>
                                                         </div>
                                                         <div class="product-infor-content-mid">
                                                             <div class="">: 750 triệu</div>
                                                            <div class="">: 67,5m</div>
                                                             <div class="address-pd">: <a href="">anh sơn</a>,<a href="">nghệ an</a></div>
                                                         </div>
                                                         <div class="product-infor-content-right">
                                                             14/10/2019
                                                         </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-tinrao">
                                                <div>
                                                    <img src="uploads/images/20191012113752-0896.jpg" alt="">
                                                </div>
                                                <div class="product-infor">
                                                    <div class="product-title  product-vip1">
                                                        <a href="">Cần bán 67,5m2 đất nền khu phố chợ Lương Sơn, Hòa Bình</a> 
                                                    </div>
                                                    <div class="product-infor-content">
                                                     
                                                         <div class="product-infor-content-left">
                                                             <div class="">Giá</div>
                                                            <div class="">Diện tích</div>
                                                             <div class="">Quận/huyện</div>
                                                         </div>
                                                         <div class="product-infor-content-mid">
                                                             <div class="">: 750 triệu</div>
                                                            <div class="">: 67,5m</div>
                                                             <div class="address-pd">: <a href="">anh sơn</a>,<a href="">nghệ an</a></div>
                                                         </div>
                                                         <div class="product-infor-content-right">
                                                             14/10/2019
                                                         </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-tinrao">
                                                <div>
                                                    <img src="uploads/images/20191012113752-0896.jpg" alt="">
                                                </div>
                                                <div class="product-infor">
                                                    <div class="product-title">
                                                        <a href="">Cần bán 67,5m2 đất nền khu phố chợ Lương Sơn, Hòa Bình</a> 
                                                    </div>
                                                    <div class="product-infor-content">
                                                     
                                                         <div class="product-infor-content-left">
                                                             <div class="">Giá</div>
                                                            <div class="">Diện tích</div>
                                                             <div class="">Quận/huyện</div>
                                                         </div>
                                                         <div class="product-infor-content-mid">
                                                             <div class="">: 750 triệu</div>
                                                            <div class="">: 67,5m</div>
                                                             <div class="address-pd">: <a href="">anh sơn</a>,<a href="">nghệ an</a></div>
                                                         </div>
                                                         <div class="product-infor-content-right">
                                                             14/10/2019
                                                         </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-tinrao">
                                                <div>
                                                    <img src="uploads/images/20191012113752-0896.jpg" alt="">
                                                </div>
                                                <div class="product-infor">
                                                    <div class="product-title">
                                                        <a href="">Cần bán 67,5m2 đất nền khu phố chợ Lương Sơn, Hòa Bình</a> 
                                                    </div>
                                                    <div class="product-infor-content">
                                                     
                                                         <div class="product-infor-content-left">
                                                             <div class="">Giá</div>
                                                            <div class="">Diện tích</div>
                                                             <div class="">Quận/huyện</div>
                                                         </div>
                                                         <div class="product-infor-content-mid">
                                                             <div class="">: 750 triệu</div>
                                                            <div class="">: 67,5m</div>
                                                             <div class="address-pd">: <a href="">anh sơn</a>,<a href="">nghệ an</a></div>
                                                         </div>
                                                         <div class="product-infor-content-right">
                                                             14/10/2019
                                                         </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-tinrao">
                                                <div>
                                                    <img src="uploads/images/20191012113752-0896.jpg" alt="">
                                                </div>
                                                <div class="product-infor">
                                                    <div class="product-title">
                                                        <a href="">Cần bán 67,5m2 đất nền khu phố chợ Lương Sơn, Hòa Bình</a> 
                                                    </div>
                                                    <div class="product-infor-content">
                                                     
                                                         <div class="product-infor-content-left">
                                                             <div class="">Giá</div>
                                                            <div class="">Diện tích</div>
                                                             <div class="">Quận/huyện</div>
                                                         </div>
                                                         <div class="product-infor-content-mid">
                                                             <div class="">: 750 triệu</div>
                                                            <div class="">: 67,5m</div>
                                                             <div class="address-pd">: <a href="">anh sơn</a>,<a href="">nghệ an</a></div>
                                                         </div>
                                                         <div class="product-infor-content-right">
                                                             14/10/2019
                                                         </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-tinrao">
                                                <div>
                                                    <img src="uploads/images/20191012113752-0896.jpg" alt="">
                                                </div>
                                                <div class="product-infor">
                                                    <div class="product-title">
                                                        <a href="">Cần bán 67,5m2 đất nền khu phố chợ Lương Sơn, Hòa Bình</a> 
                                                    </div>
                                                    <div class="product-infor-content">
                                                     
                                                         <div class="product-infor-content-left">
                                                             <div class="">Giá</div>
                                                            <div class="">Diện tích</div>
                                                             <div class="">Quận/huyện</div>
                                                         </div>
                                                         <div class="product-infor-content-mid">
                                                             <div class="">: 750 triệu</div>
                                                            <div class="">: 67,5m</div>
                                                             <div class="address-pd">: <a href="">anh sơn</a>,<a href="">nghệ an</a></div>
                                                         </div>
                                                         <div class="product-infor-content-right">
                                                             14/10/2019
                                                         </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </li>
                                                 
                                            <li>
                                            <div class="list-tinrao">
                                                <div>
                                                    <img src="uploads/images/20191012113752-0896.jpg" alt="">
                                                </div>
                                                <div class="product-infor">
                                                    <div class="product-title">
                                                        <a href="">Cần bán 67,5m2 đất nền khu phố chợ Lương Sơn, Hòa Bình</a> 
                                                    </div>
                                                    <div class="product-infor-content">
                                                     
                                                         <div class="product-infor-content-left">
                                                             <div class="">Giá</div>
                                                            <div class="">Diện tích</div>
                                                             <div class="">Quận/huyện</div>
                                                         </div>
                                                         <div class="product-infor-content-mid">
                                                             <div class="">: 750 triệu</div>
                                                            <div class="">: 67,5m</div>
                                                             <div class="address-pd">: <a href="">anh sơn</a>,<a href="">nghệ an</a></div>
                                                         </div>
                                                         <div class="product-infor-content-right">
                                                             14/10/2019
                                                         </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-tinrao">
                                                <div>
                                                    <img src="uploads/images/20191012113752-0896.jpg" alt="">
                                                </div>
                                                <div class="product-infor">
                                                    <div class="product-title">
                                                        <a href="">Cần bán 67,5m2 đất nền khu phố chợ Lương Sơn, Hòa Bình</a> 
                                                    </div>
                                                    <div class="product-infor-content">
                                                     
                                                         <div class="product-infor-content-left">
                                                             <div class="">Giá</div>
                                                            <div class="">Diện tích</div>
                                                             <div class="">Quận/huyện</div>
                                                         </div>
                                                         <div class="product-infor-content-mid">
                                                             <div class="">: 750 triệu</div>
                                                            <div class="">: 67,5m</div>
                                                             <div class="address-pd">: <a href="">anh sơn</a>,<a href="">nghệ an</a></div>
                                                         </div>
                                                         <div class="product-infor-content-right">
                                                             14/10/2019
                                                         </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-tinrao">
                                                <div>
                                                    <img src="uploads/images/20191012113752-0896.jpg" alt="">
                                                </div>
                                                <div class="product-infor">
                                                    <div class="product-title">
                                                        <a href="">Cần bán 67,5m2 đất nền khu phố chợ Lương Sơn, Hòa Bình</a> 
                                                    </div>
                                                    <div class="product-infor-content">
                                                     
                                                         <div class="product-infor-content-left">
                                                             <div class="">Giá</div>
                                                            <div class="">Diện tích</div>
                                                             <div class="">Quận/huyện</div>
                                                         </div>
                                                         <div class="product-infor-content-mid">
                                                             <div class="">: 750 triệu</div>
                                                            <div class="">: 67,5m</div>
                                                             <div class="address-pd">: <a href="">anh sơn</a>,<a href="">nghệ an</a></div>
                                                         </div>
                                                         <div class="product-infor-content-right">
                                                             14/10/2019
                                                         </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </li>  
                                         <li>
                                            <div class="list-tinrao">
                                                <div>
                                                    <img src="uploads/images/20191012113752-0896.jpg" alt="">
                                                </div>
                                                <div class="product-infor">
                                                    <div class="product-title">
                                                        <a href="">Cần bán 67,5m2 đất nền khu phố chợ Lương Sơn, Hòa Bình</a> 
                                                    </div>
                                                    <div class="product-infor-content">
                                                     
                                                         <div class="product-infor-content-left">
                                                             <div class="">Giá</div>
                                                            <div class="">Diện tích</div>
                                                             <div class="">Quận/huyện</div>
                                                         </div>
                                                         <div class="product-infor-content-mid">
                                                             <div class="">: 750 triệu</div>
                                                            <div class="">: 67,5m</div>
                                                             <div class="address-pd">: <a href="">anh sơn</a>,<a href="">nghệ an</a></div>
                                                         </div>
                                                         <div class="product-infor-content-right">
                                                             14/10/2019
                                                         </div>
                                                    </div>     
                                                </div>
                                            </div>
                                        </li>          
                                    </ul>
                                     <div class="more-news">
                                            <a href="">Xem thêm các tin rao nhà đất tương tự</a>
                                      </div>
                                </div>
                                <div class="row paginain-news">
                                    <div class="col-md-6">
                                        <div>Tin Nhà đất bán mới nhất:</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>Tin Nhà đất cho thuê mới nhất:
                                        </div>
                                    </div>
                                </div>
                                <!-- phan trang -->
                                <div class="row">
                                    Tin tức lĩnh vực nhà đất mới nhất
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="header-baiviet">
                                             <ul>
                                                 <li class="new-news"><a href="">bai viet moi</a></li>
                                                 <li><a href="">tu van luat</a></li>
                                                 <li>   <a href="">xay dung</a></li>
                                                <li><a href="">kien truc</a></li>
                                                <li>   <a href="">noi-ngoai that</a></li>
                                                <li><a href="">phong thuy</a></li>
                                             </ul>
                                         </div>
                                        <div>
                                            <p class="line-home"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="group-news-new">   
                                    <div class="row">
                                        <div class="col-md-6 group-news-new-left">
                                                <div>
                                                     <a href=""><img src="uploads/images/20191012113752-0896.jpg" alt=""></a>
                                                 <div class="group-news-new-left-title">
                                                         <a href="">1001 ý tưởng tái chế pallet gỗ làm nội thất gia đình</a>
                                                </div>
                                                 <div class="group-news-new-left-intro">
                                                    <p>Trước kia, ứng dụng của pallet gỗ chỉ giới hạn trong ngành công nghiệp vận chuyển. Tuy nhiên, những năm gần đây, nhiều người bắt đầu tìm cách tái chế pallet gỗ, biến chúng
                                                    </p>
                                                
                                                 </div>
                                             </div>
                                        </div>
                                        <div class="col-md-6 group-news-new-left">
                                                <div>
                                                     <a href=""><img src="uploads/images/20191012113752-0896.jpg" alt=""></a>
                                                 <div class="group-news-new-left-title">
                                                         <a href="">1001 ý tưởng tái chế pallet gỗ làm nội thất gia đình</a>
                                                </div>
                                                 <div class="group-news-new-left-intro">
                                                Trước kia, ứng dụng của pallet gỗ chỉ giới hạn trong ngành công nghiệp vận chuyển. Tuy nhiên, những năm gần đây, nhiều người bắt đầu tìm cách tái chế pallet gỗ, biến chúng
                                                 </div>
                                             </div>
                                        </div>
                                     </div>
                                     <!-- dong1 -->
                                      <div class="row">
                                        <div class="col-md-6 group-news-new-left">
                                                <div>
                                                     <a href=""><img src="uploads/images/20191012113752-0896.jpg" alt=""></a>
                                                 <div class="group-news-new-left-title">
                                                         <a href="">1001 ý tưởng tái chế pallet gỗ làm nội thất gia đình</a>
                                                </div>
                                                 <div class="group-news-new-left-intro">
                                                Trước kia, ứng dụng của pallet gỗ chỉ giới hạn trong ngành công nghiệp vận chuyển. Tuy nhiên, những năm gần đây, nhiều người bắt đầu tìm cách tái chế pallet gỗ, biến chúng
                                                 </div>
                                             </div>
                                        </div>
                                        <div class="col-md-6 group-news-new-left">
                                                <div>
                                                     <a href=""><img src="uploads/images/20191012113752-0896.jpg" alt=""></a>
                                                 <div class="group-news-new-left-title">
                                                         <a href="">1001 ý tưởng tái chế pallet gỗ làm nội thất gia đình</a>
                                                </div>
                                                 <div class="group-news-new-left-intro">
                                                Trước kia, ứng dụng của pallet gỗ chỉ giới hạn trong ngành công nghiệp vận chuyển. Tuy nhiên, những năm gần đây, nhiều người bắt đầu tìm cách tái chế pallet gỗ, biến chúng

                                                 </div>
                                             </div>
                                        </div>
                                     </div>
                                     <div class="row list-news-blue">
                                         <div>
                                             <ul>
                                                 <li><a href="">Chọn màu sắc tủ bếp hợp phong thủy để kích hoạt tài lộc</a></li>
                                                <li><a href="">Chọn màu sắc tủ bếp hợp phong thủy để kích hoạt tài lộc</a></li>
                                                <li><a href="">Chọn màu sắc tủ bếp hợp phong thủy để kích hoạt tài lộc</a></li>
                                                <li><a href="">Chọn màu sắc tủ bếp hợp phong thủy để kích hoạt tài lộc</a></li>
                                                <li><a href="">Chọn màu sắc tủ bếp hợp phong thủy để kích hoạt tài lộc</a></li>
                                                <li><a href="">Chọn màu sắc tủ bếp hợp phong thủy để kích hoạt tài lộc</a></li>
                                             </ul>
                                         </div>
                                     </div>
                                </div>
                                <!-- ketthuc list-blue -->
            
                                <div class="row common">
                                    <div class="box-header">
                                        <p>tìm kiếm tiêu biểu theo từ khóa</p>
                                    </div>
                                    <div class="bor-box">
                                        <div class="row">
                                        <div class="col-md-6 tag-list-left">
                                            <ul>
                                                <li><a href="">Bán nhà Quận 12</a></li>
                                                <li><a href="">Bán nhà Quận 12</a></li>
                                                <li><a href="">Bán nhà Quận 12</a></li>
                                                <li><a href="">Bán nhà Quận 12</a></li>
                                                <li><a href="">Bán nhà Quận 12</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 tag-list-right">
                                            <ul>
                                                <li><a href="">Bán nhà Quận 12</a></li>
                                                <li><a href="">Bán nhà Quận 12</a></li>
                                                <li><a href="">Bán nhà Quận 12</a></li>
                                                <li><a href="">Bán nhà Quận 12</a></li>
                                                <li><a href="">Bán nhà Quận 12</a></li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="header-box-right">
                                        <p>tiêu điểm tuần qua</p>
                                    </div>
                                    <div class="new-last-week">
                                            <ul >
                                                <li><a href="">"Càng cắm đầu mua đất Đông Anh, càng làm giá cho người bán"</a></li>
                                                <li><a href="">"Càng cắm đầu mua đất Đông Anh, càng làm giá cho người bán"</a></li>
                                                <li><a href="">"Càng cắm đầu mua đất Đông Anh, càng làm giá cho người bán"</a></li>
                                                <li><a href="">"Càng cắm đầu mua đất Đông Anh, càng làm giá cho người bán"</a></li>
                                                <li><a href="">"Càng cắm đầu mua đất Đông Anh, càng làm giá cho người bán"</a></li>
                                            </ul>    
                                    </div>   
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="header-box-right">
                                        <p>lời khuyên</p>
                                    </div>
                                    <div class="new-last-week">
                                            <ul >
                                                <li><a href="">[Infographic] 10 kỹ năng không thể thiếu trong nghề môi giới bất động sản</a></li>
                                                <li><a href="">[Infographic] 10 kỹ năng không thể thiếu trong nghề môi giới bất động sản</a></li>
                                                <li><a href="">[Infographic] 10 kỹ năng không thể thiếu trong nghề môi giới bất động sản</a></li>
                                                <li><a href="">[Infographic] 10 kỹ năng không thể thiếu trong nghề môi giới bất động sản</a></li>
                                                <li><a href="">[Infographic] 10 kỹ năng không thể thiếu trong nghề môi giới bất động sản</a></li>
                                            </ul>    
                                    </div>   
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="header-box-right">
                                        <p>treo tranh phong thủy</p>
                                    </div>
                                    <div class="new-last-week">
                                        <div class="pictures-pt">
                                            <a href="">
                                                 <img src="uploads/logo/20191014101353-c1e6.png" alt="">   
                                                 <p>Ý nghĩa của việc treo tranh đồng theo phong thủy</p>
                                            </a>
                                        </div>
                                            <ul >
                                                <li><a href="">Chọn tranh phong thủy phòng ngủ thế nào cho đúng?</a></li>
                                                <li><a href="">Chọn tranh phong thủy phòng ngủ thế nào cho đúng?</a></li>
                                                <li><a href="">Chọn tranh phong thủy phòng ngủ thế nào cho đúng?</a></li>
                                                <li><a href="">Chọn tranh phong thủy phòng ngủ thế nào cho đúng?</a></li>
                                                <li><a href="">Chọn tranh phong thủy phòng ngủ thế nào cho đúng?    </a></li>
                                            </ul>    
                                    </div>   
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="header-box-right">
                                        <p>tư vẫn nội -ngoại thất</p>
                                    </div>
                                    <div class="new-last-week">
                                        <div class="tuvan-nt">
                                            <div>
                                                <img src="uploads/logo/icon_user.png" alt="">
                                            </div>
                                            <div>
                                                <p><strong>Tư vấn nội - ngoại thất từ chuyên gia</strong></p>
                                            </div>
                                        </div>
                                            <ul >
                                                <li><a href="">Chọn tranh phong thủy phòng ngủ thế nào cho đúng?</a></li>
                                                <li><a href="">Chọn tranh phong thủy phòng ngủ thế nào cho đúng?</a></li>
                                                <li><a href="">Chọn tranh phong thủy phòng ngủ thế nào cho đúng?</a></li>
                                                <li><a href="">Chọn tranh phong thủy phòng ngủ thế nào cho đúng?</a></li>
                                                <li><a href="">Chọn tranh phong thủy phòng ngủ thế nào cho đúng?    </a></li>
                                            </ul>    
                                    </div>   
                                </div>
                                <!--  -->
                                <div class="row">
                                    <div class="fb-fanpage">
                                        <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div><iframe name="fb_xdm_frame_https" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://staticxx.facebook.com/connect/xd_arbiter.php?version=44#channel=f3501ca882fe5ec&amp;origin=https%3A%2F%2Fbatdongsan.com.vn" style="border: none;"></iframe></div><div></div></div></div>
                                        <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/Batdongsandv/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=302507473246792&amp;container_width=210&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FBatdongsandv%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"><span style="vertical-align: bottom; width: 210px; height: 214px;"><iframe name="f13ee054670e78" width="1000px" height="1000px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.10/plugins/page.php?adapt_container_width=true&amp;app_id=302507473246792&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df612a7c8e05404%26domain%3Dbatdongsan.com.vn%26origin%3Dhttps%253A%252F%252Fbatdongsan.com.vn%252Ff3501ca882fe5ec%26relation%3Dparent.parent&amp;container_width=210&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FBatdongsandv%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 185px; height: 214px;" class=""></iframe></span></div>
                                        </div>
                                </div>
                            </div>
                            <!-- ket thuc right of left -->
                        </div>
                    </div>
                    <!-- ket thuc left -->
                    <div class="col-md-3">
                        <div class="row ads-right">
                            <img src="uploads/logo/2012210033_bannerright.png" alt="">
                        </div>
                        <!--  -->
                        <div class="row">
                             <div class="header-box-project">
                                <p>dự án nổi bật</p>
                             </div>
                            <div class="project-bds"> 
                                <ul >
                                    <li>
                                        <a href="">
                                            <img src="uploads/logo/20191005093217-b16b.jpg" alt="">
                                            <p>Khu Đô Thị Cát Tường Western Pearl</p>
                                        </a>
                                    </li>
                                     <li>
                                        <a href="">
                                            <img src="uploads/logo/20191005093217-b16b.jpg" alt="">
                                            <p>Asian Lake View</p>
                                        </a>
                                    </li>
                                     <li>
                                        <a href="">
                                            <img src="uploads/logo/20191005093217-b16b.jpg" alt="">
                                            <p>Khu Đô Thị Cát Tường Western Pearl</p>
                                        </a>
                                    </li>
                                     <li>
                                        <a href="">
                                            <img src="uploads/logo/20191005093217-b16b.jpg" alt="">
                                            <p>Asian Lake View</p>
                                        </a>
                                    </li>
                                     <li>
                                        <a href="">
                                            <img src="uploads/logo/20191005093217-b16b.jpg" alt="">
                                            <p>Asian Lake View</p>
                                        </a>
                                    </li>
                                     <li>
                                        <a href="">
                                            <img src="uploads/logo/20191005093217-b16b.jpg" alt="">
                                            <p>Asian Lake View</p>
                                        </a>
                                    </li>
                                </ul>    
                            </div>   
                        </div>
                        <!--  -->
                        <div class="row">
                             <div class="header-box-project">
                                <p>hỗ trợ tiện ích</p>
                             </div>
                            <div class="suport-box"> 
                                <ul >
                                    <li>
                                        <a href="">
                                             <div class="d-flex">
                                                <div >
                                                    <img src="uploads/logo/icon-phongthuy.png" alt="">
                                                </div>
                                                 <div >
                                                     <p>Tư vấn phong thủy</p>
                                                 </div>
                                            </div>  
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                             <div class="d-flex">
                                                <div >
                                                    <img src="uploads/logo/icon-chiphi.png" alt="">
                                                </div>
                                                 <div >
                                                     <p>Dự tính chi phí làm nhà</p>
                                                 </div>
                                            </div>  
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                             <div class="d-flex">
                                                <div >
                                                    <img src="uploads/logo/icon-laisuat.png" alt="">
                                                </div>
                                                 <div >
                                                     <p>Tính lãi suất</p>
                                                 </div>
                                            </div>  
                                        </a>
                                    </li>
                                </ul>    
                            </div>   
                        </div>
                        <!--  -->
                        <div class="row">
                            <div class="header-box-project">
                                <p>nhà môi giới tiêu biểu</p>
                            </div>
                            <div class="slide-box">
                                 <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                                      <!-- The slideshow -->
                                      <div class="carousel-inner">
                                        <div class="carousel-item active slide-list">
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
                                                <a href="">Xem tất cả</a>
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
                                                <a href="">Xem tất cả</a>
                                            </div>
                                        </div>  
                                      </div>
                                </div>   
                            </div>
                        </div>
                        <!--  -->
                        <div class="row ads-app">
                            <div class="app-link">
                                <div>
                                    <img src="uploads/logo/app-ios.jpg" alt="">
                                </div>
                               <div>
                                   <img src="uploads/logo/app-android.jpg" alt="">
                               </div>
                            </div>
                        </div>
                    </div>
                    <!-- ket thuc right -->
                    <div class="row bds-intro">
                        <div class="col-md-10">
                            <div class="bds-title">
                                <p>Mua bán và cho thuê nhà đất trên Batdongsan.com.vn</p>
                            </div>
                            <div class="bds-ct">
                                <p>Batdongsan.com.vn có hơn <strong>1.000.000</strong> tin cho thuê và <strong><a href="">mua bán nhà đất</a></strong> tại Việt Nam. Chúng tôi liệt kê danh sách nhiều thông tin nhà đất nhất phục vụ mọi nhu cầu, từ phòng trọ tới biệt thự cao cấp. Bạn là nhà đầu tư hay gia đình cần nhà để ở? Batdongsan.com.vn đều có thể giúp bạn. Tìm tin bán nhà đất hoặc cho thuê nhà đất mới nhất bằng cách sử dụng công cụ tìm kiếm hoặc các đường link ngay trên trang chủ.</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="bds-set-home">
                                <div class="set-header">
                                    <a href="#">Lên đầu trang</a>
                                </div>
                                <div class="btn-home-set">
                                    <a href="">
                                        <img src="uploads/logo/sethome.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>            
                    <!-- row end content-->
                </div>
</div>
@endsection('content')

<!--ket thuc noi dung</!-->
