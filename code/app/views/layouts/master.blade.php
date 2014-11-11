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
        <link href='http://fonts.googleapis.com/css?family=Lobster+Two:700,400' rel='stylesheet' type='text/css'>
    </head>
    <body>
        {{HTML::image('img/header.jpg', null, array('id'=>'header_img'))}}
        <div id="content">
            @section('welcome')
            @show
            <div id="menuHolder">
                <ul id="menu">
                    <li><a href="{{{ URL::to('/') }}}">Home</a></li>
                </ul>
            </div>
            <div class="clear"></div>
            @section('content')
            @show
        </div>
        {{HTML::image('img/footer.jpg', null, array('id'=>'footer_img'))}}
        {{HTML::script('js/jquery-1.11.1.min.js')}}
        {{HTML::script('js/app.js')}}
        @section('scripts')
        @show
    </body>
</html>