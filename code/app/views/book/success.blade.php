@extends('layouts.master')

@section('content')
    <h2>Het boek "{{$title}}" is toegevoegd aan de Orde.</h2>
@stop

@section('scripts')
    <script type="text/javascript">
        {{"loggedIn();"}}
    </script>
@stop