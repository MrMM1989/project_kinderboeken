@extends('layouts.master')

@section('welcome')
    <h1>Pagina niet gevonden!</h1>
@stop

@section('content')
    <p>Deze pagina bestaat niet. Heeft u misschien een fout getypt?</p>
@stop

@section('scripts')
    <script type="text/javascript">
        @if(Auth::check()){{"loggedIn();"}}
        @else{{"guest();"}}
        @endif
    </script>
@stop