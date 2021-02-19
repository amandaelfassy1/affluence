@extends('layouts.default')
@section('content')
@include('partials.navbar')


<div class="pt-24 text-indigo-500">
<div class="w-screen h-screen  flex items-center justify-center bg-gray-100">
  <div class="w-full mx-auto py-16" >
    <h1 class="text-black text-center font-bold mb-6">Reservation</h1>
    <div class="bg-white px-6 py-14 my-3 w-3/4 mx-auto shadow rounded-md ">
            @if ($errors->any())
                <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500">
                    <span class="inline-block align-middle">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </span>
                </div>
            @endif
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
                            @for ($i = 9; $i < 19; $i++)
                            <label class="inline-block text-sm font-medium text-gray-700">
                                <input type="radio" name="time" id="option{{$i}}" class="hidden input_hour" value="{{$i}}" />
                                <div class="hour" for="option{{$i}}">{{$i}}h00</div>
                            </label>
                            @endfor
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
<script>
let datePicker = document.querySelector('#date')
function dateChange(){
    var date = new Date(datePicker.value);
    var number = date.getDay();
    console.log(number)
    if(number == 6 || number == 0){
        alert('Désolée nous sommes fermés le weekend')
        datePicker.value = new Date().toISOString().slice(0, 10);
    }
}
</script>
@endSection