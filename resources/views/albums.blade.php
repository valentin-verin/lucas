@extends('template')


@section('title')
Accueil
        {{-- <!-- This is a button toggling the modal -->
        <button uk-toggle="target: #my-id" type="button" value="test"></button>

        <!-- This is the modal -->
        <div id="my-id" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title"></h2>
                <button class="uk-modal-close" type="button"></button>
            </div>
        </div> --}}
@endsection

@section('content')

<ul class="uk-iconnav uk-flex-between">
    <li><h2>Les albums</h2></li>
    <li><span uk-icon="icon: plus" class="modalBtn" id="modalBtn"></span></li>
</ul>
        @foreach ($albums as $a)
            <p>{{$a->titre}} (créé le {{$a->creation}})</p>
        @endforeach





<div class="modal">
    <form action="">
        @csrf
        <h3>Ajout d'une photo</h1>
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="submit" value="ok">

    </form>
</div>

@endsection
