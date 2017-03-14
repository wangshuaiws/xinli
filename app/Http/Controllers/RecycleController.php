<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RecycleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //回收站
    public function recycle()
    {
        return view('recycle/recyclebin');
    }
}
