<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inschrijving Talentenjacht</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Inschrijving Talentenjacht</h1>
    <form id="inschrijfformulier">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="talent">Talent:</label>
        <textarea id="talent" name="talent" required></textarea>
        
        <button type="button" onclick="checkForm()">Inschrijven</button>

        <script>
            function checkForm() {
                var naam = document.getElementById('naam').value;
                var email = document.getElementById('email').value;
                var talent = document.getElementById('talent').value;

                if (naam && email && talent) {
                    // Alle velden zijn ingevuld, doorsturen naar de pagina "info"
                    window.location.href = "info";
                    // Toon een melding dat de gebruiker is ingeschreven
                    alert('Je bent succesvol ingeschreven voor de talentenjacht!');
                } else {
                    // Niet alle velden zijn ingevuld, toon een melding
                    alert('Vul alle velden in voordat je je inschrijft.');
                }
            }
        </script>
    </form>
</div>

</body>
</html>
