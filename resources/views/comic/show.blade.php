@extends('layout.app')

@section('content')
    <div class="container py-5 d-flex flex-column justify-content-center w-50">
        <h1 class="text-center pb-5 ">{{$comic->title}}</h1>

        <img src="{{$comic->thumb}}" alt="" class="mb-4">

        <p><strong class=" text-uppercase ">Descrizione: </strong>{{$comic->description}}</p>
        <p><strong class=" text-uppercase ">Prezzo: </strong>{{$comic->price}}</p>
        <p><strong class=" text-uppercase ">Serie: </strong>{{$comic->series}}</p>
        <p><strong class=" text-uppercase ">Data pubblicazione: </strong>{{$comic->sale_date}}</p>
        <p><strong class=" text-uppercase ">Tipo di fumetto: </strong>{{$comic->type}}</p>
        <p><strong class=" text-uppercase ">Artistə: </strong>{{$comic->artists}}</p>
        <p><strong class=" text-uppercase ">Scrittorə: </strong>{{$comic->writers}}</p>

        <div class="d-flex justify-content-center gap-4 mt-3">

            <a href="{{route('comics.index')}}" class="btn btn-success">Torna alla lista dei fumetti</a>
            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning text-white  ">Modifica questo fumetto</a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina questo fumetto</button>

        </div>

         <!-- Modale -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina questo fumetto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        Sei sicuro di voler eliminare questo fumetto?
                        <br>
                        {{$comic->title}}
                    </div>


                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method("DELETE")

                            <button class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection