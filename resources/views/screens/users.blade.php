@extends('layouts.app')

@section('content')
    @livewire('users', ['bot' => app('bot')->current])
@endsection