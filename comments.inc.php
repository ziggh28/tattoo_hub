<?php

include 'connection.php';
function setComments(){
if (isset($_POST['commentSubmit'])){
        global $conn;
        $id = $_POST["id"];
        $date = $_POST["date"];
        $message = $_POST['message'];
        $sql = "INSERT INTO comment_section(id, date, message) VALUES('$id', '$date', '$message')";
        $result = mysqli_query($conn, $sql);
    }
}

function getComments() {
    global $conn;
    $sql = "SELECT * FROM comment_section";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<div id='comment-box'>";
            echo $row['id']. "<br>";
            echo $row['date']. "<br>";
            echo $row['message']. "<br><br>";
        echo "</div>";
    }
}