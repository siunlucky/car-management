@extends('layouts.main')

@section('pages')
<div class="px-4 pt-6">
    <h1 class="text-[20px] font-bold mb-10">Select Office</h1>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($offices as $office)
        <div class="shadow-xl card w-96 bg-base-100">
            <figure><img src="assets/image/{{ $office->photo_office }}" class="w-full" alt="Office" /></figure>
            <div class="card-body">
                <h2 class="card-title">{{ $office->name_office }}</h2>
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 mr-2" viewBox="0 0 384 512">
                        <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <p>{{ $office->address }}</p>
                </div>
                <div class="flex">

                    <p class="text-green-500">
                        {{ $cars->where('id_office', $office->id)->where('status', 'available')->count() }} Cars
                        Available
                    </p>
                </div>

                <div class="justify-end card-actions">
                    <a href="/rent-car/{{ $office->id }}/select-car">
                        <button class="btn btn-primary">
                            Next
                        </button>
                    </a>

                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>
@endsection