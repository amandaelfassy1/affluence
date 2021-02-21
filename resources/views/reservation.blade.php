@extends('layouts.default')
@section('content')
@include('partials.navbar')

<div class="pt-24 text-indigo-500">
<div class="w-screen h-screen  flex items-center justify-center bg-gray-100">
  <div class="w-full mx-auto py-16" >
    <h1 class="text-black text-center font-bold">Reservation</h1>
    <h2 class="text-black text-center">Réserver une place pour une heure (2 places par heure disponibles).</h2>
    <div class="bg-white px-6 py-14 my-3 w-3/4 mx-auto shadow rounded-md ">
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 text-center rounded relative mb-4">
                    <span class="inline-block align-middle">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </span>
                </div>
            @endif
            <div id="error" class="bg-red-100 border border-red-400 text-center text-red-700 px-4 py-3 rounded relative" role="alert" style="display: none;">
                <strong class="font-bold"></strong>
                <span class="block sm:inline"></span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
            <form action="{{ route('contact.send') }}" method="POST">
            @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">

                        <div class="col-span-6 sm:col-span-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input value="{{ old('email')}}" type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                            <input onChange="dateChange()" value="{{ old('date')}}" type="date" name="date" id="date" autocomplete="given-name" min="<?php echo date("Y-m-d"); ?>" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                        <label for="time" class="block text-sm font-medium text-gray-700">Choose a time for your meeting:</label>
                            <input type="time" id="time" name="time"min="09:00" max="18:00" step="3600" required>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Reserver
                    </button>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- <script>
let errorDisplay = document.querySelector("#error");
let datePicker = document.querySelector('#date')
function dateChange(){
    var date = new Date(datePicker.value);
    var number = date.getDay();
    console.log(number)
    if(number == 6 || number == 0){
        errorDisplay.innerHTML = "Désolé nous sommes fermés le week-end, choisissez une autre date !";
        errorDisplay.style.display = "block";
        return;
        datePicker.value = new Date().toISOString().slice(0, 10);
    }
}
</script> -->
<style>
h1{
    font-size: 40px;
}
</style>

@endSection