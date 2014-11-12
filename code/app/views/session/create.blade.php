@extends('layouts.master')

@section('welcome')
    <h1>Kom binnen in de burcht</h1>
@stop

@section('content')
    <ul class="userErrors">
        <li>{{ $errors->first('email') }}</li>
        <li>{{ $errors->first('password') }}</li>
        @if(Session::has('message'))
            <li>{{{ Session::get('message') }}}</li>
        @endif
    </ul>
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