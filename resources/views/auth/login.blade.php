@extends("template")



@section('content')

<form action="{{route("login")}}" method="post" class="">
    @csrf
    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input" aria-label="Not clickable icon" type="email" name="email" required placeholder="Email">
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
            <input class="uk-input" aria-label="Not clickable icon" type="password" name="password" required placeholder="password">
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-inline">
            <input type="checkbox" name="remember" class="uk-checkbox"/>    Remember me
        </div>
    </div>

    <input type="submit" class="uk-button uk-button-default" value="Connexion">

</form>

    


@endsection