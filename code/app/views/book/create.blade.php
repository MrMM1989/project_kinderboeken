@extends('layouts.master')

@section('welcome')
    <h1>Voeg een boek toe</h1>
@stop

@section('content')
    {{Form::open(['route'=>'book.store'])}}
    <div>
        <h2>Titel:</h2>
        {{Form::text('title')}}
    </div>
    <div>
        <h2>Auteur:</h2>
        {{Form::text('author')}}
    </div>
    <div>
        <h2>Avi - Niveau</h2>
        {{Form::select('avi', array('avis'=>$avis), 0)}}
    </div>
    <div>
        <h2>Uitgeverij:</h2>
        {{Form::text('publisher')}}
    </div>
    <div>
        <h2>Korte Samenvatting:</h2>
        {{Form::textarea('about', null, ['size' => '30x5','resize' => 'none'])}}
    </div>
    <div>{{Form::submit('Voeg Toe', $attributes=array('class'=>'submit'))}}</div>
    {{Form::close()}}
@stop

@section('scripts')
    <script type="text/javascript">
        {{"loggedIn();"}}
    </script>
@stop