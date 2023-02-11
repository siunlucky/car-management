<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div>
        @include('partials.navbar')
        <div class="flex pt-16 overflow-hidden bg-white">
            @include('partials.sidebar')
            <div class="fixed inset-0 z-10 hidden bg-gray-900 opacity-50" id="sidebarBackdrop"></div>
            <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64">
                <main>
                    @yield('pages')
                </main>

            </div>
        </div>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
    </div>
    @include('sweetalert::alert')
</body>

</html>