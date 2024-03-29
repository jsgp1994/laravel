
@extends('layouts.base')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Parque</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $data)
            <tr>
                <td><a href="{{ route('company.show', $data) }}">{{ $data->name }}</a></td>
                <td>{{ $data->id_parque }}</td>
                <td><a href="{{ route('company.edit', $data) }} ">Editar</a></td>
                <td><a href="{{ route('company/confirmDelete', $data) }} ">Eliminar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="company/create"><button type="button" class="btn btn-primary">Crear empresa</button></a>

@endsection



