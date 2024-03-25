@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Lista fumetti</h1>

      <table class="table">
        <thead>
            <th>ID</th>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Thumb</th>
            <th>Prezzo</th>
            <th>Serie</th>
            <th>Data Uscita</th>
            <th>Tipo</th>
            <th></th>      
        </thead>
        <tbody>
            @forelse($comics as $comic)
            <tr>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td>{{ $comic->thumb }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
            <td><a href="{{ route('comics.show', $comic)}}">Dettagli</a></td>

            </tr>
            @empty           
             <tr>
                <td colspan="100%">Nessun Risultato</td>
             </tr>
            @endforelse

        </tbody>
      </table>
    </div>
  </section>
@endsection
