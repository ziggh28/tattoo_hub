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
    <title>Jimmy Johnson Profile</title>
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
        fetch('navbar_basic.php')
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
                <img src="Jimmy Johnson\JimmyJohnson_profile.png" alt="Mike Boissoneault profile picture">
            </div>
            <div class="profile-info">
                <h1>Jimmy Johnson</h1>
                <div class="contact-info">
                    <p>
                        <a href="https://www.seaport.tattoo/#teams" target="_blank" rel="noopener noreferrer">
                            Shop: Seaport Tattoo
                        </a>
                    </p>
                    <p>
                        <a href="https://www.instagram.com/jimmyjohnsontattoo" target="_blank" rel="noopener noreferrer">
                            <i data-lucide="instagram" style="width: 1em; height: 1em; margin-right: 0.5em;"></i>
                            @jimmyjohnsontattoo
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
                        <img src="Jimmy Johnson\63237be8e7597573c0b7f76a_Seaport_Tattoo_Jimmy_05.jpeg">
                        <img src="Jimmy Johnson\63237cfe6d91a93002e12c83_Seaport_Tattoo_Jimmy_26.jpeg">
                        <img src="Jimmy Johnson\63237db18e293a82dd7940d9_Seaport_Tattoo_Jimmy_39.jpeg">
                        <img src="Jimmy Johnson\63237dbf7e6999124e6571ea_Seaport_Tattoo_Jimmy_40.jpeg">
                        <img src="Jimmy Johnson\63237e1c8ee804b7bcbdc6a6_Seaport_Tattoo_Jimmy_42.jpeg">
                        <img src="Jimmy Johnson\63237e6875ded06d16b0e8b9_Seaport_Tattoo_Jimmy_48.jpeg">
                        <img src="Jimmy Johnson\63237efd6d293058f2b1a777_Seaport_Tattoo_Jimmy_59.jpeg">
                        <img src="Jimmy Johnson\63237f19be53e1d731c6582f_Seaport_Tattoo_Jimmy_60.jpeg">
                        <img src="Jimmy Johnson\63237f43870a864c37ece664_Seaport_Tattoo_Jimmy_64.jpeg">
                    </div>
                </section>
            </div>
            <div class="sidebar">
                <section class="location-section">
                    <h2>Location</h2>
                    <div class="map-container">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d66802.09347507876!2d-71.07925326408645!3d42.272901882692736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37c9db349ef71%3A0xb21fadf26fc108ec!2sEmpire%20Tattoo%20Quincy!5e0!3m2!1sen!2sus!4v1731525724416!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                    $table = "jimmy_comment_section";
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
