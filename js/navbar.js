const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.menu');
    const navLinks = document.querySelectorAll('.menu li');

    burger.addEventListener('click', () => {
        // Toggle nav-active class on the nav element
        nav.classList.toggle('nav-active');

        // Toggle the visibility and animation of navLinks using the forEach loop
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
            }
        });

        // Toggle the toggle class on the burger element
        burger.classList.toggle('toggle');
    });
};

navSlide();
