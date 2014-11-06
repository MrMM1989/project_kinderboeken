@extends('layouts.master')

@section('content')
    <p>Welkom</p>
    <a href="{{{ URL::to('logout') }}}">Verlaat de burcht</a>
@stop