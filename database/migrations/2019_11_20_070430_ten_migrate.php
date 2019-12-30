<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TenMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batdongsan', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->integer('b_iddanhmuc')->index();
            $table->integer('b_idhinhthucbds')->index();
            $table->integer('b_idloaibds')->index();
            $table->string('b_tieude')->nullable();
            $table->integer('b_idtinh');
            $table->integer('b_idquan');
            $table->integer('b_idxa');
            $table->integer('b_idduan');
            $table->string('b_dientich')->nullable();
            $table->string('b_gia')->nullable();
            $table->integer('b_iddonvi');
            $table->string('b_diachi')->nullable();
            $table->longText('b_mota')->nullable();
            $table->integer('b_idhuongnha');
            $table->integer('b_idhuongbancong');
            $table->string('b_sophongngu')->nullable();
            $table->string('b_idsotoilet')->nullable();
            $table->string('b_noithat')->nullable();
            $table->integer('b_idanh');
            $table->integer('b_idvideo');
            $table->string('b_map')->nullable();
            $table->string('b_tenlienhe')->nullable();
            $table->string('b_diachilienhe')->nullable();
            $table->string('b_dienthoai')->nullable();
            $table->string('b_didong')->nullable();
            $table->string('b_email')->nullable();
            $table->boolean('b_emailphanhoi');
            $table->integer('b_idloaitinrao')->index();
            $table->date('b_ngaydang');
            $table->date('b_ngayhethan');
            $table->bigInteger('b_giadang');	
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batdongsan');
    }
}
