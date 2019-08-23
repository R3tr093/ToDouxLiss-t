@extends('layouts.app')

@section('content')
<script src="{{ asset('js/test.js') }}"></script> 
  <div id="wrapContent2">
    <h1 class="align-c">Modification de {{$post->List}}</h1>

    {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST']) !!}

    <div class="form-group w-fix">

    {{Form::label('title','Modifier le titre : ' )}}
    {{Form::text('title',$post->List, ['class' => 'form-control editInput'])}}
    <br><br>

    {{Form::label('statement','Définir l\'état : ')}}
    {{Form::text('statement',$post->Statement, ['class' => 'form-control editInput'])}}

    <br><br>

    {{Form::label('item','Modifier une tâche : ')}}
    {{Form::text('item',$post->Item, ['class' => 'form-control editInput'])}}

    <br><br>

    {{Form::label('item2','Modifier une tâche : ')}}
    {{Form::text('item2',$post->Item2, ['class' => 'form-control editInput'])}}

    <br><br>

    {{Form::label('item3','Modifier une tâche : ')}}
    {{Form::text('item3',$post->Item3, ['class' => 'form-control editInput'])}}

    <br><br>

    {{Form::label('item4','Modifier une tâche : ')}}
    {{Form::text('item4',$post->Item4, ['class' => 'form-control editInput'])}}

    <br><br>

    {{Form::label('item5','Modifier une tâche : ')}}
    {{Form::text('item5',$post->Item5, ['class' => 'form-control editInput'])}}


    <br><br>

    {{Form::label('item6','Modifier une tâche : ')}}
    {{Form::text('item6',$post->Item6, ['class' => 'form-control editInput'])}}
    
    <br><br>

    {{Form::label('item7','Modifier une tâche : ')}}
    {{Form::text('item7',$post->Item7, ['class' => 'form-control editInput'])}}
    
    <br><br>

    {{Form::label('item8','Modifier une tâche : ')}}
    {{Form::text('item8',$post->Item8, ['class' => 'form-control editInput'])}}


    <br><br>

    {{Form::label('item9','Modifier une tâche : ')}}
    {{Form::text('item9',$post->Item9, ['class' => 'form-control editInput '])}}

    <br><br>

    {{Form::label('item10','Modifier une tâche : ')}}
    {{Form::text('item10',$post->Item10, ['class' => 'form-control editInput'])}}

    <br><br>

    {{Form::label('item11','Modifier une tâche : ')}}
    {{Form::text('item11',$post->Item11, ['class' => 'form-control editInput'])}}

    <br><br>

    {{Form::label('item12','Modifier une tâche : ')}}
    {{Form::text('item12',$post->Item12, ['class' => 'form-control editInput'])}}


    <br><br>

    {{Form::label('item13','Modifier une tâche : ')}}
    {{Form::text('item13',$post->Item13, ['class' => 'form-control editInput'])}}
    
    <br><br>

    {{Form::label('item14','Modifier une tâche : ')}}
    {{Form::text('item14',$post->Item14, ['class' => 'form-control editInput'])}}    


    <br><br>

    {{Form::label('item15','Modifier une tâche : ')}}
    {{Form::text('item15',$post->Item15, ['class' => 'form-control editInput'])}}
    </div>


    
    
    <br>

    {!! Form::hidden('_method','PUT') !!}

    {{Form::submit('Modifier la TodouxLiss\'t', ['class' => 'btn btn-lg btn-primary w-b-fix'])}}
    
    {!! Form::close() !!}
                
  </div>

    
@endsection

