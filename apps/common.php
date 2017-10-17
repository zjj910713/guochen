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
function setState($state){
	if($state==1){
        return "充值";
    }
    if($state==2){
        return "回收";
    }
    if($state==3){
        return "兑换积分";
    }
    if($state==4){
        return "兑换客差价";
    }
    if($state==5){
        return "撤销";
    }
    if($state==6){
    	return "返利";
    }
    if($state==7){
        return "返积分";
    }
    if($state==8){
        return "返差价";
    }
    if($state == 9){
        return "兑换返积分";
    }
    if($state == 10){
        return "兑换返差价";
    }
}