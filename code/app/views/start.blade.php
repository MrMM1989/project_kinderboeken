@extends('layouts.master')

@section('content')
    @if(isset($name))
        <h1>Welkom {{$name}},</h1>
    @endif
    <div id="leftSide">
        <h1>zoek boek met niveau</h1>
        {{Form::open(['route'=>'search.store'])}}
            <p>{{Form::select('avi', array('avis'=>$avis), 0)}}</p>
    </div>
    <div id="rightSide">
        <h1>en/of deze titel of auteur</h1>
            <p>{{Form::text('searchword', $value = null, $attributes=array('id'=>'searchword'))}}</p>
            <p>{{Form::submit('Zoeken', $attributes=array('id'=>'submit'))}}</p>
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