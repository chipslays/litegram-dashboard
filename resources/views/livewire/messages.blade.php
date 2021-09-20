<div class="space-y-8 mt-8">
    <div class="text-2xl font-bold">
        Сообщения
    </div>

    <section class="card">
        <div class="card-header">
            Фильтр
        </div>
        <div class="card-body grid grid-cols-1 xl:grid-cols-3 gap-4">
            <div class="flex flex-col gap-4 w-full">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex flex-col w-full">
                        <label class="text-xs text-gray-400 mb-1">Текст сообщения</label>
                        <input class="input w-full" placeholder="/start" type="text">
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex flex-col w-full">
                        <label class="text-xs text-gray-400 mb-1">Идентификатор Telegram</label>
                        <input class="input w-full" placeholder="1234567890" type="text">
                    </div>
                    <div @click.away="dropdown = false" x-data="{ dropdown: false }" class="relative w-full">
                        <div class="relative">
                            <div class="flex flex-col w-full">
                                <label class="text-xs text-gray-400 mb-1">Тип сообщений</label>
                                <button @click="dropdown = !dropdown" class="rounded-md w-full border border-gray-100 p-2">
                                    <div class="flex items-center justify-between">
                                        <div class="text-gray-400">
                                            Выбрать...
                                        </div>
                                        <svg :class="{'rotate-180': dropdown, 'rotate-0': !dropdown}" xmlns="http://www.w3.org/2000/svg" class="transform duration-200 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div x-cloak x-show="dropdown"
                                    x-transition:enter="transition-transform transition-opacity ease-out duration-100"
                                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                                    x-transition:enter-end="opacity-100 transform translate-y-0"
                                    x-transition:leave="transition ease-in duration-100"
                                    x-transition:leave-end="opacity-0 transform -translate-y-3"
                                    class="absolute mt-2 w-full left-0 z-10" style="">
                                    <div class="shadow-2xs p-3 bg-white dark:bg-gray-700 rounded-md border border-gray-100 space-y-3" >
                                            @for ($i = 0; $i < 10; $i++)
                                            <div>
                                                <label class="checkbox">
                                                    <input type="checkbox" class="checkbox-blue focus:ring focus:ring-blue-500 focus:ring-opacity-40"/>
                                                    <span class="text-xs text-gray-400">
                                                        Учитывать период времени
                                                    </span>
                                                </label>
                                            </div>
                                            @endfor
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4 w-full">
                <div class="flex flex-col w-full">
                    <label class="text-xs text-gray-400 mb-1">Сортировка</label>
                    <select class="input w-full">
                        <option value="new" selected>Сначала новые</option>
                        <option value="old">Сначала старые</option>
                    </select>
                </div>
                <div class="flex flex-col w-full">
                    <label class="text-xs text-gray-400 mb-1">Период</label>
                    <input class="input w-full" value="01.09.2021 - 10.09.2021" type="text">
                </div>
                <div>
                    <label class="checkbox">
                        <input type="checkbox" class="checkbox-blue focus:ring focus:ring-blue-500 focus:ring-opacity-40"/>
                        <span class="text-xs text-gray-400">
                            Учитывать период времени
                        </span>
                    </label>
                </div>
            </div>

        </div>
    </section>

    <div class="text-2xl font-bold">
        Найдено: 32
    </div>

    <section class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-4">

        @foreach ($messages as $message)
            <div class="group card card-body hover:shadow-2xs rounded-3xl rounded-bl-none transition duration-200 transform hover:-translate-y-1 space-y-2">
                <div class="flex justify-between">
                    <div class="font-medium truncate cursor-pointer hover:text-blue-500 transition duration-200 w-full" title="Открыть профиль">
                        {{ $message->fullname }}
                    </div>
                    <div class="text-right flex-shrink-0">
                        <div class="text-xs text-gray-400">
                            {{ date('d.m.Y H:i:s', $message->date) }}
                        </div>
                    </div>
                </div>
                <div class="flex space-x-2 items-center">
                    <div class="text-gray-500 text-xs truncate">
                        {{ $message->text }}
                    </div>
                </div>
                <div class="flex space-x-1 items-center justify-between">
                    <div class="text-green-500 text-xs font-medium truncate">
                        {{ $message->type }}
                    </div>
                    <div class="text-gray-400 hover:text-blue-500 cursor-pointer transition duration-200 text-xs">
                        Смотреть сообщение
                    </div>

                    {{-- <div class="text-gray-400 text-xs truncate">
                        13.12.2021 23:12:03
                    </div> --}}
                </div>
            </div>
        @endforeach

    </section>

    <div>
        {{ $messages->withQueryString()->links() }}
    </div>
</div>
