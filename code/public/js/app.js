$(function()
{
    $("#aviHolder p").hide();
     
    /* Laat de informatie van het geselecteerde AVI - niveau zien bij het laden van de pagina */
    thisName = $("#select_avi").val();
    $("#aviHolder p:not(#" + thisName + ")").slideUp();
    $("#aviHolder #" + thisName).show();
    
    /* Past de informatie aan elke keer de gebruiker een andere optie kiest */
    $("#select_avi").change(function()
    {
        thisName = $(this).val();
        $("#aviHolder p:not(#" + thisName + ")").slideUp();
        $("#aviHolder #" + thisName).slideDown();
    });
});

function guest()
{
    $("#menuHolder ul").append('<li><a href="/login">Login</a></li>')
                       .append('<li><a href="/register">Registreer</a></li>');
}

function loggedIn()
{
    $("#menuHolder ul").append('<li><a href="/book/create">Voeg een boek toe</a></li>')
                       .append('<li><a href="/logout">Log Uit</a></li>');
}