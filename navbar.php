<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
        <div class="logo">
            <a href="index.php">IXIECODE</a>
        </div>
        <ul class="menu">
            <li><a href="index.php" <?php if ($activePage == 'home') echo 'class="active"'; ?>>HOME</a></li>
            <li><a href="aboutme.php" <?php if ($activePage == 'about') echo 'class="active"'; ?>>ABOUT ME</a></li>
            <li><a href="projects.php" <?php if ($activePage == 'projects') echo 'class="active"'; ?>>PROJECTS</a></li>
            <li><a href="contact.php" <?php if ($activePage == 'contact') echo 'class="active"'; ?>>CONTACT</a></li>
        </ul>
    </nav>  
    <script>
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

    </script>  
</body>
</html>
