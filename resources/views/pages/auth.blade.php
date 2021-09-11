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

    <section class="max-w-lg mx-auto w-full p-2">
        <div class="card mt-0 md:mt-16">
            <div class="card-header text-lg font-bold text-gray-700">
                Авторизация
            </div>
            <div class="card-body">
                <div>
                    <label for="username" class="text-gray-500 text-xs">Имя пользователя</label>
                    <input id="username" type="text" class="input w-full" placeholder="Имя пользователя">
                </div>
                <div class="mt-4">
                    <label for="password" class="text-gray-500 text-xs">Пароль</label>
                    <input id="password" type="password" class="input w-full" placeholder="Пароль">
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn-green w-full md:w-auto px-16">
                    Войти
                </button>
            </div>
        </div>
        <div class="text-xs text-gray-400 text-center relative">
            <div class="pt-4">
                <div>
                    Разработано и поддерживается <a href="https://t.me/chipslays" target="_blank" rel="noopener noreferrer" class="font-medium text-yellow-500 hover:text-yellow-600 transition duration-200">чипсы лейс</a> 🧀
                </div>
                <div class="mt-2">
                    &copy; 2020-2021
                </div>
            </div>
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
