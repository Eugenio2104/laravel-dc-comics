@extends('layout.main')

@section('content')
    <div class="container">
        <h1>create Comics</h1>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <h3>stampo errori</h3>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $comic->title) }}" placeholder="title">
                @error('title')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control @error('text') is-invalid @enderror" id="thumb" name="thumb"
                    value="{{ old('thumb', $comic->thumb) }}" placeholder="thumb">
                @error('thumb')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" value="{{ old('price', $comic->price) }}" placeholder="price">
                @error('price')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                    name="series" value="{{ old('series', $comic->series) }}" placeholder="series">
                @error('series')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                    name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}"placeholder="sale_date">
                @error('sale_date')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                    value="{{ old('type', $comic->type) }}" placeholder="type">
                @error('type')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    rows="3">{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-5">Invia</button>
        </form>
    </div>
@endsection
