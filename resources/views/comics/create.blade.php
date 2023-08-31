@extends('layouts.base')
@section('contents')
    <h1>Inserisci un nuovo fumetto</h1>
    <form method="POST" action="{{ route('comics.store')}}">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" >
          </div>

          <div class="mb-3">
              <label for="thumb" class="form-label">thumb</label>
              <input type="text" class="form-control" id="thumb" >
          </div>

          <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" >
        </div>

          <div class="mb-3">
              <label for="series" class="form-label">Serie</label>
              <input type="text" class="form-control" id="series" >
          </div>

             
          <div class="mb-3">
            <label for="sale_date" class="form-label">Data</label>
            <input type="text" class="form-control" id="sale_date" >
        </div>

          <div class="mb-3">
              <label for="price" class="form-label">Prezzo</label>
              <input type="text" class="form-control" id="price" >
          </div>

          <div class="mb-3">
              <label for="description" class="form-label">Descrizione</label>
              <textarea  class="form-control" id="descrizione" rows="5"> </textarea>
            </div>
      
      
          <button class="btn btn-primary">Salva</button>
    </form>
@endsection