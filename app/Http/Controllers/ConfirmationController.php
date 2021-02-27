<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function show($token){
    
        DB::table('reservations')->where('token', $token)
        ->update(['confirmation' => true]);
      
    
        return redirect('/')->with('success', 'Réservation confirmée !'); 

    }
}
