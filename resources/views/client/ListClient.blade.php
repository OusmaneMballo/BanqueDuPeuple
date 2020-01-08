@extends('layout\layoutSession')
@section('content')
<h1><span>List des Clients</span></h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>MAIL</th>
                    <th>TELEPHONE</th>
                    <th>ADRESSE</th>
                    <th>ACTION</th>
                    <th>ACTION</th>
                </tr>
                @if(!empty($listClient))
                    @foreach($listClient as $client)
                        <tr>
                        <td>{{$client->id}}</td>
                        <td>{{$client->nom}}</td>
                        <td>{{$client->prenom}}</td>
                        <td>{{$client->mail}}</td>
                        <td>{{$client->telephone}}</td>
                        <td>{{$client->adresse}}</td>
                        <td><a href="{{route('editClient',['id'=>$client->id])}}">Modifier</a></td>
                        <td><a href="{{route('deleteClient',['id'=>$client->id])}} " onClick="return confirm('Voullez-vous archiver ce client?')">Archiver</a></td>
                        </tr>
                    @endforeach
                        @if(isset($resultat))
                            <p>Le client {{$client->id}} est archive!</p>
                        @endif
                    @else
                        <p>List vide!...</p>
                @endif
@endsection
