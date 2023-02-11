<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gradient-to-br from-green-100 to-white">
    <div class="container px-24 mx-auto">
        <div class="flex flex-col h-screen text-center md:text-left md:flex-row justify-evenly md:items-center">
            <div class="flex flex-col w-full">
                <div>
                    <svg class="w-20 h-20 mx-auto text-gray-800 md:float-left fill-stroke" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                        </path>
                    </svg>
                </div>
                <h1 class="text-5xl font-bold text-gray-800">Admin Area</h1>
                <p class="w-5/12 mx-auto text-gray-500 md:mx-0">
                    Car Management Services
                </p>
            </div>
            <div class="w-full mx-auto md:w-full lg:w-9/12 md:mx-0">
                <div class="flex flex-col w-full p-10 bg-white shadow-xl rounded-xl">
                    <h2 class="mb-5 text-2xl font-bold text-left text-gray-800">
                        Sign In
                    </h2>
                    <form action="/login/authenticate" method="POST" class="w-full">
                        @csrf
                        <div id="email" class="flex flex-col w-full my-5">
                            <label for="email" class="mb-2 font-bold text-gray-500">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                placeholder="example@example.com"
                                class="px-4 py-3 placeholder-gray-300 border-2 border-gray-100 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg" />
                        </div>
                        @error('email')
                        <div class="text-[red]">{{ $message }}</div>
                        @enderror
                        <div id="password" class="flex flex-col w-full my-5">
                            <label for="password" class="mb-2 font-bold text-gray-500">Password</label>
                            <input type="password" name="password" id="password" placeholder="**************"
                                class="px-4 py-3 placeholder-gray-300 border-2 border-gray-100 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg" />
                        </div>
                        @error('password')
                        <div class="text-[red]">{{ $message }}</div>
                        @enderror
                        <div id="button" class="flex flex-col w-full my-5">
                            <button type="submit" class="w-full py-4 text-green-100 bg-green-600 rounded-lg">
                                <div class="flex flex-row items-center justify-center">
                                    <div class="mr-2">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="font-bold">Sigin</div>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
</body>

</html>