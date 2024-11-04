<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/login.css">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>
<body>
    <div id="navbar-placeholder"></div>
    <div class="login-container">
        <div class="card">
            <h1>Login</h1>
            <p>Enter your email and password to access your account</p>
            <form id="loginForm" class="login-form" action="login_action.php" method="POST">
            <label for="username"><b>Username/Email</b></label>
            <input type="text" placeholder="Enter Username/Email" id="username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" id="password" name="password" required>

                <button type="submit" name="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    Login
                </button>
            </form>
            <p class="register-link">
                Don't have an account? <a href="sign_up_page.php">Register here</a>
            </p>
        </div>
    </div>
    <script>
        // Load the navbar
        fetch('navbar.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });
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