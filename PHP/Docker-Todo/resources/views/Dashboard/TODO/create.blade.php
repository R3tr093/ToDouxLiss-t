@extends('layouts.app')

@section('content')

  <div id="wrapContent2">
    <h1 class="align-c">Création d'une TodouxLiss't</h1>

    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}

    <div class="form-group">

    {{Form::label('title','Définir un titre : ')}}
    {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Titre de votre TodouxLiss\'t ( Champ obligatoire )','required' => 'required'])}}
    <br><br>

    {{Form::label('statement','Définir l\'état : ')}}
    {{Form::text('statement','', ['class' => 'form-control', 'placeholder' => 'Urgent ( Champ obligatoire )','required' => 'required'])}}

    <br><br>

    {{Form::label('item','Définir une tâche : ')}}
    {{Form::text('item','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ obligatoire )', 'required' => 'required' ])}}


    <br><br>

    {{Form::label('item2','Définir une tâche : ')}}
    {{Form::text('item2','', ['value' => 'XXX','class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ facultatif )' , 'title' => 'Ce champ est facultatif.'])}}


    <br><br>

    {{Form::label('item3','Définir une tâche : ')}}
    {{Form::text('item3','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ facultatif )', 'title' => 'Ce champ est facultatif.'])}}

    <br><br>

    {{Form::label('item4','Définir une tâche : ')}}
    {{Form::text('item4','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ facultatif )', 'title' => 'Ce champ est facultatif.'])}}


    <br><br>

    {{Form::label('item5','Définir une tâche : ')}}
    {{Form::text('item5','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ facultatif )', 'title' => 'Ce champ est facultatif.'])}}


    <br><br>

    {{Form::label('item6','Définir une tâche : ')}}
    {{Form::text('item6','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ facultatif )', 'title' => 'Ce champ est facultatif.'])}}

    <br><br>

    {{Form::label('item7','Définir une tâche : ')}}
    {{Form::text('item7','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ facultatif )', 'title' => 'Ce champ est facultatif.'])}}

    <br><br>

    {{Form::label('item8','Définir une tâche : ')}}
    {{Form::text('item8','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ facultatif )', 'title' => 'Ce champ est facultatif.'])}}


    <br><br>

    {{Form::label('item9','Définir une tâche : ')}}
    {{Form::text('item9','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ facultatif )', 'title' => 'Ce champ est facultatif.'])}}
    <br><br>

    {{Form::label('item10','Définir une tâche : ')}}
    {{Form::text('item10','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ facultatif )', 'title' => 'Ce champ est facultatif.'])}}


    <br><br>

    {{Form::label('item11','Définir une tâche : ')}}
    {{Form::text('item11','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ facultatif )', 'title' => 'Ce champ est facultatif.'])}}

    <br><br>

    {{Form::label('item12','Définir une tâche : ')}}
    {{Form::text('item12','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ facultatif )', 'title' => 'Ce champ est facultatif.'])}}


    <br><br>

    {{Form::label('item13','Définir une tâche : ')}}
    {{Form::text('item13','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ facultatif )', 'title' => 'Ce champ est facultatif.'])}}

    <br><br>

    {{Form::label('item14','Définir une tâche : ')}}
    {{Form::text('item14','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ facultatif )', 'title' => 'Ce champ est facultatif.'])}}


    <br><br>

    {{Form::label('item15','Définir une tâche : ')}}
    {{Form::text('item15','', ['class' => 'form-control', 'placeholder' => 'Que devez vous faire ? ( Champ facultatif )', 'title' => 'Ce champ est facultatif.'])}}

    </div>
    <br>
    {{Form::submit('Créer votre TodouxLiss\'t', ['class' => 'btn btn-lg btn-primary'])}}

    {!! Form::close() !!}
                
  </div>
    
@endsection