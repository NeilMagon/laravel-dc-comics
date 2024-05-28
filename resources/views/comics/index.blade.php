@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-4 g-4">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card">
                        <img src="https://picsum.photos/300/200" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{ $comic->price }}€</li>
                                <li class="list-group-item">{{ $comic->series }}</li>
                                <li class="list-group-item">{{ $comic->title }}</li>
                                <li class="list-group-item">{{ $comic->type }}</li>
                                <li class="list-group-item">{{ $comic->sale_date }}</li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('comics.show', ['comic' => $comic->id])}}" class="card-link">Mostra altro</a>
                            <a href="{{ route('comics.edit', ['comic' => $comic->id])}}" class="card-link">Modifica</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
    
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection