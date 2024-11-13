<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black and Grey</title>
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
            <h1>Bio-Mechanical Artists Gallery</h1>
        </header>
        <div id="galleryContainer" class="gallery-container">
        <div class="artist-card">
                <img src="Vinny Nguyen\vinny-nguyen Profile.jpg" alt="Artist Three" class="artist-image">
                <h3><a href="VinnyNguyen.php">Vinny Nguyen</a></h3>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
