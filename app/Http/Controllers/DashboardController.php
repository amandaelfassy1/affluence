<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function show(){
        $contacts = DB::table('contacts')->get();
        return view('dashboard', ['contacts' => $contacts]);
    }
}
