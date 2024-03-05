
session_start();

// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Controleer de ingediende gebruikersnaam en wachtwoord
    $valid_username = "Dylan";
    $valid_password = "Dylan123";
    $valid_student_number = "12333";

    $username = $_POST["username"];
    $password = $_POST["password"];
    $student_number = $_POST["student_number"];

    if ($username === $valid_username && $password === $valid_password && $student_number === $valid_student_number) {
        // Inloggegevens zijn correct, sla de gebruikersnaam op in de sessie
        $_SESSION["username"] = $username;
        // Redirect naar een beveiligde pagina
        header("Location: index.blade.php");
        exit;
    } else {
        // Inloggegevens zijn onjuist, doorsturen naar de inlogpagina met een foutmelding
        header("Location: index.php?error=1");
        exit;
    }
} else {
    // Als het formulier niet is ingediend, doorsturen naar de inlogpagina
    header("Location: index.php");
    exit;
}

