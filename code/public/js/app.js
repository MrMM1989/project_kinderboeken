$(function()
{
});

function guest()
{
    $("#menuHolder ul").append('<li><a href="/login">Login</a></li><li><a href="/register">Registreer</a></li>');
}

function loggedIn()
{
    $("#menuHolder ul").append('<li><a href="/logout">Log Uit</a></li>');
}