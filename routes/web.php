<?php

Route::get('trang-chu','homeController@index');
Route::get('nha-dat-ban','nhadatController@NhaDatBan');
Route::get('nha-dat-ban/{page}','nhadatController@LoaiNhaDatBan');
//nha dat ban
Route::get('nha-dat-cho-thue','nhadatthueController@NhaDatChoThue'); 
Route::get('cho-thue-can-ho-chung-cu','nhadatthueController@DanhSachChoThueChungCu');
Route::get('cho-thue-nha-rieng','nhadatthueController@DanhSachChoThueNhaRieng'); 
Route::get('cho-thue-nha-mat-pho','nhadatthueController@DanhSachChoThueNhaMatPho'); 
Route::get('cho-thue-nha-tro-phong-tro','nhadatthueController@DanhSachChoThueNhaTroPhongTro'); 
Route::get('cho-thue-van-phong','nhadatthueController@DanhSachChoThueVanPhong');
Route::get('cho-thue-cua-hang-ki-ot','nhadatthueController@DanhSachChoThueCuaHangKiOt');
Route::get('cho-thue-kho-nha-xuong-dat','nhadatthueController@DanhSachChoThueKhoXuongDat');
Route::get('cho-thue-bat-dong-san-khac','nhadatthueController@DanhSachChoThueBatDongSanKhac');
//nha dat thue
Route::get('du-an-bat-dong-san','duanController@DuanBatDongSan');
Route::get('can-mua-can-thue','canmuacanthueController@DanhSach');
Route::get('tin-tuc','tintucController@DanhSach');
Route::get('xay-dung','kientrucxaydungController@DanhSachXayDung');
Route::get('kien-truc','kientrucxaydungController@DanhSachKienTruc');
Route::get('noi-ngoai-that','noingoaithatController@DanhSachNoiNgoaiThat');
Route::get('phong-thuy','phongthuyController@DanhSachPhongThuy');
Route::get('nha-moi-gioi','danhbaController@DanhSachDanhBa');

