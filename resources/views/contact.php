<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
   
</head>
<body>
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="muziek.php">Muziek</a>
        <a href="ranglijst.php">ranglijst</a>
        <a href="contact.php">Contact</a>
    </div>
    <div class="container">
        <h2>Contacteer ons</h2>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Bericht:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">Verzenden</button>
        </form>
    </div>
    </body>
    <footer>
        <p>Bedankt voor het bezoeken van onze website! Volg ons op sociale media voor meer updates.</p>
        <p>© 2024 Bedrijfsnaam. Alle rechten voorbehouden.</p>
    </footer>
</html>

<style>
body {
    
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
.navbar {
    background-color: #333; /* donkere achtergrondkleur voor de navbar */
    overflow: hidden;
}
.navbar a {
    float: left;
    display: block;
    color: #f2f2f2; /* witte tekstkleur */
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}
.navbar a:hover {
    background-color: #ddd; /* lichtgrijze achtergrondkleur bij hover */
    color: black;
}
.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 0 20px;
}
.content {
    background-color: #f9f9f9; /* lichtgrijze achtergrondkleur voor de inhoud */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* subtiele schaduw */
}
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

footer p {
    margin: 5px 0;
}
</style>