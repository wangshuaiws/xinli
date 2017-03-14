<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //量表管理
    public function gaugemanage()
    {
        return view('tests/gaugemanage');
    }
    //量表分配
    public function gaugeallot()
    {
        return view('tests/gaugeallot');
    }
    //测试结果录入
    public function gaugeinput()
    {
        return view('tests/gaugeinput');
    }
    //查看测试结果
    public function gaugecheck()
    {
        return view('tests/gaugecheck');
    }
}
