<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function page()
    {
        return view('page');
        //dd('รีเทิร์นไปยังหน้า VIEW ชื่อว่า page ซึ่งในหน้านี้มีข้อความแสดงว่า ยินดีต้อนรับสู่หน้าต่างของฉัน');
    }

    public function form()
    {
        return view('form');
    }

}
