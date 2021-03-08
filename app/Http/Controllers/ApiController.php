<?php

namespace App\Http\Controllers;
use App\Models\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\ReservationFormRequest;
use App\Mail\Reservation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\AnnulationFormRequest;
use App\Mail\Annulation;



class ApiController extends Controller
{

    public function index()
    {
        return Config::get('information');
    }

    public function store(Request $request)
    {
            $params = [
                'date' => $request->get('date'),
                'time' => $request->get('time'),
                'email' => $request->get('email'),
                'confirmation' => false,
                'token'=> uniqid(),
                'subject' => "Ceci est une reservation "
            ];
    
            DB::table('reservations')->insert([
                'date' => $params['date'],
                'time' => $params['time'],
                'email' => $params['email'],
                'confirmation' => $params['confirmation'],
                'token'=> $params['token']
            ]);
            Mail::to($params['email'])->send(new Reservation($params));
            
            return response()->json([
                'message' =>'Votre reservation a bien été confirmée',
                'token'=> $params['token']        
            ],201);
          
    }

   
    public function destroy(AnnulationFormRequest $request)
    {
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

        return response()->json('Votre reservation a bien été annulée',200);
    }
}
