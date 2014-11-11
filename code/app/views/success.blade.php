@extends('layouts.master')

@section ('content')
    <h2>Gefeliciteerd, u bent nu een lid van de Orde!</h2>
@stop

@section('scripts')
    <script type="text/javascript">
        {{"guest();"}}
    </script>
@stop