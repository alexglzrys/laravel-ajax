@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel Administrativo - Catálogo de Productos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{-- dd($products) --}}

                    <p>
                        <span id="total">{{ $products->total() }}</span> Productos registrados | Página {{ $products->currentPage() }} de {{ $products->lastPage() }}
                    </p>

                    <!-- Mensajes  -->
                    <div class="alert alert-info" id="alert"></div>

                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre del Producto</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['destroyProduct', $product->id], 'method' => 'delete']) !!}
                                            {!! Form::submit('Eliminar', ['class' => 'btn btn-link btn-eliminar']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!--  Mostrar los controles de paginación para el listado de productos -->
                    {!! $products->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Empujar al stack de scripts los archivos JS necesarios para que trabaje correctamentne esta plantilla -->
@push('scripts')
    <script src="{{ asset('js/generic.js') }}" defer></script>
@endpush
