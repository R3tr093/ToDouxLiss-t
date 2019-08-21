@extends('Layouts.app')

@section('content')

  <div id="wrapContent2">
    <h1 class="align-c">Création d'une TodouxLiss't</h1>

    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}

    <div class="form-group">

    {{Form::label('title','Définir un titre : ')}}
    {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Titre de votre TodouxLiss\'t','required' => 'required'])}}
    <br><br>


    {{Form::label('item','Définir une tâche : ')}}
    {{Form::text('item','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ', 'required' => 'required' ])}}

    </div>
    <br>
    {{Form::submit('Créer votre TodouxLiss\'t', ['class' => 'btn btn-lg btn-primary'])}}

    {!! Form::close() !!}
                
  </div>
    
@endsection