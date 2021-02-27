@extends('layouts.default')

@section('content')

@include('partials.banner')

@include('partials.navbar')


<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Message
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200 p-0">
          @foreach($contacts as $contact)
            <tr>
              <td class="py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      {{ $contact->first_name }} {{ $contact->last_name }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $contact->email }}</div>
              </td>
              <td class="py-4 whitespace-nowrap">
                <div class="px-2 flex text-xs leading-5 font-semibold text-green-800">
                {{ Str::limit($contact->message, 50) }}
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endSection