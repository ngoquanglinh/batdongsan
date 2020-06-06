<div class="header">
    <div class="row">
        <div class="col-md-3 header-left">
            <img src="uploads/logo/BDS-LogoNew.jpg" alt="BDS-LogoNew">
        </div>
        <div class="col-md-9 header-right">
            <div class="header-img">
                <img src="uploads/slides/20191029145059-2685.jpg"></img>
            </div>
            <div>
                <div class="app">
                    <div class="fb-yt">
                        <img src="uploads/logo/fb.png" alt="" title="facebook.com">
                        <img src="uploads/logo/youtube.png" alt="" title="youtube.com">
                    </div>
                    <div class="user-style">
                        <img src="uploads/logo/banxehoi.png" alt="">
                        <a href="" title="Oto.com.vn"><span>Oto.com.vn</span></a>
                        <button><a href="dang-tin-rao-vat-ban-nha-dat"> <img src="uploads/logo/plus.png" alt=""><span>Đăng Tin Rao</span></a></button>

                        <img src="uploads/logo/user.png" alt="">
                        <button class="model-dangky" type="button" data-toggle="modal" data-target="#myModalDangKy" id="DangKyTaiKhoan">
                            Đăng Ký
                        </button>

                        <!-- Button to Open the Modal -->
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                        Open modal
                                        </button> -->
                        <!-- The Modal -->
                        <div class="modal" id="myModalDangKy">
                            <div class="modal-dialog ">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header  model-dangky-title">
                                        <h1 class="modal-title">ĐĂNG KÝ TÀI KHOẢN</h1>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    @include('layouts.error')
                                    @include('layouts.message')
                                    <!-- Modal body -->
                                    <div class="modal-body form-dangky">
                                        <form method="POST" id="formDangky">
                                            <div id="errorSingin"></div>
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Tên đăng nhập" name="name" id="nameSingin">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Địa chỉ email" name="email" id="emailSingin">
                                            </div>
                                            <div class="form-group">
                                                <div class="d-flex input-pass">
                                                    <div class="mr-2"><input type="password" class="form-control" placeholder="Mật khẩu" name="password" id="passwordSingin"></div>
                                                    <div class="ml-2"><input type="password" class="form-control" placeholder="Nhập lại mật khẩu" id="passwordAgainSingin" name="againpassword"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Tên đầy đủ" name="fullname" id="fullNameSingin">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Ngày sinh" name="birthday" id="birthdaySingin">
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input sexSigin" name="sex" checked="checked" value="1">Nam
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input sexSigin" name="sex" value="0">Nữ
                                                </label>
                                            </div>
                                            <div class="d-flex option-dangky">
                                                <div>
                                                    <select name="province" class="custom-select-sm" id="provincedk">

                                                    </select>
                                                </div>
                                                <div>
                                                    <select name="district" class="custom-select-sm" id="districtdk">
                                                        <option value="">Quận/Huyện</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <select name="ward" class="custom-select-sm" id="warddk">
                                                        <option value="">Phường/Xã</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input sytemSingin" name="contacttype" checked="checked" value="1">Cá nhân
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input sytemSingin " name="contacttype" value="2">Công ty
                                                </label>
                                            </div>
                                            <p>Bằng cách nhấn vào Đăng ký, bạn đồng ý với các Điều khoản thỏa thuận, Quy chế hoạt động, Chính sách bảo mật thông tin, Cơ chế giải quyết khiếu nại,... của Chúng tôi</p>
                                            <button type="submit">Đăng ký</button>
                                        </form>
                                        <div class="form-dangky-foot">Đã là thành viên? <a href="">Đăng nhập</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        </button>
                        @if(Auth::check())
                        <img src="uploads/logo/logout.png" alt="">
                        <a href="trang-ca-nhan/{{Auth::user()->id}}"><button class="btn-dang-nhap" type="button" class="btn">{{Auth::user()->name}}</button></a>
                        <img src="uploads/logo/logout.png" alt="">
                        <a href="khach-hang/logout"><button class="btn-dang-nhap" type="button" class="btn">Đăng Xuất</button></a>
                        @else
                        <img src="uploads/logo/logout.png" alt="">
                        <button class="btn-dang-nhap" type="button" class="btn" data-toggle="modal" data-target="#myModalDangNhap">Đăng Nhập</button>
                        @endif
                        <!-- The Modal -->
                        <div class="modal" id="myModalDangNhap">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h2 class="modal-title" style="color:#055698;font-weight:bold">Đăng nhập</h2>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body form-dangnhap">
                                        <form id="formLoginSubmit" method="POST">
                                            <div id="errorLogin"></div>
                                            @csrf
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <div><i class="fas fa-user-tie"></i></div>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Email" id="emailLogin">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <div><i class="fas fa-key"></i></div>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" placeholder="Password" id="passwordLogin">
                                            </div>
                                            <button type="submit">Đăng Nhập</button>
                                        </form>
                                        <div class="form-check mt-2 mb-2">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="">Nhớ tài khoản
                                            </label>
                                            <div class="forgot-pass"><a href="">Quên mật khẩu</a></div>
                                        </div>
                                        <div class="d-flex justify-content-around">
                                            <a href={{ route('facebook.login',['facebook'])}}>
                                                <div class="bor-facebook">
                                                    <i class="fab fa-facebook-square"></i><span>Đăng nhập qua Facebook</span>
                                                </div>
                                            </a>
                                            <a href={{ route('google.login') }}>
                                                <div class="bor-google">
                                                    <i class="fab fa-google-plus-square"></i><span>Đăng nhập qua Google</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="footer-dangnhap">
                                            Chưa phải là thành viên?<a href=""> Đăng ký tài khoản</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->

                        <img src="uploads/logo/english.png" alt=""><span>English</span>
                    </div>
                </div>
                <!-- <i class="far fa-comments"></i> -->
            </div>
        </div>
    </div>
</div>
<!--ket thuc header-->
@section('scripts')
<script>
    $("#formDangky").submit(function(e) {
        e.preventDefault();
        const name = $("#nameSingin").val();
        const email = $("#emailSingin").val();
        const password = $("#passwordSingin").val();
        const passwordAgain = $("#passwordAgainSingin").val();
        const birth = $("#birthdaySingin").val();
        const province = $("#provincedk").val();
        const district = $("#districtdk").val();
        const ward = $("#warddk").val();
        const fullname = $("#fullNameSingin").val();
        var sex;
        var system;
        $('.sexSigin:radio:checked').each(function() {
            sex = $(this).val();
        });
        $('.sytemSingin:radio:checked').each(function() {
            system = $(this).val();
        });
        $('.sytemSingin:radio:checked').each(function() {
            system = $(this).val();
        });
        const data = {
            name: name,
            email: email,
            password: password,
            againpassword: passwordAgain,
            birthday: birth,
            province: province,
            district: district,
            ward: ward,
            fullname: fullname,
            sex: sex,
            contacttype: system,
        }
        fetch('khach-hang/dang-ky', {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json'
                },
                method: 'POST',
                body: JSON.stringify(data),
            })
            .then(response => response.json())
            .then(data => {
                var html = null;
                if (data.error) {
                    html = '<div class="alert alert-danger">';
                    data.error.map((err) => {
                        html += `<div>${err}</div>`;
                    })
                    html += '</div>';
                } else {
                    alert(data.success);
                    $("#myModalDangKy").modal("hide");
                }
                $("#errorSingin").html(html);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    });

    $("#formLoginSubmit").submit(function(e) {
        e.preventDefault();
        const email = $("#emailLogin").val();
        const password = $("#passwordLogin").val();
        const data = {
            password: password,
            email: email,
        }
        fetch('khach-hang/login', {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json'
                },
                method: 'POST',
                body: JSON.stringify(data),
            })
            .then(response => response.json())
            .then(data => {
                var html = null;
                if (data.error) {
                    html = '<div class="alert alert-danger">';
                    data.error.map((err) => {
                        html += `<div>${err}</div>`;
                    })
                    html += '</div>';
                } else {
                    alert(data.success);
                    $("#myModalDangNhap").modal("hide");

                }
                $("#errorLogin").html(html);
            })
            .catch((error) => {
                alert("tài khoản mật khẩu không chính xác");
            });
    });
</script>
@endsection