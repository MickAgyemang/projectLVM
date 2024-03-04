<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="/css/inlog.css">
    <link rel="stylesheet" href="resources/css/app.css">
</head>
<body>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inlogpagina</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Inloggen</h2>
        <form id="loginForm" action="login.php" method="POST">
            <div class="input-group">
                <label for="username">Gebruikersnaam:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="student_number">Leerlingnummer:</label>
                <input type="text" id="student_number" name="student_number" required>
            </div>
            <button type="submit">Inloggen</button>
        </form>
    </div>

    <script src="inlog.js"></script>
</body>
</html>
