@extends('template')


@section('title')
Accueil
@endsection

@section('content')

<h1>Bienvenue 
    @auth
    {{Auth::user()->name}}
    @endauth
</h1>
        @foreach ($albums as $a)
            <p>{{$a->titre}}</p>
        @endforeach

@endsection
