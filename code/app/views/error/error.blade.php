@extends('layouts.master')

@section('content')
    <h2>U moet ingelogd zijn om deze pagina te zien!</h2>
@stop

@section('scripts')
    <script type="text/javascript">
        @if(Auth::check()){{"loggedIn();"}}
        @else{{"guest();"}}
        @endif
    </script>
@stop