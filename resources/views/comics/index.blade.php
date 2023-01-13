@extends('layout.main')

@section('content')
    <div class="container">
        <h1>index</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.show', $comic) }}" title="show"><i
                                    class="fa-regular fa-eye"></i></a>
                            <a class="btn btn-warning " href="{{ route('comics.edit', $comic) }}" title="edit"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <a class="btn btn-danger " href="#" title="delete"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @empty
                    <h1>Nessun prodotto trovato</h1>
                @endforelse

            </tbody>
        </table>
        {{ $comics->links() }}
        <div>
            <a class="btn btn-success" href="{{ route('comics.create') }}">Crea una nuova pasta</a>
        </div>
    </div>
@endsection
