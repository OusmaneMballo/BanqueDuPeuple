<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{asset('css/inscription.css')}}" rel='stylesheet' type='text/css' />
</head>
<body>
<head>
    <div id="header" class="section">
        <img alt="" class="img-circle" src="{{asset('img/logoBP.jpg')}}">
        <a href="{{ route('welcome') }}"><p>Accueil</p></a>
    </div>
</head>
<div class="barre">
    <a href="{{route('ajoutClient')}}" class="bor">Ajouter un Client</a>
    <a href="{{route('getAll')}}" class="bor">List Clients</a>
    <a href="{{route('editCompte')}}" class=" bor">List des comptes</a>
   <a href="{{route('ajoutCompte')}}" class="bor">Ajouter un Compte</a>

</div>
@yield('content')
</body>
