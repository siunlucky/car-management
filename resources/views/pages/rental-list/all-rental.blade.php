@extends('layouts.main')

@section('pages')
<div class="px-4 pt-6">
    <div class="flex justify-between">
        <h1 class="text-[20px] font-bold mb-10">All Rentals</h1>
        <a href="/manage-rental/all-rental/export">
            <button
                class="flex items-center px-2 py-1 font-medium text-blue-500 border border-blue-500 rounded hover:bg-blue-500 hover:text-white">
                <span class="">
                    Download
                </span>
            </button>
        </a>
    </div>

    <div class="my-6 bg-white rounded shadow-md">
        <table class="w-full table-auto min-w-max">
            <thead>
                <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                    <th class="px-6 py-3 text-left">Application name</th>
                    <th class="w-40 px-6 py-3 text-left">Car Name</th>
                    <th class="px-6 py-3 text-center">Start | End</th>
                    <th class="px-6 py-3 text-center">From</th>
                    <th class="px-6 py-3 text-center">Destination</th>
                    <th class="w-40 px-6 py-3 text-left">Status</th>
                    <th class="px-6 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-sm font-light text-gray-600">
                @foreach ($rentals as $rental)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="px-6 py-3 text-left whitespace-normal">
                        <div class="flex items-center">
                            <span class="font-medium">{{ $rental->userApplication->name }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-left">
                        <div class="flex items-center">
                            <span class="font-medium">{{ $rental->car->name_car }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-center ">
                        <div class="flex flex-col">
                            <span class="font-medium">
                                {{ date('d M, Y', strtotime($rental->start_date)); }}
                            </span>
                            <span class="font-medium">
                                <span class="text-red-500">to</span>
                                {{ date('d M, Y', strtotime($rental->end_date)); }}
                            </span>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-center">
                        <div class="flex items-center justify-center">
                            <span class="font-medium">{{ $rental->car->office->name_office }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-center">
                        <div class="flex items-center justify-center">
                            <span class="font-medium">{{ $rental->office->name_office }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-3 text-center">
                        <div class="flex items-center justify-center">
                            <span class="font-medium">{{ $rental->status }}</span>
                        </div>
                    </td>

                    <td class="px-6 py-3">
                        <a href="/manage-rental/rental-detail/{{ $rental->id }}">
                            <button
                                class="flex items-center px-2 py-1 font-medium text-blue-500 border border-blue-500 rounded hover:bg-blue-500 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[5px] ml-0.5 mr-[13px]"
                                    fill="currentColor" viewBox="0 0 192 512">
                                    <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                                </svg>
                                <span class="">
                                    Details
                                </span>
                            </button>
                        </a>



                    </td>
                </tr>
                @endforeach



            </tbody>
        </table>
    </div>
</div>
@endsection