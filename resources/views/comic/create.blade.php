@extends('layout.app')

@section('content')

<div class="container  py-5">
    <h1 class="text-center">Aggiungi un fumetto</h1>

    <form action="{{route('comics.store')}}" method="POST" class="d-flex flex-column gap-4 " >
        @csrf

        <div>
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" >
          
          @error('title')
          <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="textarea" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
            
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
            
        <div>
            <label for="thumb" class="form-label">Aggiungi una URL per inserire la copertina</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value={{old('thumb')}}>
            
            @error('thumb')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <label for="price" class="form-label">Prezzo ($)</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}" >
            
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series')}}" >
            
            @error('series')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
            
        <div>
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder='YY-MM-DD' value="{{old('sale_date')}}" >
            
            @error('sale_date')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <label for="type" class="form-label">Tipo di fumetto</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type')}}" >
            
            @error('type')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <label for="artists" class="form-label">Artistə (Disegnatorə)</label>
            <textarea type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" placeholder='Nome e Cognome' >{{old('artists')}}</textarea>
            
            @error('artists')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <label for="writers" class="form-label">Scrittorə</label>
            <textarea type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" placeholder='Nome e Cognome' >{{old('writers')}}</textarea>
            
            @error('writers')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>



        <div class="d-flex justify-content-center gap-4 mt-4">

            <button type="submit" class="btn btn-primary">Aggiungi</button>
            <a href="{{route('comics.index')}}" class="btn btn-success">Torna alla lista dei fumetti</a>
        </div>

    </form>


</div>
    
@endsection