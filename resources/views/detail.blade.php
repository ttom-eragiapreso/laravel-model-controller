@extends('layout.main')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $movie->title }}</h5>
        <p class="card-text">{{ $movie->original_title }}</p>
      </div>
    </div>
  </div>
@endsection
