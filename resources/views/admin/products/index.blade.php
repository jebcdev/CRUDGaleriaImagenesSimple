@extends('adminlte::page')

@section('title')
    {{ config('app.name') }}
@stop

@section('content_header')
    <h1 class="text-center">
        {{ __('Products') }}
    </h1>
    <div class="text-center mb-3">
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">{{ __('Create Product') }}</a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-stripped" id="table">
                    <thead>
                        <tr>
                            <th>{{ __('Actions') }}</th>
                            <th>ID</th>
                            <th>{{ __('Creator') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Description') }}</th>
                            <th>{{ __('Image') }}</th>
                            <th>{{ __('Price') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>
                                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="container-fluid">
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('admin.products.show', $product) }}"><i
                                                    class="fas fa-eye"></i></a>
                                            <a
                                                class="btn btn-sm btn-warning"href="{{ route('admin.products.edit', $product) }}"><i
                                                    class="far fa-edit"></i>
                                            </a>


                                            <button class="btn btn-sm btn-danger" type="submit"
                                                onclick="return confirm('Are you sure?')"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </form>
                                </td>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->user->name }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <img class="img-fluid" style="width: 50px"
                                        src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">

                                </td>
                                <td>{{ $product->price }}</td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $products->links() }}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/datatables.min.css') }}">
@stop

@section('js')
@section('js')
    <script src="{{ asset('assets/js/jq.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
            });
        });
    </script>
@stop

@stop
