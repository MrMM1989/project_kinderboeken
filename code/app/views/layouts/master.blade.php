<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
                Orde van de boekenridders
            @show
        </title>
        {{HTML::style('css/reset.css')}}
        {{HTML::style('css/app.css')}}
    </head>
    <body>
        <div id="header"><h1>Orde van de Boekenridders</h1></div>
        @section('content')
        @show
    </body>
</html>