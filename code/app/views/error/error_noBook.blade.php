@extends('layouts.master')

@section('welcome')
    <h1>Geen nieuw boek.</h1>
@stop

@section('content')
    <p>U heeft geen nieuw boek toegevoegd.</p>
@stop

@section('scripts')
    <script type="text/javascript">
        @if(Auth::check()){{"loggedIn();"}}
        @else{{"guest();"}}
        @endif
    </script>
@stop