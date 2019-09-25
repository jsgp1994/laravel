
@extends('layouts.base')

@section('content')
    <h1>CREAR EMPRESAS</h1>
    <form action="/company" method="POST">
        @csrf
        <input type="text" name="nombre">
        <input type="submit" value="crear empresa">
    </form>
@endsection



