@extends('layouts.master')

@section('content')
    @if(isset($name))
        <h1>Welkom {{$name}}</h1>
        <a href="{{{ URL::to('logout') }}}">Verlaat de burcht</a>
    @else
        <a href="{{{ URL::to('login') }}}">Ga de burcht binnen</a>
    @endif
@stop