<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: lightseagreen;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .container {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: center;
            justify-content: center;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box; /* zorg ervoor dat padding wordt meegerekend in de breedte */
           
        }

       
        button[type="submit"] {
            background-color: lightseagreen;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            justify-content: center;
        }

        button[type="submit"]:hover {
            background-color: lightseagreen;
        }

        footer {
            background-color: lightseagreen;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="muziek.php">Muziek</a>
        <a href="ranglijst.php">Ranglijst</a>
        <a href="contact.php">Contact</a>
    </div>
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
