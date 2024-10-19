<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asian</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <nav class="navbar"> 
        <div class="navbar-container">
            <a href="index.php" class="navbar-logo">Tattoo Hub</a>
            <?php
                if(isset($_SESSION['name'])) {
                    echo "Hello  " . $_SESSION['name'];
                }
            ?>
            <ul class="navbar-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Customer Support</a></li>
                <li><a href="login_page.php">Login</a></li>
                <li><a href="sign_up_page.php">Sign Up</a></li>
                <li><a href="logout.php">Log Out</a>
                <li><a href="#">Profile</a></li>
            </ul>
        </div>
    </nav>
    <div class="sidebar">
        <h2>Search by Style</h2>
        <input type="text" id="styleSearch" placeholder="Search styles..." class="style-search-bar">
        <div id="recommendationContainer" class="recommendation-container"></div>
        <ul class="style-list" id="styleList">
            <li><a href="3d-tattoo-gallery.php" class="style-item">Asian</a></li>
            <li><a href="Example 2" class="style-item">Line Work</a></li>
            <li><a href="Example 3" class="style-item">Traditional</a></li>
        </ul>
    </div>
    <div class="home-page">
        <header class="header">
            <h1>Asian Style Artists Gallery</h1>
        </header>
        <div id="galleryContainer" class="gallery-container">
            <div class="artist-card">
                <img src="Mike B\resizedportpic.jpg" alt="Artist Two" class="artist-image">
                <h3><a href="Mike-Boissoneault-Profile.php">Mike Boissoneault</a></h3>
            </div>
            <div class="artist-card">
                <img src="Bill Le\Profile.jpg" alt="Artist Two" class="artist-image">
                <h3><a href="Bill-Lee-Profile.php">Bill Le</a></h3>
            </div>
            <div class="artist-card">
                <img src="path/to/image3.jpg" alt="Artist Three" class="artist-image">
                <h3>Artist Three</h3>
            </div>
        </div>
    </div>
</body>
</html>
