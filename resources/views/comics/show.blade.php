@extends('layout.main')

@section('content')
    <div class="container">
        <h1>show</h1>

        <div class="card" style="width: 18rem;">
            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $comic['title'] }}</h5>
                <p class="card-text">{{ $comic['description'] }}</p>
            </div>
        </div>
        <a class="btn btn-info" href="{{ route('comics.index') }}">Torna all'elenco dei comics</a>
    </div>
@endsection
