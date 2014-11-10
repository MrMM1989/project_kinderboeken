@extends('layouts.master')

@section('content')
    <h1>Kom binnen in de burcht</h1>
    {{Form::open(['route'=>'session.store'])}}
    <div>
          {{Form::label('email', 'E - mail:')}}
          {{Form::email('email')}}
    </div>
    <div>
          {{Form::label('password', 'Password:')}}
          {{Form::password('password')}}
    </div>
    <div>{{Form::submit('Kom binnen')}}</div>
    {{Form::close()}}
@stop

@section('scripts')
    <script type="text/javascript">
        {{"guest();"}}
    </script>
@stop