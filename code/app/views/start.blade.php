@extends('layouts.master')

@section('content')
    @if(isset($name))
        <h1>Welkom {{$name}}</h1>
    @endif
    <div id="leftSide">
        <h1>Ik zoek boeken met niveau</h1>
    </div>
    <div id="rightSide">
        <h1>en/of deze titel of auteur</h1>
    </div>
    <div id="session">
        @if(isset($name))
            <a href="{{{ URL::to('logout') }}}">Verlaat de burcht</a>
        @else
            <a href="{{{ URL::to('login') }}}">Ga de burcht binnen</a> | 
            <a href="">Wordt lid van de Boekenridders</a>
        @endif
    </div>
    <div class="clear"></div>
@stop