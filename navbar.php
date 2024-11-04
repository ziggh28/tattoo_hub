<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .navbar {
            background-color: #333;
            color: #fff;
            padding: 1rem;
        }

        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .navbar-logo {
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
            margin-right: 1rem;
        }

        .navbar-menu {
            display: flex;
            list-style: none;
        }

        .navbar-menu li {
            margin-left: 1rem;
        }

        .navbar-menu a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
        }

        .navbar-menu a:hover {
            color: #ddd;
        }

        .navbar-menu a i {
            margin-right: 0.5rem;
            transition: color 0.3s ease;
        }

        .navbar-menu a:hover i {
            color: #ffa500; /* Orange color on hover */
        }

        .navbar-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
        }

        .bar {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px auto;
            background-color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .search-form {
            display: flex;
            align-items: center;
            flex-grow: 1;
            max-width: 600px;
            margin: 0 1rem;
        }

        .search-input {
            padding: 0.75rem 1rem;
            border: none;
            border-radius: 4px 0 0 4px;
            font-size: 1rem;
            width: 100%;
        }

        .search-button {
            padding: 0.5rem 1.2rem; /* Decreased padding */
            background-color: #ffa500;
            border: none;
            border-radius: 0 4px 4px 0;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 0.95rem; /* Slightly decreased font size */
        }

        .search-button:hover {
            background-color: #ff8c00;
        }

        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: #fff;
            border: 1px solid #ddd;
            border-top: none;
            max-height: 300px;
            overflow-y: auto;
            display: none;
        }

        .search-result-item {
            padding: 10px;
            cursor: pointer;
        }

        .search-result-item:hover {
            background-color: #f0f0f0;
        }

        @media (max-width: 768px) {
            .navbar-container {
                flex-direction: column;
                align-items: stretch;
            }

            .navbar-logo {
                margin-bottom: 1rem;
                margin-left: auto;
                order: -1;
            }

            .search-form {
                order: -1;
                margin: 1rem 0;
                max-width: none;
            }

            .navbar-menu {
                position: fixed;
                left: -100%;
                top: 5rem;
                flex-direction: column;
                background-color: #333;
                width: 100%;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
            }

            .navbar-menu.active {
                left: 0;
            }

            .navbar-menu li {
                margin: 2.5rem 0;
            }

            .navbar-toggle {
                display: block;
                margin-left: auto;
            }

            .navbar-toggle.active .bar:nth-child(2) {
                opacity: 0;
            }

            .navbar-toggle.active .bar:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
            }

            .navbar-toggle.active .bar:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="index.php" class="navbar-logo">Tattoo Hub</a>
            <form class="search-form" action="/search" method="get">
                <input type="text" id="search-input" class="search-input" placeholder="Search for tattoo artists, styles, or designs..." name="q" aria-label="Search" oninput="performSearch()">
                <button type="submit" class="search-button" aria-label="Search">
                    <i class="fas fa-search"></i>
                </button>
                <div id="search-results" class="search-results"></div>
            </form>
            <button class="navbar-toggle" aria-label="Toggle navigation menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <ul class="navbar-menu">
                <?php
                    if(isset($_SESSION['name'])) {
                    echo "Hello  " . $_SESSION['name'];
                    }
                ?>
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="contact.php"><i class="fas fa-headset"></i> Customer Support</a></li>
                <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                <li><a href="sign_up_page.php"><i class="fas fa-user-plus"></i> Sign Up</a></li>
                <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                <li><a href="logout.php">Log Out</a>
            </ul>
        </div>
    </nav>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbarToggle = document.querySelector('.navbar-toggle');
            const navbarMenu = document.querySelector('.navbar-menu');

            navbarToggle.addEventListener('click', function() {
                navbarToggle.classList.toggle('active');
                navbarMenu.classList.toggle('active');
            });

            // Close the mobile menu when a link is clicked
            document.querySelectorAll('.navbar-menu a').forEach(link => {
                link.addEventListener('click', () => {
                    navbarToggle.classList.remove('active');
                    navbarMenu.classList.remove('active');
                });
            });
        });

        // Sample data for search (replace with your actual data)
        const searchData = [
            { type: 'artist', name: 'John Doe', style: 'Traditional', location: 'New York' },
            { type: 'artist', name: 'Jane Smith', style: 'Watercolor', location: 'Los Angeles' },
            { type: 'style', name: 'Japanese', location: 'Various' },
            { type: 'style', name: 'Blackwork', location: 'Various' },
            { type: 'location', name: 'Chicago', style: 'Various' },
            { type: 'location', name: 'Miami', style: 'Various' },
        ];

        function performSearch() {
            const searchInput = document.getElementById('search-input');
            const searchResults = document.getElementById('search-results');
            const query = searchInput.value.toLowerCase();

            // Clear previous results
            searchResults.innerHTML = '';

            if (query.length < 2) {
                searchResults.style.display = 'none';
                return;
            }

            const filteredResults = searchData.filter(item => 
                item.name.toLowerCase().includes(query) ||
                item.style.toLowerCase().includes(query) ||
                item.location.toLowerCase().includes(query)
            );

            if (filteredResults.length > 0) {
                filteredResults.forEach(item => {
                    const resultItem = document.createElement('div');
                    resultItem.className = 'search-result-item';
                    resultItem.textContent = `${item.name} (${item.type}) - ${item.style}, ${item.location}`;
                    resultItem.addEventListener('click', () => {
                        searchInput.value = item.name;
                        searchResults.style.display = 'none';
                    });
                    searchResults.appendChild(resultItem);
                });
                searchResults.style.display = 'block';
            } else {
                searchResults.style.display = 'none';
            }
        }
    </script>
</body>
</html>