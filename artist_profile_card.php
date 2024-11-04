<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Profile Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 300px;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-content {
            padding: 20px;
        }
        .card-title {
            font-size: 1.5em;
            margin: 0 0 10px 0;
            color: #333;
        }
        .card-subtitle {
            font-size: 1em;
            color: #666;
            margin: 0 0 15px 0;
        }
        .card-text {
            font-size: 0.9em;
            color: #777;
            margin: 0 0 15px 0;
        }
        .card-link {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
    <a href="3d-tattoo-gallery.html" class="card-link" id="profileCard">
        <div class="card">
            <img src="/placeholder.svg?height=200&width=300" alt="Artist Profile" class="card-image" id="profileImage">
            <div class="card-content">
                <h2 class="card-title" id="profileName">Name</h2>
                <p class="card-subtitle" id="profileTitle">Professional Tattoo Artist</p>
                <p class="card-text" id="profileBio">Loading bio...</p>
            </div>
        </div>
    </a>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simulating profile data retrieval
            const profile = {
                name: "Name",
                title: "Professional Tattoo Artist",
                bio: "Welcome to my profile! I'm a passionate tattoo artist dedicated to creating unique and meaningful designs for my clients.",
                image: "/placeholder.svg?height=200&width=300"
            };

            // Function to load profile data from localStorage
            function loadProfileData() {
                const savedName = localStorage.getItem('profileName');
                const savedTitle = localStorage.getItem('profileTitle');
                const savedBio = localStorage.getItem('profileBio');
                const savedImage = localStorage.getItem('profileImage');

                if (savedName) profile.name = savedName;
                if (savedTitle) profile.title = savedTitle;
                if (savedBio) profile.bio = savedBio;
                if (savedImage) profile.image = savedImage;
            }

            // Load profile data
            loadProfileData();

            // Update card with profile data
            document.getElementById('profileName').textContent = profile.name;
            document.getElementById('profileTitle').textContent = profile.title;
            document.getElementById('profileBio').textContent = profile.bio;
            document.getElementById('profileImage').src = profile.image;

            // You might want to update the href of the card link if you have a dynamic URL for each artist
            // document.getElementById('profileCard').href = `artist-profile.html?id=${artistId}`;
        });
    </script>
</body>
</html>