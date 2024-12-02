<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Tattoo Hub</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/sign_up_page.css">
</head>
<body>
    <div id="navbar-placeholder"></div>
    <div class="signup-container">
        <div class="card">
            <h1>Sign Up</h1>
            <p>Choose your account type to get started</p>
            <div class="signup-options">
                <a href="create_profile.html" class="signup-button artist">
                    <i class="fas fa-paint-brush"></i>
                    Sign up as an Artist
                </a>
                <a href="sign_up_client.php" class="signup-button client">
                    <i class="fas fa-user"></i>
                    Sign up as a Client
            </a>
            </div>
            <p class="login-link">
                Already have an account? <a href="login.php">Login here</a>
            </p>
        </div>
    </div>

    <script>
        fetch('navbar.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });

        function signUpAs(type) {
            // Implement sign-up logic here
            console.log(`Signing up as ${type}`);
            // You can redirect to a specific sign-up form or handle the sign-up process here
        }
    </script>
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