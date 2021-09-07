@extends('layouts.app')

@section('content')
<div class="space-x-4">
    <button class="text-sm font-medium rounded-md py-2 px-6 border border-blue-500 bg-blue-500 text-blue-50 hover:bg-opacity-90 transition duration-100">
        Primary
    </button>
    <button class="text-sm font-medium rounded-md py-2 px-6 border border-green-500 bg-green-500 text-green-50 hover:bg-opacity-90 transition duration-100">
        Success
    </button>
    <button class="text-sm font-medium rounded-md py-2 px-6 border border-red-500 bg-red-500 text-red-50 hover:bg-opacity-90 transition duration-100">
        Danger
    </button>
    <button class="text-sm font-medium rounded-md py-2 px-6 border border-gray-200 bg-gray-200 text-gray-600 hover:bg-opacity-80 transition duration-100">
        Secondary
    </button>
</div>

<div class="mt-4 space-x-4">
    <button class="text-sm font-medium rounded-md py-2 px-6 bg-white text-blue-500 border border-gray-200 hover:border-blue-300 hover:text-blue-600 transition duration-100">
        Primary
    </button>
    <button class="text-sm font-medium rounded-md py-2 px-6 bg-white text-green-500 border border-gray-200 hover:border-green-400 hover:text-green-600 transition duration-100">
        Success
    </button>
    <button class="text-sm font-medium rounded-md py-2 px-6 bg-white text-red-500 border border-gray-200 hover:border-red-300 hover:text-red-600 transition duration-100">
        Danger
    </button>
    <button class="text-sm font-medium rounded-md py-2 px-6 bg-white text-gray-500 border border-gray-200 hover:border-gray-300 hover:text-gray-600 transition duration-100">
        Secondary
    </button>
</div>

<div class="mt-4 space-x-4">
    <button class="text-sm font-medium rounded-md py-2 px-6 bg-blue-500 text-blue-500 hover:text-blue-50 hover:bg-opacity-60 bg-opacity-20 transition duration-100">
        Primary
    </button>
    <button class="text-sm font-medium rounded-md py-2 px-6 bg-green-500 text-green-500 hover:text-green-50 hover:bg-opacity-60 bg-opacity-20 transition duration-100">
        Success
    </button>
    <button class="text-sm font-medium rounded-md py-2 px-6 bg-red-500 text-red-500 hover:text-red-50 hover:bg-opacity-60 bg-opacity-20 transition duration-100">
        Danger
    </button>
    <button class="text-sm font-medium rounded-md py-2 px-6 bg-gray-500 text-gray-500 hover:text-gray-50 hover:bg-opacity-50 bg-opacity-20 transition duration-100">
        Secondary
    </button>
</div>

<div class="mt-4 space-x-4">
    <button class="text-sm font-medium rounded-md py-2 px-6 ring-2 ring-blue-500 border-blue-500 text-blue-500 hover:bg-blue-500 hover:bg-opacity-10 transition duration-100">
        Primary
    </button>
    <button class="text-sm font-medium rounded-md py-2 px-6 ring-2 ring-green-500 text-green-500 hover:bg-green-500 hover:bg-opacity-10 transition duration-100">
        Success
    </button>
    <button class="text-sm font-medium rounded-md py-2 px-6 ring-2 ring-red-500 text-red-500 hover:bg-red-500 hover:bg-opacity-10 transition duration-100">
        Danger
    </button>
    <button class="text-sm font-medium rounded-md py-2 px-6 ring-2 ring-gray-500 text-gray-500 hover:bg-gray-500 hover:bg-opacity-10 transition duration-100">
        Secondary
    </button>
</div>

<div class="mt-4 space-x-4">
    <div class="grid grid-cols-4 gap-4 ">
        <div class="border rounded-md border-gray-100 p-4 space-y-4 bg-white">
            <input class="text-gray-600 border-2 border-gray-100 placeholder-gray-400 focus:outline-none text-sm rounded-md p-2 w-full focus:ring-2 focus:ring-gray-500 focus:ring-opacity-10 duration-100 transition bg-white" type="text" placeholder="Текст сообщения...">

            <textarea class="text-gray-600 border-2 border-gray-100 placeholder-gray-400 focus:outline-none text-sm rounded-md p-2 w-full focus:ring-2 focus:ring-gray-500 focus:ring-opacity-10 duration-100 transition bg-white" cols="30" rows="3" placeholder="Текст сообщения...."></textarea>

            <input class="text-gray-600 border-2 border-blue-400 placeholder-gray-400 focus:outline-none text-sm rounded-md p-2 w-full focus:ring-2 focus:ring-gray-500 focus:ring-opacity-10 duration-100 transition bg-white" type="text" placeholder="Текст сообщения...">

            <input class="text-gray-600 border-2 border-green-400 placeholder-gray-400 focus:outline-none text-sm rounded-md p-2 w-full focus:ring-2 focus:ring-gray-500 focus:ring-opacity-10 duration-100 transition bg-white" type="text" placeholder="Текст сообщения...">

            <input class="text-gray-600 border-2 border-red-400 placeholder-gray-400 focus:outline-none text-sm rounded-md p-2 w-full focus:ring-2 focus:ring-gray-500 focus:ring-opacity-10 duration-100 transition bg-white" type="text" placeholder="Текст сообщения...">
        </div>
        <div class="border rounded-md border-gray-100 p-4 bg-">
            <select class="text-gray-600 border-2 border-gray-100 placeholder-gray-400 focus:outline-none text-sm rounded-md p-2 w-full focus:ring-2 focus:ring-gray-500 focus:ring-opacity-10 duration-100 transition bg-white">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
            </select>
        </div>
    </div>
</div>

<div class="mt-4 space-x-4">
    <div class="grid grid-cols-4 gap-4 ">
        <div class="rounded-md border border-gray-100 bg-white shadow-xs text-sm text-gray-800">
            <div class="p-4 border-b rounded-b-md border-gray-100 font-medium">
                header
            </div>
            <div class="p-4">
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
            </div>
            <div class="p-4 border-t rounded-b-md border-gray-100">
                footer
            </div>
        </div>

        <div class="rounded-md border border-gray-100 bg-white shadow-xs text-sm text-gray-800">
            <div class="p-4 border-b rounded-b-md border-gray-100 font-medium">
                header
            </div>
            <div class="p-4">
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
            </div>
        </div>

        <div class="rounded-md border border-gray-100 bg-white shadow-xs text-sm text-gray-800">
            <div class="p-4">
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
                <div>body</div>
            </div>
            <div class="p-4 border-t rounded-b-md border-gray-100">
                footer
            </div>
        </div>
    </div>
</div>


@endsection