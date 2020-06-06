<?php

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


Route::get('/', 'homeController@index');
// Route::get('dang-tin', function () {
//     return view('layouts.dangtin');
// });
Route::get('nha-dat-ban', 'nhadatController@NhaDatBan');
Route::get('nha-dat-ban/search', 'nhadatController@search');
Route::get('nha-dat-ban/{page}', 'nhadatController@LoaiNhaDatBan');
Route::get('nha-dat-cho-thue', 'nhadatthueController@NhaDatChoThue');
Route::get('nha-dat-cho-thue/search', 'nhadatthueController@search');
Route::get('nha-dat-cho-thue/{slug}', 'nhadatthueController@ChiTietNhaDatChoThue');
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
Route::get('can-mua-can-thue/{slug}', 'canmuacanthueController@chitiettin');
Route::get('tin-tuc', 'tintucController@DanhSach');
Route::get('tin-tuc/search', 'tintucController@search');
Route::get('tin-tuc/{slug}', 'tintucController@ChiTiet')->name('tintuc.chitiet');
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
Route::get('trang-ca-nhan/{id}', 'userController@getTrangCaNhan');
Route::get('trang-ca-nhan/{id}/sua', 'userController@getSuaProfile');
Route::post('trang-ca-nhan/{id}/sua', 'userController@postSuaProfile');
Route::post('trang-ca-nhan/{id}/upload', 'userController@uploadProfile');
Route::get('trang-ca-nhan/{id}/password', 'userController@getPassword');
Route::post('trang-ca-nhan/{id}/password', 'userController@postPassword');
Route::get('trang-ca-nhan/{id}/danh-sach-tin-rao-ban-thue', 'userController@getDanhSachTinBan');
Route::get('trang-ca-nhan/{id}/danh-sach-tin-rao-mua-thue', 'userController@getDanhSachTinMua');
Route::post('danh-sach-tin-rao-ban-thue/{userId}/delete/{id}', 'userController@postDeleteTinBan');
Route::post('danh-sach-tin-rao-mua-thue/{userId}/delete/{id}', 'userController@postDeleteTinMua');
// admin

//login google
Route::get('/google/redirect', 'Auth\LoginController@redirectToProvider')->name("google.login");
Route::get('/google/callback', 'Auth\LoginController@handleProviderCallback');
//login facebook
Route::get('/facebook/redirect/{provider}', 'Auth\LoginController@redirect')->name("facebook.login");
Route::get('/callback/{provider}', 'Auth\LoginController@callback');

Route::get('admin/login', 'userController@getDangnhapAdmin');
Route::post('admin/login', 'userController@postDangnhapAdmin');
// Chỉ có role là super-admin mới có thể truy cập vào các route của group này
Route::group(['middleware' => ['role:admin|nhan vien|manager']], function () {
    route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function () {
        route::get('trang-chu', 'UserController@getTrangChu');
        route::get('logout', 'UserController@getLogout');
        // Chỉ có role là super-admin mới có thể truy cập vào các route của group này
        Route::group(['middleware' => ['role:admin']], function () {
            route::group(['prefix' => 'user'], function () {
                route::get('danhsach', 'UserController@getDanhSach');
                route::get('sua/{id}', 'UserController@getSua');
                route::post('sua/{id}', 'UserController@postSua');
                route::get('them', 'UserController@getThem');
                route::post('them', 'UserController@postThem');
                route::get('xoa/{id}', 'UserController@getXoa');
            });
        });
        route::group(['prefix' => 'batdongsan'], function () {
            route::get('danhsach', 'nhadatController@getDanhSach');
            // Chỉ có permission là create thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:create']], function () {
                route::get('them', 'nhadatController@getThem');
                route::post('them', 'nhadatController@postThem');
            });
            // Chỉ có permission là edit thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:edit']], function () {
                route::get('sua/{id}', 'nhadatController@getSua');
                route::post('sua/{id}', 'nhadatController@postSua');
            });
            // Chỉ có permission là delete thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:delete']], function () {
                route::get('xoa/{id}', 'nhadatController@getXoa');
            });
        });
        route::group(['prefix' => 'duan'], function () {
            route::get('danhsach', 'duanController@getDanhSach');
            // Chỉ có permission là create thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:create']], function () {
                route::post('them', 'duanController@postThem');
                route::get('them', 'duanController@getThem');
            });
            // Chỉ có permission là edit thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:edit']], function () {
                route::get('sua/{id}', 'duanController@getSua');
                route::post('sua/{id}', 'duanController@postSua');
            });
            // Chỉ có permission là delete thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:delete']], function () {
                route::get('xoa/{id}', 'duanController@getXoa');
            });
        });
        route::group(['prefix' => 'tinraoban'], function () {
            route::get('danhsach', 'nhadatController@getDanhSach');
            // Chỉ có permission là create thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:create']], function () {
                route::get('them', 'nhadatController@getThem');
                route::post('them', 'nhadatController@postThem');
            });
            // Chỉ có permission là edit thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:edit']], function () {
                route::get('sua/{id}', 'nhadatController@getSua');
                route::post('sua/{id}', 'nhadatController@postSua');
            });
            // Chỉ có permission là delete thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:delete']], function () {
                route::get('xoa/{id}', 'nhadatController@getXoa');
            });
        });
        route::group(['prefix' => 'tinraomua'], function () {
            // Chỉ có permission là create thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:create']], function () {
                route::get('them', 'canmuacanthueController@getThem');
                route::post('them', 'canmuacanthueController@postThem');
            });
            // Chỉ có permission là edit thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:edit']], function () {
                route::get('sua/{id}', 'canmuacanthueController@getSua');
                route::post('sua/{id}', 'canmuacanthueController@postSua');
            });
            // Chỉ có permission là delete thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:delete']], function () {
                route::get('xoa/{id}', 'canmuacanthueController@getXoa');
            });
            route::get('danhsach', 'canmuacanthueController@getDanhSach');
        });
        route::group(['prefix' => 'tintuc'], function () {
            // Chỉ có permission là create thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:create']], function () {
                route::get('them', 'tintucController@getThem');
                route::post('them', 'tintucController@postThem');
            });
            // Chỉ có permission là edit thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:edit']], function () {
                route::get('sua/{id}', 'tintucController@getSua');
                route::post('sua/{id}', 'tintucController@postSua');
            });
            // Chỉ có permission là delete thì mới có thể truy cập vào các route của group  này
            Route::group(['middleware' => ['permission:delete']], function () {
                route::get('xoa/{id}', 'tintucController@getXoa');
            });
            route::get('danhsach', 'tintucController@getDanhSach');
        });
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

// role

route::get('/role', function () {
    //them vai tro
    // $role = Role::create(['name' => 'admin']);

    //them quyen
    // $permission = Permission::create(['name' => 'view product']);

    // gan vai tro voi quyen dung 1 trong 2 cai
    // $role = Role::find(1);
    // $permission = Permission::find(3);
    // $role->givePermissionTo($permission);
    // $permission->assignRole($role);
    //xoa role dung 1 trong 2
    // $permission = Permission::find(3);
    // $role->revokePermissionTo($permission);
    // $permission->removeRole($role);

    // gan user voi quyen permission
    // $user = User::find(3);
    // $user->givePermissionTo('edit product','add product','view product');
    // xoa user voi quyen
    // $user->revokePermissionTo('view product');

    //
    // Role::create(["name"=>"writer"]);
    // $user->assignRole('writer', 'admin');
});

/*===============================================================================
                                MAKE USER 
=================================================================================*/


/*===========================================
    Make roles role
    tạo vai trò
===========================================*/

Route::get('/make-role', function () {
    $role = Role::create(['name' => 'admin']);
    $role = Role::create(['name' => 'nhan vien']);
    $role = Role::create(['name' => 'khach']);
});



/*===========================================
    Make permission permision
    tạo quyền
    ===========================================*/

Route::get('/make-permission', function () {
    $permission = Permission::create(['name' => 'create']);
    $permission = Permission::create(['name' => 'edit']);
    $permission = Permission::create(['name' => 'delete']);
    $permission = Permission::create(['name' => 'view']);
});


/*===========================================
    Asign role role-permision
    gán vai trò với quyền
===========================================*/

Route::get('/asign-role', function () {

    // $roleAdmin            = Role::find(3);  //admin
    $roleManager         = Role::find(4);  //manager
    // $roleKhanchhang       = Role::find(5); //khach
    // $roleNhanhvien       = Role::find(6); //khach

    // $permissionCreate    = Permission::find(4); //create
    // $permissionEdit      = Permission::find(5); // edit
    $permissionRoomDelete = Permission::find(6); // delete
    // $permissionRoomView = Permission::find(7); // delete

    // $roleAdmin->givePermissionTo([$permissionCreate, $permissionEdit, $permissionRoomDelete]);
    $roleManager->givePermissionTo([$permissionRoomDelete]);
    // $roleKhanchhang->givePermissionTo([$permissionRoomView]);
});



/*===========================================
    Make user model-role
    gán user với vai trò
    ===========================================*/

Route::get('/make-user', function () {

    // $admin = User::create([
    //     'name' => 'admin',
    //     'email' => 'admin@gmail.com',
    //     'password' => bcrypt(123456),
    // ]);
    // $admin = User::find(3);
    // $admin->assignRole(['admin']);

    // $nhanvien1 = User::create([
    //     'name' => 'nhan vien create',
    //     'email' => 'nhanviencreate@gmail.com',
    //     'password' => bcrypt(123456),
    // ]);
    // $nhanvien2 = User::create([
    //     'name' => 'nhan vien edit',
    //     'email' => 'nhanvienedit@gmail.com',
    //     'password' => bcrypt(123456),
    // ]);
    // $nhanvien3 = User::create([
    //     'name' => 'nhan vien delete',
    //     'email' => 'nhanviendelete@gmail.com',
    //     'password' => bcrypt(123456),
    // ]);
    // $nhanviencreate = User::find(65);
    // $nhanvienedit = User::find(66);
    // $nhanviendelete = User::find(67);
    // $nhanviencreate->givePermissionTo('create');
    // $nhanvienedit->givePermissionTo('edit');
    // $nhanviendelete->givePermissionTo('delete');

    $admin = User::find(3);
    $manager = User::find(58);
    $admin->assignRole(['admin']);
    $manager->assignRole(['manager']);
    // $khach = User::create([
    //     'name' => 'khach hang',
    //     'email' => 'khachang@gmail.com',
    //     'password' => bcrypt(123456),
    // ]);

    // $nhanviencreate->assignRole(['nhan vien']);
    // $nhanvienedit->assignRole(['nhan vien']);
    // $nhanviendelete->assignRole(['nhan vien']);
});

    /*==================================================================================== 
make user permision model-permission
gán user với quyền
============================================================================*/;
Route::get('/user-permision', function () {
    $user = User::find(3);
    $user->givePermissionTo('create');
    $user = User::find(4);
    $user->givePermissionTo('edit');
    $user = User::find(67);
    $user->givePermissionTo('delete');
});
