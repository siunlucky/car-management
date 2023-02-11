@extends('layouts.main')

@section('pages')
<div class="px-4 pt-6">
    <div class="min-h-screen">
        <h1 class="text-[20px] font-bold">Rental Detail</h1>
        <div class="w-full p-4">
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2">
                    <div class="flex flex-row p-4 bg-white rounded shadow-sm">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-blue-500 bg-blue-100 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Applicant Name</div>
                            <div class="text-lg font-bold">{{ $rental->userApplication->name }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex flex-row p-4 bg-white rounded shadow-sm">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-blue-500 bg-blue-100 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Created at</div>
                            <div class="text-lg font-bold">{{ date('F d, Y H:i:s',
                                strtotime($rental->application_datetime));
                                }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex flex-row p-4 bg-white rounded shadow-sm">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-green-500 bg-green-100 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Car Name</div>
                            <div class="text-lg font-bold">{{ $rental->car->name_car }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex flex-row p-4 bg-white rounded shadow-sm">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-orange-500 bg-orange-100 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Status</div>
                            <div class="text-lg font-bold">{{ ($rental->status == 'Cancelled') ? $rental->status . ' by
                                ' . $rental->userDecline->name
                                : $rental->status}}</div>
                        </div>
                    </div>
                </div>
                @if ($rental->return_date)
                <div class="col-span-2">
                    <div class="flex flex-row p-4 bg-white rounded shadow-sm">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-orange-500 bg-orange-100 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Return Date</div>
                            <div class="text-lg font-bold">{{ date('F d, Y', strtotime($rental->start_date)); }}</div>
                        </div>
                    </div>
                </div>
                @endif


                <div class="col-span-2">
                    <div class="flex flex-row p-4 bg-white rounded shadow-sm">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-orange-500 bg-orange-100 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Driver</div>
                            <div class="text-lg font-bold">{{ $rental->driver->name_driver }}</div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="flex flex-row p-4 bg-white rounded shadow-sm">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-green-500 bg-green-100 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Approved by Superior</div>
                            <div class="text-lg font-bold">{{ ($rental->approval_superior_id) ?
                                $rental->userApprovalSuperior->name : "Waiting For Approval"}}</div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="flex flex-row p-4 bg-white rounded shadow-sm">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-green-500 bg-green-100 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Approved by Head</div>
                            <div class="text-lg font-bold">{{ ($rental->approval_head_id) ?
                                $rental->userApprovalHead->name : "Waiting For Approval"}}</div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="flex flex-row p-4 bg-white rounded shadow-sm">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-red-500 bg-red-100 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">From</div>
                            <div class="text-lg font-bold">{{ $rental->car->office->name_office }}</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row p-4 bg-white rounded shadow-sm">
                    <div
                        class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-red-500 bg-red-100 rounded-xl">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="flex flex-col flex-grow ml-4">
                        <div class="text-sm text-gray-500">Destination</div>
                        <div class="text-lg font-bold">{{ $rental->office->name_office }}</div>
                    </div>
                </div>


                <div class="">
                    <div class="flex flex-row p-4 bg-white rounded shadow-sm">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-red-500 bg-red-100 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Start Date</div>
                            <div class="text-lg font-bold">{{ date('F d, Y', strtotime($rental->start_date)); }}</div>
                        </div>
                    </div>
                </div>
                <div class="mb-24">
                    <div class="relative flex flex-row p-4 bg-white rounded shadow-sm">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-red-500 bg-red-100 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">End Date</div>
                            <div class="text-lg font-bold">{{
                                date('F d, Y', strtotime($rental->end_date)); }}</div>
                        </div>
                    </div>

                    <div class="float-right mt-5">
                        <a href="{{ URL::previous() }}">
                            <button class="px-6 text-white btn btn-primary">
                                Back
                            </button>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection