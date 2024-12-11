<?php
include 'connection.php';

function setComments($table) {
    if (isset($_POST['commentSubmit'])) {
        global $conn;
        $id = $_POST["id"];
        $ratings = $_POST["ratings"];
        $date = $_POST["date"];
        $message = $_POST['message'];
        $sql = "INSERT INTO $table(id, date, ratings, message) VALUES(?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssis", $id, $date, $ratings, $message);
        $stmt->execute();
    }
}

function getComments($table) {
    global $conn;
    $sql = "SELECT * FROM $table ORDER BY date DESC";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div id='comment-box' data-comment-id='".$row['comment_id']."'>";
        echo "user: ".htmlspecialchars($row['id']). "<br>";
        echo "rating: ".htmlspecialchars($row['ratings']). "<br>";
        echo "date: ".htmlspecialchars($row['date']). "<br>";
        echo "message: ".htmlspecialchars($row['message']). "<br>";
        echo "</div> <hr> <br>";
    }
}
?>