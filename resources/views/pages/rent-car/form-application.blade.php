@extends('layouts.main')

@section('pages')
<div class="px-4 pt-6">
    <h1 class="text-[20px] font-bold mb-10">Form Application</h1>

    <div class="flex items-center justify-center">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="/rent-car/select-car/form-application/store-application" method="post">
                @csrf
                <div class="mb-5">
                    <label for="application_name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Applicant Name
                    </label>
                    <input type="text" name="application_name" id="application_name" placeholder="Application Name"
                        min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium
                        text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                        value="{{ auth()->user()->name }}" readonly />
                </div>


                <input type="hidden" name="application_user_id" id="application_user_id" min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium
                        text-black outline-none focus:border-[#6A64F1] focus:shadow-md"
                    value="{{ auth()->user()->id }}" />

                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="car_name" class="mb-3 block text-base font-medium text-[#07074D]">
                                Car Name
                            </label>
                            <input type="text" name="car_name" id="car_name" placeholder="Car Name"
                                value="{{ $car->name_car }}" readonly
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        @error('car_id')
                        <div class="text-[red]">{{ $message }}</div>
                        @enderror
                    </div>


                    <input type="hidden" name="car_id" id="car_id" value="{{ $car->id }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" />



                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="driver_id" class="mb-3 block text-base font-medium text-[#07074D]">
                                Driver
                            </label>
                            <select type="text" name="driver_id" id="driver_id"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <option disabled selected>Select Driver</option>
                                @foreach ($drivers as $driver)
                                <option value="{{ $driver->id }}">{{ $driver->name_driver }}</option>
                                @endforeach
                            </select>
                            @error('driver_id')
                            <div class="text-[red]">The driver field is required.</div>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="mb-5">
                    <label for="destination" class="mb-3 block text-base font-medium text-[#07074D]">
                        Destination
                    </label>
                    <select type="text" name="destination" id="destination" placeholder="5" min="0"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md">
                        <option disabled selected>Select Destination</option>
                        @foreach ($offices as $office)
                        <option value="{{ $office->id }}">{{ $office->name_office }}</option>
                        @endforeach
                    </select>
                    @error('destination')
                    <div class="text-[red]">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
                        Description
                    </label>
                    <input type="text" value="{{ old('description') }}" name="description" id="description"
                        placeholder="I need to...." min="0" class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium
                        text-black outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('description')
                    <div class="text-[red]">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="start_date" class="mb-3 block text-base font-medium text-[#07074D]">
                                Start Date
                            </label>
                            <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}" class=" w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base
                                font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('start_date')
                            <div class="text-[red]">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="end_date" class="mb-3 block text-base font-medium text-[#07074D]">
                                End Date
                            </label>
                            <input type="date" name="end_date" id="end_date" value="{{ old('end_date') }}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('end_date')
                            <div class="text-[red]">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <script>
                        document.getElementById("start_date").addEventListener("input", function() {
                            var today = new Date();
                            var tomorrow = new Date();
                            tomorrow.setDate(today.getDate());
                    
                            var selectedDate = new Date(this.value);
                            if (selectedDate <= tomorrow) {
                                alert("The date must be greater than today");
                                this.value = "";
                            }
                        });

                        function isEndDateGreaterThanStartDate(startDate, endDate) {
                            var start = new Date(startDate);
                            var end = new Date(endDate);

                            if (end < start) {
                                return false;
                            }

                            return true;
                        }

                        document.getElementById("end_date").addEventListener("change", function() {
                            var startDate = document.getElementById("start_date").value;
                            var endDate = this.value;

                            if (!isEndDateGreaterThanStartDate(startDate, endDate)) {
                                alert("The end date must be greater than the start date.");
                                this.value = "";
                            }
                        });
                    </script>
                </div>

                <div class="mb-5 shadow-lg alert alert-info">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="flex-shrink-0 w-6 h-6 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Keterlambatan akan dikenakan denda sebanyak Rp200.000,00/hari</span>
                    </div>
                </div>



                <div>
                    <button type="submit"
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>


</div>
@endsection