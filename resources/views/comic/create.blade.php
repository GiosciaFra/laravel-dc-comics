@extends('layout.app')

@section('content')

<div class="container  py-5">
    <h1 class="text-center">Aggiungi un fumetto</h1>

    <form action="{{route('comics.store')}}" method="POST" class="d-flex flex-column gap-4 " >
        @csrf

        <div>
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="textarea" class="form-control" id="description" name="description" required></textarea>
        </div>

        <div>
            <label for="thumb" class="form-label">Aggiungi una URL per inserire la copertina</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>

        <div>
            <label for="price" class="form-label">Prezzo ($)</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>

        <div>
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" required>
        </div>

        <div>
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder='YY-MM-DD' required>
        </div>

        <div>
            <label for="type" class="form-label">Tipo di fumetto</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>

        <div>
            <label for="artists" class="form-label">Artistə (Disegnatorə)</label>
            <textarea type="text" class="form-control" id="artists" name="artists" placeholder='Nome e Cognome' required></textarea>
        </div>

        <div>
            <label for="writers" class="form-label">Scrittorə</label>
            <textarea type="text" class="form-control" id="writers" name="writers" placeholder='Nome e Cognome' required></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-4 w-25 ">Aggiungi</button>
    </form>

    <a href="{{route('comics.index')}}" class="btn btn-success mt-4">Torna alla lista dei fumetti</a>

</div>
    
@endsection