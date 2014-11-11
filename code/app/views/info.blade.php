@extends('layouts.master')

@section('welcome')
    <h1>Informatie</h1>
@stop

@section('content')
    <p>
        De Orde van de Boekenridders is een verzameling van mensen die willen dat kinderen nog meer boeken lezen. 
    </p>
    <p>
        De Orde is ontstaan omdat we merkten dat er veel ouders zijn die problemen hebben met het vinden van boeken voor hun kinderen.
        Dit probleem ontstaat voornamelijk uit het feit dat ouders meestal niet zo goed weten wat de AVI - niveau's betekenen. 
    </p>
    <p>
        Op deze site willen wij, de Orde, er voor zorgen dat ouders op een gemakkelijke manier boeken, geschikt voor hun kinderen, kunnen
        vinden.
    </p>
@stop

@section('scripts')
    <script type="text/javascript">
        @if(Auth::check()){{"loggedIn();"}}
        @else{{"guest();"}}
        @endif
    </script>
@stop