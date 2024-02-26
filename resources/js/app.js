import './bootstrap';


// inlog pagina


// Gebruikersnaam en wachtwoord
const username = "jouw_gebruikersnaam";
const password = "jouw_wachtwoord";

document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault();
    // Gebruikersnaam en wachtwoord van de ingevulde velden
    const enteredUsername = document.getElementById("admin").value;
    const enteredPassword = document.getElementById("admin").value;
    
    // Controleer of de ingevoerde gegevens overeenkomen met de vooraf ingestelde gegevens
    if (enteredUsername === username && enteredPassword === password) {
        // Inloggegevens kloppen, doorverwijzen naar de homepagina
        window.location.href = "home";
    } else {
        // Inloggegevens kloppen niet, geef een foutmelding
        alert("Ongeldige gebruikersnaam of wachtwoord. Probeer opnieuw.");
    }
});

