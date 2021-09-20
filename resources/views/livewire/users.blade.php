<div class="space-y-8 mt-8">
    <div class="text-2xl font-bold">
        Пользователи
    </div>

    <section class="card">
        <div class="card-header">
            Фильтр
        </div>
        <div class="card-body grid grid-cols-1 xl:grid-cols-3 gap-4">
            <div class="flex flex-col gap-4 w-full">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex flex-col w-full">
                        <label class="text-xs text-gray-400 mb-1">Имя пользователя</label>
                        <input wire:model="fullname" class="input w-full" placeholder="Иван Иванов" type="text">
                    </div>
                    <div class="flex flex-col w-full">
                        <label class="text-xs text-gray-400 mb-1">Юзернейм пользователя</label>
                        <input wire:model="username" class="input w-full" placeholder="ivanov" type="text">
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex flex-col w-full">
                        <label class="text-xs text-gray-400 mb-1">Идентификатор Telegram</label>
                        <input wire:model="userId" class="input w-full" placeholder="1234567890" type="text">
                    </div>
                    <div class="flex flex-col w-full">
                        <label class="text-xs text-gray-400 mb-1">Источник</label>
                        <input wire:model="source" class="input w-full" placeholder="campaign" type="text">
                    </div>
                </div>
                <div>
                    <label class="checkbox">
                        <input wire:model="strong" type="checkbox" class="checkbox-blue focus:ring focus:ring-blue-500 focus:ring-opacity-40" checked/>
                        <span class="text-xs text-gray-400">
                            Строгий поиск
                        </span>
                    </label>
                </div>
            </div>

            <div class="flex flex-col gap-4 w-full">
                <div class="flex flex-col w-full">
                    <label class="text-xs text-gray-400 mb-1">Сортировка</label>
                    <select wire:model="sort" class="input w-full">
                        <option value="new" selected>Сначала новые</option>
                        <option value="old">Сначала старые</option>
                    </select>
                </div>
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex flex-col w-full">
                        <label class="text-xs text-gray-400 mb-1">Период с:</label>
                        <input wire:model="dateFrom" class="input w-full" max="{{ now()->subDay()->format('Y-m-d') }}" type="date">
                    </div>
                    <div class="flex flex-col w-full">
                        <label class="text-xs text-gray-400 mb-1">Период по:</label>
                        <input wire:model="dateTo" class="input w-full" max="{{ date('Y-m-d') }}" type="date">
                    </div>
                </div>

                <div>
                    <label class="checkbox">
                        <input wire:model="period" type="checkbox" class="checkbox-blue focus:ring focus:ring-blue-500 focus:ring-opacity-40"/>
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
        @foreach ($users as $user)
            <div class="cursor-pointer card card-body hover:shadow-2xs transition duration-200 transform hover:-translate-y-1">
                <div class="flex justify-between">
                    <div class="font-medium truncate">
                        {{ $user->fullname }}
                    </div>
                    <div class="text-right">
                        <div class="text-xs text-gray-400">
                            12.03.2021
                        </div>
                        <div class="text-xs text-gray-400">
                           13:47:01
                        </div>
                    </div>
                </div>
                <div class="flex space-x-2 items-center">
                    <figure class="border-2 w-3 h-3 rounded-full border-green-300 bg-green-500" title="Активен"></figure>
                    <div class="text-xs text-gray-400">
                        {{ $user->source }}
                     </div>
                </div>
            </div>
        @endforeach
    </section>

    <div>
        {{ $users->withQueryString()->links() }}
    </div>
</div>
