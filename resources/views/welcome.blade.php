<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f7fd; /* lichtblauwe achtergrond */
            color: #333; /* donkere tekst */
        }
        .header {
            background-color: #6fa2fb; /* donkerder lichtblauw voor de header */
            color: #fff; /* witte tekst */
            padding: 20px;
            text-align: center;
        }
        .header img {
            max-width: 200px; /* maximaal breedte voor het logo */
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .content {
            background-color: #fff; /* witte achtergrond voor de inhoud */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* subtiele schaduw */
        }
        .footer {
            background-color: #6fa2fb; /* dezelfde kleur als de header voor de footer */
            color: #fff; /* witte tekst */
            padding: 20px;
            text-align: center;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="fotos/Aventus.jpg" alt="Jouw Logo">
        <h1>Welkom op onze website</h1>
    </div>
    <div class="container">
        <div class="content">
            <h2>Over Ons</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel eros vel velit lacinia consequat. Duis non libero nec justo lacinia tempus. Integer vitae enim non elit accumsan eleifend.</p>
            <h2>Onze Diensten</h2>
            <ul>
                <li>Dienst 1</li>
                <li>Dienst 2</li>
                <li>Dienst 3</li>
            </ul>
            <h2>Contact</h2>
            <p>Neem gerust contact met ons op voor meer informatie.</p>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Jouw Bedrijfsnaam. Alle rechten voorbehouden.</p>
    </div>
</body>
</html>
