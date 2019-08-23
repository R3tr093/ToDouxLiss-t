@extends('layouts.app')

@section('content')
<div class="container" id="wrapInfo">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header up-c txt-grow">Infos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                           
                        </div>
                    @endif


                   <p class="logInfos successLog"> Vous êtes connecté ! </p>
                   <p class="logInfos"> Votre nom d'utilisateur :  <span class="logStrong"> {{ Auth::user()->name }} <span></p>
                   <p class="logInfos"> Votre adresse mail :  <span class="logStrong"> {{ Auth::user()->email }}</span></p>
                   
                  
                </div>
            </div>
        </div>
    </div>
</div>









@endsection
