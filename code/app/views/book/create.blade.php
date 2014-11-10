@extends('layouts.master')

@section('content')
    <h1>Voeg een boek toe</h1>
    {{Form::open(['route'=>'book.store'])}}
    <div>
        {{Form::label('title', 'Titel:')}}
        {{Form::text('title')}}
    </div>
    <div>
        {{Form::label('author', 'Auteur:')}}
        {{Form::text('author')}}
    </div>
    <div>
        {{Form::label('avi', 'Avi - Niveau:')}}
        {{Form::select('avi', array('avis'=>$avis), 0)}}
    </div>
    <div>
        {{Form::label('publisher', 'Uitgeverij:')}}
        {{Form::text('publisher')}}
    </div>
    <div>
        {{Form::label('about', 'Korte Samenvatting:')}}<br />
        {{Form::textarea('about', null, ['size' => '30x5','resize' => 'none'])}}
    </div>
    <div>{{Form::submit('Voeg Toe')}}</div>
    {{Form::close()}}
@stop

@section('scripts')
    <script type="text/javascript">
        {{"guest();"}}
    </script>
@stop