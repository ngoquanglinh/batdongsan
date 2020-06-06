@extends('layouts.master')
@section('tittle','Nhà đất cho thuê, cho thuê nhà Việt Nam | Nhà đất cho thuê, cho thuê nhà tại Việt Nam')
@section('content')
<!--ket thuc menu</!-->
<div class="content">
    <div class="row">
        <div class="col-md-9">
            <div class="row submenu">
                <div class="search-col">
                    <div class="search-menu">
                        <form action="" method="post">
                            <input type="text" placeholder="Nhập từ khóa để tìm kiếm theo cụm từ">
                            <select>
                                <option value=""><span>nha dat ban</span></option>
                                <option value=""><span>nha dat thue</span></option>
                            </select>
                            <button type="submit">Tìm Kiếm</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--  -->
            <h1 class="title-news">{{$tintuc->t_tentintuc}}</h1>
            <div class="date-firts">{{formatDateVN($tintuc->created_at)}}<span>|</span><img src="uploads/logo/web7.png" alt=""> </div>
            <div class="list-news-more">
                <ul>
                    <li><a href="">Ì ạch cải tạo chung cư cũ: Đâu là vướng mắc?</a></li>
                    <li><a href="">Ì ạch cải tạo chung cư cũ: Đâu là vướng mắc?</a></li>
                </ul>
            </div>
            <div class="news-disception">
                <h2>{{$tintuc->t_tentintuc}}</h2>
            </div>
            <div>
                <div>
                    {!!$tintuc->t_mota!!}
                </div>
            </div>
            <p class="author-news">
                <strong>{{$tintuc->user->name}}</strong>
            </p>
            <div class="d-flex">
                <div class="other-news">
                    <h2>Tin nhiều người đọc</h2>
                </div>
                <div class="other-line"></div>
            </div>
            <div class="news-read-many">
                <ul>
                    @foreach($tindocnhieu as $tdn)
                    <li><a href="tin-tuc/{{$tdn->t_slug}}">{{$tdn->t_tentintuc}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="d-flex">
                <div class="other-news">
                    <h2>Tin mới nhất</h2>
                </div>
                <div class="other-line"></div>
            </div>
            <div class="news-read-many">
                <ul>
                    @foreach($tinmoinhat as $tmn)
                    <li><a href="tin-tuc/{{$tmn->t_slug}}">{{$tmn->t_tentintuc}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- end-left -->
        <div class="col-md-3">
            <div class=" bank-col">
                <div class="submenu-bank">
                    <a href="">
                        <img src="uploads/logo/TB_button_index.gif" alt="">
                        <span>
                            <strong>Hỗ trợ vay ngân hàng</strong>
                        </span>
                    </a>
                </div>
            </div>
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
            <div class="row product-page-box">
                <div class="header-box-project">
                    <p>Bạn quan tâm đến xe hơi</p>
                </div>
                <div class="header-box-car">
                    <ul>
                        <li><a href="">Toyota Land Cruiser VX 2016</a></li>
                        <li><a href="">Toyota Land Cruiser VX 2016</a></li>
                        <li><a href="">Toyota Land Cruiser VX 2016</a></li>
                        <li><a href="">Toyota Land Cruiser VX 2016</a></li>
                        <li><a href="">Toyota Land Cruiser VX 2016</a></li>
                    </ul>
                </div>
            </div>
            <!--  -->
            <div class="row ml-2 fb-fanpage">
                <div id="fb-root" class=" fb_reset">
                    <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                        <div><iframe name="fb_xdm_frame_https" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://staticxx.facebook.com/connect/xd_arbiter.php?version=44#channel=f362c099bc11b8c&amp;origin=https%3A%2F%2Fbatdongsan.com.vn" style="border: none;"></iframe></div>
                        <div></div>
                    </div>
                </div>
                <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=302507473246792";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>

                <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/Batdongsandv/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=302507473246792&amp;container_width=240&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FBatdongsandv%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"><span style="vertical-align: bottom; width: 240px; height: 214px;"><iframe name="f12d2b048754104" width="1000px" height="1000px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.9/plugins/page.php?adapt_container_width=true&amp;app_id=302507473246792&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df2ec4a55a7b6718%26domain%3Dbatdongsan.com.vn%26origin%3Dhttps%253A%252F%252Fbatdongsan.com.vn%252Ff362c099bc11b8c%26relation%3Dparent.parent&amp;container_width=240&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FBatdongsandv%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 240px; height: 214px;" class=""></iframe></span></div>
            </div>
            <!--  -->
        </div>
        <!-- end-right -->
    </div>
</div>
<!--ket thuc noi dung</!-->
@endsection('content')