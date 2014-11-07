@extends('layouts.master')

@section('content')
    @if(isset($test))
        <h1>Test</h1>
    @else
        <h1>Welkom</h1>
    @endif
@stop