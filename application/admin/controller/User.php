<?php
/**
 * Created by PhpStorm.
 * User: 15755
 * Date: 2017/10/27
 * Time: 16:52
 */

namespace app\admin\controller;

use think\Loader;

class User
{
    //后台用户注册
    public function register()
    {

    }

    //后台用户登陆
    public function login()
    {
        $username =input('get.username');
        $pwd = input('get.pwd');
        $user = loader::model('User');
        // 查询单个数据
        $is = $user->where(array('user_name'=>$username,'login_pwd'=>$pwd,'invalid'=>0,'status'=>1))->find();
        if($is){
            jsonRespons('true','登陆成功','','');
        }else{
            jsonRespons('false','登陆失败','','');
        }
    }

}