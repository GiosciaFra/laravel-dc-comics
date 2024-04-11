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
            <th scope="col">First</th>
          </tr>
        </thead>
        <tbody>
       @foreach ($comics as $comic)
           
            <tr>
                <td>{{$comic->title}}</td>
                <td><a href="">Scopri di più</a></td>
            </tr>
        
        @endforeach 
        </tbody>
      </table>
</div>
@endsection