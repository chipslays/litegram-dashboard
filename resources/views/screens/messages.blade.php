@extends('layouts.app')

@section('content')
    @livewire('messages', ['bot' => app('bot')->current])
@endsection