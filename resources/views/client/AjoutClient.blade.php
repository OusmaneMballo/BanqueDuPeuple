@extends('layout\layoutSession')
@section('content')
@if(isset($confirmation))
    @if($confirmation==1)
        <p>Vous avez ajoutes un nouveau client!</p>
        @else
            <p>Client non ajoute!</p>
    @endif
@endif
<div class="section">
    <form name="addClient" method="GET" action="{{route('createClient')}}">
    <input name="nom" placeholder="nom" type="text" required /><br/>
    <input name="prenom" placeholder="prenom" type="text" required /><br/>
    <input name="mail" placeholder="Email" type="email" required /><br/>
    <input name="password" placeholder="Password" type="text" required />
    <input name="telephone" placeholder="telephone" type="text" required /><br/>
    <input name="adresse" placeholder="Adresse" type="text" required /><br/>
    <input type="submit" value="Ajouter" class="submit" />
    @csrf
</form>
</div>
@endsection
