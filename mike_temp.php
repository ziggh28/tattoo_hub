<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mike Boissoneault Profile - Tattoo Hub</title>
    <link rel="stylesheet" href="styles/Profile.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="functions/Profile.js" defer></script>
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
    <div id="navbar-placeholder"></div>
    <script>
        fetch('navbar.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });
    </script>
    <div class="container">
        <header class="profile-header">
            <div class="profile-picture">
                <img src="Mike B/Screen+Shot+2019-03-07+at+1.14.46+PM.png" alt="Mike Boissoneault profile picture">
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
                    <section class="comment-section">
                        <h2>Comments</h2>
                        <form id="comment-form">
                            <input type="text" id="comment-name" placeholder="Your Name" required>
                            <textarea id="comment-text" placeholder="Write your comment here" required></textarea>
                            <div class="star-rating" id="star-rating">
                                <label for="star1" title="1 star"></label>
                                <input type="radio" id="star1" name="rating" value="1" required/>
                                <label for="star2" title="2 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2"/>
                                <label for="star3" title="3 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3"/>
                                <label for="star4" title="4 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4"/>
                                <label for="star5" title="5 stars"></label>
                                <input type="radio" id="star5" name="rating" value="5"/>
                            </div>
                            <button type="submit">Add Comment</button>
                        </form>
                        <ul id="comment-list" class="comment-list"></ul>
                    </section>
                </section>
                <section class="reviews-section">
                    <h2>Reviews</h2>
                    <div class="review">
                        <h3>John Doe</h3>
                        <p>Amazing artist! Loved the work. Highly recommended!</p>
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                    </div>
                    <div class="review">
                        <h3>Jane Smith</h3>
                        <p>Very professional and talented. Will come back for more tattoos!</p>
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                    </div>
                </section>
            </div>
        </div>
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
        </div>
    </div>
</body>
<div id="footer-placeholder"></div> 
<script>
    fetch('footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-placeholder').innerHTML = data;
        });
</script>
</html>
