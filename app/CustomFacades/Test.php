<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2017/12/1
 * Time: 下午4:29
 */

namespace App\CustomFacades;


use Illuminate\Support\Facades\Facade;

class Test extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'test';
    }
}