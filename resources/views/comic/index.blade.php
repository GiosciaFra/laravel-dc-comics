@extends('layout.app')

@section('content')
<div class="container p-5 ">
        
    <h1>
        Ecco i nostri Fumetti
    </h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome</th>
          </tr>
        </thead>
        <tbody>
       @foreach ($comics as $comic)
           
            <tr>
                <td>{{$comic->title}}</td>
                <td><a href="{{route('comics.show', $comic->id)}}">Scopri di più</a></td>
            </tr>
        
        @endforeach 
        </tbody>
      </table>



      <a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi un fumetto!</a>
</div>
@endsection