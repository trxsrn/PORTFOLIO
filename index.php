<?php
    $activePage = 'home';
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-...">
</head>
<body>
    <div class="front">
        <div class="greetings">
            <div class="name">
                <h5>I AM</h5>
                <h1> TRIXIE SORIANO </h1>
                <h4>FOURTH YEAR - INFORMATION TECHNOLOGY STUDENT </h4>
            </div>
            <div class="btn">
                <a href="admin/files/SORIANO_TRIXIE_Resume.pdf" target="_blank" class="button">VIEW RESUME</i></a>
            </div>
        </div>
        <div class="picture">
            <svg class="svg-background" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#000000" d="M41.7,-69.2C54.9,-64.5,67.2,-55.2,68.4,-42.9C69.7,-30.6,60,-15.3,57.1,-1.6C54.3,12,58.3,24,56.8,35.8C55.2,47.6,48,59.2,37.6,67.9C27.3,76.7,13.6,82.5,1.5,79.8C-10.5,77.2,-21.1,65.9,-28.5,55.5C-35.9,45.1,-40.2,35.4,-49.5,26.3C-58.7,17.1,-73,8.6,-77.3,-2.5C-81.7,-13.6,-76.2,-27.2,-66,-34.6C-55.7,-42,-40.6,-43.2,-28.8,-48.7C-17.1,-54.2,-8.5,-64.1,2.8,-69C14.2,-74,28.4,-73.9,41.7,-69.2Z" transform="translate(100 100)" />
            </svg>
            <img src="css/img/that.png">
        </div>
    </div>
    <!-- <div class="scroll">
        <i class="fas fa-angle-down"></i>
    </div> -->
    <div class="about">
            <div class="about-details">
                <div class="details">
                    <h3>ABOUT ME</h3>
                    <p>Motivated third-year college student from <b>Rizal Technological University </b>actively seeking opportunities for self-development and acquiring new skills. Committed to continuous learning and open to diverse experiences. Eager to collaborate with like-minded individuals and build meaningful connections. Proactive in developing practical skills such as problem-solving, communication, leadership, and adaptability.</p>
                    <div class="learn-more-btn">
                        <a href="#" class="learn-more">Learn More</a>
                    </div>
                </div>
            </div>
    </div>
    <div class="projects">
        <div class="sub-header">
            <h1> PROJECTS </h1>
        </div>
        <div class="website"> 
            <div class="website_headers">
                <h3>Website/ Web Applications</h3>
                <a href="#" class="view-all">See All</a>
            </div>
            <div class="web-preview">
                <div class="web">
                    <img src="css/img/TRR-Main.gif"/>
                    <h5>The Rizalian Review Main Website </h5>
                </div>
                <div class="web">
                    <img src="css/img/TRR-Main.gif"/>
                    <h5>The Rizalian Review Mother Admin </h5>
                </div>
                <div class="web">
                    <img src="css/img/TRR-Main.gif"/>
                    <h5>Adventours</h5>
                </div>
            </div>
            <div class="mobile_headers">
                <h3>System Applications</h3>
                <a href="#" class="view-all">See All</a>
            </div>
            <div class="web-preview">
                <div class="web">
                    <img src="css/img/TB - icon.png">
                    <h5>RDC - Research Management System Database</h5>
                </div>
            </div>
            <div class="mobile_headers">
                <h3>Mobile Applications</h3>
                <a href="#" class="view-all">See All</a>
            </div>
            <div class="app-preview">
                <div class="app">
                    <img src="css/img/STEPCOUNTER.png">
                    <h5>STEP COUNTER</h5>
                </div>
                <div class="app">
                    <img src="css/img/Foodmarket.png">
                    <h5>FOOD MARKET </h5>
                </div>
                <div class="app">
                    <img src="css/img/CHINESEZODIAC.png">
                    <h5>CHINESE ZODIAC SIGN</h5>
                </div> 
                <div class="app">
                    <img src="css/img/TB - icon.png">
                    <h5>TASTY BITES</h5>
                </div> 
                <div class="app">
                    <img src="css/img/CAFENOVA.png">
                    <h5>CAFE NOVA</h5>
                </div> 
                <div class="app">
                    <img src="css/img/ADVENTOURS.png">
                    <h5>ADVENTOURS</h5>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<?php include 'footer.php' ?>
