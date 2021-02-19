<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnulationFormRequest;
use Illuminate\Support\Facades\DB;

class AnnulationController extends Controller
{
    public function delete(AnnulationFormRequest $request)
    {
        $reservation = DB::table('reservations')->where(
            'token', $request->route('token') 
        )->first();
        if($reservation){
            $reservation = json_decode(json_encode($reservation), true);
            return view('annulation', $reservation);
        }
        else{
            return redirect('/');
        }
    }

    public function annulation(AnnulationFormRequest $request){
        DB::table('reservations')->where(
            'token', $request->route('token') 
        )->delete();
        return redirect('/');
    }
}