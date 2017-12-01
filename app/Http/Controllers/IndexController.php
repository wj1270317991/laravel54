<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Test;
use App\Contracts\Hello;
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
}
