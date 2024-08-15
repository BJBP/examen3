@extends('layout')

@section('title', 'Cliente | '.$cliente->titulo)

@section('content')
@auth
<tr>
    <td colspan="2">{{ $cliente->nombres }}
        <a href="{{ route('clientes.edit', $cliente) }}"> Editar</a>
    </td>
    <td colspan="2">
        <form action="{{ route('clientes.destroy', $cliente) }}" method="POST">
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </td>
</tr>  
@endauth
<tr>
    <td colspan="4">{{ $cliente->email }}.</td>
</tr>
<tr>
    <td colspan="4">{{ $cliente->direccion }}.</td>
</tr>
<tr>
    <td colspan="4">{{ $cliente->fono }}.</td>
</tr>
<tr>
    <td colspan="4">{{ $cliente->created_at->diffForHumans() }}.</td>
</tr>

@endsection