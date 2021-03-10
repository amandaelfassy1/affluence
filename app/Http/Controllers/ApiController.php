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

    public function selectMail($request)
    {
            $reservation = DB::table('reservations')->where(
                'token', $request 
            )->first();
            if(is_null($reservation))
            {
                
                return response()->json('Une erreur est survenue', 404);
                
            }
    
            return response()->json([
                $reservation ->token,      
                $reservation ->date,      
                $reservation ->time,      
                $reservation ->email,      
                                   
            ],201);
    }


    public function destroy($token)
    {
        $reservation = DB::table('reservations')->where(
            'token', $token
        )->first();
        
        if(is_null($reservation))
        {
            
            return response()->json('Une erreur est survenue', 404);
            
        }

        $params = [
            'email' => $reservation->email,
            'subject' => "Ceci est une annulation "
        ];

      
            
        Mail::to($params['email'])->send(new Annulation($params));
        

        DB::table('reservations')->where(
            'token', $token
        )->delete();

        return response()->json('Votre reservation a bien été annulée',200);
    }
}
