<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mike Boissoneault Profile</title>
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
        fetch('navbar.html')
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
                <img src="Mike B/resizedportpic.jpg" alt="Mike Boissoneault profile picture">
            </div>
            <div class="profile-info">
                <h1>Mike Boissoneault</h1>
                <div class="contact-info">
                    <p>
                        <a href="https://www.powerlinetattoo.com/staff#/mike-boissoneault" target="_blank" rel="noopener noreferrer">
                            Shop: PowerLine Tattoo
                        </a>
                    </p>
                    <p>
                        <a href="https://www.instagram.com/mikeboissoneault/" target="_blank" rel="noopener noreferrer">
                            <i data-lucide="instagram" style="width: 1em; height: 1em; margin-right: 0.5em;"></i>
                            @mikeboissoneault
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
                        <img src="Mike B/Screen+Shot+2019-03-07+at+1.14.46+PM.png" alt="Mike Boissoneault's tattoo work 1">
                        <img src="Mike B/Screen+Shot+2019-03-07+at+1.15.37+PM.png" alt="Mike Boissoneault's tattoo work 2">
                        <img src="Mike B/Screen+Shot+2019-03-07+at+1.19.49+PM.png" alt="Mike Boissoneault's tattoo work 3">
                        <img src="Mike B/Screen+Shot+2019-07-05+at+3.46.18+PM.png" alt="Mike Boissoneault's tattoo work 4">
                        <img src="Mike B/Screen+Shot+2019-07-05+at+3.46.27+PM.png" alt="Mike Boissoneault's tattoo work 5">
                        <img src="Mike B/Screen+Shot+2019-07-05+at+3.46.33+PM.png" alt="Mike Boissoneault's tattoo work 6">
                        <img src="Mike B/Screen+Shot+2023-06-16+at+2.24.42+PM.png" alt="Mike Boissoneault's tattoo work 7">
                        <img src="Mike B/Screen+Shot+2019-07-05+at+3.46.18+PM.png" alt="Mike Boissoneault's tattoo work 8">
                        <img src="Mike B/Screen+Shot+2023-06-16+at+2.24.42+PM.png" alt="Mike Boissoneault's tattoo work 9">
                    </div>
                </section>
            </div>
            <div class="sidebar">
                <section class="location-section">
                    <h2>Location</h2>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2975.231750848999!2d-71.44484792444507!3d41.780218871537706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e44f11ddc3c075%3A0x9ded076bd7046cb!2sPowerline%20Tattoo!5e0!3m2!1sen!2sus!4v1727799770216!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                               <h2>Comments</h2>
                            <form id="comment-form">
                                <input type="text" id="comment-name" placeholder="Your Name" required>
                                <textarea id="comment-text" placeholder="Write your comment here" required></textarea>
                                <div class="star-rating" id="star-rating">
                                    <span class="star" data-rating="1">&#9733;</span>
                                    <span class="star" data-rating="2">&#9733;</span>
                                    <span class="star" data-rating="3">&#9733;</span>
                                    <span class="star" data-rating="4">&#9733;</span>
                                    <span class="star" data-rating="5">&#9733;</span>
                                </div>
                                <button type="submit">Add Comment</button>
                            </form>
                        </div>
                </section>
                    </div>
                    <section class="comment">
                        <div class="comment-section">
                            <h2>Comments</h2>
                            <form id="comment-form">
                                <input type="text" id="comment-name" placeholder="Your Name" required>
                                <textarea id="comment-text" placeholder="Write your comment here" required></textarea>
                                <div class="star-rating" id="star-rating">
                                    <span class="star" data-rating="1">&#9733;</span>
                                    <span class="star" data-rating="2">&#9733;</span>
                                    <span class="star" data-rating="3">&#9733;</span>
                                    <span class="star" data-rating="4">&#9733;</span>
                                    <span class="star" data-rating="5">&#9733;</span>
                                </div>
                                <button type="submit">Add Comment</button>
                            </form>
                            <ul id="comment-list"></ul>
                        </div>
                        </form>
                        <ul id="comment-list" class="comment-list"></ul>
                    </section>
                        
                    </section>
                </div>
                <script src="/functions/comment.js"></script>
            </div>
        </div>
    </body>
        <footer>
        <div id="footer-placeholder"></div>
        <script>
            fetch('footer.html')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('footer-placeholder').innerHTML = data;
                });
        </script>
    </footer>
</html>
