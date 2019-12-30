<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
class userController extends Controller
{
    public function getTrangChu(){
        return view('admin.layouts.index');
    }
    public function getDangnhapAdmin(){
        return view('admin.login');
    }
    public function postDangnhapAdmin(request $request){
        $this->validate($request,[
            'Email'=>'required',
            'Password'=>'required',
        ],[
            'Email.required'=>'Bạn chưa nhập email',
            'Password.required'=>'Bạn chưa nhập password',
        ]);
        if(Auth::attempt(['email'=>$request->Email,'password'=>$request->Password]))
        {
            return redirect('admin/trang-chu');
        }else
        {
            return redirect('admin/login')->withInput()->with('thongbao','Đăng nhập không thành công');
        }
    }
    public function getDanhSach(){
        $user=User::all();
        return view('admin.user.danhsach',['user'=>$user]);
    }
    public function getThem(){
        return view('admin.user.them');
    }
    public function postThem(request $request){
    	$this->validate($request,[
    		'name'=>'required|min:3',
    		'email'=>'required|email|unique:users,email',
    		'password'=>'required|min:3|max:32',
			'password_again'=>'required|same:password',
			'lienhe'=>'required',
			'didong'=>'required',
    	],
    	[
    		'name.required'=>'Bạn chưa nhập tên người dùng',
    		'name.min'=>'Tên người dùng có ít nhất 3 ký tự',
    		'email.required'=>'Bạn chưa nhập email',
    		'email.email'=>'Bạn chưa nhập  đúng định dạng email',
    		'email.unique'=>'Email đã tồn tại',
    		'password.required'=>'Bạn chưa nhập password',
    		'password.min'=>'password có ít nhất 3 ký tự',
    		'password.max'=>'password có nhiều nhất 32 ký tự',
    		'password_again.required'=>'Bạn chưa nhập lại password',
			'password_again.same'=>'password nhập lại chưa chính xác',
			'lienhe.required'=>'Bạn chưa thêm liên hệ',
			'didong.required'=>'Bạn chưa thêm di động',
    	]);
    	$user=new User;
    	$user->name=$request->name;
    	$user->email=$request->email;
		$user->password=bcrypt($request->password);
		$user->u_quyen=$request->quyen;
		$user->u_lienhe=$request->lienhe;
		$user->u_didong=$request->didong;
    	$user->save();
    	return redirect('admin/user/danhsach')->withInput()->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
    	$user=user::find($id);
    	return view('admin.user.sua',['user'=>$user]);
    }
    public function postSua(request $request,$id){
    	$this->validate($request,[
			'name'=>'required',
    	],
    	[
			'name.required'=>'Bạn chưa nhập tên người dùng',
    	]);
    	$user=User::find($id);
    	$user->name=$request->name;
		$user->u_quyen=$request->quyen;
    	if($request->changePassword == "on"){
    			$this->validate($request,[
    		'password'=>'required|min:3|max:32',
    		'password_again'=>'required|same:password',
    	],
    	[
    		'password.required'=>'Bạn chưa nhập password',
    		'password.min'=>'password có ít nhất 3 ký tự',
    		'password.max'=>'password có nhiều nhất 32 ký tự',
    		'password_again.required'=>'Bạn chưa nhập lại password',
    		'password_again.same'=>'password nhập lại chưa chính xác',
    	]);
    		$user->password=bcrypt($request->password);
    	}
    	$user->save();
    	return redirect('admin/user/sua/'.$id)->withInput()->with('thongbao','Sửa thành công');
    }
    public function getXoa($id){
        $user=user::find($id);
        $user->delete();
        return redirect('admin/user/danhsach')->with('thongbao','Xóa người dùng thành công');
    }
   	public  function getLogout(){
		Auth::logout();
		return redirect('admin/login');
	}
	public function postDangKy(request $request){
    	$this->validate($request,[
    		'name'=>'required',
    		'email'=>'required|email|unique:users,email',
    		'password'=>'required',
			'againpassword'=>'required|same:password',
			'fullname'=>'required',
			'birthday'=>'required',
    	],
    	[
    		'name.required'=>'Bạn chưa nhập tên người dùng',
    		'email.required'=>'Bạn chưa nhập email',
    		'email.email'=>'Bạn chưa nhập  không đúng email',
    		'email.unique'=>'Email đã tồn tại',
			'password.required'=>'Bạn chưa nhập password',
			'fullname.required'=>'Bạn chưa nhập họ tên',
			'birthday.required'=>'Bạn chưa nhập ngày sinh',
    		'againpassword.required'=>'Bạn chưa nhập lại password',
    		'againpassword.same'=>'password nhập lại chưa chính xác',
    	]);
    	$user=new User;
    	$user->name=$request->name;
    	$user->email=$request->email;
		$user->password=bcrypt($request->password);
		$user->u_loaidanhba=$request->contacttype;
		$user->u_hoten=$request->fullname;
		$user->u_ngaysinh=$request->birthday;
		$user->u_iddistrict=$request->district;
		$user->u_idprovince=$request->province;
		$user->u_idward=$request->ward;
		$user->u_gioitinh=$request->sex;
		$user->save();
    	echo "<script>alert('Đăng ký thành công'); history.back();</script>";
	}
	public function postKhachHangLogin(request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required',
        ],[
			'email.required'=>'Bạn chưa nhập email',
			'email.email'=>'Email không đúng định dạng',
            'password.required'=>'Bạn chưa nhập password',
		]);
			if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
			{
				return redirect('trang-ca-nhan');	
			}else
			{
				echo "<script>alert('Đăng nhập không thành công'); history.back();</script>";
			}
	}
	public  function postKhachHangLogout(){
		Auth::logout();
		return redirect('trang-chu');
	}
	public function getTrangCaNhan(){
        return view('layouts.trangcanhan');
    }
}
?>