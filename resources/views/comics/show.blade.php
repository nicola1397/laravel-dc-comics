@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Details</h1>
      <img src="{{ $comic->thumb }}" alt="immagine">
      <h2>{{ $comic->title }}</h2>
      <h3>{{ $comic->series }}</h3>
      <p>{{ $comic->description }}</p>

       
    </div>
  </section>
@endsection
