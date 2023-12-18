@extends("template")



@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route("register")}}" method="post">
    @csrf
    <input type="text" name="name" required placeholder="Name" /><br />
    <input type="email" name="email" required placeholder="Email" /><br />
    <input type="password" name="password" required placeholder="password" /><br />
    <input type="password" name="password_confirmation" required placeholder="password" /><br />
    <input type="submit" /><br />
</form>
Déjà un compte  ? <a href="{{route("login")}}">Connectez vous</a>

@endsection