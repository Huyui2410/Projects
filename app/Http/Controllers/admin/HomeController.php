<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $CountProduct = \DB::table('sanpham')->count();
        $totalMoney   = \DB::table('hoadon')->sum('thanhtien');
        $countOrder   = \DB::table('hoadon')->count();
        $countCategory = \DB::table('danhmuc')->count();
        $data = [
            'countProduct' => $CountProduct,
            'totalMoney'   => $totalMoney,
            'countOrder'   => $countOrder,
            'countCategory' =>$countCategory
        ];
        return view('admin.home.home',$data);
    }
}
