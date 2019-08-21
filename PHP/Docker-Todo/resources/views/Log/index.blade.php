@extends('Layouts.app')

@section('content')

    <div id="wrapContent">

    <form class="form-signin">
    
    <h1 class="h3 mb-3 font-weight-normal" id="logh1">Please, sign in.</h1>
  
    <label for="inputEmail" class="sr-only">Email address</label>
  
    <input type="email" id="inputEmail" class="form-control" placeholder="Type your email address" required="" autofocus="">
  
    <label for="inputPassword" class="sr-only">Password</label>
  
    <input type="password" id="inputPassword" class="form-control" placeholder="Type your password" required="">
  
    <div class="checkbox mb-3" id="formCheckbox">
    
    <label>
    
      <input type="checkbox" value="remember-me"> Remember me
    
    </label>
    
    </div>
  
    <p id="Preport"> Log Error : <span id="report"> AUTH NULL</span></p>

    <button class="btn btn-lg btn-primary btn-block" type="submit" id="logBtn">Log in</button>
  
    </form>
  </div>


@endsection    