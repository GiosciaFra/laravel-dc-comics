@extends('layout.app')

@section('content')
    <div class="container py-5 d-flex flex-column justify-content-center w-50">
        <h1 class="text-center pb-4 ">{{$comic->title}}</h1>

        <img src="{{$comic->thumb}}" alt="">

        <p><strong>Descrizione: </strong>{{$comic->description}}</p>
        <p><strong>Prezzo: </strong>{{$comic->price}}</p>
        <p><strong>Serie: </strong>{{$comic->series}}</p>
        <p><strong>Data pubblicazione: </strong>{{$comic->sale_date}}</p>
        <p><strong>Tipo di fumetto: </strong>{{$comic->type}}</p>
        <p><strong>Artistə: </strong>{{$comic->artists}}</p>
        <p><strong>Scrittorə: </strong>{{$comic->writers}}</p>
       

        

    </div>
@endsection