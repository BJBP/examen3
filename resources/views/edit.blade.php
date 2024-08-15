@extends('layout')

@section('title', 'Editar Cliente')

@section('content')


<table cellpadding="3" cellspaceing="5">
    <tr>
        <th colspan="4">Editar cliente</th>
    </tr>
    @include('partials.validation-errors')
    <form action="{{ route('clientes.update', $cliente) }}" method="post">
    @method('PATCH')
        @include('partials.form', ['btnText' => 'Actualizar'])
    </form>
</table>