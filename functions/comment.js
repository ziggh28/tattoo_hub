document.addEventListener('DOMContentLoaded', function() {
    const commentForm = document.getElementById('comment-form');
    const commentList = document.getElementById('comment-list');
    const starRating = document.getElementById('star-rating');
    let currentRating = 0;
    let comments = [];
    let editingId = null;

    starRating.addEventListener('click', function(e) {
        if (e.target.classList.contains('star')) {
            currentRating = parseInt(e.target.getAttribute('data-rating'));
            updateStars(currentRating, starRating);
        }
    });

    function updateStars(rating, container) {
        const stars = container.querySelectorAll('.star');
        stars.forEach((star, index) => {
            if (index < rating) {
                star.classList.add('active');
            } else {
                star.classList.remove('active');
            }
        });
    }

    commentForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const commentName = document.getElementById('comment-name').value.trim();
        const commentText = document.getElementById('comment-text').value.trim();
        if (commentName && commentText && currentRating > 0) {
            if (editingId !== null) {
                const commentIndex = comments.findIndex(c => c.id === editingId);
                comments[commentIndex].name = commentName;
                comments[commentIndex].text = commentText;
                comments[commentIndex].rating = currentRating;
                editingId = null;
            } else {
                const newComment = {
                    id: Date.now(),
                    name: commentName,
                    text: commentText,
                    rating: currentRating
                };
                comments.push(newComment);
            }
            renderComments();
            commentForm.reset();
            currentRating = 0;
            updateStars(currentRating, starRating);
        }
    });

    function renderComments() {
        commentList.innerHTML = '';
        comments.forEach(comment => {
            const li = document.createElement('li');
            const starRatingDiv = document.createElement('div');
            starRatingDiv.className = 'star-rating';
            for (let i = 1; i <= 5; i++) {
                const star = document.createElement('span');
                star.className = 'star' + (i <= comment.rating ? ' active' : '');
                star.textContent = '★';
                starRatingDiv.appendChild(star);
            }
            li.innerHTML = `
                <div class="comment-author">${comment.name}</div>
                <p>${comment.text}</p>
            `;
            li.appendChild(starRatingDiv);
            li.innerHTML += `
                <div class="comment-actions">
                    <button onclick="editComment(${comment.id})">Edit</button>
                    <button onclick="deleteComment(${comment.id})">Delete</button>
                </div>
            `;
            commentList.appendChild(li);
        });
    }

    window.editComment = function(id) {
        const comment = comments.find(c => c.id === id);
        if (comment) {
            document.getElementById('comment-name').value = comment.name;
            document.getElementById('comment-text').value = comment.text;
            currentRating = comment.rating;
            updateStars(currentRating, starRating);
            editingId = id;
        }
    };

    window.deleteComment = function(id) {
        comments = comments.filter(c => c.id !== id);
        renderComments();
    };
});