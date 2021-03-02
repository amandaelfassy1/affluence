<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
class IndexController extends Controller
{
    public function index(){
        $informations=[
            'name'=>(Config::get('information.name')),
            'adress'=>(Config::get('information.adress')),
            'title'=>(Config::get('information.adress')),
            'tel'=>(Config::get('information.tel')),
        ];
        return view('index', $informations);
    }
}
