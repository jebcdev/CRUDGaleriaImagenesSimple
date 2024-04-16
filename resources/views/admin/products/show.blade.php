@extends('adminlte::page')

@section('title', __('Product Details'))

@section('content_header')
    <h1 class="text-center">{{ __('Product Details') }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $product->name }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-warning"><i
                                class="far fa-edit"></i> {{ __('Edit') }}</a>
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i>
                                {{ __('Delete') }}</button>
                        </form>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-primary"><i
                                class="fas fa-arrow-left"></i> {{ __('Back') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <p><strong>{{ __('ID') }}:</strong> {{ $product->id }}</p>
                    <p><strong>{{ __('Creator') }}:</strong> {{ $product->user->name }}</p>
                    <p><strong>{{ __('Description') }}:</strong> {{ $product->description }}</p>
                    <p><strong>{{ __('Price') }}:</strong> {{ $product->price }}</p>
                    <p><strong>{{ __('Image') }}:</strong></p>
                    <img class="img-fluid" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                </div>
            </div>
        </div>
    </div>
@stop
