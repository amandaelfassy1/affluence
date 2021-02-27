<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnulationFormRequest;
use App\Mail\Annulation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
     
        $reservation = DB::table('reservations')->where(
            'token', $request->route('token') 
        )->first();

        $params = [
            'email' => $reservation->email,
            'subject' => "Ceci est une annulation "
        ];

        if(isset($params['email'])){
            
            Mail::to($params['email'])->send(new Annulation($params));
        }
        else{
            return redirect('/');
        }

        DB::table('reservations')->where(
            'token', $request->route('token'),
        )->delete();

        return redirect('/');
    }
}