@extends('layouts.app')

@section('content')

  <div id="wrapContent2">
    <h1 class="align-c">Vos ToDouxLiss't</h1>
    <p><a href="/Dashboard/create" class="g-link" title="Créez une nouvelle ToDouxLiss't">Ajouter</a></p>
    <hr>

    
     
    @if(count($posts)>= 1)


        @foreach($posts as $post)
            <div class="well">
           
            @if($post->User ===  Auth::user()->name)
                <h3><a href="/Dashboard/{{$post->id}}">{{$post->List}}</a></h3>
                <small> Crée le {{$post->created_at->format('d-m-Y')}}</small>
                <br>
                <small>État : {{$post->Statement}}</small>
                <p><a href="/Dashboard/{{$post->id}}"> Voir la liste. </a></p>

            </div>
            <hr>
            @endif

        @endforeach

    @else
        <p> Aucune ToDouxLiss't en cours.</p>
    @endif
  </div>
    
@endsection