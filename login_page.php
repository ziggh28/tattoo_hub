<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tattoo Hub - Log In</title>
    <link rel="stylesheet" href="styles/login.css">
    <script src="scripts.js" defer></script>
</head>
<body>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <form class="modal-content animate" action="login_action.php" method="POST">
    <br><br><br><br>
    <div class="container">
      <h1 id="message">Log into Tattoo Hub</h1>
      <label for="username"><b>Username/Email</b></label>
      <input type="text" placeholder="Enter Username/Email" id="username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="password" name="password" required>

      <button type="submit" name="submit">Login</button>
      <a id="sign_up_link" href="sign_up_page.php">Sign Up</a>
    </div>
        </form>
    </div>
</body>
</html>
