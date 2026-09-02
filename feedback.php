<?php

include "backend/db.php";

$result = $conn->query(
    "SELECT * FROM feedback ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Feedback | Cre8tive Webflix</title>

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

<li><a href="contact.php">Contact</a></li>

<li><a href="feedback.php"
class="active">Feedback</a></li>

</ul>

</nav>

</header>


<section class="page-hero">

<p>CLIENT EXPERIENCE</p>

<h1>
Customer <span>Feedback</span>
</h1>

<p>
Your feedback helps us grow.
</p>

</section>


<section class="feedback-section">


<div class="form-box">

<h2>Share Your Experience</h2>

<p class="form-description">
Tell us about your experience with
Cre8tive Webflix.
</p>


<form action="backend/feedback_submit.php"
method="POST">

<label>Your Name *</label>

<input
type="text"
name="name"
placeholder="Enter your name"
required
>


<label>Rating *</label>

<select name="rating" required>

<option value="">
Select rating
</option>

<option value="5">
★★★★★ Excellent
</option>

<option value="4">
★★★★ Very Good
</option>

<option value="3">
★★★ Good
</option>

<option value="2">
★★ Average
</option>

<option value="1">
★ Poor
</option>

</select>


<label>Your Feedback *</label>

<textarea
name="message"
placeholder="Write your feedback..."
required
></textarea>


<button type="submit" class="btn">
SUBMIT FEEDBACK →
</button>

</form>

</div>


<div>

<h2 class="reviews-title">
What Clients Say
</h2>


<div class="reviews">

<?php

if ($result && $result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

<div class="review-card">

<h3>
<?= htmlspecialchars($row["name"]) ?>
</h3>

<div class="stars">

<?= str_repeat("★", (int)$row["rating"]) ?>

</div>

<p>
<?= htmlspecialchars($row["message"]) ?>
</p>

</div>

<?php

    }

} else {

?>

<div class="empty-review">

No reviews yet.
Be the first to share your experience!

</div>

<?php

}

?>

</div>

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