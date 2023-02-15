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
                            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
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

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor"
                                viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M0 80C0 35.8 35.8 0 80 0H432c44.2 0 80 35.8 80 80V368c0 26.2-12.6 49.4-32 64v48c0 17.7-14.3 32-32 32H416c-17.7 0-32-14.3-32-32V448H128v32c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V432C12.6 417.4 0 394.2 0 368V80zm129.9 72.2L112 224H400l-17.9-71.8C378.5 138 365.7 128 351 128H161c-14.7 0-27.5 10-31 24.2zM128 320a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Car Name</div>
                            <div class="text-lg font-bold">{{ $rental->car->name_car }} ({{ $rental->car->number_plate
                                }})</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex flex-row p-4 bg-white rounded shadow-sm">
                        @if ($rental->status == "Waiting For Approval")
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-yellow-500 bg-yellow-100 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor"
                                viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                            </svg>
                        </div>
                        @endif
                        @if($rental->status == "Cancelled")
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-red-500 bg-red-100 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor"
                                viewBox="0 0 320 512">
                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z" />
                            </svg>
                        </div>
                        @endif
                        @if($rental->status == "Completed")
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-white bg-gray-400 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor"
                                viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
                            </svg>
                        </div>
                        @endif
                        @if($rental->status == "in Use")
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-green-500 bg-green-100 rounded-xl">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor"
                                viewBox="0 0 640 512">
                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z" />
                            </svg>
                        </div>
                        @endif


                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Status</div>
                            <div class="text-lg font-bold">{{ ($rental->status == 'Cancelled') ? $rental->status
                                . '
                                by
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
                            <div class="text-lg font-bold">{{ date('F d, Y', strtotime($rental->start_date)); }}
                            </div>
                        </div>
                    </div>
                </div>
                @endif


                <div class="col-span-2">
                    <div class="flex flex-row p-4 bg-white rounded shadow-sm">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-orange-500 bg-orange-100 rounded-xl">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor"
                                viewBox="0 0 576 512">
                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M528 160V416c0 8.8-7.2 16-16 16H320c0-44.2-35.8-80-80-80H176c-44.2 0-80 35.8-80 80H64c-8.8 0-16-7.2-16-16V160H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM272 256a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zm104-48c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z" />
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor"
                                viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor"
                                viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor"
                                viewBox="0 0 384 512">
                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor"
                            viewBox="0 0 384 512">
                            <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
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
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-blue-500 bg-blue-100 rounded-xl">

                            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                            </svg>
                        </div>
                        <div class="flex flex-col flex-grow ml-4">
                            <div class="text-sm text-gray-500">Start Date</div>
                            <div class="text-lg font-bold">{{ date('F d, Y', strtotime($rental->start_date)); }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-24">
                    <div class="relative flex flex-row p-4 bg-white rounded shadow-sm">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-blue-500 bg-blue-100 rounded-xl">
                            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
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