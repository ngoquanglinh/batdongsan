<?php

Route::get('/', 'homeController@index');
Route::get('nha-dat-ban', 'nhadatController@NhaDatBan');
Route::get('nha-dat-ban/{page}', 'nhadatController@LoaiNhaDatBan');
//nha dat ban
Route::get('nha-dat-cho-thue', 'nhadatthueController@NhaDatChoThue');
Route::get('cho-thue-can-ho-chung-cu', 'nhadatthueController@DanhSachChoThueChungCu');
Route::get('cho-thue-nha-rieng', 'nhadatthueController@DanhSachChoThueNhaRieng');
Route::get('cho-thue-nha-mat-pho', 'nhadatthueController@DanhSachChoThueNhaMatPho');
Route::get('cho-thue-nha-tro-phong-tro', 'nhadatthueController@DanhSachChoThueNhaTroPhongTro');
Route::get('cho-thue-van-phong', 'nhadatthueController@DanhSachChoThueVanPhong');
Route::get('cho-thue-cua-hang-ki-ot', 'nhadatthueController@DanhSachChoThueCuaHangKiOt');
Route::get('cho-thue-kho-nha-xuong-dat', 'nhadatthueController@DanhSachChoThueKhoXuongDat');
Route::get('cho-thue-bat-dong-san-khac', 'nhadatthueController@DanhSachChoThueBatDongSanKhac');
Route::get('du-an-bat-dong-san', 'duanController@DuanBatDongSan');
Route::get('can-mua-can-thue', 'canmuacanthueController@DanhSach');
Route::get('tin-tuc', 'tintucController@DanhSach');
Route::get('tin-tuc/{slug}', 'tintucController@ChiTiet');
Route::get('xay-dung', 'kientrucxaydungController@DanhSachXayDung');
Route::get('kien-truc', 'kientrucxaydungController@DanhSachKienTruc');
Route::get('noi-ngoai-that', 'noingoaithatController@DanhSachNoiNgoaiThat');
Route::get('phong-thuy', 'phongthuyController@DanhSachPhongThuy');
Route::get('nha-moi-gioi', 'danhbaController@DanhSachDanhBa');
Route::get('doanh-nghiep', 'danhbaController@DanhSachDoanhNghiep');
Route::get('dang-tin-rao-vat-ban-nha-dat', 'nhadatController@getDangTinBan');
Route::post('dang-tin-rao-vat-ban-nha-dat', 'nhadatController@postDangTinBan');
Route::get('dang-tin-rao-vat-mua-nha-dat', 'canmuacanthueController@getDangTinMua');
Route::post('dang-tin-rao-vat-mua-nha-dat', 'canmuacanthueController@postDangTinMua');
Route::post('khach-hang/dang-ky', 'userController@postDangKy');
Route::post('khach-hang/login', 'userController@postKhachHangLogin');
Route::get('khach-hang/logout', 'userController@postKhachHangLogout');
Route::get('trang-ca-nhan', 'userController@getTrangCaNhan');
// admin

//login google
Route::get('/google/redirect', 'Auth\LoginController@redirectToProvider')->name("google.login");
Route::get('/google/callback', 'Auth\LoginController@handleProviderCallback');
//login facebook
Route::get('/facebook/redirect/{provider}', 'Auth\LoginController@redirect')->name("facebook.login");
Route::get('/callback/{provider}', 'Auth\LoginController@callback');


Route::get('admin/login', 'userController@getDangnhapAdmin');
Route::post('admin/login', 'userController@postDangnhapAdmin');
route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function () {
    route::get('trang-chu', 'UserController@getTrangChu');
    route::get('logout', 'UserController@getLogout');
    route::group(['prefix' => 'user', 'middleware' => 'roleUser'], function () {
        route::get('danhsach', 'UserController@getDanhSach');
        route::get('sua/{id}', 'UserController@getSua');
        route::post('sua/{id}', 'UserController@postSua');
        route::get('them', 'UserController@getThem');
        route::post('them', 'UserController@postThem');
        route::get('xoa/{id}', 'UserController@getXoa');
    });
    route::group(['prefix' => 'batdongsan'], function () {
        route::get('danhsach', 'nhadatController@getDanhSach');
        route::get('sua/{id}', 'nhadatController@getSua');
        route::post('sua/{id}', 'nhadatController@postSua');
        route::get('them', 'nhadatController@getThem');
        route::post('them', 'nhadatController@postThem');
        route::get('xoa/{id}', 'nhadatController@getXoa');
    });
    route::group(['prefix' => 'duan'], function () {
        route::get('danhsach', 'duanController@getDanhSach');
        route::get('sua/{id}', 'duanController@getSua');
        route::post('sua/{id}', 'duanController@postSua');
        route::get('them', 'duanController@getThem');
        route::post('them', 'duanController@postThem');
        route::get('xoa/{id}', 'duanController@getXoa');
    });
    route::group(['prefix' => 'tinraoban'], function () {
        route::get('danhsach', 'nhadatController@getDanhSach');
        route::get('sua/{id}', 'nhadatController@getSua');
        route::post('sua/{id}', 'nhadatController@postSua');
        route::get('them', 'nhadatController@getThem');
        route::post('them', 'nhadatController@postThem');
        route::get('xoa/{id}', 'nhadatController@getXoa');
    });
    route::group(['prefix' => 'tinraomua'], function () {
        route::get('danhsach', 'canmuacanthueController@getDanhSach');
        route::get('sua/{id}', 'canmuacanthueController@getSua');
        route::post('sua/{id}', 'canmuacanthueController@postSua');
        route::get('them', 'canmuacanthueController@getThem');
        route::post('them', 'canmuacanthueController@postThem');
        route::get('xoa/{id}', 'canmuacanthueController@getXoa');
    });
    route::group(['prefix' => 'tintuc'], function () {
        route::get('danhsach', 'tintucController@getDanhSach');
        route::get('sua/{id}', 'tintucController@getSua');
        route::post('sua/{id}', 'tintucController@postSua');
        route::get('them', 'tintucController@getThem');
        route::post('them', 'tintucController@postThem');
        route::get('xoa/{id}', 'tintucController@getXoa');
    });
});
// ajax
route::group(['prefix' => 'ajax'], function () {
    route::get('district/{id}', 'ajaxController@getDistrict');
    route::get('ward/{id}', 'ajaxController@getWard');
    route::get('loaitinban/{id}', 'ajaxController@getLoaiTinBan');
    route::get('donvi', 'ajaxController@getDonVi');
    route::get('loadgia/{id}', 'ajaxController@getDonGia');
    route::get('dongia/{id}', 'ajaxController@getGia');
    route::get('canmua/{id}', 'ajaxController@getMua');
    route::get('donvimua', 'ajaxController@getDonViMua');
    route::get('getduan/{id}', 'ajaxController@getDuAn');
    route::get('get-province', 'ajaxController@getProvinceDangKy');
    route::get('get-district/{id}', 'ajaxController@getDistrictDangKy');
    route::get('get-ward/{id}', 'ajaxController@getWardDangKy');
    route::get('chooseDienTich', 'ajaxController@chooseDienTich');
});
