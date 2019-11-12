@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10 col-md-offset-2">
            <h1>Lista de articulos</h1>
            @foreach ($posts as $post)
                <div class="card">
                    @if($post->file)
                        <img src="{{ $post->file }}" class="img-responsive">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $post->name }}</h5>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="#" class="pull-right">Leer mas</a>
                    </div>
                </div>
                <br>
            @endforeach
            {{ $posts->render() }}
        </div>
    </div>
@endsection
