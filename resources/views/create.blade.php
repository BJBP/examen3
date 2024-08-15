@extends('layout')

@section('title', 'Crear Cliente')

@section('content')
    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">Crear nuevo cliente</th>
        </tr>
        @include('partials.validation-errors')
        <form action="{{ route('clientes.store') }}" method="post">
            @include('partials.form', ['btnText' => 'Guardar'])   
        </form>
    </table>
@endsection

