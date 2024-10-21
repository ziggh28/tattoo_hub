<?php 
    session_start();
    date_default_timezone_set('America/New_York');
    include 'comments.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mike Boissoneault Profile</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="scripts.js" defer></script>
    <script type="text/javascript"
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
            <h1>Mike Boissoneault</h1>
        </header>
        <div class="content">
            <section class="artist-gallery">
                <h2>Gallery</h2>
                <div class="artist-work">
                    <img src="Mike B\Screen+Shot+2019-03-07+at+1.14.46+PM.png">
                    <img src="Mike B\Screen+Shot+2019-03-07+at+1.15.37+PM.png">
                    <img src="Mike B\Screen+Shot+2019-03-07+at+1.19.49+PM.png">
                    <img src="Mike B\Screen+Shot+2019-07-05+at+3.46.18+PM.png">
                    <img src="Mike B\Screen+Shot+2019-07-05+at+3.46.27+PM.png">
                    <img src="Mike B\Screen+Shot+2019-07-05+at+3.46.33+PM.png">
                    <img src="Mike B\Screen+Shot+2023-06-16+at+2.24.42+PM.png">
                    <img src="Mike B\Screen+Shot+2019-07-05+at+3.46.18+PM.png">
                    <img src="Mike B\Screen+Shot+2023-06-16+at+2.24.42+PM.png">
                    <!-- Add more artworks as needed -->
                </div>
            </section>
            <section class="artist-info">
                <h2>Contact Information</h2>
                <p>Email: mikeboissoneault@gmail.com</mikeboissoneault></p>
                <p><a href="https://www.powerlinetattoo.com/staff#/mike-boissoneault" target="_blank">Shop: PowerLine Tattoo</a></p>
                <p><a class= "social-icon" href="https://www.instagram.com/mikeboissoneault/" target="_blank">
                    <ion-icon name="logo-instagram"></ion-icon></p></a>
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2975.231750848999!2d-71.44484792444507!3d41.780218871537706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e44f11ddc3c075%3A0x9ded076bd7046cb!2sPowerline%20Tattoo!5e0!3m2!1sen!2sus!4v1727799770216!5m2!1sen!2sus" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
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
                                </form>
                            </form>
                        </section>
                    </div>
                    <section class="comment">
                        <div class="comment-section">
                            <h2>Comments</h2>
                                <?php
                                    if(!isset($_SESSION['name'])){
                                        echo "Please make an account or sign in to submit comments.";
                                    } else{
                                        echo "Hello ".$_SESSION['name'] ." feel free to leave a comment about your experience!
                                        <form id='comment-form' method='POST' action='".setComments()."'>
                                        <input type='hidden' id='id' name='id' value='". $_SESSION['name']."'>
                                        <input type='hidden' id='date' name='date' value='". date('Y-m-d H:i:s')."'>
                                        <textarea name='message' placeholder='Write your comment here'></textarea>
                                        <button type='submit' name='commentSubmit'>Add Comment</button>
                                        </form>";
                                    }
                                    getComments();
                                ?>    
                        </div>
                    </section>
                        
                    </section>
                </div>
            
                <script src="/functions/comment.js"></script>
            </body>
            </html>