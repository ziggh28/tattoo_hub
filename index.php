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
            <input type="text" placeholder="Search by location or style" class="search-bar">
        </header>
        <section class="featured-artists">
            <h2>Featured Artists</h2>
            <div class="artist-list">
                <div class="artist-card">
                    <img src="Mike B\resizedportpic.jpg" alt="Artist Two" class="artist-image">
                    <h3>Mike Boissoneault</h3>
                    <p>Asian</p>
                    <a href="Mike-Boissoneault-Profile.php" class="view-profile-btn">View Profile</a>
                </div>
                <div class="artist-card">
                    <img src="Bill Le\Profile.jpg" alt="Artist Two" class="artist-image">
                    <h3>Bill Le</h3>
                    <p>Realism, Asian, Anime</p>
                    <a href="Bill-Le-Profile.php" class="view-profile-btn">View Profile</a>
                </div>
                <div class="artist-card">
                    <img src="Damon Butler/Demon Profile.jpg" alt="Artist Three" class="artist-image">
                    <h3>Damon Butler</h3>
                    <p>FineLine, Black and Grey, Neo-Traditional, Traditional</p>
                    <a href="Damon_Butler.php" class="view-profile-btn">View Profile</a>
                </div>
                <div class="artist-card">
                    <img src="Jimmy Johnson/JimmyJohnson_profile.png" alt="Artist Three" class="artist-image">
                    <h3>Jimmy Johnson</h3>
                    <p>Portrait, Fine-Line, Black and Grey</p>
                    <a href="Jimmy_Johnson.php" class="view-profile-btn">View Profile</a>
                </div>
                <div class="artist-card">
                    <img src="Vinny Nguyen/vinny-nguyen Profile.jpg" alt="Artist Three" class="artist-image">
                    <h3>Vinny Nguyen</h3>
                    <p>Asian, Realism, BioMechanical</p>
                    <a href="VinnyNguyen.php" class="view-profile-btn">View Profile</a>
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

