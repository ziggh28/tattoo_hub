<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tattoo_hub_db";

$conn = new mysqli($servername, $username, $password, $dbname,3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get search parameters
$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
$style = isset($_GET['style']) ? $conn->real_escape_string($_GET['style']) : '';
$location = isset($_GET['location']) ? $conn->real_escape_string($_GET['location']) : '';

// Build the query
$query = "SELECT * FROM artists WHERE 1=1";

if (!empty($search)) {
    $query .= " AND (name LIKE '%$search%' OR style LIKE '%$search%' OR location LIKE '%$search%')";
}

if (!empty($style)) {
    $query .= " AND style LIKE '%$style%'";
}

if (!empty($location)) {
    $query .= " AND location LIKE '%$location%'";
}

$result = $conn->query($query);

$artists = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $artists[] = $row;
    }
}

echo json_encode($artists);

$conn->close();
?>

