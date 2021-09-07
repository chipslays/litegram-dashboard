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
        <aside class="w-64 bg-white text-gray-800 h-screen border-r border-gray-100 z-20">

            {{-- logo --}}
            <div class="h-16 text-center uppercase font-extrabold text-lg p-4 border-b border-gray-100 flex items-center">
               <div>
                    Dashboard
               </div>
            </div>

            {{-- sidebar navigation --}}
            <div class="">
                <div class="p-4 space-y-2">
                    <div class="text-xs uppercase text-gray-400 font-medium">
                        Общее
                    </div>
                    <a href="#" class="p-2 rounded-md bg-blue-500 bg-opacity-30 hover:bg-opacity-40 border-dashed border-2 border-blue-500 inline-block w-full text-sm text-blue-700 font-medium px-6 transition duration-100">
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            <div>
                                Обзор
                            </div>
                        </div>
                    </a>
                    <a href="#" class="p-2 rounded-md inline-block w-full text-sm text-gray-400 hover:bg-gray-100 transition duration-100  px-6">
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                            </svg>
                            <div>
                                Сообщения
                            </div>
                        </div>
                    </a>
                    <a href="#" class="p-2 rounded-md inline-block w-full text-sm text-gray-400 hover:bg-gray-100 transition duration-100  px-6">
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <div>
                                Пользователи
                            </div>
                        </div>
                    </a>
                    <a href="#" class="p-2 rounded-md inline-block w-full text-sm text-gray-400 hover:bg-gray-100 transition duration-100  px-6">
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div>
                                Рассылка
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-4 space-y-2">
                    <div class="text-xs uppercase text-gray-400 font-medium">
                        Разработка
                    </div>
                    <a href="#" class="p-2 rounded-md inline-block w-full text-sm text-gray-400 hover:bg-gray-100 transition duration-100  px-6">
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                            </svg>
                            <div>
                                События
                            </div>
                        </div>
                    </a>
                    <a href="#" class="p-2 rounded-md inline-block w-full text-sm text-gray-400 hover:bg-gray-100 transition duration-100  px-6">
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <div>
                                Клавиатуры
                            </div>
                        </div>
                    </a>
                    <a href="#" class="p-2 rounded-md inline-block w-full text-sm text-gray-400 hover:bg-gray-100 transition duration-100  px-6">
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                            </svg>
                            <div>
                                Локализация
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-4 space-y-2">
                    <div class="text-xs uppercase text-gray-400 font-medium">
                        Управление
                    </div>
                    <a href="#" class="p-2 rounded-md inline-block w-full text-sm text-gray-400 hover:bg-gray-100 transition duration-100  px-6">
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                Настройки
                            </div>
                        </div>
                    </a>
                </div>
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
            <main class="p-4 overflow-y-auto">
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
