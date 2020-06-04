<!DOCTYPE html>
<html>
<head>
	<?php include 'title.php' ?>
	<link rel="stylesheet" href="assets/css/quizz.css">
</head>
<body class="quizz">
       
<?php include 'nav.php' ?><br>
     <h1>Quizz</h1>
	<div class="quiz_wrapper container">
           <div class="question" id="questionBox">
           	
           </div>
           <div class="options">
           	  <ul id="ul">
           	  	  <li id="op1" onclick="button(this)"></li>
           	  	  <li id="op2" onclick="button(this)"></li>
           	  	  <li id="op3" onclick="button(this)"></li>
           	  	  <li id="op4" onclick="button(this)"></li>
           	  </ul>
		   </div>
		   <div class="container">
			   <div class="row score">
				   	<div class="col-md-6">
						<div class="next">
							<button type="button" onclick="next()" id="button">Siguiente</button>
						</div>
				   	</div>
				   	<div class="col-md-6">
						<div class="score-card">
							Aciertos : <span id="scoreCard">0</span>
						</div>
				   </div>
			   </div>
		   </div>
	</div>
<script src="assets/js/quizz.js"></script>
</body>
</html>