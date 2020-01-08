@extends('layout\layoutSession')
@section('content')
@if(isset($confirmation))
    @if($confirmation==1)
        <p>Vous avez ajoutes un nouveau Compte!</p>
        @else
            <p>Compte non ajoute!</p>
    @endif
@endif
<div class="section">
    <form name="addCompte" method="GET" action="{{route('createCompte')}}">
    <input name="numero" placeholder="numero" type="text" required /><br/>
    <input name="solde" placeholder="Solde" type="text" required /><br/>
    <input type="submit" value="Enregistrer" class="submit" />
    @csrf
</form>
</div>
@endsection
