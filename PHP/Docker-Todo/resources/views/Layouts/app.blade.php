<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" type="text/css" rel="stylesheet" />
    <title>{{config('app.name', 'ToutDouxLisst')}}</title>
</head>
<body>

    @include('inc.navbar')




    @yield('content')<!-- Le contenu affiché ici est celui du dossier Log/index.blade.php-->
    
</body>
</html>