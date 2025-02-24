<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {

        Schema::create('danhmuc', function (Blueprint $table) {
            $table->id();
            $table->string('TenDanhMuc');
            $table->integer('TrangThai');
            $table->timestamps();
        });

        Schema::create('sanpham', function (Blueprint $table) {
            $table->id();
            $table->text('TenSP');
            $table->integer('Gia');
            $table->integer('GiaMoi');
            $table->string('Image1');
            $table->string('Image2');
            $table->integer('SoLuong');
            $table->text('MoTa');
            $table->integer('TrangThai');
            $table->integer('DanhMuc');
            $table->integer('MaLoai');
            $table->timestamps();
        });

        Schema::create('donhang', function (Blueprint $table) {
            $table->id();
            $table->integer('iduser');
            $table->string('SDT');
            $table->string('DiaChi');
            $table->integer('ThanhTien');
            $table->string('TrangThaiDH');
            $table->integer('TrangThai');
            $table->string('NgayLap');
            $table->timestamps();
        });

        Schema::create('giohang', function (Blueprint $table) {
            $table->id();
            $table->integer('iduser');
            $table->integer('TongSL');
            $table->integer('TongGia');
            $table->double('TongTien');
            $table->string('NgayLap');
            $table->timestamps();
            $table->tinyInteger('TrangThai');
        });

        Schema::create('chitietdonhang', function (Blueprint $table) {
            $table->integer('MaDH');
            $table->integer('MaSP');
            $table->integer('SoLuong');
            $table->integer('Gia');
            $table->timestamps();
        });

        Schema::create('chitietgiohang', function (Blueprint $table) {
            $table->id();
            $table->integer('MaGH');
            $table->integer('MaSP');
            $table->integer('SoLuong');
            $table->integer('Gia');
            $table->timestamps();
            $table->foreign('MaGH')->references('id')->on('giohang');
        });
        Schema::create('hoadon', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id ');
            $table->string('hoten');
            $table->integer('sdt');
            $table->string('diachi');
            $table->integer('thanhtien');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::create('chitiethoadon', function (Blueprint $table) {
            $table->id();
            $table->integer('id_hoadon ')->unsigned();
            $table->integer('ProductId');
            $table->string('SoLuong');
            $table->string('Gia');
            $table->integer('ThanhTien');
            $table->string('TrangThai');
            $table->timestamps();
            $table->foreign('id_hoadon')->references('id')->on('hoadon');
        });


        Schema::create('loaisanpham', function (Blueprint $table) {
            $table->id();
            $table->string('tenloai ');
            $table->string('trangthai');
            $table->timestamps();
        });

        Schema::create('slideshow', function (Blueprint $table) {
            $table->id();
            $table->text    ('Link');
            $table->string('HinhAnh');
            $table->tinyInteger('TrangThai');
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('danhmuc');
        Schema::dropIfExists('sanpham');
        Schema::dropIfExists('donhang');
        Schema::dropIfExists('chitietdonhang');
        Schema::dropIfExists('chitietgiohang');
        Schema::dropIfExists('chitiethoadon');
        Schema::dropIfExists('giohang');
        Schema::dropIfExists('hoadon');
        Schema::dropIfExists('loaisanpham');
        Schema::dropIfExists('slideshow');
    }
};
