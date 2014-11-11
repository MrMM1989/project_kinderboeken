@extends('layouts.master')

@section('welcome')
    <h1>Kom binnen in de burcht</h1>
@stop

@section('content')
    {{Form::open(['route'=>'session.store'])}}
    <div>
          <h2>E-mail</h2>
          {{Form::email('email')}}
    </div>
    <div>
          <h2>Wachtwoord</h2>
          {{Form::password('password')}}
    </div>
    <div>{{Form::submit('Kom binnen', $attributes=array('class'=>'submit'))}}</div>
    {{Form::close()}}
@stop

@section('scripts')
    <script type="text/javascript">
        {{"guest();"}}
    </script>
@stop