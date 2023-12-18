@extends('template')


@section('title')
Accueil
@endsection

@section('content')

<ul class="uk-iconnav uk-flex-between">
    <li><h2>Photos de l'albmum xxxxx</h2></li>
    <li><a href="album/newAlbum" uk-icon="icon: plus"></a></li>
</ul>
        @foreach ($photos as $p)
            <img src="{{$p->url}}">
        @endforeach

@endsection