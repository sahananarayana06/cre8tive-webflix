<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>About | Cre8tive Webflix</title>

<link rel="stylesheet" href="css/style.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
>
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

<li><a href="about.php" class="active">
About
</a></li>

<li><a href="services.php">Services</a></li>

<li><a href="https://c8w-portfolio.online/" target="_blank">Portfolio</a></li>

<li><a href="contact.php">Contact</a></li>

<li><a href="feedback.php">Feedback</a></li>

</ul>

</nav>

</header>



<section class="page-hero">

<p>WHO WE ARE</p>

<h1>
About <span>Cre8tive Webflix</span>
</h1>

<p>
We turn ideas into digital experiences.
</p>

</section>


<section class="about-section">

<div>

<p class="section-label">
ABOUT US
</p>

<h2>
Creating Websites
That <span>Stand Out.</span>
</h2>

<p>

Cre8tive Webflix is a creative web design
and development company focused on building
modern, responsive and professional websites.

</p>

<p>

We help businesses, startups, professionals
and individuals create a strong online presence.

</p>

<p>

From simple portfolio websites to complete
business websites, we transform ideas into
beautiful digital experiences.

</p>

</div>


<div class="about-panel">

<div class="about-item">

<span>01</span>

<div>

<h3>Our Mission</h3>

<p>
To create affordable, creative and
high-quality websites.
</p>

</div>

</div>


<div class="about-item">

<span>02</span>

<div>

<h3>Our Vision</h3>

<p>
To become a trusted creative web
development company.
</p>

</div>

</div>


<div class="about-item">

<span>03</span>

<div>

<h3>Our Goal</h3>

<p>
Turn every customer's idea into a
powerful digital presence.
</p>

</div>

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
