@extends('Layouts.app')

@section('content')

  <div id="wrapContent2">
    
    <h1 class="align-c">{{$post->List}}</h1><hr>

    <div id="listContainer">

    <p> Auteur : {{$post->User}} <small style="margin-left: 60%;"> Crée à {{$post->created_at}}</small> <br> État : {{$post->Statement}} </p>

    <ul>

        Liste des tâches :

        <li class="taskElts">
             {{$post->Item}}
        </li>

    </ul>  
    
    


    {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST']) !!}
    {!! Form::hidden('_method','DELETE') !!}
    <a href="/Dashboard/{{$post->id}}/edit" class="btn btn-lg btn-primary" style="margin-right: 40px;"> Modifier</a>
    {{Form::submit('Supprimer la TodouxLiss\'t', ['class' => 'btn btn-lg btn-danger'])}}    
    {!! Form::close() !!}


    <br><br>

    

    </div>



    
                
  </div>
    
@endsection