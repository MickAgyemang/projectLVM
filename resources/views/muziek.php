<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Muzikale Talentenjacht</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/muziek.css">
</head>
<body>
<header>
  <div class="navbar">
        <a href="/">Home</a>
        <a href="muziek">Muziek</a>
        <a href="ranglijst">Ranglijst</a>
        <a href="info">info</a>
        <a href="contact">Contact</a>
        <button id="logoutBtn" onclick="redirectToAnotherPage()">Uitloggen</button>

<script>
function redirectToAnotherPage() {
  // Verander de URL naar de gewenste bestemming
  window.location.href = "inlog";
}
</script>
  </header>
 


  </div>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="path/to/thumbnail1.jpg" class="card-img-top" alt="Track 1 Thumbnail">
          <div class="card-body">
            <h5 class="card-title">Track 1</h5>
            <p class="card-text">Artiest: Studentnaam</p>
            <audio controls>
              <source src="path/to/track1.mp3" type="audio/mp3">
              Your browser does not support the audio element.
            </audio>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="path/to/thumbnail2.jpg" class="card-img-top" alt="Track 2 Thumbnail">
          <div class="card-body">
            <h5 class="card-title">Track 2</h5>
            <p class="card-text">Artiest: Studentnaam</p>
            <audio controls>
              <source src="path/to/track2.mp3" type="audio/mp3">
              Your browser does not support the audio element.
            </audio>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="path/to/thumbnail3.jpg" class="card-img-top" alt="Track 3 Thumbnail">
          <div class="card-body">
            <h5 class="card-title">Track 3</h5>
            <p class="card-text">Artiest: Studentnaam</p>
            <audio controls>
              <source src="path/to/track3.mp3" type="audio/mp3">
              Your browser does not support the audio element.
            </audio>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="path/to/thumbnail4.jpg" class="card-img-top" alt="Track 4 Thumbnail">
          <div class="card-body">
            <h5 class="card-title">Track 4</h5>
            <p class="card-text">Artiest: Studentnaam</p>
            <audio controls>
              <source src="path/to/track4.mp3" type="audio/mp3">
              Your browser does not support the audio element.
            </audio>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="path/to/thumbnail5.jpg" class="card-img-top" alt="Track 5 Thumbnail">
          <div class="card-body">
            <h5 class="card-title">Track 5</h5>
            <p class="card-text">Artiest: Studentnaam</p>
            <audio controls>
              <source src="path/to/track5.mp3" type="audio/mp3">
              Your browser does not support the audio element.
            </audio>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="path/to/thumbnail6.jpg" class="card-img-top" alt="Track 6 Thumbnail">
          <div class="card-body">
            <h5 class="card-title">Track 6</h5>
            <p class="card-text">Artiest: Studentnaam</p>
            <audio controls>
              <source src="path/to/track6.mp3" type="audio/mp3">
              Your browser does not support the audio element.
            </audio>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="mt-4">
    <div class="container">
      <p>Bedankt voor het bezoeken van onze website! Volg ons op sociale media voor meer updates.</p>
      <p>© 2024 Bedrijfsnaam. Alle rechten voorbehouden.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <!-- ... (bestaande code) ... -->

<!-- Ronde knop voor het toevoegen van muziek -->
<div id="addMusicBtn" onclick="location.href='formulier'">
  Voeg je eigen muziek toe!
</div>



</body>
</html>
