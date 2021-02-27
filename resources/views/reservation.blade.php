@extends('layouts.default')
@section('content')
@include('partials.navbar')

<div class="pt-24 text-indigo-500">
    <div class="w-screen h-screen  flex items-center justify-center bg-gray-100">
        <div class="w-full mx-auto py-16" >
            <div class="px-6 py-14 my-3 w-3/4 mx-auto  ">
            <form action="{{ route('contact.send') }}" method="POST">
            @csrf
               <div class=" flex items-center justify-center ">
                    <div class="bg-white text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
                        <div class="md:flex w-full">
                            <div class="hidden md:block w-1/2 py-10 px-10 blue">
                                <img src="{{ asset('diving.png') }}" alt="">
                            </div>
                            <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                                <div class="text-center mb-10">

                                    <h1 class="font-bold text-3xl text-gray-900">Réservation</h1>
                                    <p>Réservez une place pour une heure<br>(2 places par heure disponibles).</p>
                                </div>
                            <div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="" class="text-xs font-semibold px-1">Email</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                        <input value="{{ old('email')}}"  name="email" id="email" autocomplete="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="johnsmith@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-1/2 px-3 mb-5">
                                    <label for="" class="text-xs font-semibold px-1">Date</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                            <input onChange="dateChange()" value="{{ old('date')}}" type="date" name="date" id="date" autocomplete="given-name" min="<?php echo date("Y-m-d"); ?>"  class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="John">
                                        </div>
                                    </div>
                                    <div class="w-1/2 px-3 mb-5">
                                        <label for="" class="text-xs font-semibold px-1">Heure</label>
                                        <div class="flex">
                                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                            <input value="{{ old('time')}}" type="time" id="time" name="time"min="09:00" max="18:00" step="3600" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Smith">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 text-center">
                                    <input  type="checkbox" id="cgu" name="cgu" required>
                                    <label for="cgu">Accepter les conditions générales</label>
                                </div>
                                <div class="flex -mx-3">
                                    <div class="w-full px-3 mb-5">
                                        <button class="block w-full max-w-xs mx-auto text-white rounded-lg px-3 py-3 font-semibold">RESERVER</button>
                                    </div>
                                </div>
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
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<style>
h1{
    font-size: 40px;
}
.blue{
    background: linear-gradient(#39bffe, #0a70f0);
}
button{
    background-color: #0a70f0;
}
button:hover{
    background-color: #39bffe;
}

</style>
@endSection





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

 <!-- <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-6 sm:col-span-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input value="{{ old('email')}}" placeholder="exemple@gmail.com" type="text" name="email" id="email" autocomplete="email" class="px-3 py-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                                <input onChange="dateChange()" value="{{ old('date')}}" type="date" name="date" id="date" autocomplete="given-name" min="<?php echo date("Y-m-d"); ?>" class="px-3 py-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                            <label for="time" class="block text-sm font-medium text-gray-700">Choose a time for your meeting:</label>
                                <input value="{{ old('time')}}" type="time" id="time" name="time"min="09:00" max="18:00" step="3600" class="px-3 py-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"required>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Reserver
                        </button>
                    </div>
                </div> -->