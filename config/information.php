<?php 
return 
[
    'email' => env('MAIL_FROM_ADRESS'),
    'date' => ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'],
    'time' => env('MAIL_FROM_TIME'),
    'token' => env('MAIL_FROM_TOKEN'),
    'confirmation' => env('MAIL_FROM_CONFIRMATION'),
];
