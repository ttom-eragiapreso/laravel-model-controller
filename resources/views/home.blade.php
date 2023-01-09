@extends('layout.main')

@section('content')
  <h1>Elenco Film</h1>
  <div class="container">
    <div class="row">
      @foreach ($movies as $movie)
        <div class="col-4 mb-5">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $movie->title }}</h5>
              <h5 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h5>
              <ul class="card-text">
                <li>Nazionalità: {{ $movie->nationality }}</li>
                <li>Uscito nel: {{ $movie->date }}</li>
                <li>Voto medio: {{ $movie->vote }}</li>
              </ul>
              <a href="{{ route('details', $movie->id) }}">Scopri di più</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
