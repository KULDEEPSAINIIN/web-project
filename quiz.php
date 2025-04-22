<?php
session_start();
if (!isset($_SESSION["user_id"])) {
echo "<script>alert('Please login first!');
window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html><html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mental Health Assessment Quiz</title>
<link rel="stylesheet" href="style.css">
<style>
body {
font-family: Arial, sans-serif;
text-align: center;
background-color: #f4f4f4;
margin: 0;
padding: 20px;
}
.container {
background: white;
padding: 20px;
border-radius: 10px;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
max-width: 600px;
margin: auto;
}
h2{
color:#0077b6;
}
button {
/*background-color: #007BFF;*/
background-color: #0077b6;
color: white;
border: none;
padding: 10px 20px;
border-radius: 5px;
cursor: pointer;
margin-top: 10px;
}
button:hover {
background-color: #0056b3;
}
#questionsContainer {
text-align: left;
margin-top: 20px;
}
</style>
</head>
<body>
<div class="container">
<h2>Mental Health Assessment Quiz</h2>
<button id="startQuiz">Start Quiz</button>
<form id="quizForm" style="display: none;">
<div id="questionsContainer"></div>
<button type="submit">Submit</button>
</form>
<div id="result" style="display: none;"></div>
<button id="restartQuiz" style="display: none;">Restart Quiz</button>
</div>
<script>
const questions = [
{ q: "How often do you feel overwhelmed by stress?", options: ["Never",
"Sometimes", "Often", "Always"] },
{ q: "Do you have trouble sleeping due to worry or stress?", options: ["Never",
"Sometimes", "Often", "Always"] },
{ q: "How frequently do you feel anxious or nervous?", options: ["Never",
"Sometimes", "Often", "Always"] },
{ q: "Do you find it hard to concentrate on daily tasks?", options: ["Never",
"Sometimes", "Often", "Always"] },
{ q: "How often do you experience mood swings?", options: ["Never",
"Sometimes", "Often", "Always"] },
{ q: "Do you avoid social interactions due to anxiety or sadness?", options:
["Never", "Sometimes", "Often", "Always"] },
{ q: "Do you feel tired or drained without a clear reason?", options: ["Never",
"Sometimes", "Often", "Always"] },
{ q: "How often do you engage in activities that make you happy?", options:
["Never", "Sometimes", "Often", "Always"] },
{ q: "Do you feel hopeful about the future?", options: ["Never", "Sometimes",
"Often", "Always"] },
{ q: "Do you feel like you have someone to talk to when you're feeling down?",
options: ["Never", "Sometimes", "Often", "Always"] }
];document.getElementById("startQuiz").addEventListener("click", function() {
document.getElementById("startQuiz").style.display = "none";
document.getElementById("quizForm").style.display = "block";
loadQuestions();
});
function loadQuestions() {
const container = document.getElementById("questionsContainer");
container.innerHTML = "";
questions.forEach((item, index) => {
let questionBlock = `<p>${index + 1}. ${item.q}</p>`;
item.options.forEach(option => {
questionBlock += `<input type="radio" name="q${index}" value="${option}"
required> ${option}<br>`;
});
container.innerHTML += questionBlock;
});
}
document.getElementById("quizForm").addEventListener("submit", function(event) {
event.preventDefault();
document.getElementById("quizForm").style.display = "none";
document.getElementById("result").style.display = "block";
document.getElementById("result").innerHTML = "Thank you for completing the quiz! Based on your answers, we recommend staying mindful and taking care of your mental health.";
document.getElementById("restartQuiz").style.display = "block";
});
document.getElementById("restartQuiz").addEventListener("click", function() {
document.getElementById("result").style.display = "none";
document.getElementById("restartQuiz").style.display = "none";
document.getElementById("startQuiz").style.display = "block";
});
</script>
</body>
</html>
