@extends('layouts.default')
@section('content')
@include('partials.navbar')


<div class="pt-24 text-indigo-500">
    <div class="w-screen  flex items-center justify-center bg-gray-100">
        <div class="w-full mx-auto py-16" >
            <div class="bg-white px-7 py-14 my-4 w-2/4 mx-auto shadow rounded-md text-center">
                <img src="{{asset('scuba.jpg')}}" alt="">
                <h1 class="text-black font-bold mb-6 mt-6">Votre réservation est confirmée avec succes !</h1>
                <hr>
                <h3  class="text-blue font-bold">Nous vous attendons avec impatience !</h3>
            </div>
        </div>
    </div>
</div>
<style>
img{
    border-radius: 50%;
    width: 30%;
   margin : auto;
}
h1{
    font-size: 30px;
}
h3{
    font-size: 20px;
}
</style>
@endSection