@extends('adminlte::page')

@section('title', __($title))

@section('content_header')
    <h1 class="text-center">{{ __($title) }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Product Information') }}</h3>

                </div>
                <div class="card-body">
                    <form action="{{ $route }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method($method)
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <input type="hidden" id="user_id" name="user_id" value="{{ $user_id }}">
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $product->name) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">{{ __('Description') }}</label>
                            <textarea class="form-control" id="description" name="description">{{ old('description', $product->description) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">{{ __('Image') }}</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*"
                                {{$btnText==='Update' ? '' : 'required'}} >
                            @if ($product->image)
                                <div class="mb-3">
                                    <label>{{ __('Current Image') }}</label><br>
                                    <img class=" img-fluid" src="{{ asset('storage/' . $product->image) }}"
                                        alt="{{ $product->name }}" style="max-width: 100px;">
                                </div>
                            @endif

                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">{{ __('Price') }}</label>
                            <input type="number" class="form-control" id="price" name="price" step="100"
                                value="{{ old('price', $product->price) }}" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">{{ __($btnText) }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
