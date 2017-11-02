<?php
namespace app\admin\controller;

use think\Loader;

class Index extends \think\Controller
{
    public function index()
    {
//        $mark =input('get.mark');
//        $this->assign('mark',$mark);
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function system()
    {
        return view('system');
    }

}
