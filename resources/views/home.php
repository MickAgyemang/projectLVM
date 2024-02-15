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
        <div class="content">
            <h2>Welkom op onze website</h2>
            <p>Dit is de homepage van onze website. Klik op de links hierboven om naar andere pagina's te gaan.</p>
        </div>
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
    max-width: 800px;
    margin: 20px auto;
    padding: 0 20px;
}
.content {
    background-color: #f9f9f9; 
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}
footer {
    background-color: lightseagreen;
    color: #fff;
    text-align: center;
    padding: 20px;
}

footer p {
    margin: 5px 0;
}
</style>