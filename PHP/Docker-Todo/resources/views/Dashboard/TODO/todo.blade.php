@extends('layouts.app')

@section('content')

  <div id="wrapContent2">
    <h1 class="align-c">Vos ToDouxLiss't</h1>
    <p><a href="/Dashboard/create" class="g-link" title="Créez une nouvelle ToDouxLiss't">Ajouter</a></p>
    <hr>

    
     
    @if(count($posts)>= 1)

    @php
    $i = 0;
    @endphp

        @foreach($posts as $post)
            
           
            @if($post->User ===  Auth::user()->name || $post->Share ===  Auth::user()->email )
                <div class="well">
                <h3><a class="a-NoStyle" href="/Dashboard/{{$post->id}}">{{$post->List}}</a></h3>
                <small> Crée le {{$post->created_at->format('d-m-Y')}}</small>
                <br>
                <small>État : {{$post->Statement}}</small>
                <small>
                @if($post->Share != "XXX")
                  
                  <br>
                  Partage avec : {{$post->Share}} 

                  @endif 
                
                  @if($post->Share2 != "XXX")

                  , {{$post->Share2}}

                  @endif

                  @if($post->Share3 != "XXX")

                  , {{$post->Share3}}

                  .
                @endif
                </small>


                <p><a class="a-NoStyle" href="/Dashboard/{{$post->id}}"> Voir la liste. </a></p>

            </div>

            @php
                  $i++;
            @endphp
            <hr>
            @endif

        @endforeach

        <p class="countReport"> <b>Nombre de TouDouLiss't restantes : 

          @php
              echo $i;
          @endphp
        </b>
        </p>

    @else
        <p> Aucune ToDouxLiss't en cours.</p>
    @endif
  </div>


    
@endsection