<?php

include "backend/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cre8tive Webflix | We Create We Design We Develop</title>

<link rel="stylesheet" href="css/style.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
>

<!-- Footer & Hero Layout Styling -->
<style>

    /* =========================
       HERO TITLE
    ========================== */

    .hero-title-layout {
        display: flex;
        align-items: center;
        gap: 35px;
        margin: 30px 0;
    }

    .hero-we {
        font-size: clamp(100px, 14vw, 190px);
        font-weight: 900;
        line-height: 0.8;
        letter-spacing: -8px;
        background: linear-gradient(135deg, #A855F7, #2563EB);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-words {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .hero-word {
        font-size: clamp(42px, 5vw, 75px);
        font-weight: 800;
        line-height: 1;
        letter-spacing: 2px;
        color: #ffffff;
        transition: color 0.3s ease;
    }

    .hero-word:hover {
        background: linear-gradient(135deg, #A855F7, #2563EB);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        
    }

/* =========================
   FOOTER
========================= */

.footer {
    width: 100%;
}

.footer-main {
    width: 110%;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    align-items: start;
    column-gap: 60px;
    padding: 60px 8%;
    box-sizing: border-box;
    border-top: 1px solid rgba(139, 46, 255, 0.25);
}


/* Footer Columns */

.footer-column,
.footer-columns {
    min-width: 0;
}
.footer-column h3:hover,
.footer-columns h3:hover {
    color: #2563EB;
}
.footer-column strong:hover,
.footer-columns strong:hover {
   color: #8B2EFF;  /* Neon Purple */
}

.footer-column h3,
.footer-columns h3 {
    color: #ffffff;
    font-size: 20px;
    margin: 0 0 15px 0;
}


/* Contact Text */

.footer-column p,
.footer-columns p {
    color: #B8BBC8;
    margin: 8px 0;
    line-height: 1.6;
}


/* Quick Links */

.footer-column a,
.footer-columns a {
    color: #B8BBC8;
    text-decoration: none;
    display: block;
    margin: 9px 0;
    transition: 0.3s ease;
}

.footer-column a:hover,
.footer-columns a:hover {
    color: var(--cyan);
    transform: translateX(5px);
}


/* =========================
   FOLLOW US ICONS
========================= */

.social-icons {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 0;
}

.social-icons a {
    width: 42px;
    height: 42px;

    display: flex;
    align-items: center;
    justify-content: center;

    border: 1px solid rgba(139, 46, 255, 0.5);
    border-radius: 10px;

    color: #ffffff;

    margin: 0;

    transition: all 0.3s ease;
}

.social-icons a:hover {
    color: #ffffff;

    background: linear-gradient(
        135deg,
        #A855F7,
        #2563EB
    );

    border-color: transparent;

    transform: translateY(-5px);

    box-shadow:
        0 0 20px rgba(139, 46, 255, 0.5);
}

.social-icons svg {
    width: 20px;
    height: 20px;
    fill: currentColor;
}


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


/* =========================
   MOBILE
========================= */

@media (max-width: 768px) {

    .footer-main {
        grid-template-columns: 1fr;
        row-gap: 35px;
        padding: 45px 25px;
    }

}
/* =====================================================
   CLIENT EXPERIENCE
   TESTIMONIAL CAROUSEL
===================================================== */

.testimonials-section {

    width: 100%;

    box-sizing: border-box;

    padding: 110px 5% 90px;

    position: relative;

    overflow: hidden;

    background:
        radial-gradient(
            circle at 50% 20%,
            rgba(37, 99, 235, 0.08),
            transparent 38%
        );

}


/* =====================================================
   HEADING
===================================================== */

.testimonials-heading {

    width: 100%;

    max-width: 900px;

    margin:
        0 auto 65px;

    text-align: center;

}


.testimonials-label {

    margin:
        0 0 18px;

    color:
        #2563EB;

    font-size:
        13px;

    font-weight:
        700;

    letter-spacing:
        3px;

    text-transform:
        uppercase;
}


.testimonials-heading h2 {

    margin:
        0;

    color:
        #ffffff;

    font-family:
        "Orbitron",
        sans-serif;

    font-size:
        clamp(38px, 3.4vw, 64px);

    line-height:
        1.15;

}


.testimonials-heading h2 span {

    color:
        #8B2EFF;

    text-shadow:
        0 0 25px
        rgba(139, 46, 255, 0.35);
}


.testimonials-description {

    max-width:
        700px;

    margin:
        25px auto 0;

    color:
        #8fa4c4;

    font-size:
        17px;

    line-height:
        1.7;
}


/* =====================================================
   CAROUSEL
===================================================== */

.testimonial-carousel {

    width:
        100%;

    max-width:
        1450px;

    margin:
        0 auto;

    display:
        flex;

    align-items:
        center;

    gap:
        18px;
}


/* =====================================================
   TRACK WRAPPER
===================================================== */

.testimonial-track-wrapper {
    position: relative;

    width: 100%;

    overflow: hidden;
}

.testimonial-track {
    display: flex;

    align-items: stretch;

    gap: 25px;

    will-change: transform;
}

/* =====================================================
   CARD
===================================================== */

.testimonial-card {
    flex: 0 0 calc((100% - 50px) / 3);

    min-height: 300px;
    box-sizing: border-box;

    padding: 30px 28px;

    background:
        linear-gradient(
            145deg,
            rgba(11, 18, 40, 0.96),
            rgba(3, 7, 20, 0.98)
        );

    border: 1px solid rgba(255, 255, 255, 0.10);

    opacity: 0.45;

    transform: scale(0.94);

    transition:
        transform 0.6s ease,
        opacity 0.6s ease;

    border-radius: 10px;
}


/* =====================================================
   ACTIVE CENTER CARD
===================================================== */
.testimonial-card.testimonial-active {
    opacity: 1;
    transform: scale(1);
}

/* =========================================
   FIXED CENTER HIGHLIGHT
========================================= */

.testimonial-center-highlight {
    position: absolute;

    width: calc((100% - 50px) / 3);

    height: 100%;

    left: 50%;
    top: 0;

    transform: translateX(-50%);

    border: 2px solid #2563EB;

    border-radius: 10px;

    box-shadow:
        0 0 30px rgba(37, 99, 235, 0.25);

    pointer-events: none;

    z-index: 10;

    box-sizing: border-box;
}


/* =====================================================
   CARD TOP
===================================================== */

.testimonial-top {

    display:
        flex;

    justify-content:
        space-between;

    align-items:
        flex-start;

    gap:
        20px;

    margin-bottom:
        30px;

}


.testimonial-left {

    display:
        flex;

    align-items:
        flex-start;

    gap:
        13px;

}


.testimonial-icon {

    width:
        28px;

    height:
        28px;

    flex-shrink:
        0;

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    color:
        #2563EB;

    font-size:
        25px;

}


.testimonial-type {

    color:
        #8290a8;

    font-size:
        15px;

    font-weight:
        600;

}


.testimonial-category {

    margin-top:
        10px;

    color:
        #2563EB;

    font-size:
        14px;

}


/* =====================================================
   CLIENT NAME
===================================================== */

.testimonial-client {

    text-align:
        right;

}


.testimonial-client h3 {

    margin:
        0;

    color:
        #ffffff;

    font-size:
        17px;

    font-weight:
        700;

}


.testimonial-client p {

    margin:
        5px 0 0;

    color:
        #8fa4c4;

    font-size:
        14px;

}


/* =====================================================
   RATING
===================================================== */

.testimonial-rating {

    display:
        flex;

    align-items:
        center;

    gap:
        15px;

    margin-bottom:
        28px;

}


.testimonial-stars {

    color:
        #FFC400;

    font-size:
        19px;

    letter-spacing:
        2px;

    text-shadow:
        0 0 12px
        rgba(255, 196, 0, 0.35);

}


.testimonial-rating-number {

    color:
        #ffffff;

    font-size:
        16px;

    font-weight:
        600;

}


/* =====================================================
   MESSAGE
===================================================== */

.testimonial-message {

    margin:
        0;

    color:
        #c7ccd7;

    font-size:
        16px;

    line-height:
        1.9;

}


/* =====================================================
   ARROWS
===================================================== */

.testimonial-arrow {

    width:
        55px;

    height:
        55px;

    min-width:
        55px;

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    background:
        rgba(8, 12, 25, 0.95);

    border:
        1px solid
        rgba(255, 255, 255, 0.12);

    color:
        #ffffff;

    font-size:
        30px;

    cursor:
        pointer;

    transition:
        0.3s ease;

}


.testimonial-arrow:hover {

    background:
        #2563EB;

    border-color:
        #2563EB;

    transform:
        translateY(-2px);

}


/* =====================================================
   DOTS
===================================================== */

.testimonial-dots {

    display:
        flex;

    justify-content:
        center;

    align-items:
        center;

    gap:
        10px;

    margin-top:
        30px;

}


.testimonial-dot {

    width:
        10px;

    height:
        10px;

    padding:
        0;

    border:
        0;

    background:
        rgba(37, 99, 235, 0.25);

    cursor:
        pointer;

    transition:
        0.3s ease;

}


.testimonial-dot.active {

    width:
        28px;

    background:
        #2563EB;

}


/* =====================================================
   VIEW ALL
===================================================== */

.testimonial-view-all {

    margin-top:
        38px;

    text-align:
        center;

}


/* =====================================================
   EMPTY
===================================================== */

.testimonial-empty {

    max-width:
        700px;

    margin:
        0 auto;

    padding:
        55px 30px;

    text-align:
        center;

    background:
        rgba(11, 18, 40, 0.7);

    border:
        1px solid
        rgba(139, 46, 255, 0.25);

}


.testimonial-empty-icon {

    color:
        #2563EB;

    font-size:
        40px;

    margin-bottom:
        15px;

}


.testimonial-empty h3 {

    margin:
        0 0 10px;

    color:
        #ffffff;

}


.testimonial-empty p {

    margin:
        0 0 25px;

    color:
        #8fa4c4;

}


/* =====================================================
   TABLET
===================================================== */

@media (max-width: 1050px) {

    .testimonial-card {

        flex:
            0 0 calc((100% - 25px) / 2);

    }

}


/* =====================================================
   MOBILE
===================================================== */

@media (max-width: 700px) {

    .testimonials-section {

        padding:
            80px 5% 70px;

    }


    .testimonials-heading {

        margin-bottom:
            45px;

    }


    .testimonials-heading h2 {

        font-size:
            clamp(32px, 9vw, 45px);

    }


    .testimonials-description {

        font-size:
            14px;

    }


    .testimonial-carousel {

        gap:
            8px;

    }


    .testimonial-card {

        flex:
            0 0 100%;

        min-height:
            300px;

        padding:
            25px 22px;

    }


    .testimonial-arrow {

        width:
            42px;

        height:
            42px;

        min-width:
            42px;

        font-size:
            22px;

    }


    .testimonial-top {

        gap:
            10px;

    }


    .testimonial-client h3 {

        font-size:
            15px;

    }


    .testimonial-message {

        font-size:
            14px;

    }

}
.testimonial-card {

    flex: 0 0 calc((100% - 50px) / 3);

    min-height: 330px;

    box-sizing: border-box;

    padding: 30px 28px;

    background:
        linear-gradient(
            145deg,
            rgba(11, 18, 40, 0.96),
            rgba(3, 7, 20, 0.98)
        );

    border:
        1px solid
        rgba(255, 255, 255, 0.10);

    opacity: 0.45;

    transform: scale(0.94);

    transition:
        transform 1.6s ease-in-out,
        opacity 1.6s ease-in-out,
        border-color 1.6s ease-in-out,
        box-shadow 1.6s ease-in-out;
}


/* ONLY CENTER CARD */

.testimonial-card.testimonial-active {

    opacity: 1;

    transform: scale(1);

    border:
        1px solid
        rgba(37, 99, 235, 0.95);

    box-shadow:
        0 0 35px
        rgba(37, 99, 235, 0.20);
}
/* =====================================================
   TESTIMONIAL DOTS
===================================================== */

.testimonial-dots {

    display: flex;

    justify-content: center;

    align-items: center;

    gap: 10px;

    margin-top: 30px;

}


.testimonial-dot {

    width: 10px;

    height: 10px;

    padding: 0;

    border: none;

    border-radius: 0;

    background:
        rgba(37, 99, 235, 0.25);

    cursor: pointer;

    transition:
        width 0.35s ease,
        background 0.35s ease,
        transform 0.35s ease;

}


/* ACTIVE DOT */

.testimonial-dot.active {

    width: 34px;

    background:
        #2563EB;

    transform:
        scaleY(1.05);

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

<div class="background-grid"></div>


<!-- =========================
     HEADER
========================== -->

<header>

<nav class="navbar">

<a href="index.php" class="logo">
<span>CRE8TIVE</span> WEBFLIX
</a>

<button class="menu-btn" onclick="toggleMenu()">
☰
</button>

<ul class="nav-links">

<li>
<a href="index.php" class="active">Home</a>
</li>

<li>
<a href="about.php">About</a>
</li>

<li>
<a href="services.php">Services</a>
</li>

<li>
    <a href="https://c8w-portfolio.online/" target="_blank">Portfolio</a>
</li>

<li>
<a href="contact.php">Contact</a>
</li>

<li>
<a href="feedback.php">Feedback</a>
</li>

</ul>

</nav>

</header>


<!-- =========================
     MAIN
========================== -->

<main>


<!-- =========================
     HERO SECTION
========================== -->

<section class="hero">

<div class="hero-content">

<div class="hero-badge">
● DIGITAL CREATIVE STUDIO
</div>


<!-- NEW HERO HEADING -->

<div class="hero-title-layout">

    <div class="hero-we">
        WE
    </div>

    <div class="hero-words">

        <span class="hero-word">
            BUILD.
        </span>

        <span class="hero-word">
            DESIGN.
        </span>

        <span class="hero-word">
            PROMOTE.
        </span>

    </div>

</div>


<p>

We build modern, creative and professional
websites for businesses, startups,
professionals and individuals.

</p>


<div class="hero-buttons">

<a href="contact.php" class="btn">
START A PROJECT →
</a>

<a href="https://c8w-portfolio.online/" target="_blank" class="btn btn-outline">
VIEW PORTFOLIO
</a>

</div>

</div>


<!-- HERO VISUAL -->

<div class="hero-visual">

<div class="orb orb-one"></div>

<div class="orb orb-two"></div>


<div class="code-card">

<div class="code-header">

<span></span>
<span></span>
<span></span>

</div>


<pre>
<span>&lt;website&gt;</span>

  &lt;creative&gt;
      Your Idea
  &lt;/creative&gt;

  &lt;design&gt;
      Your Vision
  &lt;/design&gt;

  &lt;develop&gt;
      Your Future
  &lt;/develop&gt;

<span>&lt;/website&gt;</span>
</pre>

</div>

</div>

</section>

<!-- =========================
     STATS
========================== -->

<section class="stats" id="stats">

    <div>
        <strong class="counter" data-target="10" data-suffix="+">0+</strong>
        <span>Projects</span>
    </div>

    <div>
        <strong class="counter" data-target="5" data-suffix="+">0+</strong>
        <span>Happy Clients</span>
    </div>

    <div>
        <strong class="counter" data-target="100" data-suffix="%">0%</strong>
        <span>Creativity</span>
    </div>

    <div>
        <strong class="counter" data-target="24" data-suffix="/7">0/7</strong>
        <span>Support</span>
    </div>

</section>


<!-- =========================
     SERVICES
========================== -->

<section class="section">

<div class="section-heading">

<p>WHAT WE DO</p>

<h2>
Digital Solutions For
<span>Your Ideas</span>
</h2>

</div>


<div class="service-grid">


<div class="service-card">

<div class="service-icon">◈</div>

<h3>Web Design</h3>

<p>
Creative UI/UX designs with modern
layouts, animations and responsive
interfaces.
</p>

<a href="services.php">
EXPLORE →
</a>

</div>


<div class="service-card">

<div class="service-icon">⌘</div>

<h3>Web Development</h3>

<p>
Fast, responsive and functional
websites built using modern
technologies.
</p>

<a href="services.php">
EXPLORE →
</a>

</div>


<div class="service-card">

<div class="service-icon">⬡</div>

<h3>Business Websites</h3>

<p>
Professional websites that help
businesses establish their digital
presence.
</p>

<a href="services.php">
EXPLORE →
</a>

</div>


<div class="service-card">

<div class="service-icon">✦</div>

<h3>Portfolio Websites</h3>

<p>
Showcase your skills, projects,
achievements and professional profile.
</p>

<a href="services.php">
EXPLORE →
</a>

</div>


</div>

</section>


<!-- =========================
     CTA
========================== -->

<section class="cta">

<div>

<p>READY TO BUILD?</p>

<h2>
Your Idea.
<br>
Our <span>Creativity.</span>
</h2>

<a href="contact.php" class="btn">
LET'S TALK →
</a>

</div>

</section>
<!-- =====================================================
     CLIENT EXPERIENCE / TESTIMONIAL CAROUSEL
===================================================== -->

<section class="testimonials-section">

    <div class="testimonials-heading">

        <p class="testimonials-label">
            CLIENT EXPERIENCE
        </p>

        <h2>
           Turning <span>visions</span> into reality.
        </h2>

        <p class="testimonials-description">
            Real experiences from people who worked with
            Cre8tive Webflix.
        </p>

    </div>


    <?php
    /*
     * Get latest client feedback
     */
    $testimonial_result = $conn->query(
        "SELECT id, name, rating, message
         FROM feedback
         ORDER BY id DESC
         LIMIT 9"
    );

    $testimonials = [];

    if ($testimonial_result && $testimonial_result->num_rows > 0) {

        while ($row = $testimonial_result->fetch_assoc()) {

            $testimonials[] = $row;

        }

    }
    ?>


    <?php if (count($testimonials) > 0): ?>

        <div class="testimonial-carousel">

            


            <div class="testimonial-track-wrapper">

            <!-- FIXED CENTER BORDER -->
    <div class="testimonial-center-highlight"></div>

                <div
                    class="testimonial-track"
                    id="testimonialTrack"
                >

                    <?php foreach ($testimonials as $index => $row): ?>

                        <article
                            class="testimonial-card
                            <?= $index === 0 ? 'testimonial-active' : '' ?>"
                        >

                            <div class="testimonial-top">

                                <div class="testimonial-left">

                                    <div class="testimonial-icon">
                                        ✦
                                    </div>

                                    <div>

                                        <div class="testimonial-type">
                                            Client Experience
                                        </div>

                                        <div class="testimonial-category">
                                            Cre8tive Webflix
                                        </div>

                                    </div>

                                </div>


                                <div class="testimonial-client">

                                    <h3>
                                        <?= htmlspecialchars(
                                            $row['name']
                                        ) ?>
                                    </h3>

                                    <p>
                                        Client
                                    </p>

                                </div>

                            </div>


                            <div class="testimonial-rating">

                                <span class="testimonial-stars">
                                    <?= str_repeat(
                                        "★",
                                        max(
                                            1,
                                            min(
                                                5,
                                                (int)$row['rating']
                                            )
                                        )
                                    ) ?>

                                    <?= str_repeat(
                                        "☆",
                                        5 - max(
                                            1,
                                            min(
                                                5,
                                                (int)$row['rating']
                                            )
                                        )
                                    ) ?>
                                </span>

                                <span class="testimonial-rating-number">
                                    <?= number_format(
                                        (float)$row['rating'],
                                        1
                                    ) ?>
                                </span>

                            </div>


                            <p class="testimonial-message">
                                “<?= htmlspecialchars(
                                    $row['message']
                                ) ?>”
                            </p>

                        </article>

                    <?php endforeach; ?>

                </div>

            </div>


            

        </div>


        <!-- DOTS -->

        <div
            class="testimonial-dots"
            id="testimonialDots"
        >

            <?php foreach ($testimonials as $index => $row): ?>

                <button
                    type="button"
                    class="testimonial-dot
                    <?= $index === 0 ? 'active' : '' ?>"
                    data-index="<?= $index ?>"
                    aria-label="Go to feedback <?= $index + 1 ?>"
                ></button>

            <?php endforeach; ?>

        </div>


        <!-- VIEW ALL -->

        <div class="testimonial-view-all">

            <a
                href="feedback.php"
                class="btn btn-outline"
            >
                VIEW ALL FEEDBACK →
            </a>

        </div>


    <?php else: ?>

        <div class="testimonial-empty">

            <div class="testimonial-empty-icon">
                ✦
            </div>

            <h3>
                No Client Feedback Yet
            </h3>

            <p>
                Be the first to share your experience
                with Cre8tive Webflix.
            </p>

            <a
                href="feedback.php"
                class="btn"
            >
                SHARE YOUR FEEDBACK →
            </a>

        </div>

    <?php endif; ?>

</section>

</main>


<!-- =========================
     FOOTER
========================== -->

<footer class="footer">


<div class="footer-main">


<!-- CONTACT US -->

<div class="footer-column">

<h3>Contact Us</h3>

<p>
<strong>Email:</strong><br>
cre8tivewebflix@gmail.com
</p>

<p>
<strong>Phone:</strong><br>
+91 7892321560
</p>


<p>
<strong>Address:</strong><br>
Mangalore, Karnataka, India
</p>

</div>


<!-- QUICK LINKS -->

<div class="footer-column">

<h3>Quick Links</h3>

<a href="index.php">
Home
</a>

<a href="about.php">
About
</a>

<a href="services.php">
Services
</a>

<a href="https://c8w-portfolio.online/" target="_blank">
Portfolio
</a>

<a href="contact.php">
Contact
</a>

<a href="feedback.php">
Feedback
</a>

</div>


<!-- FOLLOW US -->

<div class="footer-columns">

<h3>Follow Us</h3>

<div class="social-icons">


<!-- EMAIL -->

<a href="mailto:cre8tivewebflix@gmail.com"
   title="Email">

<svg viewBox="0 0 24 24">

<path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/>

</svg>

</a>


<!-- LINKEDIN -->

<a href="https://www.linkedin.com/in/cre8tive-webflix-8406ba435"
   title="LinkedIn" target="_blank">

<svg viewBox="0 0 24 24">

<path d="M19 3A2 2 0 0 1 21 5V19A2 2 0 0 1 19 21H5A2 2 0 0 1 3 19V5A2 2 0 0 1 5 3H19M8 18V10.5H5.5V18H8M6.75 9.5C7.58 9.5 8.25 8.83 8.25 8C8.25 7.17 7.58 6.5 6.75 6.5C5.92 6.5 5.25 7.17 5.25 8C5.25 8.83 5.92 9.5 6.75 9.5M18.5 18V14.1C18.5 12.02 18.08 10.42 15.8 10.42C14.7 10.42 13.96 11.02 13.65 11.58H13.62V10.5H11.25V18H13.75V14.28C13.75 13.3 13.94 12.35 15.13 12.35C16.3 12.35 16.32 13.47 16.32 14.34V18H18.5Z"/>

</svg>

</a>


<!-- INSTAGRAM -->

<a href="https://www.instagram.com/cre8tivewebflix?stkn=ZjNraWVvNnk0cm9k"
   title="Instagram" target="_blank">

<svg viewBox="0 0 24 24">

<path d="M7.8 2h8.4A5.8 5.8 0 0 1 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8A5.8 5.8 0 0 1 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8A3.6 3.6 0 0 0 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6A3.6 3.6 0 0 0 16.4 4H7.6M17.25 5.5A1.25 1.25 0 1 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10m0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/>

</svg>

</a>


</div>

</div>


</div>


<!-- FOOTER BOTTOM -->

<div class="footer-bottom">

© 2026 Cre8tive Webflix. All Rights Reserved.

</div>


</footer>
<script src="js/script.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const counters = document.querySelectorAll(".counter");

    const startCounters = () => {

        counters.forEach(counter => {

            const target = parseInt(counter.getAttribute("data-target"));
            const suffix = counter.getAttribute("data-suffix") || "";

            let current = 0;

            // Reset before starting
            counter.textContent = "0" + suffix;

            const duration = 1000; // 1 seconds
            const increment = target / (duration / 20);

            const updateCounter = () => {

                current += increment;

                if (current >= target) {
                    current = target;
                    counter.textContent = Math.floor(current) + suffix;
                    return;
                }

                counter.textContent = Math.floor(current) + suffix;

                requestAnimationFrame(updateCounter);
            };

            requestAnimationFrame(updateCounter);
        });
    };


    // Start animation when Stats section becomes visible
    const statsSection = document.getElementById("stats");

    if (statsSection) {

        const observer = new IntersectionObserver((entries, observer) => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    startCounters();

                    observer.unobserve(statsSection);
                }

            });

        }, {
            threshold: 0.3
        });

        observer.observe(statsSection);
    }

});
/* =====================================================
   CLIENT EXPERIENCE
===================================================== */

document.addEventListener("DOMContentLoaded", function () {

    const track =
        document.getElementById("testimonialTrack");

    const wrapper =
        document.querySelector(
            ".testimonial-track-wrapper"
        );

    const dots =
        document.querySelectorAll(
            ".testimonial-dot"
        );


    if (!track || !wrapper) {
        return;
    }


    let cards =
        Array.from(
            track.querySelectorAll(
                ".testimonial-card"
            )
        );


    if (cards.length === 0) {
        return;
    }


    const total =
        cards.length;


    let currentIndex = 0;

    let isMoving = false;


    /* =================================================
       CLONE FIRST AND LAST
    ================================================= */

    const firstClone =
        cards[0].cloneNode(true);

    const lastClone =
        cards[total - 1].cloneNode(true);


    firstClone.classList.add(
        "testimonial-clone"
    );

    lastClone.classList.add(
        "testimonial-clone"
    );


    track.insertBefore(
        lastClone,
        track.firstChild
    );


    track.appendChild(
        firstClone
    );


    cards =
        Array.from(
            track.querySelectorAll(
                ".testimonial-card"
            )
        );


    /* =================================================
       UPDATE DOT
    ================================================= */

    function updateDots() {

        dots.forEach(
            function (dot, index) {

                dot.classList.toggle(
                    "active",
                    index === currentIndex
                );

            }
        );

    }


    /* =================================================
       REMOVE ALL HIGHLIGHTS
    ================================================= */

    function clearHighlights() {

        cards.forEach(
            function (card) {

                card.classList.remove(
                    "testimonial-active"
                );

            }
        );

    }


    /* =================================================
       HIGHLIGHT CENTER CARD
    ================================================= */

    function highlightCenter() {

        clearHighlights();


        /*
         * One cloned card exists before
         * the real cards.
         */

        const centerPosition =
            currentIndex + 1;


        if (cards[centerPosition]) {

            cards[centerPosition]
                .classList.add(
                    "testimonial-active"
                );

        }


        /*
         * Move the pagination indicator
         */

        updateDots();

    }


    /* =================================================
       MOVE CAROUSEL
    ================================================= */

    function moveCarousel(
        animate = true
    ) {

        const centerPosition =
            currentIndex + 1;


        const centerCard =
            cards[centerPosition];


        if (!centerCard) {
            return;
        }


        const cardWidth =
            centerCard.offsetWidth;


        const gap = 25;


        const centerCardPosition =
            centerPosition *
            (cardWidth + gap);


        const wrapperWidth =
            wrapper.offsetWidth;


        const centerOffset =
            (
                wrapperWidth -
                cardWidth
            ) / 2;


        const translateX =
            centerCardPosition -
            centerOffset;


        if (!animate) {

            track.style.transition =
                "none";

        } else {

            track.style.transition =
                "transform 0.6s ease-in-out";

        }


        track.style.transform =
            `translateX(-${translateX}px)`;


        /*
         * Highlight center + update dot
         */

        highlightCenter();

    }


    /* =================================================
       NEXT FEEDBACK
    ================================================= */

    function nextFeedback() {

        if (isMoving) {
            return;
        }


        isMoving = true;


        currentIndex++;


        /* ---------------------------------------------
           NORMAL MOVEMENT

           1 → 2
           2 → 3
           3 → 4
           ...
           8 → 9
        --------------------------------------------- */

        if (currentIndex < total) {

            moveCarousel(true);


            setTimeout(
                function () {

                    isMoving = false;

                },
                650
            );


            return;
        }


        /* ---------------------------------------------
           9 → CLONED 1

           Screen becomes:

           8 | 9 | 1

           9 is still the center highlighted card.
        --------------------------------------------- */

        currentIndex = total;


        moveCarousel(true);


        /*
         * Wait until the animation finishes.
         */

        setTimeout(
            function () {

                /*
                 * Silently jump from cloned 1
                 * to real 1.
                 */

                currentIndex = 0;


                moveCarousel(false);


                /*
                 * Force browser reflow.
                 */

                void track.offsetWidth;


                /*
                 * Restore animation.
                 */

                setTimeout(
                    function () {

                        track.style.transition =
                            "transform 0.6s ease-in-out";


                        isMoving = false;

                    },
                    20
                );

            },
            650
        );

    }


    /* =================================================
       INITIAL POSITION
    ================================================= */

    moveCarousel(false);


    /* =================================================
       AUTOMATIC MOVEMENT
       EVERY 1 SECOND
    ================================================= */

    setInterval(
        function () {

            nextFeedback();

        },
        1800
    );


    /* =================================================
       RESIZE
    ================================================= */

    window.addEventListener(
        "resize",
        function () {

            moveCarousel(false);

        }
    );


});
/* =========================================
   BACK TO TOP
========================================= */

const backToTop =
    document.getElementById("backToTop");


window.addEventListener("scroll", function () {

    if (window.scrollY > 300) {

        backToTop.classList.add("show");

    } else {

        backToTop.classList.remove("show");

    }

});


backToTop.addEventListener("click", function () {

    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });

});
</script>



<script src="js/script.js"></script>

</body>

</html>
