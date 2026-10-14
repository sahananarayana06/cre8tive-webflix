<?php

include "backend/db.php";

/* =========================================
   GET CLIENT FEEDBACK
========================================= */

$result = false;

if (isset($conn) && $conn instanceof mysqli) {

    $result = $conn->query(
        "SELECT id, name, rating, message, created_at
         FROM feedback
         ORDER BY id DESC"
    );

}

?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Feedback | Cre8tive Webflix</title>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
>

<link rel="stylesheet" href="css/style.css">
<style>
    /* =========================
   FOOTER BOTTOM
========================= */

.footer-bottom {
    text-align: center;

    padding: 20px;

    border-top:
        1px solid rgba(139, 46, 255, 0.15);

    color: #666a7a;

    font-size: 14px;
}
/* =========================================
   WHATSAPP FLOATING BUTTON
========================================= */

.whatsapp-float {
    position: fixed;

    right: 26px;
    bottom: 30px;

    width: 52px;
    height: 52px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #25D366;

    color: #ffffff;

    border-radius: 50%;

    text-decoration: none;

    font-size: 34px;

    box-shadow:
        0 8px 25px rgba(0, 0, 0, 0.35);

    z-index: 9999;

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
}


/* Hover */

.whatsapp-float:hover {

    transform: scale(1.12);

    box-shadow:
        0 0 25px rgba(37, 211, 102, 0.65);

    color: #ffffff;
}


/* Icon */

.whatsapp-float span {

    line-height: 1;

}


/* Mobile */

@media (max-width: 600px) {

    .whatsapp-float {

        width: 54px;
        height: 54px;

        right: 18px;
        bottom: 18px;

        font-size: 29px;

    }

}
.back-to-top {
    position: fixed;

    right: 24px;
    bottom: 95px;

    width: 54px;
    height: 54px;

    border: none;
    border-radius: 50%;

    background: rgba(121, 82, 213, 0.12);;

    color: #ffffff;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 18px;

    cursor: pointer;

    opacity: 0;
    visibility: hidden;

    transition:
        opacity 0.3s ease,
        visibility 0.3s ease,
        transform 0.3s ease;

    z-index: 9998;
}


/* SHOW AFTER SCROLL */

.back-to-top.show {
    opacity: 1;
    visibility: visible;
}


/* CYAN NEON ARROW */

.back-to-top i {
    color: #ffffff;

    text-shadow:
        0 0 15px
        rgba(0,245,255,.6);
}


/* HOVER */

.back-to-top:hover {
    transform: translateY(-3px);
}


/* MOBILE */

@media (max-width: 600px) {

    .back-to-top {
        right: 18px;
        bottom: 82px;

        width: 50px;
        height: 50px;

        font-size: 17px;
    }

}
</style>

</head>

<body>
    <!-- Back To Top -->
<button id="backToTop" class="back-to-top" aria-label="Back to top">
    <i class="fas fa-chevron-up"></i>
</button>

    <!-- WhatsApp Floating Button -->
<a
    href="https://wa.me/917892321560"
    class="whatsapp-float"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Chat with us on WhatsApp"
>
    <span><i class="fab fa-whatsapp"></i></span>
</a>

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

<li><a href="https://c8w-portfolio.online/" target="_blank">Portfolio</a></li>

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

<p class="form-description">
<h2>Tell us about your experience</h2>
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
