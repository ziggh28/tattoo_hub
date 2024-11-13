<?php 
    session_start();
    date_default_timezone_set('America/New_York');
    include 'functions/comments.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinny Nguyen Profile</title>
    <link rel="stylesheet" href="styles/Profile.css">
    <script src="functions/Profile.js" defer></script>
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
</head>
<body>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <navbar>
    <div id="navbar-placeholder"></div>
    <script>    
        fetch('navbar.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });
    </script>
    </navbar>
<body>
    <div class="container">
        <header class="profile-header">
            <div class="profile-picture">
                <img src="vinny-nguyen Profile.jpg" alt="Mike Boissoneault profile picture">
            </div>
            <div class="profile-info">
                <h1>Vinny Nguyen</h1>
                <div class="contact-info">
                    <p>
                        <a href="https://www.holisticink.com/holisticink-artists/vinny-nguyen/" target="_blank" rel="noopener noreferrer">
                            Shop: Holistic Ink
                        </a>
                    </p>
                    <p>
                        <a href="https://www.instagram.com/vinny.holistic/" target="_blank" rel="noopener noreferrer">
                            <i data-lucide="instagram" style="width: 1em; height: 1em; margin-right: 0.5em;"></i>
                            @vinny.holistic
                        </a>
                    </p>
                </div>
            </div>
        </header>
        <div class="content">
            <div class="main-content">
                <section class="gallery-section">
                    <h2>Gallery</h2>
                    <div class="gallery-grid">
                        <img src="\Vinny Nguyen\314463296_442914361361278_683924768596635008_nlow.jpg">
                        <img src="\Vinny Nguyen\318766405_844483826604384_2686668458174030971_nlow.jpg">
                        <img src="\Vinny Nguyen\401104434_3196081907362904_8095963639376388821_nlow.jpg">
                        <img src="\Vinny Nguyen\408715102_895784478828504_8238305353560090770_nlow.jpg">
                        <img src="\Vinny Nguyen\409203911_389421816773673_7852508200130417389_nlow.jpg">
                        <img src="\Vinny Nguyen\411398812_772099184749536_661807829600162596_nlow.jpg">
                        <img src="\Vinny Nguyen\420583404_7095009947280497_1847041223343543559_nlow.jpg">
                        <img src="\Vinny Nguyen\434124532_310897638368852_2304062574585429515_nlow.jpg">
                        <img src="\Vinny Nguyen\441468864_726340936090643_1787004723858267777_nlow.jpg">
                    </div>
                </section>
            </div>
            <div class="sidebar">
                <section class="location-section">
                    <h2>Location</h2>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2950.6312859531154!2d-71.06119492441672!3d42.30773233840675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37baef742335b%3A0x2d525f833e7f9807!2sHolistic%20Ink%20Boston%20Tattoo%20Shop!5e0!3m2!1sen!2sus!4v1731516995118!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="button-container">
                        <button id="bookMeBtn" class="book-me-btn">Book Me</button>
                    </div>
                    <div id="bookingModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2>Make an Appointment</h2>
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
                                  <button type="button event.preventDefault();" onclick="sendMail()">Send</button>
                        </section>
                </form>
                            <form id="comment-form">
                                <div class="star-rating" id="star-rating">
                                </div>
                            </form>
                        </div>
                </section>
                    </div>
                    
                </div>
                <h2>Reviews</h2>
                <?php
                                    $table = "mike_comment_section";
                                    if(!isset($_SESSION['name'])){
                                        echo "Please make an account or sign in to submit reviews.";
                                    } else{
                                        echo "Hello ".$_SESSION['name'] ."! Feel free to leave a comment about your experience!
                                        <form id='comment-form' method='POST' action='".setComments($table)."'>
                                        <input type='hidden' id='id' name='id' value='". $_SESSION['name']."'>
                                        <input type='hidden' id='date' name='date' value='". date('Y-m-d H:i:s')."'>
                                        <fieldset class='rating'>
                                            <input type='radio' id='star5' name='ratings' value='5'>
                                            <label for='star5' class='full'></label>
                                            <input type='radio' id='star4' name='ratings' value='4'>
                                            <label for='star4' class='full'></label>
                                            <input type='radio' id='star3' name='ratings' value='3'>
                                            <label for='star3' class='full'></label>
                                            <input type='radio' id='star2' name='ratings' value='2'>
                                            <label for='star2' class='full'></label>
                                            <input type='radio' id='star1' name='ratings' value='1'>
                                            <label for='star1' class='full'></label>
                                        </fieldset>      
                                        <textarea name='message' placeholder='Write your comment here'></textarea>
                                        <button type='submit' name='commentSubmit'>Add Comment</button>
                                        </form>";
                                    }
                                    getComments($table);
                                ?>    
            </div>
        </div>
    </body>
        <footer>
        <div id="footer-placeholder"></div>
        <script>
            fetch('footer.php')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('footer-placeholder').innerHTML = data;
                });
        </script>
    </footer>
</html>
