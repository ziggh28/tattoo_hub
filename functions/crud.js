function editComment(commentId) {
    const commentBox = document.querySelector(`#comment-box[data-comment-id="${commentId}"]`);
    const message = commentBox.querySelector('div:last-child').textContent.split(': ')[1];
    const rating = commentBox.querySelector('div:nth-child(2)').textContent.split(': ')[1];

    const newMessage = prompt('Edit your comment:', message);
    const newRating = prompt('Edit your rating (1-5):', rating);

    if (newMessage !== null && newRating !== null) {
        const formData = new FormData();
        formData.append('action', 'update');
        formData.append('table', 'bill_comment_section');
        formData.append('comment_id', commentId);
        formData.append('message', newMessage);
        formData.append('ratings', newRating);

        fetch('functions/comments.inc.php', {
            method: 'POST',
            body: formData
        }).then(() => {
            location.reload();
        });
    }
}

function deleteComment(commentId) {
    if (confirm('Are you sure you want to delete this comment?')) {
        const formData = new FormData();
        formData.append('action', 'delete');
        formData.append('table', 'bill_comment_section');
        formData.append('comment_id', commentId);

        fetch('functions/comments.inc.php', {
            method: 'POST',
            body: formData
        }).then(() => {
            location.reload();
        });
    }
}

