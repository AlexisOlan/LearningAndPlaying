<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <?php include 'title.php' ?>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
  <link rel="stylesheet" href="assets/css/match.css">

</head>
<body class="memory-body">
  <?php include 'nav.php' ?>
  <h1 class="page-title">Memorama</h1>
  <div class="overlay-text visible">
    Click para Iniciar
  </div>
  <div id="game-over-text" class="overlay-text">
    Juego Terminado
    <span class="overlay-text-small">Click para Reiniciar</span>
  </div>
  <div id="victory-text" class="overlay-text">
    Victoria
    <span class="overlay-text-small">Click para Reiniciar</span>
  </div>
  <div class="game-container">
    <div class="game-info-container">
      <div class="game-info">
        Tiempo <span id="time-remaining">100</span>
      </div>
      <div class="game-info">
        Intentos <span id="flips">0</span>
      </div>
    </div>
    <div class="card-game">
      <div class="card-back card-face">
        <img class="game" src="assets/images/game.svg" height="100px">
      </div>
      <div class="card-front card-face">
        <img class="card-value" src="assets/images/family1.svg" height="115px">
      </div>
    </div>
    <div class="card-game">
      <div class="card-back card-face">
        <img class="game" src="assets/images/game.svg" height="100px">
      </div>
      <div class="card-front card-face">
        <img class="card-value" src="assets/images/family1.svg" height="115px">
      </div>
    </div>
    <div class="card-game">
      <div class="card-back card-face">
        <img class="game" src="assets/images/game.svg" height="100px">
      </div>
      <div class="card-front card-face">
        <img class="card-value" src="assets/images/mother.svg" height="115px">
      </div>
    </div>
    <div class="card-game">
      <div class="card-back card-face">
        <img class="game" src="assets/images/game.svg" height="100px">
      </div>
      <div class="card-front card-face">
        <img class="card-value" src="assets/images/mother.svg" height="115px">
      </div>
    </div>
    <div class="card-game">
      <div class="card-back card-face">
        <img class="game" src="assets/images/game.svg" height="100px">
      </div>
      <div class="card-front card-face">
        <img class="card-value" src="assets/images/grandparents.svg" height="100px">
      </div>
    </div>
    <div class="card-game">
      <div class="card-back card-face">
        <img class="game" src="assets/images/game.svg" height="100px">
      </div>
      <div class="card-front card-face">
        <img class="card-value" src="assets/images/grandparents.svg" height="100px">
      </div>
    </div>
    <div class="card-game">
      <div class="card-back card-face">
        <img class="game" src="assets/images/game.svg" height="100px">
      </div>
      <div class="card-front card-face">
        <img class="card-value" src="assets/images/father.svg" height="115px">
      </div>
    </div>
    <div class="card-game">
      <div class="card-back card-face">
        <img class="game" src="assets/images/game.svg" height="100px">
      </div>
      <div class="card-front card-face">
        <img class="card-value" src="assets/images/father.svg" height="115px">
      </div>
    </div>
    <div class="card-game">
      <div class="card-back card-face">
        <img class="game" src="assets/images/game.svg" height="100px">
      </div>
      <div class="card-front card-face">
        <img class="card-value" src="assets/images/pet.svg" height="115px">
      </div>
    </div>
    <div class="card-game">
      <div class="card-back card-face">
        <img class="game" src="assets/images/game.svg" height="100px">
      </div>
      <div class="card-front card-face">
        <img class="card-value" src="assets/images/pet.svg" height="115px">
      </div>
    </div>
    <div class="card-game">
      <div class="card-back card-face">
        <img class="game" src="assets/images/game.svg" height="100px">
      </div>
      <div class="card-front card-face">
        <img class="card-value" src="assets/images/brother.svg" height="115px">
      </div>
    </div>
    <div class="card-game">
      <div class="card-back card-face">
        <img class="game" src="assets/images/game.svg" height="100px">
      </div>
      <div class="card-front card-face">
        <img class="card-value" src="assets/images/brother.svg" height="115px">
      </div>
    </div> 
    </div>
  </div>
</body>
<!-- partial -->
  <script  src="assets/js/memorama.js"></script>

</body>
</html>
