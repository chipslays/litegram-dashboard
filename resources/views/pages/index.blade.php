@extends('layouts.app')

@section('content')


<div class="mt-4 space-x-4">
    <div class="grid grid-cols-4 gap-4 ">
        <div class="card card-body space-y-4 col-span-2">
            <div class="space-x-4">
                <button class="btn-blue">
                    Primary
                </button>
                <button class="btn-green ">
                    Success
                </button>
                <button class="btn-red">
                    Danger
                </button>
                <button class="btn-gray">
                    Secondary
                </button>
            </div>

            <div class="space-x-4">
                <button class="btn-blue-simple">
                    Primary
                </button>
                <button class="btn-green-simple">
                    Success
                </button>
                <button class="btn-red-simple">
                    Danger
                </button>
                <button class="btn-gray-simple">
                    Secondary
                </button>
            </div>

            <div class="space-x-4">
                <button class="btn-blue-trans">
                    Primary
                </button>
                <button class="btn-green-trans">
                    Success
                </button>
                <button class="btn-red-trans">
                    Danger
                </button>
                <button class="btn-gray-trans">
                    Secondary
                </button>
            </div>
        </div>


        <div class="card card-body space-y-4">
            <input class="input w-full" type="text" placeholder="Текст сообщения...">

            <textarea class="input w-full" cols="30" rows="3" placeholder="Текст сообщения...."></textarea>

            <input class="input-blue w-full" type="text" placeholder="Текст сообщения...">

            <input class="input-green w-full" type="text" placeholder="Текст сообщения...">

            <input class="input-red w-full" type="text" placeholder="Текст сообщения...">
        </div>
        <div class="card card-body space-y-4">
            <select class="input w-full">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
            </select>

            <div>
                <label class="checkbox">
                    <input type="checkbox" class="checkbox-blue" checked/>
                    <span>
                        Даю согласие на обработку своих данных
                    </span>
                </label>
            </div>
            <div>
                <label class="checkbox">
                    <input type="checkbox" class="checkbox-green" checked/>
                    <span>
                        Даю согласие на обработку своих данных
                    </span>
                </label>
            </div>
            <div>
                <label class="checkbox">
                    <input type="checkbox" class="checkbox-red" checked/>
                    <span>
                        Даю согласие на обработку своих данных
                    </span>
                </label>
            </div>
            <div>
                <label class="checkbox">
                    <input type="checkbox" class="checkbox-gray" checked/>
                    <span>
                        Даю согласие на обработку своих данных
                    </span>
                </label>
            </div>
        </div>
    </div>
</div>

<div class="mt-4 space-x-4">
    <div class="grid grid-cols-4 gap-4 ">
        <div class="card">
            <div class="card-header">
                header
            </div>
            <div class="card-body">
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
            </div>
            <div class="card-footer">
                footer
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                header
            </div>
            <div class="card-body">
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
            </div>
            <div class="card-footer">
                footer
            </div>
        </div>
    </div>
</div>


@endsection