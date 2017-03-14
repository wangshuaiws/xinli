<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConsultController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //参数设置
    public function appointsetting()
    {
        return view('consult/appointsetting');
    }
    //预约管理
    public function appointmanage()
    {
        return view('consult/appointmanage');
    }
    //个案辅导
    public function appointcoach()
    {
        return view('consult/appointcoach');
    }
    //我的预约
    public function appointmy()
    {
        return view('consult/appointmy');
    }
}
