<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\district;
use App\province;
use App\ward;
use App\danhmuc;
use App\donvi;
use App\loaitinrao;
use App\duan;
use App\dientich;
class ajaxController extends Controller
{
    public function getDistrict($id){
        $huyen=district::where('province_id',$id)->get();
        foreach($huyen as $h){
            echo "<option value='".$h->id."'>".$h->name."</option>";
        }
    }
    public function getWard($id){
        $xa=ward::where('district_id',$id)->get();
        foreach($xa as $x){
            echo "<option value='".$x->id."'>".$x->name."</option>";
        }
    }
    public function getLoaiTinBan($id){
        $danhmuc=danhmuc::where('d_idparent',$id)->get();
        foreach($danhmuc as $dm){
            echo "<option value='".$dm->id."'>".$dm->d_tendanhmuc."</option>";
        }
    }
    public function getDonVi(){
        $donvi=donvi::all();
        foreach($donvi as $dv){
            echo "<option value='".$dv->id."'>".$dv->d_tendonvi."</option>";
        }
    }
    public function getDonGia($id){
        $dongia=loaitinrao::where('id',$id)->get();
        foreach($dongia as $dg){
            echo $dg->l_dongia;
        }
    }
    public function getGia($id){
        $dongia=loaitinrao::where('id',$id)->get();
        foreach($dongia as $dg){
            echo $dg->l_dongia;
        }
    }
    public function getMua($id){
        $danhmuc=danhmuc::where('d_idparent',$id)->get();
        foreach($danhmuc as $dm){
            echo "<option value='".$dm->id."'>".$dm->d_tendanhmuc."</option>";
        }
    }
    public function getDonViMua(){
        $donvi=donvi::all();
        foreach($donvi as $dv){
            echo "<option value='".$dv->id."'>".$dv->d_tendonvi."</option>";
        }
    }
    public function getDuAn($id){
        $duan=duan::where('d_iddistrict',$id)->get();
        foreach($duan as $da){
            echo "<option value='".$da->id."'>".$da->d_tenduan."</option>";
        }
    }
    public function getProvinceDangKy(){
        $tinh=province::all();
        echo "<option value=''>Tỉnh/Thành</option>";
        foreach($tinh as $t){
            echo "<option value='".$t->id."'>".$t->name."</option>";
        }
    }
    public function getDistrictDangKy($id){
        $huyen=district::where('province_id',$id)->get();
        echo "<option value=''>Quận/Huyện</option>";
        foreach($huyen as $h){
            echo "<option value='".$h->id."'>".$h->name."</option>";
        }
    }
    public function getWardDangKy($id){
        $xa=ward::where('district_id',$id)->get();
        echo "<option value=''>Phường/Xã</option>";
        foreach($xa as $x){
            echo "<option value='".$x->id."'>".$x->name."</option>";
        }
    }
    public function chooseDienTich(){
        $dientich=dientich::all();
        foreach($dientich as $dt){
            echo "<option value='".$dt->id."'>".$dt->d_ten."</option>";
        }
    }
}
?>
