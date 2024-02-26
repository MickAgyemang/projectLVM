<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Muzikale Talentenjacht</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
  <div class="navbar">
        <a href="home.php">Home</a>
        <a href="muziek.php">Muziek</a>
        <a href="ranglijst.php">Ranglijst</a>
        <a href="contact.php">Contact</a>
    </div>
    <h1>Muzikale Talentenjacht</h1>
    <p>Ontdek de Sterren van Morgen</p>
  </header>
  
  <section class="video">
    <h2>Bekijk Onze Video</h2>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
  </section>

  <section class="rankings">
    <h2>Ranglijst</h2>
    <ul id="rankedList">
      <li>
        <span class="artist">Naam van Deelnemer 1</span>
        <span class="genre">Genre</span>
        <button class="likeButton" onclick="likeArtist(1)">Like</button>
      </li>
      <li>
        <span class="artist">Naam van Deelnemer 2</span>
        <span class="genre">Genre</span>
        <button class="likeButton" onclick="likeArtist(2)">Like</button>
      </li>
      <li>
        <span class="artist">Naam van Deelnemer 3</span>
        <span class="genre">Genre</span>
        <button class="likeButton" onclick="likeArtist(3)">Like</button>
      </li>
    </ul>
  </section>

  <script src="script.js"></script>
</body>
</html>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #f0f0f0;
  padding: 20px;
  text-align: center;
}

.video, .rankings {
  margin: 20px auto;
  max-width: 800px;
  text-align: center;
}

.rankings li {
  list-style-type: none;
  margin-bottom: 10px;
}

.likeButton {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
}

.likeButton:hover {
  background-color: #45a049;
}

<?