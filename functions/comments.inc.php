<?php

include 'connection.php';
function setComments(){
if (isset($_POST['commentSubmit'])){
        global $conn;
        $id = $_POST["id"];
        $ratings = $_POST["ratings"];
        $date = $_POST["date"];
        $message = $_POST['message'];
        $sql = "INSERT INTO comment_section(id, date, ratings,message) VALUES('$id', '$date', '$ratings', '$message')";
        $result = mysqli_query($conn, $sql);
    }
}

function getComments() {
    global $conn;
    $sql = "SELECT * FROM comment_section";
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