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
    <script src="scripts.js" defer></script>
</head>
<body>
    <header>
        <h1 id="message">Sign up for Tattoo Hub</h1>
    </header>
            <form action="sign_up_client_action.php" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter Username" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>

                <label for="re-password">Re-enter Password</label>
                <input type="password" id="re-password" name="re-password" placeholder="Re-enter password" required>

                <button type="submit" value="Sign Up" name="submit">Sign Up</button>

                    <a id="login_link" href="login.php">Log In</a>
            </form>

    <script>
        function closeModal() {
            document.getElementById('loginModal').style.display = 'none';
        }
    </script>
</body>
</html>