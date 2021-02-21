<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date' => ["required","alpha_dash",
 
            function($attribute, $value, $fail) {
                $dayNumber = (new \DateTime($value))->format("N");
                if($dayNumber == 6 || $dayNumber == 7){
                    return $fail('Désolé nous sommes fermés le week-end, choisissez une autre date !');
                }
            },
            ],
            
            'email' => "required|email",
            
            'time' => ["required","date_format:H:i",   
            
            function($attribute, $value, $fail) {
                $date = Request::get('date'); // Retrieve date
                $datetime = new \DateTime("$date $value",new \DateTimeZone('Europe/Paris') );
                if ($datetime < new \DateTime("now", new \DateTimeZone('Europe/Paris'))){
                  return $fail($attribute.' Vous ne pouvez pas choisir une date dans le passé.');
                } 
        
            },
            function($attribute, $value, $fail) {
                $date = Request::get('date'); // Retrieve date
                $result = DB::table('reservations')->where([
                    'date'=>  $date, 
                    'time'=> $value 
                ])->get();
                if ($result->count() >= 2){
                    return $fail('Plus de place disponible au créneau horaire choisi');
                }
            },
            ]
            
        ];
    }
}
