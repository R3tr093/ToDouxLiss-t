<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Libre+Caslon+Text:400i&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Caveat:700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Cinzel:700&display=swap" rel="stylesheet"> 
    <title>{{config('app.name', 'ToutDouxLisst')}}</title>
</head>
<body>

    @include('inc.navbar')
   
 




    @yield('content')<!-- Le contenu affiché ici est celui du dossier Log/index.blade.php-->

<!-- Move top top Btn -->


<button onclick="topFunction()" id="myBtn" title="Go to top"></button>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
  document.getElementById("myBtn").style.display = "block";
} else {
  document.getElementById("myBtn").style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}





var wellElts = document.querySelectorAll(".well");

var colors = ['red','goldenrod','cornflowerblue','antiquewhite'];

var colors2 = ['red','goldenrod','cornflowerblue','black'];

var i = 0;

var random = Math.floor(Math.random() * Math.floor(wellElts.length));

var nav = document.getElementById("navTarget");

var random2 = Math.floor(Math.random() * Math.floor(colors2.length));

nav.style.backgroundColor = colors2[random2];

while ( i < wellElts.length)
{
    wellElts[i].style.borderColor = colors[random];
    random = Math.floor(Math.random() * Math.floor(wellElts.length));
    i++;
}


</script>    
    
</body>


</html>