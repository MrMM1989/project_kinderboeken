<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
                Orde van de Boekenridders
            @show
        </title>
        {{HTML::style('css/reset.css')}}
        {{HTML::style('css/app.css')}}
    </head>
    <body>
        <div id="header"><h1>Orde van de Boekenridders</h1></div>
        <div id="content">
            <div id="menuHolder">
                <ul id="menu">
                    <li><a href="">Home</a></li><li><a href="">Nieuws</a></li><li><a href="">Wat is de orde?</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            @section('content')
            @show
        </div>
    </body>
</html>