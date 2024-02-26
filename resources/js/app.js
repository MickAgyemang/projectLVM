import './bootstrap';


// inlog pagina
document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault();
    // Hier zou je normaal gesproken een controle uitvoeren van de ingevoerde gebruikersnaam en wachtwoord
    // Als de inloggegevens kloppen, zou je de gebruiker doorverwijzen naar de homepagina
    window.location.href = "index";
});
