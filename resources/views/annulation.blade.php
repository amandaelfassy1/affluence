@extends('layouts.default')
@section('content')
@include('partials.navbar')
<div class="pt-24 text-gray-900">

    <div class="w-screen h-screen  flex items-center justify-center bg-gray-100">

        <div class="w-full mx-auto py-16" >
        
            <div class="bg-white px-6 py-14 my-3 w-3/4 mx-auto shadow rounded-md text-center">
            
                <h1 class="text-black font-bold mb-6">Annulation de réservation</h1>
                <hr>
                <div class="card-body">
                    <table class="min-w-full table-auto">
                        <thead class="justify-between">
                        <tr class="bg-gray-800">
                            <th class="px-16 py-2">
                            <span class="text-gray-300">Date</span>
                            </th>
                            <th class="px-16 py-2">
                            <span class="text-gray-300">Heure</span>
                            </th>
                            <th class="px-16 py-2">
                            <span class="text-gray-300">Durée</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-gray-200">
                        <tr class="bg-white border-2 border-gray-200">
                            <td>
                            {{$date}}
                            </td>
                            <td class="px-16 py-2">
                            {{$time}}
                            </td>
                            <td class="px-16 py-2">
                            1h00 
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <form method="post" action="/annulation/{{$token}}">
                        {{csrf_field()}}
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" id="confirmed" name="confirmed" required="">
                            <label class="form-check-label" for="confirmed">
                                Je souhaite annuler ma réservation
                            </label>
                        </div>

                        <div>
                            <button type="submit" class='relative bg-red-600 text-white  md px-4 py-2 m-2 rounded overflow-visible'>
                                Annuler ma réservation
                            </button>
                        </div>
                    </form>
                </div>            
            </div>
        </div>
    </div>
</div>
<style>
h1{
    font-size: 30px;
}
</style>
@endSection