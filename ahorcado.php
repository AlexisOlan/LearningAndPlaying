
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php include 'title.php' ?>
  <?php include 'links.php' ?>
</head>
<body>
<?php include 'nav.php' ?>
<div class="container"><br>
    <h3 class="text-center">Ahorcado</h3><br>
    <div class="float-right">Errores: <span id='mistakes'>0</span> de <span id='maxWrong'></span></div>
    <div class="float-left">
        <button class="btn btn-info" onClick="reset()">Reiniciar</button>
    </div>
    <div class="text-center">
        <img id='hangmanPic' src="assets/images/hangman/0.png" alt="" height="250">
        <p>Verbos irregulares en pasado</p>
        <p id="wordSpotlight">The word to be guessed goes here</p>
        <div id="keyboard"></div>
    </div> 
</div>

<script src='assets/js/hangman.js'></script>
</body>
</html>