<!-- ... (bestaande code) ... -->

<div class="container mt-4">
  <div class="row">
    <!-- Muziek toevoegen formulier -->
    <div class="col-md-12 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Voeg jouw muziek toe</h5>
          <form action="/upload" method="post" enctype="multipart/form-data">
            @csrf <!-- Voeg CSRF-token toe voor beveiliging (Laravel-specific) -->
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

  <div class="row">
    <!-- Bestaande tracks -->
    <!-- ... (bestaande code) ... -->
  </div>
</div>

<!-- ... (bestaande code) ... -->
