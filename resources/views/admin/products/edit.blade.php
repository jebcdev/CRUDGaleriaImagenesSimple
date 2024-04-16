@extends('adminlte::page')

@section('title')
    {{ config('app.name') }}
@stop

@section('content_header')
    <h1 class="text-center">
        {{ __('Edit') }} {{ __('Product') }}
    </h1>
@stop

@section('content')
    @include('admin.products.form', [
        'title' => 'Edit Product',
        'route' => route('admin.products.update',$product),
        'method' => 'PUT',
        'btnText' => 'Update',
    ]);
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
