<?php
session_start();
if (!isset($_SESSION["user_id"])) {
echo "<script>alert('Please login first!');
window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Responsive Card Design HTML and CSS | CodingNepal</title>
<!-- Font Awesome Icons -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<style>
    @import
url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
header {
position: fixed;
top: 0;
left: 0;
z-index: 5;
width: 100%;
display: flex;
justify-content: center;
background: #333;
}
.navbar {
display: flex;
padding: 0 10px;
max-width: 1200px;
width: 100%;
align-items: center;
justify-content: space-between;
}
.navbar input#menu-toggler {
display: none;
}
.navbar #hamburger-btn {
cursor: pointer;
display: none;
}
.navbar .all-links {
display: flex;
align-items: center;
}
.navbar .all-links li {
position: relative;
list-style: none;
}
.navbar .logo a {
display: flex;
align-items: center;
margin-left: 0;
}
header a {
margin-left: 40px;
text-decoration: none;
color: #fff;
height: 100%;
padding: 20px 0;
display: inline-block;
}
header a:hover {
color: #ddd;
}
@media screen and (max-width: 860px) {
.navbar .all-links {
position: fixed;
left: -100%;
width: 300px;
display: block;
height: 100vh;
top: 75px;
background: #333;
transition: left 0.3s ease;
}
.navbar #menu-toggler:checked~.all-links {
left: 0;
}
.navbar .all-links li {
font-size: 18px;
}
.navbar #hamburger-btn {
display: block;
}
}
</style>
</style>

</head>
<body>
    <div class="card-list">
    <header>
      <nav class="navbar">
        <h2 class="logo"><a href="#">MindCare</a></h2>
        <input type="checkbox" id="menu-toggler">
        <label for="menu-toggler" id="hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z"/>
          </svg>
        </label>
        <ul class="all-links">
          <li><a href="home.php">Home</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="home.php">Contact Us</a></li>
          <li><a href="index.php">Login</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </header>
    </div>
    <section>
<div class="card-list">
<a href="quiz.php" class="card-item">
<img src="https://media.istockphoto.com/id/1138209096/photo/artificial-intelligence-processing-neurological-data-brain-cloud.jpg?s=612x612&w=0&k=20&c=eD6HT4VNQFsO4S56nwYrfGCWZhd2fr95qAzmjvQiOMU=" alt="Card Image">
<span class="Assessment">Take an Assessment</span>
<h2><b>Scientific Behavioural Assessment </b><br></h2>
<h3> Self-assessment tests on different mental health condition to help you now yourself
better.</h3>
<div class="arrow">
<i class="fas fa-arrow-right card-icon"></i>
</div>
</a>
<a href="#" class="card-item">
<img src="https://www.shutterstock.com/image-photo/young-healthy-indian-woman-wear-260nw-1840617391.jpg" alt="Card Image">
<span class="Meditation">Meditation Classes</span>
<h2><b>Online Meditation Workshop</b><br></h2>
<h3>In this workshop, we will give you a versatile tool that will help you improve many
aspects of your life. The best part is that the key to this tool is inside you. Participation is
free.</h3>
<div class="arrow">
<i class="fas fa-arrow-right card-icon"></i>
</div>
</a>
<a href="quiz2.php" class="card-item">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9Ij7076iojsM-dRXl5ttN5GNjutUVXTUoNQ&s" alt="Card Image">
<span class="Quiz">Start a Quiz</span>
<h2><b>Free Personality Test</b><br></h2>
<h3>*Be yourself and answer honestly to find out your personality type.<br>
*Learn how your personality type influences many areas of your life.<br>
*Grow into the person you want to be with your optional Premium Suite.</h3>
<div class="arrow">
<i class="fas fa-arrow-right card-icon"></i>
</div>
</a>
<a href="#" class="card-item">
<img src="https://www.drramakantpsychologist.com/wp-content/uploads/2018/10/online-counseling.jpg" alt="Card Image">
<span class="counselling">Book Counselling</span>
<h2><b>Online Psychology Counselling & Therapy</b><br></h2>
<h3>Connect at the best online counselling platform in India and receive comfortable
online counselling.</h3>
<div class="arrow">
<i class="fas fa-arrow-right card-icon"></i>
</div>
</a>
<a href="#" class="card-item">
<img src="https://hips.hearstapps.com/hmg-prod/images/woman-exercising-at-home-in-front-of-her-laptop-royalty-free-image-1626810504.jpg" alt="Card Image">
<span class="Yoga">Yoga</span>
<h2><b>Online Yoga Classes, Live & Interactive</b><br></h2>
<h3>Yoga is good for the mind and body. Regular practice of yoga helps people to improve
their strength, balance and stamina.</h3>
<div class="arrow">
<i class="fas fa-arrow-right card-icon"></i>
</div>
</a>
</div>
</section>
</body>
</html>
