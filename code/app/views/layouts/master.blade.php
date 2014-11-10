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
    <body background="{{ URL::asset('img/Header_Image.jpg');}}">
        <div id="content">
            <div id="menuHolder">
                <ul id="menu">
                    <li><a href="{{{ URL::to('/') }}}">Home</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            @section('content')
            @show
        </div>
        {{HTML::script('js/jquery-1.11.1.min.js')}}
        {{HTML::script('js/app.js')}}
        @section('scripts')
        @show
    </body>
</html>