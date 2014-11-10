@extends('layouts.master')

@section('content')
    Het boek "{{$title}}" is toegevoegd aan de Orde.
@stop

@section('scripts')
    <script type="text/javascript">
        {{"loggedIn();"}}
    </script>
@stop