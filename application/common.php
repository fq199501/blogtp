<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
if(!function_exists('jsonRespons')){
    function jsonRespons($success='false',$message='',$token='',$result=''){
        echo json_encode(array(
            'success' => $success,
            'message' => $message?:'',
            'token' => $token?:'',
            'result' => $result
        ));exit;
    }
}