<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Lee Profile</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="scripts.js" defer></script>
    <script type="text/javascript">
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
(function(){
  emailjs.init({
    publicKey: "HE1JjwRQAsDoZudBU",
  });
})();
</script>
<script src="scripts.js"></script>
</head>
<body>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script> src="script.js"</script>
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
            <h1>Bill Lee</h1>
        </header>
        <div class="content">
            <section class="artist-gallery">
                <h2>Gallery</h2>
                <div class="artist-work">
                    <img src="Bill Le/billy-product-1-700x899.jpg" alt="Bill Le's tattoo work 1">
                    <img src="Bill Le/billy-product-2-700x899.jpg" alt="Bill Le's tattoo work 2">
                    <img src="Bill Le/billy-product-6.jpg" alt="Bill Le's tattoo work 3">
                    <img src="Bill Le/billy-product-7.jpg" alt="Bill Le's tattoo work 4">
                    <img src="Bill Le/billy-product-8.jpg" alt="Bill Le's tattoo work 5">
                    <img src="Bill Le/billy-product-9.jpg" alt="Bill Le's tattoo work 6">
                    <img src="Bill Le/billy-product-10.jpg" alt="Bill Le's tattoo work 7">
                    <img src="Bill Le/billy-product-11.jpg" alt="Bill Le's tattoo work 8">
                    <img src="Bill Le/billy-product-3.jpg" alt="Bill Le's tattoo work 9">
                    <!-- Add more artworks as needed -->
                </div>
            </section>
            <section class="artist-info">
                <h2>Contact Information</h2>
                <p><a href="https://www.holisticink.com/holisticink-artists/bill-le/" target="_blank">Shop: Holistic Ink</a></p>
                <p><a class= "social-icon" href="https://www.instagram.com/holistic_ink/" target="_blank">
                    <ion-icon name="logo-instagram"></ion-icon></p></a>
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2950.631060965169!2d-71.06119622441675!3d42.30773713840635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37baef868dd91%3A0x4cb2ace5f4ca2789!2s1261%20Dorchester%20Ave%2C%20Boston%2C%20MA%2002125!5e0!3m2!1sen!2sus!4v1728339459928!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <form>
                    <form>
                        <section id="contact" class="container">
                            <div style="text-align:center">
                              <h2>Make an Appointment</h2>
                              <p>Make an appointment with this artist or ask any questions</p>
                            </div>
                              <div class="column">
                                <form action="/action_page.php">
                                <div class="form-group">
                                  <label for="name">Your Name</label>
                                  <input type="text" id="name" name="name" placeholder="Your name.." required>
                                </div>
                                <div class="form-group">
                                  <label for="email">Your email</label>
                                  <input type="text" id="email" name="email" placeholder="Your email" required>
                                </div>
                                <div class="form-group"></div>
                                  <label for="pnumber">Phone Number</label>
                                  <input type="text" id="pnumber" name="pnumber" placeholder="Your phone number" required>
                                </div>
                                <div class="form-group">
                                  <label for="subject">Booking or Question</label>
                                  <input type="text" id="subject" name="subject" placeholder="request booking/question" required>
                                </div>
                                <div class="form-group">
                                  <label for="message">Time/Date of appointment and what would you like done</label>
                                  <textarea id="message" name="message" placeholder="Time/date and Idea" style="height:170px" required></textarea>
                                </div> 
                                  <button type="submit" onclick="sendMail()">Send</button>
                        </section>
                </form>
            </section>
        </div>
        <section class="artist-reviews">
            <h2>Reviews</h2>
            <div class="review">
                <h3>John Doe</h3>
                <p>Amazing artist! Loved the work. Highly recommended!</p>
                <span>⭐⭐⭐⭐⭐</span>
            </div>
            <div class="review">
                <h3>Jane Smith</h3>
                <p>Very professional and talented. Will come back for more tattoos!</p>
                <span>⭐⭐⭐⭐⭐</span>
            </div>
            <!-- Add more reviews as needed -->
        </section>
    </div>
</body>
</html>