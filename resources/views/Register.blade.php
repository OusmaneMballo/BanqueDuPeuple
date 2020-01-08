@extends('layout/default')
@section('content')
@if(isset($confirmation))
    @if($confirmation==1)
        <a href="{{route('login')}}"><p>Se Connecter</p></a>
        @else
            <p>User non enregistrer</p>
    @endif
@endif
<form name="addUser" method="GET" action="{{route('add')}}">
    <input name="name" placeholder="Name" type="text" required /><br/>
    <input name="email" placeholder="login" type="email" required /><br/>
    <input name="password" placeholder="Password" type="text" required />
    <input type="submit" value="Enregistrer" class="submit" />
    @csrf
</form>
@endsection
