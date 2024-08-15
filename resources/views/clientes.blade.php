@extends('layout')

@section('title', 'Clientes')

@section('content')
<table cellpadding="3" cellspaceing="5">

    <tr>
        <h1 class="display-4 mb-0">Clientes</h1>
    </tr>
    <tr>
        @auth
            <td colspan="4">
                <a href="{{ route('clientes.create') }}"> Nuevo Cliente</a>
            </td>
        @endauth
    </tr>

    <h2>Listado de Clientes</h2>

    <tr>
        @if ($clientes)
            @foreach ( $clientes as $cliente )
                <td colspan="3">
                    <a href="{{ route('clientes.show', $cliente) }}">
                        {{ $cliente->nombres }}
                    </a>
                </td>
            @endforeach
        @else
            <td colspan="4">No existe ningún Cliente que mostrar.</td>
        @endif

    </tr>
    <tr>
        <td colspan="4">{{ $clientes->links()}}.</td>
    </tr>
</table>
@endsection
