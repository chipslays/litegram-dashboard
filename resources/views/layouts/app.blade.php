<!DOCTYPE html>

<html lang="en" class="">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <title>@yield('title', 'Dashboard')</title>

    <style>

    </style>

    @yield('styles')
</head>

<body class="bg-gray-50 text-gray-800">

    <section class="flex relative w-screen">
        <aside class="w-64 bg-gray-800 text-gray-200 h-screen border-r border-gray-700">

            {{-- logo --}}
            <div class="h-16 text-center uppercase font-extrabold text-lg p-4 border-b border-gray-700 flex items-center">
               <div>
                    Dashboard
               </div>
            </div>

            {{-- sidebar navigation --}}
            <div class="">

            </div>
        </aside>

        <div class="h-screen flex flex-col w-full flex-1">
            <header class="h-16 bg-white border-b border-gray-100 flex justify-between items-center p-4">
                {{-- header: left --}}
                <div>
                    <div>
                        left
                    </div>
                </div>

                {{-- header: right --}}
                <div>
                    <div>
                        right
                    </div>
                </div>
            </header>

            {{-- content --}}
            <main class="p-8 overflow-y-auto">
               content
            </main>
        </div>
    </section>





    <script src="{{ mix('/js/app.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(function () {

        });
    </script>

    @yield('scripts')

</body>

</html>
