<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2017/12/1
 * Time: 下午3:29
 */
namespace App\CustomFacades;

use Illuminate\Support\Facades\Facade;

class Foo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'foo';
    }
}