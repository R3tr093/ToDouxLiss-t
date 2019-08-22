@extends('layouts.app')

@section('content')

  <div id="wrapContent2">
    
    <h1 class="align-c">{{$post->List}}</h1><hr>

    <p><b> Auteur :</b> {{$post->User}}<br> <b>État : </b>{{$post->Statement}} <br><small> <i>Crée le {{$post->created_at->format('d-m-Y')}}</i></small>  </p>

    <div id="listContainer">

    <ul>

        <h3 id="taskList">Liste des tâches :</h3>

        @if($post->Item != "XXX")
        <li class="taskElts">
             
          <a href="/Dashboard/{{$post->id}}/Item" title="Supprimer cette tâche."> {{$post->Item}}</a>
        
         
        
        @endif
             
        </li>

        @if($post->Item2 != "XXX")
        <li class="taskElts">
        
        
        <a href="/Dashboard/{{$post->id}}/Item2" title="Supprimer cette tâche.">  {{$post->Item2}}</a>


        </li>
      
        @endif

        @if($post->Item3 != "XXX")
        <li class="taskElts">
        
        <a href="/Dashboard/{{$post->id}}/Item3" title="Supprimer cette tâche.">  {{$post->Item3}}</a>


        </li>
      
        @endif


        @if($post->Item4 != "XXX")
        <li class="taskElts">
        
        
        <a href="/Dashboard/{{$post->id}}/Item4" title="Supprimer cette tâche.">  {{$post->Item4}}</a>


        </li>
      
        @endif

        @if($post->Item5 != "XXX")
        <li class="taskElts">
        
        
        <a href="/Dashboard/{{$post->id}}/Item5" title="Supprimer cette tâche.">  {{$post->Item5}}</a>


        </li>
      
        @endif

        @if($post->Item6 != "XXX")
        <li class="taskElts">
        
        
        <a href="/Dashboard/{{$post->id}}/Item6" title="Supprimer cette tâche.">  {{$post->Item6}}</a>


        </li>
      
        @endif

        @if($post->Item7 != "XXX")
        <li class="taskElts">
        
        
        <a href="/Dashboard/{{$post->id}}/Item7" title="Supprimer cette tâche."> {{$post->Item7}}</a>


        </li>
      
        @endif

        @if($post->Item8 != "XXX")
        <li class="taskElts">
        
        
        <a href="/Dashboard/{{$post->id}}/Item8" title="Supprimer cette tâche."> {{$post->Item8}}</a>


        </li>
      
        @endif

        @if($post->Item9 != "XXX")
        <li class="taskElts">
        
        
        <a href="/Dashboard/{{$post->id}}/Item9" title="Supprimer cette tâche."> {{$post->Item9}}</a>


        </li>
      
        @endif

        @if($post->Item10 != "XXX")
        <li class="taskElts">
        
        
        <a href="/Dashboard/{{$post->id}}/Item10" title="Supprimer cette tâche."> {{$post->Item10}}</a>

        </li>
      
        @endif

        @if($post->Item11 != "XXX")
        <li class="taskElts">
        
        
        <a href="/Dashboard/{{$post->id}}/Item11" title="Supprimer cette tâche."> {{$post->Item11}}</a>

        </li>
      
        @endif

        @if($post->Item12 != "XXX")
        <li class="taskElts">
        
        
        <a href="/Dashboard/{{$post->id}}/Item12" title="Supprimer cette tâche."> {{$post->Item12}}</a>

        </li>
      
        @endif

        @if($post->Item13 != "XXX")
        <li class="taskElts">
        
        
        <a href="/Dashboard/{{$post->id}}/Item13" title="Supprimer cette tâche."> {{$post->Item13}}</a>

        </li>
      
        @endif

        @if($post->Item14 != "XXX")
        <li class="taskElts">
        
        
        <a href="/Dashboard/{{$post->id}}/Item14" title="Supprimer cette tâche."> {{$post->Item14}}</a>

        </li>
      
        @endif

        @if($post->Item15 != "XXX")
        <li class="taskElts">
        
        
        <a href="/Dashboard/{{$post->id}}/Item15" title="Supprimer cette tâche."> {{$post->Item15}}</a>

        </li>
      
        @endif
             
             
             
             
             
             
             
             
             
             
             
                  
        





    </ul>  
    
    

    <hr>
    {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST']) !!}
    {!! Form::hidden('_method','DELETE') !!}
    <a href="/Dashboard/{{$post->id}}/edit" class="btn btn-lg btn-primary" style="margin-right: 20px;"> Modifier</a>
    {{Form::submit('Supprimer la TodouxLiss\'t', ['class' => 'btn btn-lg btn-danger'])}}    
    {!! Form::close() !!}


    <br><br>

    

    </div>



    
                
  </div>
    
@endsection