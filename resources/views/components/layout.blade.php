<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>Document</title>
</head>

<body class=" bg-black">
    <div class="px-10">
        <x-nav.navigation>
        </x-nav.navigation>
    </div>
    <main>
        {{ $slot }}
    </main>
    <div class=" border border-gray-100 mt-28"></div>
    <footer>
        <div class="px-10 py-6 flex justify-between">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo-n1.png') }}" alt="" class=" max-w-40">
                </a>
            </div>
            <div>
               <span class="text-sm text-white">Created by Sharitha</span>
            </div>
        </div>
    </footer>

</body>

</html>
