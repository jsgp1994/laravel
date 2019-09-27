
@extends('layouts.base')

@section('content')
    <h1>INFORMACION DE LA EMPRESA</h1>

    <table>
        <tr>
            <td>Nombre de la empresa</td>
        </tr>
        <tr>
            <td>{{ $company->name }}</td>
        </tr>
    </table>

@endsection



