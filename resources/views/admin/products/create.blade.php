@extends('adminlte::page')

@section('title')
    {{ config('app.name') }}
@stop

@section('content_header')
    <h1 class="text-center">
        {{ __('Create') }} {{ __('Products') }}
    </h1>
@stop

@section('content')
    @include('admin.products.form', [
        'title' => 'Create Product',
        'route' => route('admin.products.store'),
        'method' => 'POST',
        'btnText' => 'Create',
    ]);
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
