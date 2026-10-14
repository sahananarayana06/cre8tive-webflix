/* ==========================================
   MOBILE MENU
========================================== */

function toggleMenu() {

    const menu =
        document.querySelector(".nav-links");

    menu.classList.toggle("show");

}


/* ==========================================
   CLOSE MOBILE MENU
========================================== */

document.addEventListener(
    "DOMContentLoaded",
    function () {

        const links =
            document.querySelectorAll(
                ".nav-links a"
            );

        links.forEach(function (link) {

            link.addEventListener(
                "click",
                function () {

                    const menu =
                        document.querySelector(
                            ".nav-links"
                        );

                    menu.classList.remove(
                        "show"
                    );

                }
            );

        });

    }
);


/* ==========================================
   SCROLL REVEAL
========================================== */

const observer =
    new IntersectionObserver(

        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add(
                        "visible"
                    );

                }

            });

        },

        {
            threshold: 0.15
        }

    );


document
    .querySelectorAll(
        ".service-card, .portfolio-card, .review-card"
    )
    .forEach(function (element) {

        element.classList.add(
            "reveal"
        );

        observer.observe(element);

    });


/* ==========================================
   MOUSE PARALLAX
========================================== */

document.addEventListener(
    "mousemove",
    function (event) {

        const x =
            (event.clientX /
                window.innerWidth - .5);

        const y =
            (event.clientY /
                window.innerHeight - .5);


        const visual =
            document.querySelector(
                ".hero-visual"
            );


        if (visual) {

            visual.style.transform =
                `translate(${x * 15}px,
                           ${y * 15}px)`;

        }

    }
);

/* =========================
   STATS COUNTER ANIMATION
========================== */

const statsSection = document.querySelector("#stats");
const counters = document.querySelectorAll(".counter");

let counterStarted = false;

function startCounters() {

    if (counterStarted) return;

    counterStarted = true;

    const duration = 2000; // All counters finish in 2 seconds
    const startTime = performance.now();

    function updateCounters(currentTime) {

        const elapsed = currentTime - startTime;

        // Progress from 0 to 1
        const progress = Math.min(elapsed / duration, 1);

        // Smooth animation
        const easedProgress = 1 - Math.pow(1 - progress, 3);

        counters.forEach(counter => {

            const target = Number(counter.dataset.target);
            const suffix = counter.dataset.suffix;

            const currentValue = Math.floor(
                target * easedProgress
            );

            counter.textContent = currentValue + suffix;
        });

        // Continue until all counters reach their target
        if (progress < 1) {

            requestAnimationFrame(updateCounters);

        } else {

            // Make sure final values are exact
            counters.forEach(counter => {

                counter.textContent =
                    counter.dataset.target +
                    counter.dataset.suffix;

            });
        }
    }

    requestAnimationFrame(updateCounters);
}


/* Start when at least 50% of stats section is visible */

const statsObserver = new IntersectionObserver(
    (entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {
                startCounters();
                statsObserver.unobserve(statsSection);
            }

        });

    },
    {
        threshold: 0.5
    }
);

if (statsSection) {
    statsObserver.observe(statsSection);
}
