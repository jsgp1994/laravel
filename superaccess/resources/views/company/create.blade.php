
@extends('layouts.base')

@section('content')
    <h1>CREAR EMPRESAS</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/company" method="POST">
        @csrf
        <input type="text" name="nombre">
        <input type="submit" value="crear empresa">
    </form>
@endsection



