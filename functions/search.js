document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('artist-search-form');
    const resultsContainer = document.getElementById('search-results');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const searchTerm = document.getElementById('search').value;
        const style = document.getElementById('style').value;
        const location = document.getElementById('location').value;

        fetch(`search_artists.php?search=${encodeURIComponent(searchTerm)}&style=${encodeURIComponent(style)}&location=${encodeURIComponent(location)}`)
            .then(response => response.json())
            .then(data => {
                resultsContainer.innerHTML = '';
                if (data.length === 0) {
                    resultsContainer.innerHTML = '<p>No artists found.</p>';
                } else {
                    data.forEach(artist => {
                        const artistCard = document.createElement('div');
                        artistCard.className = 'artist-card';
                        artistCard.innerHTML = `
                            <img src="${artist.image_url}" alt="${artist.name}" class="artist-image">
                            <h3><a href="${artist.profile_url}">${artist.name}</a></h3>
                            <p>${artist.style}</p>
                            <p>${artist.location}</p>
                        `;
                        resultsContainer.appendChild(artistCard);
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                resultsContainer.innerHTML = '<p>An error occurred while searching for artists.</p>';
            });
    });
});

