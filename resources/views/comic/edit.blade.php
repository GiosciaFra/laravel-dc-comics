@extends('layout.app')

@section('content')
<div class="container  py-5">
    <h1 class="text-center">Aggiungi un fumetto</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST" class="d-flex flex-column gap-4 " >
        @csrf
        @method('PUT')

        <div>
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control " id="title" name="title" value='{{$comic->title}}'>
        </div>

        <div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="textarea" class="form-control" id="description" name="description"> {{$comic->title}}</textarea>
        </div>

        <div>
            <label for="thumb" class="form-label">Aggiungi una URL per inserire la copertina</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value='{{$comic->thumb}}'>
        </div>

        <div>
            <label for="price" class="form-label">Prezzo ($)</label>
            <input type="text" class="form-control" id="price" name="price" value='{{$comic->price}}'>
        </div>

        <div>
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value='{{$comic->series}}'>
        </div>

        <div>
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder='YY-MM-DD' value='{{$comic->sale_date}}'>
        </div>

        <div>
            <label for="type" class="form-label">Tipo di fumetto</label>
            <input type="text" class="form-control" id="type" name="type" value='{{$comic->type}}'>
        </div>

        <div>
            <label for="artists" class="form-label">Artistə (Disegnatorə)</label>
            <textarea type="text" class="form-control" id="artists" name="artists" placeholder='Nome e Cognome'>{{$comic->artists}}</textarea>
        </div>

        <div>
            <label for="writers" class="form-label">Scrittorə</label>
            <textarea type="text" class="form-control" id="writers" name="writers" placeholder='Nome e Cognome'>{{$comic->writers}}</textarea>
        </div>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="d-flex justify-content-center gap-4">

            <button type="submit" class="btn btn-warning text-white ">Salva la tua modifica</button>          
            <a href="{{route('comics.index')}}" class="btn btn-success ">Torna alla lista dei fumetti</a>
        </div>
    </form>
</div>
@endsection