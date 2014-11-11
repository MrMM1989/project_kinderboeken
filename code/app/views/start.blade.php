@extends('layouts.master')

@section('welcome')
    @if(isset($name))
        <h1>Welkom {{{$name}}},</h1>
    @else
        <h1>Welkom bij de Boekenridders</h1>
    @endif
@stop

@section('content')
    <div id="avi_select_div">
        <h2>zoek een boek met niveau</h2>
        {{Form::open(['route'=>'search.store'])}}
        {{Form::select('avi', array('avis'=>$avis), 0, $attributes=array('id'=>'select_avi'))}}
        <div id="aviHolder">
            @foreach($avis_desc as $aa)
                <p id="{{{$aa->id}}}">{{{$aa->description}}}</p>
            @endforeach
        </div>
        <div class="clear"></div>
    </div>
    <div>
        <h2>en/of deze titel of auteur</h2>
        {{Form::text('searchword', $value = null, $attributes=array('id'=>'searchword'))}}<br />
        {{Form::submit('Zoeken', $attributes=array('class'=>'submit'))}}
        {{Form::close()}}
    </div>
    <div class="clear"></div>
@stop

@section('scripts')
    <script type="text/javascript">
        @if(Auth::check()){{"loggedIn();"}}
        @else{{"guest();"}}
        @endif
    </script>
@stop