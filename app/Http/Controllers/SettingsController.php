<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //系统设置
    public function system()
    {
        return view('settings/system');
    }
    //数据备份
    public function data()
    {
        return view('settings/data');
    }
    //角色管理
    public function rolemanage()
    {
        return view('settings.rolemanage');
    }
    //成员管理
    public function membermanage()
    {
        return view('settings/membermanage');
    }

    public function power()
    {
        return view('settings/power');
    }

}
