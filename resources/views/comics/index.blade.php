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
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection