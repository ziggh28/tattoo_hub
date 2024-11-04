document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('bookingModal');
    const btn = document.getElementById('bookMeBtn');
    const span = document.getElementsByClassName('close')[0];
    const form = document.getElementById('bookingForm');
    const commentForm = document.getElementById('comment-form');
    const commentList = document.getElementById('comment-list');
    const starRating = document.getElementById('star-rating');
    const stars = starRating.getElementsByTagName('input');

    btn.onclick = function() {
        modal.style.display = 'block';
    }

    span.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 

 'none';
        }
    }

    form.onsubmit = function(e) {
        e.preventDefault();
        // Here you would typically send the form data to a server
        console.log('Booking submitted');
        modal.style.display = 'none';
        // You might want to show a confirmation message to the user here
    }

    // Star rating functionality
    for (let i = 0; i < stars.length; i++) {
        stars[i].addEventListener('click', function() {
            for (let j = 0; j < stars.length; j++) {
                if (j <= i) {
                    stars[j].previousElementSibling.style.color = '#fbbf24';
                } else {
                    stars[j].previousElementSibling.style.color = '#ccc';
                }
            }
        });
    }

    // Comment form submission
    commentForm.onsubmit = function(e) {
        e.preventDefault();
        const name = document.getElementById('comment-name').value;
        const text = document.getElementById('comment-text').value;
        const rating = document.querySelector('input[name="rating"]:checked').value;
        addComment(name, text, rating);
        commentForm.reset();
    }

    function addComment(name, text, rating) {
        const comment = document.createElement('li');
        comment.innerHTML = `
            <h3>${name}</h3>
            <p>${text}</p>
            <div class="rating">${'⭐'.repeat(rating)}</div>
        `;
        commentList.appendChild(comment);
    }

    // Initialize Lucide icons
    lucide.createIcons();
});