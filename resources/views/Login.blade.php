@extends ('layout/default')
@section('content')
<div class="section">
    <header><h3>Login</h3></header>
    <form name="addLogin" method="GET" action="{{route('session')}}">
    <input name="email" placeholder="login" type="email" required /><br/>
    <input name="password" placeholder="Password" type="text" required />
    <input type="submit" value="Enregistrer" class="submit" />
    @csrf
</form>
</div>
@endsection
