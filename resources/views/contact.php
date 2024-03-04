<!DOCTYPE html>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Muzikale Talentenjacht</title>
  <link rel="stylesheet" href="css/contact.css">
</head>
<body>
  <header>
  <div class="navbar">
        <a href="/">Home</a>
        <a href="muziek">Muziek</a>
        <a href="ranglijst">Ranglijst</a>
        <a href="info">info</a>
        <a href="contact">Contact</a>
        <button id="logoutBtn">Uitloggen</button>
    </div>
  </header>
    <div class="container">
        <h2>Contacteer ons</h2>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name">
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
    <footer>
        <p>Bedankt voor het bezoeken van onze website! Volg ons op sociale media voor meer updates.</p>
        <p>© 2024 Bedrijfsnaam. Alle rechten voorbehouden.</p>
    </footer>
</body>
</html>
