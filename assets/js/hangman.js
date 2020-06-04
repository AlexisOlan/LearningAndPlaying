var programming_languages = [
	"wove",
	"awake",
	"became",
	"began",
	"went",
	"built",
	"caught",
	"came",
	"cut",
	"ate",
	"felt",
	"forgot",
	"gave",
  "made",
  "met",
  "paid",
  "ran",
  "shone",
  "sang",
  "slept",
  "smelt",
  "spoke",
  "stood",
  "swamn"
]

let answer = '';
let maxWrong = 6;
let mistakes = 0;
let guessed = [];
let wordStatus = null;

function randomWord() {
  answer = programming_languages[Math.floor(Math.random() * programming_languages.length)];
}

function generateButtons() {
  let buttonsHTML = 'abcdefghijklmnopqrstuvwxyz'.split('').map(letter =>
    `
      <button
        class="btn btn-lg btn-primary m-2"
        id='` + letter + `' onClick="handleGuess('` + letter + `')"> ` + letter + ` </button>
    `).join('');

  document.getElementById('keyboard').innerHTML = buttonsHTML;
}

function handleGuess(chosenLetter) {
  guessed.indexOf(chosenLetter) === -1 ? guessed.push(chosenLetter) : null;
  document.getElementById(chosenLetter).setAttribute('disabled', true);

  if (answer.indexOf(chosenLetter) >= 0) {
    guessedWord();
    checkIfGameWon();
  } else if (answer.indexOf(chosenLetter) === -1) {
    mistakes++;
    updateMistakes();
    checkIfGameLost();
    updateHangmanPicture();
  }
}

function updateHangmanPicture() {
  document.getElementById('hangmanPic').src = 'assets/images/hangman/' + mistakes + '.png';
}

function checkIfGameWon() {
  if (wordStatus === answer) {
    document.getElementById('keyboard').innerHTML = '';
    document.getElementById('wordSpotlight').innerHTML =
    `<div class="alert alert-success"><h4 class="alert-heading">Ganaste</h4> 
    La palabra era <strong>` + answer + `</strong></div>`;
  }
}

function checkIfGameLost() {
  if (mistakes === maxWrong) {
    document.getElementById('keyboard').innerHTML = '';
    document.getElementById('wordSpotlight').innerHTML = 
    `<div class="alert alert-danger"><h4 class="alert-heading">Perdiste</h4>
    La palabra era: <strong>` + answer + `</strong></div>`;
  }
}

function guessedWord() {
  wordStatus = answer.split('').map(letter => (guessed.indexOf(letter) >= 0 ? letter : " _ ")).join('');

  document.getElementById('wordSpotlight').innerHTML = wordStatus;
}

function updateMistakes() {
  document.getElementById('mistakes').innerHTML = mistakes;
}

function reset() {
  mistakes = 0;
  guessed = [];
  document.getElementById('hangmanPic').src = 'assets/images/hangman/0.png';

  randomWord();
  guessedWord();
  updateMistakes();
  generateButtons();
}

document.getElementById('maxWrong').innerHTML = maxWrong;

randomWord();
generateButtons();
guessedWord();