@extends('layouts.master')
@section('tittle','Môi giới nhà đất | Các cá nhân, công ty môi giới nhà đất')
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
    {{--  --}}
    <div class="row">
       <div class="col-md-9">
        <div class="broker-title">
            <h1><span>Danh bạ nhà môi giới</span></h1>
        </div>
        {{--  --}}
        <div>
             <!-- Nav tabs -->
             <div class="btn-tab-broker">
                 <ul class="nav nav-tabs" role="tablist">
                      <li class="active"><a href="#company" role="tab" data-toggle="tab">công ty môi giới</a></li>
                      <li><a href="#personal" role="tab" data-toggle="tab">cá nhân môi giới</a></li>
                </ul>
             </div>
            <!-- Tab panes -->
            <div class="row mt-2">
                <div class="tab-content">
                      <div class="tab-pane active" id="company">
                          <div class="d-flex broker-list">
                              <div class="d-flex br-list-left">
                                  <div class="broker-img">
                                      <img src="uploads/images/man.png" alt="">
                                  </div>
                                  <div>
                                      <div class="broker-name">
                                          <h3><a href="">ngô linh</a></h3>
                                      </div>
                                      <div class="broker-address">
                                          hoa sơn, anh sơn, nghệ an 
                                      </div>
                                      <div class="broker-phone">0966756104</div>
                                      <div class="d-flex">
                                          <div class="broker-link">
                                              <a href="">Gửi Enail</a>
                                          </div>
                                          <div class="broker-link">
                                            <a href="">Danh sách tin rao</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              {{--  --}}
                              <div class=" br-list-right">
                                   <div class="kvmg">
                                       <h2>
                                            Khu vực cá nhân môi giới
                                        </h2>
                                        <ul>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                        </ul>
                                   </div>
                              </div>
                              {{--  --}}
                          </div>
                          <div class="d-flex broker-list">
                              <div class="d-flex br-list-left">
                                  <div class="broker-img">
                                      <img src="uploads/images/man.png" alt="">
                                  </div>
                                  <div>
                                      <div class="broker-name">
                                          <h3><a href="">ngô linh</a></h3>
                                      </div>
                                      <div class="broker-address">
                                          hoa sơn, anh sơn, nghệ an 
                                      </div>
                                      <div class="broker-phone">0966756104</div>
                                      <div class="d-flex">
                                          <div class="broker-link">
                                              <a href="">Gửi Enail</a>
                                          </div>
                                          <div class="broker-link">
                                            <a href="">Danh sách tin rao</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              {{--  --}}
                              <div class=" br-list-right">
                                   <div class="kvmg">
                                       <h2>
                                            Khu vực cá nhân môi giới
                                        </h2>
                                        <ul>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                        </ul>
                                   </div>
                              </div>
                              {{--  --}}
                          </div>
                          <div class="d-flex broker-list">
                              <div class="d-flex br-list-left">
                                  <div class="broker-img">
                                      <img src="uploads/images/man.png" alt="">
                                  </div>
                                  <div>
                                      <div class="broker-name">
                                          <h3><a href="">ngô linh</a></h3>
                                      </div>
                                      <div class="broker-address">
                                          hoa sơn, anh sơn, nghệ an 
                                      </div>
                                      <div class="broker-phone">0966756104</div>
                                      <div class="d-flex">
                                          <div class="broker-link">
                                              <a href="">Gửi Enail</a>
                                          </div>
                                          <div class="broker-link">
                                            <a href="">Danh sách tin rao</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              {{--  --}}
                              <div class=" br-list-right">
                                   <div class="kvmg">
                                       <h2>
                                            Khu vực cá nhân môi giới
                                        </h2>
                                        <ul>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                        </ul>
                                   </div>
                              </div>
                              {{--  --}}
                          </div>

                          <div class="d-flex broker-list">
                              <div class="d-flex br-list-left">
                                  <div class="broker-img">
                                      <img src="uploads/images/man.png" alt="">
                                  </div>
                                  <div>
                                      <div class="broker-name">
                                          <h3><a href="">ngô linh</a></h3>
                                      </div>
                                      <div class="broker-address">
                                          hoa sơn, anh sơn, nghệ an 
                                      </div>
                                      <div class="broker-phone">0966756104</div>
                                      <div class="d-flex">
                                          <div class="broker-link">
                                              <a href="">Gửi Enail</a>
                                          </div>
                                          <div class="broker-link">
                                            <a href="">Danh sách tin rao</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              {{--  --}}
                              <div class=" br-list-right">
                                   <div class="kvmg">
                                       <h2>
                                            Khu vực cá nhân môi giới
                                        </h2>
                                        <ul>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                        </ul>
                                   </div>
                              </div>
                              {{--  --}}
                          </div>
                      </div>
                      {{-- end tab company --}}
                      <div class="tab-pane" id="personal">
                          <div class="d-flex broker-list">
                              <div class="d-flex br-list-left">
                                  <div class="broker-img">
                                      <img src="uploads/images/man.png" alt="">
                                  </div>
                                  <div>
                                      <div class="broker-name">
                                          <h3><a href="">linh ngô</a></h3>
                                      </div>
                                      <div class="broker-address">
                                          hoa sơn, anh sơn, nghệ an 
                                      </div>
                                      <div class="broker-phone">0966756104</div>
                                      <div class="d-flex">
                                          <div class="broker-link">
                                              <a href="">Gửi Enail</a>
                                          </div>
                                          <div class="broker-link">
                                            <a href="">Danh sách tin rao</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              {{--  --}}
                              <div class=" br-list-right">
                                   <div class="kvmg">
                                       <h2>
                                            Khu vực cá nhân môi giới
                                        </h2>
                                        <ul>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                        </ul>
                                   </div>
                              </div>
                              {{--  --}}
                          </div>
                          <div class="d-flex broker-list">
                              <div class="d-flex br-list-left">
                                  <div class="broker-img">
                                      <img src="uploads/images/man.png" alt="">
                                  </div>
                                  <div>
                                      <div class="broker-name">
                                          <h3><a href="">ngô linh</a></h3>
                                      </div>
                                      <div class="broker-address">
                                          hoa sơn, anh sơn, nghệ an 
                                      </div>
                                      <div class="broker-phone">0966756104</div>
                                      <div class="d-flex">
                                          <div class="broker-link">
                                              <a href="">Gửi Enail</a>
                                          </div>
                                          <div class="broker-link">
                                            <a href="">Danh sách tin rao</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              {{--  --}}
                              <div class=" br-list-right">
                                   <div class="kvmg">
                                       <h2>
                                            Khu vực cá nhân môi giới
                                        </h2>
                                        <ul>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                        </ul>
                                   </div>
                              </div>
                              {{--  --}}
                          </div>
                          <div class="d-flex broker-list">
                              <div class="d-flex br-list-left">
                                  <div class="broker-img">
                                      <img src="uploads/images/man.png" alt="">
                                  </div>
                                  <div>
                                      <div class="broker-name">
                                          <h3><a href="">ngô linh</a></h3>
                                      </div>
                                      <div class="broker-address">
                                          hoa sơn, anh sơn, nghệ an 
                                      </div>
                                      <div class="broker-phone">0966756104</div>
                                      <div class="d-flex">
                                          <div class="broker-link">
                                              <a href="">Gửi Enail</a>
                                          </div>
                                          <div class="broker-link">
                                            <a href="">Danh sách tin rao</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              {{--  --}}
                              <div class=" br-list-right">
                                   <div class="kvmg">
                                       <h2>
                                            Khu vực cá nhân môi giới
                                        </h2>
                                        <ul>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                        </ul>
                                   </div>
                              </div>
                              {{--  --}}
                          </div>

                          <div class="d-flex broker-list">
                              <div class="d-flex br-list-left">
                                  <div class="broker-img">
                                      <img src="uploads/images/man.png" alt="">
                                  </div>
                                  <div>
                                      <div class="broker-name">
                                          <h3><a href="">ngô linh</a></h3>
                                      </div>
                                      <div class="broker-address">
                                          hoa sơn, anh sơn, nghệ an 
                                      </div>
                                      <div class="broker-phone">0966756104</div>
                                      <div class="d-flex">
                                          <div class="broker-link">
                                              <a href="">Gửi Enail</a>
                                          </div>
                                          <div class="broker-link">
                                            <a href="">Danh sách tin rao</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              {{--  --}}
                              <div class=" br-list-right">
                                   <div class="kvmg">
                                       <h2>
                                            Khu vực cá nhân môi giới
                                        </h2>
                                        <ul>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                            <li>Bán nhà riêng ở Quận 3, Hồ Chí Minh</li>
                                        </ul>
                                   </div>
                              </div>
                              {{--  --}}
                          </div>
                      </div>
                      {{-- end tab personal --}}
                </div>
            </div>
            {{--  --}}
        </div>
        {{--  end-tab--}}
    </div>
    {{-- end left nha moi gioi --}}
    <div class="col-md-3">
        <div class="row ml-2">
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
         {{--  --}}
         <div class="row ml-2">
                <img src="uploads/logo/20171101081951-d5f8.jpg" alt="">
        </div>
         {{--  --}}
         <div class="broker-category">
             <h1><span>Theo loại BDS</span></h1>
             <div class="broker-category-box">
                 <ul>
                    <li class="menu-inactive">
                        <h3><a href="">Nhà đất bán (5702)</a></h3>
                     </li>
                     <li><a href="">Bán đất nền dự án (2076)</a></li>
                     <li><a href="">Bán đất nền dự án (2076)</a></li>
                     <li><a href="">Bán đất nền dự án (2076)</a></li>
                     <li><a href="">Bán đất nền dự án (2076)</a></li>
                     <li><a href="">Bán đất nền dự án (2076)</a></li>
                     <li><a href="">Bán đất nền dự án (2076)</a></li>
                     <li><a href="">Bán đất nền dự án (2076)</a></li>
                     <li class="menu-inactive">
                        <h3><a href="">Nhà đất cho thuê (964)</a></h3>
                     </li>
                     <li><a href="">Bán đất nền dự án (2076)</a></li>
                     <li><a href="">Bán đất nền dự án (2076)</a></li>
                     <li><a href="">Bán đất nền dự án (2076)</a></li>
                     <li><a href="">Bán đất nền dự án (2076)</a></li>
                     <li><a href="">Bán đất nền dự án (2076)</a></li>
                     <li><a href="">Bán đất nền dự án (2076)</a></li>
                     <li><a href="">Bán đất nền dự án (2076)</a></li>
                 </ul>
             </div>
         </div>
         {{--  --}}
         <div class="row">
                            <div class="broker-category">
                                <h1><span>Theo loại BDS</span></h1>
                            </div>
                            <div class="slide-box">
                                 <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                                      <!-- The slideshow -->
                                      <div class="carousel-inner">
                                        <div class="carousel-item slide-list">
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
                                        <div class="carousel-item slide-list active">
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
         {{--  --}}
         <div class="broker-category">
             <h1><span>Theo Tỉnh/TP</span></h1>
             <div class="broker-category-box">
                 <ul>
                     <li><a href="">Nghệ An(2076)</a></li>
                     <li><a href="">Nghệ An(2076)</a></li>
                     <li><a href="">Nghệ An(2076))</a></li>
                     <li><a href="">Nghệ An(2076) </a></li>
                     <li><a href="">Nghệ An(2076)</a></li>
                     <li><a href="">Nghệ An(2076) </a></li>
                     <li><a href="">Nghệ An(2076)</a></li>
                 </ul>
             </div>
         </div>
         {{--  --}}
    </div>
    {{-- end right nha moi gioi --}} 
    </div>
    {{--  --}}
</div>
@endsection('content')

<!--ket thuc noi dung</!-->