<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationFormRequest;
use App\Mail\Reservation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ReservationFormController extends Controller
{
    public function show(){
        return view('reservation');
    }

    public function send(ReservationFormRequest $request)
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
        
        return view('attent');
    }
}