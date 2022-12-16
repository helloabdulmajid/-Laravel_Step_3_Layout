<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class AboutController extends Controller
{
    function test(){
        $data=30;
        // return Blade::render("<h1>Hello i am from About Controller without view craete</h1>");
        return Blade::render('<h3> total amount {{$total}} </h3>',['total'=>$data]);

    }
}
