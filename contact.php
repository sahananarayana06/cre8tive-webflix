<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Contact | Cre8tive Webflix</title>
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
    border-top: 1px solid rgba(139, 46, 255, 0.15);
    color: #666a7a;
    font-size: 14px;
}

/* =========================
   PHONE INPUT
========================= */

input[name="phone"] {
    letter-spacing: 1px;
}

/* Remove number input arrows if browser adds them */
input[name="phone"]::-webkit-inner-spin-button,
input[name="phone"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
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

<li>
<a href="index.php">Home</a>
</li>

<li>
<a href="about.php">About</a>
</li>

<li>
<a href="services.php">Services</a>
</li>

<li>
<a href="https://c8w-portfolio.online/" target="_blank">
Portfolio
</a>
</li>

<li>
<a href="contact.php" class="active">
Contact
</a>
</li>

<li>
<a href="feedback.php">
Feedback
</a>
</li>

</ul>

</nav>

</header>


<!-- =========================
     PAGE HERO
========================= -->

<section class="page-hero">

<p>LET'S WORK TOGETHER</p>

<h1>
Start a <span>Project</span>
</h1>

<p>
Tell us about your website idea.
</p>

</section>


<!-- =========================
     CONTACT SECTION
========================= -->

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
cre8tivewebflix@gmail.com
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
Mangalore, Karnataka, India
</p>

</div>

</div>


<!-- =========================
     CONTACT FORM
========================= -->

<div class="form-box">

<form
    action="backend/contact_submit.php"
    method="POST"
    id="contactForm"
>

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

    <label>Phone *</label>

    <input
        type="tel"
        name="phone"
        placeholder="Enter your phone number"
        inputmode="numeric"
        pattern="[0-9]{10}"
        maxlength="10"
        minlength="10"
        required
    >

    <label>Project Type *</label>

    <select name="project_type" required>

        <option value="">Select project type</option>

        <option value="Web Design">
            Web Design
        </option>

        <option value="Web Development">
            Web Development
        </option>

        <option value="Business Website">
            Business Website
        </option>

        <option value="Portfolio Website">
            Portfolio Website
        </option>

        <option value="Landing Page">
            Landing Page
        </option>

        <option value="Website Maintenance">
            Website Maintenance
        </option>

    </select>

    <label>Project Details *</label>

    <textarea
        name="message"
        placeholder="Tell us about your project..."
        required
    ></textarea>

    <button
        type="submit"
        class="btn"
    >
        SEND PROJECT REQUEST →
    </button>

</form>
</div>

</section>


<!-- =========================
     FOOTER
========================= -->

<footer>

<div class="footer-bottom">

© 2026 Cre8tive Webflix. All Rights Reserved.

</div>

</footer>


<script src="js/script.js"></script>


<!-- =========================
     PHONE NUMBER VALIDATION
========================= -->

<script>

const phoneInput = document.querySelector('input[name="phone"]');

phoneInput.addEventListener("input", function () {

    // Remove anything that is not a number
    this.value = this.value.replace(/[^0-9]/g, '');

    // Maximum 10 digits
    if (this.value.length > 10) {
        this.value = this.value.slice(0, 10);
    }

});

</script>

</body>

</html>
