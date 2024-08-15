@extends('layout')

@section('title', 'Contacto')

@section('content')


<table cellpadding="3" cellspaceing="5">
    <tr>
        <th colspan="4">Contacto</th>
    </tr>
    <tr>
        <td colspan="4">
            @auth
                {{ auth()->user()->name }}
            @endauth
        </td>
    </tr>
</table>