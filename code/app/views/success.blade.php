@extends('layouts.master')

@section ('content')
    <p>Gefeliciteerd, u bent nu een lid van de Orde!</p>
@stop

@section('scripts')
    <script type="text/javascript">
        {{"guest();"}}
    </script>
@stop