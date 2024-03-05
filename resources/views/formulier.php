<style>
  /* Stijl voor de talentenjacht */
  .talentenjacht-container {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
  }

  .talentenjacht-title {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
    text-align: center;
  }

  .talentenjacht-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .talentenjacht-form label {
    font-weight: bold;
  }

  .talentenjacht-form input[type="text"],
  .talentenjacht-form input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }

  .talentenjacht-form button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .talentenjacht-form button:hover {
    background-color: #0056b3;
  }
</style>
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
        <a href="formulier">muziek verzenden</a>
        <button id="logoutBtn" onclick="redirectToAnotherPage()">Uitloggen</button>

<script>
function redirectToAnotherPage() {
  // Verander de URL naar de gewenste bestemming
  window.location.href = "inlog";
}
</script>
  </header>
<div class="container mt-4 talentenjacht-container">
  <h2 class="talentenjacht-title">Talentenjacht - Voeg jouw muziek toe</h2>
  <div class="row">
    <!-- Muziek toevoegen formulier -->
    <div class="col-md-12 mb-4">
      <div class="card talentenjacht-form">
        <div class="card-body">
          <form action="/upload" method="post" enctype="multipart/form-data">
             <!-- Voeg CSRF-token toe voor beveiliging (Laravel-specific) -->
            <div class="form-group">
              <label for="trackName">Track Naam</label>
              <input type="text" class="form-control" id="trackName" name="trackName" required>
            </div>
            <div class="form-group">
              <label for="artistName">Artiest Naam</label>
              <input type="text" class="form-control" id="artistName" name="artistName" required>
            </div>
            <div class="form-group">
              <label for="thumbnail">Thumbnail Afbeelding</label>
              <input type="file" class="form-control-file" id="thumbnail" name="thumbnail" accept="image/*" required>
            </div>
            <div class="form-group">
              <label for="audioFile">Audio Bestand</label>
              <input type="file" class="form-control-file" id="audioFile" name="audioFile" accept="audio/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Uploaden</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
