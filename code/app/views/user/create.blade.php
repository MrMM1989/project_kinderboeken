@extends('layouts.master')

@section('content')
    <h1>Wordt lid van de Orde</h1>
    {{Form::open(['route'=>'user.store'])}}
    <div>
        {{Form::label('email', 'E - mail:')}}
        {{Form::email('email')}}
    </div>
    <div>
        {{Form::label('username', 'Gebruikersnaam')}}
        {{Form::text('username')}}
    </div>
    <div>
        {{Form::label('password', 'Password:')}}
        {{Form::password('password')}}
    </div>
    <div>{{Form::submit('Wordt Lid')}}</div>
    {{Form::close()}}
@stop

@section('scripts')
    <script type="text/javascript">
        {{"guest();"}}
    </script>
@stop