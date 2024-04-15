@extends('layout.app')

@section('content')

<div class="container  py-5">
    <h1 class="text-center">Aggiungi un fumetto</h1>

    <form action="{{route('comics.store')}}" method="POST" class="d-flex flex-column gap-4 " >
        @csrf

        <div>
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" >
        </div>

        @error('title')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="textarea" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
        </div>

        @error('description')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <div>
            <label for="thumb" class="form-label">Aggiungi una URL per inserire la copertina</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value={{old('thumb')}}>
        </div>

        @error('thumb')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <div>
            <label for="price" class="form-label">Prezzo ($)</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}" >
        </div>

        @error('price')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <div>
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series')}}" >
        </div>

        @error('series')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <div>
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder='YY-MM-DD' value="{{old('sale_date')}}" >
        </div>

        @error('sale_date')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <div>
            <label for="type" class="form-label">Tipo di fumetto</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type')}}" >
        </div>

        @error('type')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <div>
            <label for="artists" class="form-label">Artistə (Disegnatorə)</label>
            <textarea type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" placeholder='Nome e Cognome' >{{old('artists')}}</textarea>
        </div>

        @error('artists')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

        <div>
            <label for="writers" class="form-label">Scrittorə</label>
            <textarea type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" placeholder='Nome e Cognome' >{{old('writers')}}</textarea>
        </div>

        @error('writers')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror


        {{-- @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}
        <div class="d-flex justify-content-center gap-4 mt-4">

            <button type="submit" class="btn btn-primary">Aggiungi</button>
            <a href="{{route('comics.index')}}" class="btn btn-success">Torna alla lista dei fumetti</a>
        </div>

    </form>


</div>
    
@endsection