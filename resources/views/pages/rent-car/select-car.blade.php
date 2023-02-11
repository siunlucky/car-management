@extends('layouts.main')

@section('pages')
<div class="px-4 pt-6">
    <h1 class="text-[20px] font-bold mb-10">Select Car</h1>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($cars as $car)
        <div class="shadow-xl card w-96 bg-base-100">
            <figure><img src="/assets/image/{{ $car->photo_car }}" class="w-full" alt="Car" /></figure>
            <div class="card-body">
                <h2 class="card-title">{{ $car->name_car }}</h2>
                <div class="flex">

                    <p class="text-green-500">
                        Ready
                    </p>
                </div>

                <div class="justify-end card-actions">
                    <a href="/rent-car/select-car/{{ $car->id }}/form-application">
                        <button class="btn btn-primary">
                            Rent
                        </button>
                    </a>

                </div>
            </div>
        </div>
        @endforeach


    </div>

</div>
@endsection