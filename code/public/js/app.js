$(function()
{
});

function guest()
{
    $("#menuHolder ul").append('<li><a href="/info">Wat is de orde?</a></li>')
                       .append('<li><a href="/login">Login</a></li>')
                       .append('<li><a href="/register">Registreer</a></li>');
}

function loggedIn()
{
    $("#menuHolder ul").append('<li><a href="/book/create">Voeg een boek toe</a></li>')
                       .append('<li><a href="">Interessante boeken</a></li>')
                       .append('<li><a href="/logout">Log Uit</a></li>');
}