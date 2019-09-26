
@extends('layouts.base')

@section('content')
    <h1>Eliminar EMPRESAS</h1>

    <form action="{{ route('company.destroy', $company) }}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="eliminar empresa">
    </form>
@endsection



