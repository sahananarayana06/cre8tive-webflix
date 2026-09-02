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