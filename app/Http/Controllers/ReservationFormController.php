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
            'token'=> uniqid(),
            'subject' => "Ceci est une reservation "
        ];

        DB::table('reservations')->insert([
            'date' => $params['date'],
            'time' => $params['time'],
            'email' => $params['email'],
            'token'=> $params['token']
        ]);

        Mail::to($params['email'])->send(new Reservation($params));
        /*Mail::send('emails.contact', $params, function($m) use ($params){
            $m->from($params['email'], $params['first_name'] . $params['last_name']);
            $m->to('julie@webstart.com', 'Julie de Webstart')->subject('Nouveau message!');
        }); */
        return view('attent');
    }
}
