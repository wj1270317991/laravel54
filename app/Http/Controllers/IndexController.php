<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Test;
use App\Contracts\Hello;
use Route;
class IndexController extends Controller
{
    protected $hello;
    public function __construct(Hello $hello)
    {
        $this->hello = $hello;
    }


    public function index(){
        //门面
        dd(Test::add(2,6));
    }


    public function contracts(){
        dd($this->hello->hello());
    }

    public function routes(){
        $route = Route::current();
        $name = Route::currentRouteName();
        $action = Route::currentRouteAction();
        dd($name);
    }
}
