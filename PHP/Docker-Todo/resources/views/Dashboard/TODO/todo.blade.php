@extends('Layouts.app')

@section('content')

  <div id="wrapContent2">
    <h1 class="align-c">Vos ToDouxLiss't</h1>
    <hr>
    @if(count($posts)>= 1)
        @foreach($posts as $post)
            <div class="well">

                <h3><a href="/Dashboard/{{$post->id}}">{{$post->List}}</a></h3>
                <small> Crée à {{$post->created_at}}</small>
                <p><a href="/Dashboard/{{$post->id}}"> Voir la liste. </a></p>

            </div>
        @endforeach

    @else
        <p> Aucune ToDouxLiss't en cours.</p>
    @endif
    <hr>
    <p><a href="/Dashboard/create" class="g-link" title="Créez une nouvelle ToDouxLiss't">Ajouter</a></p>
  </div>
    
@endsection