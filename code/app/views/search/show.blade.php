@extends('layouts.master')

@section('welcome')
    @if(isset($searchword))
        <h1>Zoekresultaten voor {{{$searchword}}}</h1>
    @else
        <h1>Zoekresultaten</h1>
    @endif
@stop

@section('content')
    @if(sizeof($results) > 0)
        @foreach($results as $result)
            <div class="searchResult">
                <h3>Titel:</h3><p>{{{$result->title}}}</p>
                <h3>Auteur: </h3><p>{{{$result->author}}}</p>
                <h3>Avi - Niveau:</h3><p>{{{$result->name}}}</p>
                <h3>Uitgeverij:</h3><p>{{{$result->publisher}}}</p>
                <h3>Korte Inhoud:</h3><p>{{{$result->about}}}</p>
            </div>
        @endforeach
        <div class="clear"></div>
    @else
        <p>Er zijn geen resultaten gevonden.</p>
    @endif
@stop

@section('scripts')
    <script type="text/javascript">
        @if(Auth::check()){{"loggedIn();"}}
        @else{{"guest();"}}
        @endif
    </script>
@stop