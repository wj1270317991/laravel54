<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Test;
class IndexController extends Controller
{
    public function index(){
        dd(Test::add(2,6));
    }
}
