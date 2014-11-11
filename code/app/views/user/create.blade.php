@extends('layouts.master')

@section('welcome')
    <h1>Wordt lid van de Orde</h1>
@stop

@section('content')
    {{Form::open(['route'=>'user.store'])}}
    <div>
        <h2>E-mail</h2>
        {{Form::email('email')}}
    </div>
    <div>
        <h2>Gebruikersnaam</h2>
        {{Form::text('username')}}
    </div>
    <div>
        <h2>Wachtwoord</h2>
        {{Form::password('password')}}
    </div>
    <div>{{Form::submit('Wordt Lid', $attributes=array('class'=>'submit'))}}</div>
    {{Form::close()}}
@stop

@section('scripts')
    <script type="text/javascript">
        {{"guest();"}}
    </script>
@stop