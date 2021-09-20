@extends('layouts.app')

@section('content')
<section class="card shadow-lg">
    <div class="grid grid-cols-4 gap-4">
        <div class="border-r border-gray-100  overflow-y-auto" style="height: calc(100vh - 64px - 16px - 16px - 2px);">
            @for ($i = 0; $i < 25; $i++)
                <button class="border-b border-gray-100 p-3 flex justify-between w-full hover:bg-gray-50 transition duration-200">
                    <div class="flex space-x-2">
                        <figure class="w-10 h-10 font-medium rounded-full bg-blue-500 text-blue-50 flex items-center justify-center text-sm">чл</figure>
                        <div class="text-left">
                            <div class="text-xs font-medium">чипсы лейс</div>
                            <div class="text-xs text-gray-400">Привет, как дела?</div>
                        </div>
                    </div>
                    <div>
                        <div class="text-2xs text-gray-400">24.05.2021 14:32</div>
                    </div>
                </button>
            @endfor
        </div>
        <div class="col-span-2">
            <div class="flex flex-col justify-between h-full">
                <div class="mt-4 space-y-2 overflow-y-auto" style="height: calc(100vh - 266px)">
                    @for ($i = 0; $i < 25; $i++)
                        <div class="flex">
                            <div class="max-w-lg  w-auto rounded-xl rounded-bl-none bg-gray-100 text-gray-600 text-xs p-3 px-4">
                                /start
                            </div>
                        </div>
                        <div class="flex">
                            <div class="max-w-lg  w-auto rounded-xl rounded-bl-none bg-gray-100 text-gray-600 text-xs p-3 px-4">
                                Как дела?
                            </div>
                        </div>
                        <div class="flex">
                            <div class="max-w-lg  w-auto rounded-xl rounded-bl-none bg-gray-100 text-gray-600 text-xs p-3 px-4">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque asperiores doloribus, praesentium, minima aut, nostrum magni libero soluta rem iure maxime cupiditate fuga odio? Molestias iste temporibus nam officiis ratione!
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div>
                            </div>
                            <div class="max-w-lg w-auto rounded-xl rounded-br-none bg-green-500 text-green-50 text-xs p-3 px-4">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </div>
                        </div>

                        <div class="flex">
                            <div class="max-w-lg  w-auto rounded-xl rounded-bl-none bg-gray-100 text-gray-600 text-xs p-3 px-4">
                                Как дела? Как дела? Как дела?
                            </div>
                        </div>
                    @endfor
                </div>

                <div class="my-4 space-y-4">
                    <textarea class="input w-full" rows="2" placeholder="Текст сообщения..."></textarea>
                    <div class="text-right">
                        <button class="btn-green px-8">
                            Отправить
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-l border-gray-100">
            <div class="text-center border-b border-gray-100 p-8">
                <figure class="mx-auto w-16 h-16 font-medium rounded-full bg-blue-500 text-blue-50 flex items-center justify-center text-2xl">чл</figure>
                <div class="text-base font-medium mt-4">
                    чипсы лейс
                </div>
            </div>
        </div>
    </div>
</section>
@endsection