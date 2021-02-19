@extends('layouts.default')
@section('content')
@include('partials.navbar')


<div class="pt-24 text-indigo-500">
    <div class="w-screen h-screen  flex items-center justify-center bg-gray-100">
        <div class="w-full mx-auto py-16" >
            <div class="bg-white px-6 py-14 my-3 w-3/4 mx-auto shadow rounded-md text-center">
                <h1 class="text-black font-bold mb-6">En attente de confirmation</h1>
                <hr>
                <p>Pour finaliser votre demande, vous devez confirmer l'adresse mail de votre réservation, depuis le mail reçu sur :</p>
            </div>
        </div>
    </div>
</div>

@endSection