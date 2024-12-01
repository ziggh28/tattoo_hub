<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tattoo Hub</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="scripts.js" defer></script>
    <script src="functions/sign_in.js" defer></script>
    <script src="functions/logout.js" defer></script>
</head>
<body>
    <div id="navbar-placeholder"></div>
    <script>
        fetch('navbar.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });
    </script>
    <div class="home-page">
        <header class="header">
            <h1>Find the best tattoo artists in New England</h1>
                <iframe width="1000" height="400" frameborder="0" src="https://widgets.scribblemaps.com/sm/?d&dv&z&l&gc&af&mc&svc&ssvce&lat=42.292286486&lng=-71.240464759&vz=9&type=road&ti&s&width=1000&height=400&id=TattooHub" style="border:0; max-width: 100%;" allowfullscreen allow="geolocation" loading="lazy"></iframe>
        </header>
        <section class="featured-artists">
            <h2>Featured Artists</h2>
            <div class="artist-list">
                <div class="artist-card">
                    <img src="Mike B\resizedportpic.jpg" alt="Artist Two" class="artist-image">
                    <h3><a href="Mike-Boissoneault-Profile.php">Mike Boissoneault</a></h3>
                    <p>Asian</p>
                </div>
                <div class="artist-card">
                    <img src="Bill Le\Profile.jpg" alt="Artist Two" class="artist-image">
                    <h3><a href="Bill-Le-Profile.php">Bill Le</a></h3>
                    <p>Realism, Asian, Anime</p>
                </div>
                <div class="artist-card">
                    <img src="Damon Butler/Demon Profile.jpg" alt="Artist Three" class="artist-image">
                    <h3><a href="Damon_Butler.php">Damon Butler</a></h3>
                    <p>FineLine, Black and Grey, Neo-Traditional, Traditional</p>
                </div>
                <div class="artist-card">
                    <img src="Jimmy Johnson/JimmyJohnson_profile.png" alt="Artist Three" class="artist-image">
                    <h3><a href="Jimmy_Johnson.php">Jimmy Johnson</a></h3>
                    <p>Portrait, Fine-Line, Black and Grey</p>
                </div>
                <div class="artist-card">
                    <img src="Vinny Nguyen/vinny-nguyen Profile.jpg" alt="Artist Three" class="artist-image">
                    <h3><a href="VinnyNguyen.php">Vinny Nguyen</a></h3>
                    <p>Asian, Realism, BioMechanical</p>
                </div>
            </div>
        </section>
        <div id="galleryContainer" class="gallery-container"></div>
    </div>
    <div id="footer-placeholder"></div>
    <script>
        fetch('footer.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('footer-placeholder').innerHTML = data;
            });
    </script>
</body>
</html>

