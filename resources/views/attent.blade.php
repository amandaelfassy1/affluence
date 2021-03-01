@extends('layouts.default')
@section('content')
@include('partials.navbar')


<div class="pt-24 text-indigo-500">
    <div class="w-screen  flex items-center justify-center bg-gray-100">
        <div class="w-full mx-auto py-16" >
            <div class="bg-white px-7 py-14 my-4 w-2/4 mx-auto shadow rounded-md text-center">
                <img src="{{asset('scuba.jpg')}}" alt="">
                <h1 class="text-black font-bold mb-6 mt-6">En attente de confirmation</h1>
                <hr>
                <h3  class="text-blue font-bold">Pour finaliser votre demande, vous devez confirmer votre réservation, depuis le mail reçu.</p></h3>
            </div>
        </div>
    </div>
</div>
<style>
img{
    width: 40%;
   margin : auto;
   border-radius: 50%;
}
h1{
    font-size: 30px;
}
h3{
    font-size: 15px;
}
</style>
@endSection