function logout() {
    // Get the auth info from local storage
    let authInfo = JSON.parse(localStorage.getItem('authInfo'));
    
    if (authInfo && authInfo.access_token) {
        // Revoke the token
        fetch(`https://accounts.google.com/o/oauth2/revoke?token=${authInfo.access_token}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        })
        .then(response => {
            if (response.ok) {
                console.log('Successfully logged out');
            } else {
                console.error('Failed to revoke token');
            }
        })
        .catch(error => {
            console.error('Error during logout:', error);
        })
        .finally(() => {
            // Clear the auth info from local storage
            localStorage.removeItem('authInfo');
            
            // Redirect to the home page
            window.location.href = 'index.html';
        });
    } else {
        console.log('No active session found');
        window.location.href = 'index.html';
    }
}
