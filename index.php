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
                    <h3><a href="Mike-Boissoneault-Profile.php">Mike Boissoneault</a></h3>
                    <p>Asian</p>
                </div>
                <div class="artist-card">
                    <img src="Bill Le\Profile.jpg" alt="Artist Two" class="artist-image">
                    <h3><a href="Bill-Le-Profile.php">Bill Le</a></h3>
                    <p>Modern</p>
                </div>
                <div class="artist-card">
                    <img src="path/to/image3.jpg" alt="Artist Three" class="artist-image">
                    <h3>Artist Three</h3>
                    <p>Realism</p>
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
