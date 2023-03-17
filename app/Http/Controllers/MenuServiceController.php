<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuServiceController extends Controller
{
    public function index(){

        return view('service.index');
    }
}
