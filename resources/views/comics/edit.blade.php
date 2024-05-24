@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value={{ $comic->title }}>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" rows="5" name="description">{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value={{ $comic->thumb }}>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" pattern="^[0-9]+\.[0-9][0-9]$" value={{ $comic->price }}>
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value={{ $comic->series }}>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <select class="form-control" id="type" name="type">
                        <option value="comic book" {{ $comic->type === 'comic book' ? 'selected' : '' }}>Comic Book</option>
                        <option value="graphic novel" {{ $comic->type === 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" max="9999-12-31" value={{ $comic->sale_date }}>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection