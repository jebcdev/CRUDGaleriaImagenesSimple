@extends('layouts.base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('styles')
    {{-- Estilos adicionales si es necesario --}}
@endsection

@section('h3')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @forelse ($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">{{ __('Price') }}: {{ $product->price }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-secondary text-center" role="alert">
                    <p>{{ __('No Images Available') }}</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection

@section('scripts')
    {{-- Scripts adicionales si es necesario --}}
@endsection
