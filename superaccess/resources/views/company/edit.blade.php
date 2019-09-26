
@extends('layouts.base')

@section('content')
    <h1>Editar EMPRESA</h1>

    <form action="{{ route('company.update', $company) }}" method="POST">
        @csrf
        @method('put')
        <p>Nombre de la empresa</p><input type="text" name="nombre">
        <input type="submit" value="editar empresa">
    </form>
@endsection



