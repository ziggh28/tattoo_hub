<!DOCTYPE html>
<html lang="en">
<?php
include("connection.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tattoo Hub - Sign Up</title>
    <link rel="stylesheet" href="styles/sign_up_client.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles/sign_up_page.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <div class="sign-up-container">
        <header>
            <h1 id="message">Sign up for Tattoo Hub</h1>
        </header>
        <form action="sign_up_action.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter Username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter email" required>

            <div class="password-container">
                <label for="password">Password</label>
                <div class="password-input-container">
                    <input type="password" id="password" name="password" placeholder="Enter Password" required>
                    <i class="fas fa-eye-slash toggle-password" onclick="togglePasswordVisibility('password')"></i>
                </div>
                <div class="password-strength">
                    <div class="strength-bar">
                        <div class="strength-bar-fill" id="strength-bar-fill"></div>
                    </div>
                    <span id="strength-text" class="strength-text"></span>
                </div>
            </div>

            <div class="password-container">
                <label for="re-password">Re-enter Password</label>
                <div class="password-input-container">
                    <input type="password" id="re-password" name="re-password" placeholder="Re-enter password" required>
                    <i class="fas fa-eye-slash toggle-password" onclick="togglePasswordVisibility('re-password')"></i>
                </div>
            </div>

            <button type="submit" value="Sign Up" name="submit">Sign Up</button>

            <a id="login_link" href="login.php">Log In</a>
        </form>
    </div>
    <script src="functions/sign_up_client.js"></script>
</body>
</html>

