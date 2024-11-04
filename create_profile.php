<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create_profile</title>
    <link rel="stylesheet" href="styles/create_profile.css">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="scripts.js" defer></script>
    <script src="functions/create_profile.js"></script>
</head>
<body>
    <div id="navbar-placeholder"></div>
    <script>
        fetch('navbar.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });
    </script>
    <div class="container">
        <button class="create-profile-btn">Create Profile</button>
        <div class="profile-header">
            <img src="/placeholder.svg?height=200&width=200" alt="Tattoo Artist" class="profile-picture" id="profile-pic">
            <input type="file" id="pic-upload" style="display: none;" accept="image/*">
            <div class="profile-info">
                <h1 class="name editable" contenteditable="true">Name</h1>
                <p class="job-title editable" contenteditable="true">Style</p>
                <p><strong>Studio:</strong> <span class="editable" contenteditable="true">blank</span></p>
                <p><strong>Location:</strong> <span class="editable" contenteditable="true">blank</span></p>
                <p><strong>Experience:</strong> <span class="editable" contenteditable="true">blank</span></p>
                <div id="social-links"></div>
            </div>
        </div>
        <div class="profile-content">
            <div class="section">
                <h2>About Me</h2>
                <p class="editable" contenteditable="true"></p>
            </div>
            <div class="section gallery">
                <h2>Gallery</h2>
                <button id="upload-tattoo">Upload Tattoo</button>
                <div class="gallery-images" id="gallery-images"></div>
                <input type="file" id="gallery-upload" style="display: none;" accept="image/*" multiple>
            </div>
        </div>
    </div>

    <div class="social-link-input" id="social-link-input">
        <input type="text" id="social-link-url" placeholder="Enter URL">
        <button id="save-social-link">Save</button>
        <button id="cancel-social-link">Cancel</button>
    </div>

    <script src="functions/create_profile.js"></script>
</body>
<div id="footer-placeholder"></div>
<script>
    fetch('footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-placeholder').innerHTML = data;
        });
</script>
</html>
