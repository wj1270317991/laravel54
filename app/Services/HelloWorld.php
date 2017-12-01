<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2017/12/1
 * Time: 下午5:18
 */

namespace App\Services;


use App\Contracts\Hello;

class HelloWorld implements Hello
{
    public function hello(){
        return "HelloWorld";
    }
}