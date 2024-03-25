@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
<form action="{{ route('comics.store')}}" method="POST">
@csrf 
<div class="col-3">
<label for="title" class="form-label">Titolo</label>
<input class="form-control" type="text" id="title" name="title">
</div>
<div class="col-3">
<label for="description" class="form-label">Descrizione</label>
<input class="form-control" type="text" id="description" name="description">
</div>
<div class="col-3">
<label for="thumb" class="form-label">Thumbnail</label>
<input class="form-control" type="text" id="thumb" name="thumb">
</div>
<div class="col-3">
<label for="price" class="form-label">Prezzo</label>
<input class="form-control" type="text" id="price" name="price">
</div>
<div class="col-3">
<label for="series" class="form-label">Serie</label>
<input class="form-control" type="text" id="series" name="series">
</div>
<div class="col-3">
<label for="sale_date" class="form-label">Data Pubblicazione</label>
<input class="form-control" type="date" id="sale_date" name="sale_date">
</div>
<div class="col-3">
<label for="type" class="form-label">Tipo</label>
<input class="form-control" type="text" id="type" name="type">
</div>
<div class="col-3">
<button class="btn btn-success">Invia</button>
</div>
</form>
       
    </div>
  </section>
@endsection
