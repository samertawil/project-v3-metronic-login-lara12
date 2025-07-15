@extends('layouts.base')

@section('body')
    @yield('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
