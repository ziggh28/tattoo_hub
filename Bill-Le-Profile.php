<?php 
    session_start(); 
    include "functions/comments.inc.php";
    $table = "bill_comment_section";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Le Profile - Tattoo Hub</title>
    <link rel="stylesheet" href="styles/Profile.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="scripts.js" defer></script>
    <script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script type="text/javascript">
(function(){
  emailjs.init({
    publicKey: "HE1JjwRQAsDoZudBU",
  });
})();
</script>
</head>
<nav>
    <div id="nav-placeholder"></div>
    <script>
        fetch('navbar_basic.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('nav-placeholder').innerHTML = data;
            });
    </script>
</nav>
<body>
    <div class="container">
        <header class="profile-header">
            <div class="profile-picture">
                <img src="Bill Le/Profile.jpg" alt="Bill Le profile picture">
            </div>
            <div class="profile-info">
                <h1>Bill Le</h1>
                <div class="contact-info">
                    <p>
                        <a href="https://www.holisticink.com/holisticink-artists/bill-le/" target="_blank" rel="noopener noreferrer">
                            Shop: Holistic Ink
                        </a>
                    </p>
                    <p>
                        <a href="https://www.instagram.com/holistic_ink/" target="_blank" rel="noopener noreferrer">
                            <i data-lucide="instagram" style="width: 1em; height: 1em; margin-right: 0.5em;"></i>
                            @holistic_ink
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
                        <img src="Bill Le/billy-product-1-700x899.jpg" alt="Bill Le's tattoo work 1">
                        <img src="Bill Le/billy-product-2-700x899.jpg" alt="Bill Le's tattoo work 2">
                        <img src="Bill le/billy-product-3.jpg" alt="Bill Le's tattoo work 3">
                        <img src="Bill Le/billy-product-6.jpg" alt="Bill Le's tattoo work 4">
                        <img src="Bill Le/billy-product-7.jpg" alt="Bill Le's tattoo work 5">
                        <img src="Bill Le/billy-product-8.jpg" alt="Bill Le's tattoo work 6">
                        <img src="Bill Le/billy-product-9.jpg" alt="Bill Le's tattoo work 7">
                        <img src="Bill Le/billy-product-10.jpg" alt="Bill Le's tattoo work 8">
                        <img src="Bill Le/billy-product-11.jpg" alt="Bill Le's tattoo work 9">
                    </div>
                </section>
            </div>
            <div class="sidebar">
                    <h2>Location</h2>
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2950.631060965169!2d-71.06119622441675!3d42.30773713840635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37baef868dd91%3A0x4cb2ace5f4ca2789!2s1261%20Dorchester%20Ave%2C%20Boston%2C%20MA%2002125!5e0!3m2!1sen!2sus!4v1728339459928!5m2!1sen!2sus"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="button-container">
                        <button id="bookMeBtn" class="book-me-btn">Book Me</button>
                    </div>
        </div>
        </div>
                </section>
                    <h2>Reviews</h2>
                    <?php
                                    $table = "bill_comment_section";
                                    if(!isset($_SESSION['name'])){
                                        echo "Please make an account or sign in to submit reviews.";
                                    } else{
                                        echo "Hello ".$_SESSION['name'] ."! Feel free to leave a comment and 1-5 star rating about your experience!
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
                                        <br><br>
                                        <textarea name='message' placeholder='Write your comment here'></textarea>
                                        <button type='submit' name='commentSubmit'>Add Comment</button>
                                        </form>";
                                    }
                                    getComments($table);
                                ?>
    </div>
    <div id="bookingModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
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
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('bookingModal');
            const btn = document.getElementById('bookMeBtn');
            const span = document.getElementsByClassName('close')[0];
            const form = document.getElementById('bookingForm');

            btn.onclick = function() {
                modal.style.display = 'block';
            }

            span.onclick = function() {
                modal.style.display = 'none';
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            }

            form.onsubmit = function(e) {
                e.preventDefault();
                // Here you would typically send the form data to a server
                console.log('Booking submitted');
                modal.style.display = 'none';
                // You might want to show a confirmation message to the user here
                alert('Your booking request has been sent successfully!');
            }

            // Initialize Lucide icons
            lucide.createIcons();
        });
    </script>
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
