<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Contact | Cre8tive Webflix</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<header>

<nav class="navbar">

<a href="index.php" class="logo">
<span>CRE8TIVE</span> WEBFLIX
</a>

<button class="menu-btn" onclick="toggleMenu()">☰</button>

<ul class="nav-links">

<li><a href="index.php">Home</a></li>

<li><a href="about.php">About</a></li>

<li><a href="services.php">Services</a></li>

<li><a href="portfolio.php">Portfolio</a></li>

<li><a href="contact.php"
class="active">Contact</a></li>

<li><a href="feedback.php">Feedback</a></li>

</ul>

</nav>

</header>


<section class="page-hero">

<p>LET'S WORK TOGETHER</p>

<h1>
Start a <span>Project</span>
</h1>

<p>
Tell us about your website idea.
</p>

</section>


<section class="contact-section">


<div class="contact-info">

<p class="section-label">
LET'S TALK
</p>

<h2>
Have an idea?
<br>
Let's build it.
</h2>

<p>

Tell us what kind of website you need.
Our team will review your requirements.

</p>


<div class="contact-detail">

<span>EMAIL</span>

<p>
crea8twebflix@gmail.com
</p>

</div>


<div class="contact-detail">

<span>PHONE</span>

<p>
+91 7892321560
</p>

</div>


<div class="contact-detail">

<span>LOCATION</span>

<p>
Karnataka, India
</p>

</div>

</div>


<div class="form-box">

<form action="backend/contact_submit.php"
method="POST">

<label>Your Name *</label>

<input
type="text"
name="name"
placeholder="Enter your name"
required
>


<label>Email *</label>

<input
type="email"
name="email"
placeholder="Enter your email"
required
>


<label>Phone</label>

<input
type="text"
name="phone"
placeholder="Enter your phone number"
>


<label>Project Type *</label>

<select name="project_type" required>

<option value="">
Select project type
</option>

<option>Web Design</option>

<option>Web Development</option>

<option>Business Website</option>

<option>Portfolio Website</option>

<option>Landing Page</option>

<option>Website Maintenance</option>

</select>


<label>Project Details *</label>

<textarea
name="message"
placeholder="Tell us about your project..."
required
></textarea>


<button type="submit" class="btn">
SEND PROJECT REQUEST →
</button>

</form>

</div>

</section>


<footer>

<div class="footer-bottom">

© 2026 Cre8tive Webflix. All Rights Reserved.

</div>

</footer>

<script src="js/script.js"></script>

</body>

</html>
