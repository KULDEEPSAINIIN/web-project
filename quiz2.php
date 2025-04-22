<?php
session_start();
if (!isset($_SESSION["user_id"])) {
echo "<script>alert('Please login first!');
window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="hi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Personality Quiz - Introvert vs Extrovert</title>

<style>
body {
font-family: Arial, sans-serif;
background-color: #f4f8fb;
text-align: center;
}
.quiz-container {
width: 400px;
margin: auto;
padding: 20px;
background: white;
border-radius: 10px;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}
h2 {
color: #0077b6;
}
button {
background-color: #0077b6;
color: white;
border: none;
padding: 10px;
cursor: pointer;
margin-top: 20px;
border-radius: 5px;
}
button:hover {
background-color: #005f8a;
}
#result {
font-size: 18px;
font-weight: bold;
margin-top: 20px;
}
</style>
</head>

<body>
<div class="quiz-container">
<h2>Personality Quiz (Introvert vs Extrovert)</h2>
<button id="start-btn" onclick="startQuiz()">Start Quiz</button>
<div id="quiz" style="display: none;"></div>
<center>
<button id="submit-btn" style="display: none;"
onclick="showResult()">Submit</button>
</center>
<div id="result"></div>
</div>
<!--<script src="quiz.js"></script>-->
<script>
const questions = [{ question: "1. What do you do first at a party?", options: ["Meet new people and talk", "Sit in a quiet corner and observe"], scores: [2, 0] }, 

{ question: "2. What do you like to do in free time?)",options: ["Meeting friends", "(Learning something alone"], scores: [2, 0] },

{ question: "3. Do you prefer teamwork or working alone?)",
options: ["Teamwork", "Alone"], scores: [2, 0] }, 

{ question: "4. When given a new task, you...", options: ["Ask others for advice", "Figure it out yourself"], scores: [2, 0] }, 

{ question: "5. What kind of events do you like?", options: ["Big parties", "Small gatherings"], scores: [2, 0] }, 

{ question: "6. What kind of places do you like?", options: ["Crowded places)", "Quiet and natural places"], scores: [2, 0] }, 

{ question: "7. What kind of music do you like?", options: ["Energetic and loud)", "Soft and slow"], scores: [20] }, 

{ question: "8. How do you express your emotions?",
options: ["Express openly", "Keep them inside"],
scores: [2, 0] }, 

{ question: "9. How do you start a conversation with a new person?", options: ["Initiate yourself)", "Wait for the other person)"],scores: [2, 0] }, 

{ question: "10. What do you do if you don’t like someone?)", options: ["Still act friendly", "Maintain distance"],
scores: [2, 0] }
];

let currentQuestion = 0;
let score = 0;

function startQuiz() {
document.getElementById("start-btn").style.display = "none";
document.getElementById("quiz").style.display = "block";
document.getElementById("submit-btn").style.display = "block";
loadQuestion();
}

function loadQuestion() {
let quizDiv = document.getElementById("quiz");
quizDiv.innerHTML = "";
questions.forEach((q, index) => {
quizDiv.innerHTML += `<h3>${q.question}</h3>`;
q.options.forEach((option, i) => {
quizDiv.innerHTML += `<input type="radio" name="q${index}"
value="${q.scores[i]}"> ${option} <br>`;
});
quizDiv.innerHTML += "<br>";
});
}

function showResult() {
score = 0;
questions.forEach((q, index) => {
let selectedOption = document.querySelector(`input[name="q${index}"]:checked`);
if (selectedOption) {
score += parseInt(selectedOption.value);
}
});

let resultDiv = document.getElementById("result");
if (score >= 14) {
resultDiv.innerHTML = "🎉 आप एक Extrovert यक्ति ह! (You are an Extrovert!)";
} else if (score >= 7) {
resultDiv.innerHTML = "😌 आप Ambivert ह! (You are an Ambivert!)";
} else {
resultDiv.innerHTML = "😊 आप एक Introvert यक्ति ह! (You are an Introvert!)";
}
}
function showResult() {
score = 0;
let allAnswered = true;

questions.forEach((q, index) => {
let selectedOption = document.querySelector(`input[name="q${index}"]:checked`);
if (selectedOption) {
score += parseInt(selectedOption.value);
} else {
allAnswered = false;
}
});

if (!allAnswered) {
alert("कृपया सभी न का उर द! (Please answer all questions!)");
return;
}

let resultDiv = document.getElementById("result");
if (score >= 14) {
resultDiv.innerHTML = "🎉 आप एक Extrovert यक्ति ह! (You are an Extrovert!)";
} else if (score >= 7) {
resultDiv.innerHTML = "😌 आप Ambivert ह! (You are an Ambivert!)'एम्बि वर्ट' (Ambivert) वह यक्ति होता हैजो अतं र्मुखर्मु ी (introvert) और बहि र्मुखर्मु ी (extrovert) दोन के गणु  को दर्शि तर्शि करता है, अर्था त वह सामाजि कता और अकेलेपन दोन का आनदं लेता हैऔर अलग-अलग परि स्थि ति य मखदु को ढाल लेता है. ";
} else {
resultDiv.innerHTML = "😊 आप एक Introvert यक्ति ह! (You are an Introvert!)";
}
// Submit button को hide करना
document.getElementById("submit-btn").style.display = "none";
// Back to Quiz button जोड़ना
resultDiv.innerHTML += `<br><br><button onclick="restartQuiz()">🔄 Back to
Quiz</button>`;
}


// **क्वि ज़ को रसेट करनेका फंशन**
function restartQuiz() {
document.getElementById("quiz").innerHTML = "";
document.getElementById("result").innerHTML = "";
document.getElementById("submit-btn").style.display = "block";
loadQuestion();
}
</script>
</body>
</html>
