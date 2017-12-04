<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowProfileController extends Controller
{
    public function __invoke($id)
    {
        dd('__invoke');
    }
}
