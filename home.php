<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camping Gear Website | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Linking Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style1.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
html {
  scroll-behavior: smooth;
}
body {
  background: #f4f8fb;
}
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
.navbar .all-links a:hover  {
  color: #47b2e4;

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
header a, footer a {
  margin-left: 40px;
  text-decoration: none;
  color: #fff;
  height: 100%;
  padding: 20px 0;
  display: inline-block;
}
header a:hover, footer a:hover {
  color: #ddd;
}
.homepage {
  height: 100vh;
  width: 100%;
  position: relative;
  background: url("https://img.freepik.com/premium-photo/group-diverse-meditation-studio-mindfulness-practise-spirituality-people-sitting_590464-245764.jpg");
  background-position: center 65%;
  background-size: cover;
  background-attachment: fixed;
}
.homepage::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.2);
}
.homepage .content {
  display: flex;
  height: 85%;
  z-index: 3;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.homepage .content h1 {
  font-size: 60px;
  font-weight: 700;
  margin-bottom: 10px;
}
.homepage .content .text {
  margin-bottom: 50px;
  color: #fff;
  font-size: 20px;
  text-align: center;
  text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
}
.content a {
  color: #000;
  display: block;
  text-transform: uppercase;
  font-size: 18px;
  margin: 0 10px;
  padding: 10px 30px;
  border-radius: 5px;
  background: #fff;
  border: 2px solid #fff;
  transition: 0.4s ease;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
  text-decoration: none;
}
.content a:hover {
  color: #fff;
  background: rgba(255,255,255,0.3);
}
section {
  display: flex;
  align-items: center;
  flex-direction: column;
  padding: 80px 0 0;
}
section h2 {
  font-size: 2rem;
}
section > p {
  text-align: center;
}
section .cards {
  display: flex;
  flex-wrap: wrap;
  max-width: 1200px;
  margin-top: 50px;
  padding: 0 10px;
  justify-content: space-between;
}
section.about {
  margin: 0 auto;
  max-width: 1200px;
}
.about .company-info {
  margin-top: 30px;
}
.about h3 {
  margin: 30px 0 10px;
}
.about .team {
  text-align: left;
  width: 100%;
}
.about .team ul {
  padding-left: 20px;
}
section .cards .card {
  background: #fff;
  padding: 40px 15px;
  list-style: none;
  border-radius: 5px;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.04);
  margin-bottom: 40px;
  width: calc(100% / 3 - 30px);
  text-align: center;
}
.portfolio .cards .card {
  padding: 0 0 20px;
}
.services .card img {
  width: 120px;
  height: 120px;
  margin-bottom: 20px;
  border-radius: 100%;
  object-fit: cover;
}
.portfolio .card img {
  width: 100%;
  padding-bottom: 10px;
  aspect-ratio: 16 / 9;
  object-fit: cover;
  border-radius: 7px;
}
.cards .card p {
  padding: 0 15px;
  margin-top: 5px;
}
.about .row {
  padding: 0 10px;
}
.contact .row {
  margin: 60px 0 90px;
  display: flex;
  max-width: 1200px;
  width: 100%;
  align-items: center;
  justify-content: space-between;
}
.contact .row .col {
  padding: 0 10px;
  width: calc(100% / 2 - 50px);
}
.contact .col p {
  margin-bottom: 10px;
}
.contact .col p i {
  color: #7a7a7a;
  margin-right: 10px;
}
.contact form input {
  height: 45px;
  margin-bottom: 20px;
  padding: 10px;
  width: 100%;
  font-size: 16px;
  outline: none;
  border: 1px solid #bfbfbf;
}
.hover:hover {
  border:1px solid black;
}
.hover{
  border-radius:10px;
}
.contact form textarea {
  padding: 10px;
  width: 100%;
  font-size: 16px;
  height: 150px;
  outline: none;
  resize: vertical;
  border: 1px solid #bfbfbf;
}
.contact form button {
  margin-top: 10px;
  padding: 10px 20px;
  font-size: 17px;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  background: black;
  transition: 0.2s ease;
  box-shadow: rgba( 0, 0, 0, 0.35) 5px 10px 15px;
}
.contact form button:hover {
  background: #0077b6;
  color: black;
  
  box-shadow: rgba( 0, 0, 0, 0.35) 5px 10px 15px;
  
}
footer {
  width: 100%;
  display: flex;
  justify-content: center;
  background: #000;
  padding: 20px 0;
}
footer div {
  padding: 0 10px;
  max-width: 1200px;
  width: 100%;
  display: flex;
  justify-content: space-between;
}
footer span {
  color: #fff;
}
footer a {
  padding: 0;
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
  section > p {
    text-align: center;
  }
  section .cards .card {
    width: calc(100% / 2 - 15px);
    margin-bottom: 30px;
  }
  .homepage .content h1 {
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 10px;
  }
  .homepage .content .text {
    font-size: 17px;
  }
  .content a {
    font-size: 17px;
    padding: 9px 20px;
  }
  .contact .row {
    flex-direction: column;
  }
  .contact .row .col {
    width: 100%;
  }
  .contact .row .col:last-child {
    margin-top: 40px;
  }
  footer a {
    height: 0;
  }
}
@media screen and (max-width: 560px) {
  section .cards .card {
    width: 100%;
    margin-bottom: 30px;
  }
}
    </style>
  </head>
  <body>
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
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="index.php">Login</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </header>
    <section class="homepage" id="home">
      <div class="content">
        <div class="text">
          <h1>Welcome to MindCare</h1>
          <p>your personal Mental and physical health assistant <br> "Transform your Thoughts, Transform your Life."  </p>
        </div>
        <a href="services.php">Our Services</a>
      </div>
    </section>
    <section class="portfolio" id="portfolio">
      <h2>Our Services</h2><br>
      <h1>Connect with Your BODY and MIND</h1><br>
      <ul class="cards">
        <li class="card">
          <img src="https://www.shutterstock.com/image-photo/young-healthy-indian-woman-wear-260nw-1840617391.jpg" alt="img">
          <h3>Online Meditation Workshop</h3>
          <p>In this workshop, we will give you a versatile tool that will help you improve many
aspects of your life. The best part is that the key to this tool is inside you. Participation is
free.</p>
        </li>
        <li class="card">
          <img src="https://t3.ftcdn.net/jpg/05/56/56/20/360_F_556562076_eMn7eqczwNst6kYMGe6O94z5nwMxfRxW.jpg" alt="img">
          <h3>Scientific Behavioural Assessment</h3>
          <p>Self-assessment tests on different mental health condition to help you now yourself
          better.</p>
        </li>
        <li class="card">
          <img src="https://www.drramakantpsychologist.com/wp-content/uploads/2018/10/online-counseling.jpg" alt="img">
          <h3>Online Psychology Counselling & Therapy</h3>
          <p>Connect at the best online counselling platform in India and receive comfortable
          online counselling.</p>
        </li>
        <li class="card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9Ij7076iojsM-dRXl5ttN5GNjutUVXTUoNQ&s"  alt="img">
          <h3>Free Personality Test</h3>
          <p>*Be yourself and answer honestly to find out your personality type.<br>
*Learn how your personality type influences many areas of your life.<br>
*Grow into the person you want to be with your optional Premium Suite.</p>
        </li>
        <li class="card">
          <img src="https://hips.hearstapps.com/hmg-prod/images/woman-exercising-at-home-in-front-of-her-laptop-royalty-free-image-1626810504.jpg" alt="img">
          <h3>Online Yoga Classes, Live & Interactive</h3>
          <p>Yoga is good for the mind and body. Regular practice of yoga helps people to improve
          their strength, balance and stamina.</p>
        </li>
        <li class="card">
          <img src="https://media.istockphoto.com/id/928855290/photo/group-of-young-people-doing-exercises-in-gym.jpg?s=612x612&w=0&k=20&c=5Mv7y1aPKTH928IQy-JCbjXC3l-IcPBCJA00fe4Ei_Q=" alt="img">
          <h3>Online Weight loss & Fitness Classes</h3>
          <p>Online Weight loss & Fitness Classes are designed to help people achieve their health and    wellness goals in a supportive and convenient online environment.</p>
        </li>
      </ul>
    </section>
    <section>
    <h2>Our Portfolio</h2><br>
    <h1>Benefits of joining us through Online.</h1><br>
    <div class="container swiper">
      <div class="wrapper">
        <div class="card-list swiper-wrapper">
          <!-- Single Card 1-->
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://media.gettyimages.com/id/1326217843/photo/shot-of-a-young-women-telemarketer-and-it-support-worker-working-at-home-stock-photo.jpg?s=612x612&w=gi&k=20&c=eNoWK-G2D-AdS2EURq7nQRQImt0NNG9ydFQ0YxTpJR4=" alt="Design Trends" />
              <div class="card-tag">Ongoing<br>Support</div>
            </div>
            <div class="card-content">
            <h3>Ongoing Support</h3><br>
            <p><b>Weekly</b> office hours, weekend lectures, <b>free</b> community events & <b>one-on-one</b> zoom with Lead Trainers & Peer Support </p>
            </div>
          </div>
          <!-- Single Card 2-->
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://c8.alamy.com/comp/RB2ET9/knowledge-skills-experience-word-cloud-hand-sphere-concept-on-white-background-RB2ET9.jpg" alt="Development" />
              <div class="card-tag">Expert<br>Knowledge</div>
            </div>
            <div class="card-content">
            <h3>Expert Knowledge</h3><br>
            <p>Recorded <b>live</b> lectures, pre-recorded lectures, <b>guided</b> meditations, asana practices, & digital anatomical models</p>
            </div>
          </div>
          <!-- Single Card 3-->
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://media.istockphoto.com/id/684837884/photo/quality-content.jpg?s=612x612&w=0&k=20&c=yhXZqxpsLRny_VXejnlWm2iqDTGkfbAEBCR0GEMYLDY=" alt="AI" />
              <div class="card-tag">Quality<br>Conetect</div>
            </div>
            <div class="card-content">
            <h3>Quality Conetent</h3><br>
            <p>Sequencing, cuing, <b>hands-on</b> adjustments & assists, <b>modifications</b>, trauma-informed techniques & inclusive language</p>
            </div>
          </div>
          <!-- Single Card 4-->
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://media.istockphoto.com/id/1290230573/photo/unhappy-young-caucasian-woman-feeling-stressed-about-lack-of-money.jpg?s=612x612&w=0&k=20&c=LvVuaCM8JhZtubBD8HOy7Zb3mdnTaGDqItjS3F0mWGY=" alt="Productivity" />
              <div class="card-tag">Stress<br>Relief</div>
            </div>
            <div class="card-content">
            <h3>Stress Relief:</h3><br>
            <p>Experience deep relaxation and release tension through mindful yoga flows designed to calm the mind and soothe the nervous system. These practices incorporate gentle, restorative poses that help alleviate physical stress, reduce anxiety, and promote emotional balance.</p>
            </div>
          </div>
          <!-- Single Card 5-->
          <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://media.istockphoto.com/id/939803700/photo/woman-practicing-yoga-revolved-head-to-knee-pose-parivrtta-janu-sirsasana.jpg?s=612x612&w=0&k=20&c=Mg2FtWPf-sapOury57cCbCLmbDvkwHmXKD2aKQRTsFk=" alt="Animation" />
              <div class="card-tag">Flexibility</div>
            </div>
            <div class="card-content">
            <h3>Flexibility and Strength:</h3><br>
            <p>Build both flexibility and strength with yoga sequences that challenge and lengthen your muscles. Poses like Warriorll, Plank, and Bridge work to tone and strengthem your core, arms, and stability.</p>
              
            </div>
          </div>
           <!-- Single Card 6-->
           <div class="card swiper-slide">
            <div class="card-image">
              <img src="https://www.shutterstock.com/shutterstock/photos/2313692517/display_1500/stock-vector-illustrations-promoting-wellness-mindfulness-and-self-care-happy-woman-feel-confident-relax-2313692517.jpg" alt="Productivity" />
              <div class="card-tag">Self Care</div>
            </div>
            <div class="card-content">
            <h3>Mindfulness and Self Care:</h3><br>
            <p>Cultivate a deeper connection to yourself through yoga's focus on mindfulness and self-care. Poses like sitting cross-legged with hands in prayer or Lotus pose encourage stillness and introspection, allowing you to center your thoughts and calm the mind.</p>
            </div>
          </div>
        </div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Navigation Buttons -->
        <div class="swiper-slide-button swiper-button-prev"></div>
        <div class="swiper-slide-button swiper-button-next"></div>
      </div>
    </div>
    <!-- Linking Swiper script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Custom Script -->
    <script src="script.js"></script>
</section>

    <section class="contact" id="contact">
      <h2>Contact Us</h2>
      <h1>Reach out to us for any inquiries or feedback.</h1>
      <div class="row">
        <div class="col information">
          <div class="contact-details">
            <p><i class="fas fa-map-marker-alt"></i> 123 Campsite Avenue, Wilderness, CA 98765</p>
            <p><i class="fas fa-envelope"></i> info@campinggearexperts.com</p>
            <p><i class="fas fa-phone"></i> (123) 456-7890</p>
            <p><i class="fas fa-clock"></i> Monday - Friday: 9:00 AM - 5:00 PM</p>
            <p><i class="fas fa-clock"></i> Saturday: 10:00 AM - 3:00 PM</p>
            <p><i class="fas fa-clock"></i> Sunday: Closed</p>
            <p><i class="fas fa-globe"></i> www.mindcare.com</p>
          </div>          
        </div>
        <div class="col form">
          <form action="contect.php" method="POST">
            <input class="hover" type="text" placeholder="Name*" name="name" required>
            <input class="hover" type="email" placeholder="Email*" name="email" required>
            <textarea class="hover" placeholder="Message*" name="message" rows="5" cols="40" required></textarea>
            <button id="submit" type="submit">Send Message</button>
          </form>
        </div>
      </div>
    </section>
    <footer>
      <div>
        <span>Copyright © 2025 All Rights Reserved</span>
        <span class="link">
            <a href="#">Home</a>
            <a href="#contact">Contact</a>
        </span>
      </div>
    </footer>
  </body>
</html>