@extends('Layouts.app')

@section('content')

  <div id="wrapContent2">
    <h1 class="align-c">Modification de {{$post->List}}</h1>

    {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST']) !!}

    <div class="form-group">

    {{Form::label('title','Modifier le titre : ')}}
    {{Form::text('title',$post->List, ['class' => 'form-control'])}}
    <br><br>

    {{Form::label('item','Modifier une tâche : ')}}
    {{Form::text('item',$post->Item, ['class' => 'form-control'])}}

    </div>
    <br>

    {!! Form::hidden('_method','PUT') !!}

    {{Form::submit('Modifier la TodouxLiss\'t', ['class' => 'btn btn-lg btn-primary'])}}
    
    {!! Form::close() !!}
                
  </div>
    
@endsection