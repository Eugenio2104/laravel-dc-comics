@extecreate-copy.bladends('layout.main')

@section('content')
    <div class="container">
        <h1>EDIT Comics</h1>

        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" id="title" value="{{ $comic->title }}" name="title"
                    placeholder="title">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}"
                    placeholder="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}"
                    placeholder="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}"
                    placeholder="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}"
                    placeholder="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}"
                    placeholder="type">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $comic->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-5">modifica</button>
        </form>
    </div>
@endsection
