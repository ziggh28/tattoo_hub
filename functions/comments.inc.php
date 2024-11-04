<?php

include 'connection.php';
function setComments($table){
if (isset($_POST['commentSubmit'])){
        global $conn;
        $id = $_POST["id"];
        $ratings = $_POST["ratings"];
        $date = $_POST["date"];
        $message = $_POST['message'];
        $sql = "INSERT INTO $table(id, date, ratings,message) VALUES('$id', '$date', '$ratings', '$message')";
        $result = mysqli_query($conn, $sql);
    }
}

function getComments($table) {
    global $conn;
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div id='comment-box'>";
            echo "user: ".$row['id']. "<br>";
            echo "rating: ".$row['ratings']. "<br>";
            echo "date: ".$row['date']. "<br>";
            echo "message: ".$row['message']. "<br><br>";
        echo "</div>";
    }
}