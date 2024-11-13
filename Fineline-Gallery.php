<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FineLine</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="scripts.js" defer></script>
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
            <h1>FineLine Style Artists Gallery</h1>
        </header>
        <div id="galleryContainer" class="gallery-container">
            <div class="artist-card">
                <img src="Damon Butler\Demon Profile.jpg" alt="Artist Two" class="artist-image">
                <h3><a href="Damon_Butler.php">Damon Butler</a></h3>
            </div>
            <div class="artist-card">
                <img src="Jimmy Johnson\JimmyJohnson_profile.png" alt="Artist Three" class="artist-image">
                <h3><a href="VinnyNguyen.php">Vinny Nguyen</a></h3>
            </div>
        </div>
    </div>
</body>
</html>
