@extends('layouts.master') 
@section('tittle','Doanh nghiệp, công ty | Danh bạ các doanh nghiệp, công ty') 
@section('content')
<div class="content">
    <div class="row">
        <div class="row prj-top-search">
            <div class="col1">
                <h2>TÌM KIẾM DỰ ÁN</h2>
                <div class="search-duan">
                    <select name="" id="" style="display: block;">
                        <option value=""> Loại giao dịch</option>
                    </select>
                </div>
            </div>
            <div class="col2">
                <input type="text" placeholder="nhập từ khóa tìm kiếm">
                <div class="showAdressSearch d-flex">
                    <div>
                        <select name="" id="" style="display: block;">
                            <option value=""> Loại dự án</option>
                        </select>
                    </div>
                    <div>
                        <select name="" id="" style="display: block;">
                            <option value="">Tỉnh thành</option>
                        </select>
                    </div>
                    <div>
                        <select name="" id="" style="display: block;">
                            <option value="">Quận huyện</option>
                        </select>
                    </div>
                    <div>
                        <select name="" id="" style="display: block;">
                            <option value="">Mức giá</option>
                        </select>
                    </div>
                </div>
                <div class="showSearchDuAn">
                    <p id="moreLinkSearch" style="display: none;">Mở rộng tiêu chí tìm kiếm <img src="uploads/logo/downarrow.jpg" alt="" style="transform: rotate(45deg);"></p>
                    <p id="compactLinkSearch" style="display: block;">Thu gọn tiêu chí tìm kiếm <img src="uploads/logo/downarrow.jpg" alt="" style="transform: rotate(45deg);"></p>
                </div>
            </div>
            <div class="col3">
                <p>Tìm kiếm</p>
            </div>
        </div>
    </div>
    {{-- end search--}}
    <div class="row">
        <div class="col-md-9">
            <div class="enterprise-list">
                <h1>
                    Các doanh nghiệp, công ty bất động sản hàng đầu tại Việt Nam
                </h1>
            </div>
            <div class="list-company">
                <h2><a href="">Chủ đầu tư</a></h2>
                <ul>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                </ul>
                <div class="clear separable"></div>
                <!--  -->
                <h2><a href="">thi công xây dựng</a></h2>
                <ul>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                </ul>
                <div class="clear separable"></div>
                <!--  -->
                <h2><a href="">tư vấn thiết kế</a></h2>
                <ul>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                </ul>
                <div class="clear separable"></div>
                <!--  -->
                <h2><a href="">sàn giao dịch bds</a></h2>
                <ul>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                </ul>
                <div class="clear separable"></div>
                <!--  -->
                <h2><a href="">sàn giao dịch bds</a></h2>
                <ul>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                </ul>
                <div class="clear separable"></div>
                <!--  -->
                <h2><a href="">trang trí nội thất</a></h2>
                <ul>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                </ul>
                <div class="clear separable"></div>
                <!--  -->
                <h2><a href="">tài chính pháp lý</a></h2>
                <ul>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                </ul>
                <div class="clear separable"></div>
                <!--  -->
                <h2><a href="">các lĩnh vực khác</a></h2>
                <ul>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                    <li><a href="">
                        <div><img src="uploads/images/20191031132815-d471.jpg" alt=""></div>
                        <div class="name-company">
                            <h3><strong>CÔNG TY TRÁCH NHIỆM HỮU HẠN ĐẦU TƯ HÂN PHÁT</strong></h3>
                        </div>
                    </a></li>
                </ul>
                <div class="clear separable"></div>
                <!--  -->
            </div>
        </div>
        {{-- end left --}}
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
              <!--  -->
            <div class="row right-page-new">
                 <img src="uploads/ads/20171101081951-d5f8.jpg" alt="">
            </div>
              <!--  -->
            <div class="row box-project">
                <h2>
                    <span>Dự án đang thi công</span>
                </h2>
                <div class="bor-box-prj">
                    <div id="duanCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <ul>
                                <li><a href="">
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191115102126-a0ce.png" alt="">
                                        </div>
                                        <div class="box-infor-prj">
                                            <a href="">Goldmark City</a>
                                            <div>Tiến độ dự án cập nhật ngày 15/11/2019</div>
                                        </div>
                                    </div>
                                </a></li>
                                <li><a href="">
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191115102126-a0ce.png" alt="">
                                        </div>
                                        <div class="box-infor-prj">
                                            <a href="">Goldmark City</a>
                                            <div>Tiến độ dự án cập nhật ngày 15/11/2019</div>
                                        </div>
                                    </div>
                                </a></li>
                                <li><a href="">
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191115102126-a0ce.png" alt="">
                                        </div>
                                        <div class="box-infor-prj">
                                            <a href="">Goldmark City</a>
                                            <div>Tiến độ dự án cập nhật ngày 15/11/2019</div>
                                        </div>
                                    </div>
                                </a></li>
                                <li><a href="">
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191115102126-a0ce.png" alt="">
                                        </div>
                                        <div class="box-infor-prj">
                                            <a href="">Goldmark City</a>
                                            <div>Tiến độ dự án cập nhật ngày 15/11/2019</div>
                                        </div>
                                    </div>
                                </a></li>
                            </ul>
                        </div>
                        <div class="carousel-item">
                            <ul>
                                <li><a href="">
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191115102126-a0ce.png" alt="">
                                        </div>
                                        <div class="box-infor-prj">
                                            <a href="">Gold Tower</a>
                                            <div>Tiến độ dự án cập nhật ngày 15/11/2019</div>
                                        </div>
                                    </div>
                                </a></li>
                                <li><a href="">
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191115102126-a0ce.png" alt="">
                                        </div>
                                        <div class="box-infor-prj">
                                            <a href="">Goldmark City</a>
                                            <div>Tiến độ dự án cập nhật ngày 15/11/2019</div>
                                        </div>
                                    </div>
                                </a></li>
                                <li><a href="">
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191115102126-a0ce.png" alt="">
                                        </div>
                                        <div class="box-infor-prj">
                                            <a href="">Goldmark City</a>
                                            <div>Tiến độ dự án cập nhật ngày 15/11/2019</div>
                                        </div>
                                    </div>
                                </a></li>
                                <li><a href="">
                                    <div class="d-flex">
                                        <div>
                                            <img src="uploads/images/20191115102126-a0ce.png" alt="">
                                        </div>
                                        <div class="box-infor-prj">
                                            <a href="">Goldmark City</a>
                                            <div>Tiến độ dự án cập nhật ngày 15/11/2019</div>
                                        </div>
                                    </div>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    </div>    
                </div>
            </div>
            <!--  -->
            <div class="row box-project">
                <h2>
                    <span>Xu hướng nội ngoại thất</span>
                </h2>
                <div class="bor-box-noithat">
                    <ul>
                        <li><a href="">
                            <div class="d-flex">
                                <div>
                                    <img src="uploads/images/20191113105912-06ab.jpg" alt="">
                                </div>
                                <div>
                                    <p>Những hành động cần làm ngay để "thanh lọc" ngôi nhà</p>
                                </div>
                            </div>
                        </a></li>
                        <li><a href="">
                            <div class="d-flex">
                                <div>
                                    <img src="uploads/images/20191113105912-06ab.jpg" alt="">
                                </div>
                                <div>
                                    <p>Những hành động cần làm ngay để "thanh lọc" ngôi nhà</p>
                                </div>
                            </div>
                        </a></li>
                        <li><a href="">
                            <div class="d-flex">
                                <div>
                                    <img src="uploads/images/20191113105912-06ab.jpg" alt="">
                                </div>
                                <div>
                                    <p>Những hành động cần làm ngay để "thanh lọc" ngôi nhà</p>
                                </div>
                            </div>
                        </a></li>
                        <li><a href="">
                            <div class="d-flex">
                                <div>
                                    <img src="uploads/images/20191113105912-06ab.jpg" alt="">
                                </div>
                                <div>
                                    <p>Những hành động cần làm ngay để "thanh lọc" ngôi nhà</p>
                                </div>
                            </div>
                        </a></li>
                        <li><a href="">
                            <div class="d-flex">
                                <div>
                                    <img src="uploads/images/20191113105912-06ab.jpg" alt="">
                                </div>
                                <div>
                                    <p>Những hành động cần làm ngay để "thanh lọc" ngôi nhà</p>
                                </div>
                            </div>
                        </a></li>
                    </ul>
                </div>    
            </div>
            <!--  -->
            <div class="row box-project">
                <h2>
                    <span>Bạn quan tâm tới xe hơi?</span>
                </h2>
                <div class="bor-banxe">
                    <ul>
                        <li><a href="">Kia Sedona 2016</a></li>
                        <li><a href="">Kia Sedona 2016</a></li>
                        <li><a href="">Kia Sedona 2016</a></li>
                        <li><a href="">Kia Sedona 2016</a></li>
                        <li><a href="">Kia Sedona 2016</a></li>
                    </ul>
                </Kia>
            <!--  -->
        </div>
        {{-- end right --}}
    </div>
    {{--  --}}
</div>
@endsection('content')

<!--ket thuc noi dung</!-->