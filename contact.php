<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tattoo Hub</title>
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="functions/contact.js" defer></script>
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
    <div class="container">
        <div class="contact-info">
            <h2>Customer Service</h2>
            <p>Phone: 888-888-8888</p>
            <p>Email: customerservice@tattoohub.com</p>
        </div>

        <form id="contact-form" class="contact-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <select id="subject" name="subject" required>
                    <option value="">Select an issue</option>
                    <option value="Business Inquiry">Business Inquiry</option>
                    <option value="Pricing">Pricing</option>
                    <option value="Technical Support">Technical Support</option>
                    <option value="Advertisement">Advertisement</option>
                    <option value="Partnership">Partnership</option>
                    <option value="General Question">General Question</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message-text" name="message" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </form>
        <div id="message"></div>
    </div>

    <script src="/functions/commment.js"></script>
</body>
</html>
