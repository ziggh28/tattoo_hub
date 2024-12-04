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
        if (isset($_SESSION['name']) && $_SESSION['name'] == $row['id']) {
            echo "<button onclick='editComment(".$row['comment_id'].")'>Edit</button>";
            echo "<button onclick='deleteComment(".$row['comment_id'].")'>Delete</button>";
        }
        echo "</div>";
    }
}

function updateComment($table) {
    if (isset($_POST['commentUpdate'])) {
        global $conn;
        $comment_id = $_POST['comment_id'];
        $ratings = $_POST['ratings'];
        $message = $_POST['message'];
        $sql = "UPDATE $table SET ratings = ?, message = ? WHERE comment_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isi", $ratings, $message, $comment_id);
        $stmt->execute();
    }
}

function deleteComment($table) {
    if (isset($_POST['commentDelete'])) {
        global $conn;
        $comment_id = $_POST['comment_id'];
        $sql = "DELETE FROM $table WHERE comment_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $comment_id);
        $stmt->execute();
    }
}

// Handle AJAX requests for update and delete
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $table = $_POST['table'];
        switch ($_POST['action']) {
            case 'update':
                updateComment($table);
                break;
            case 'delete':
                deleteComment($table);
                break;
        }
    }
}

