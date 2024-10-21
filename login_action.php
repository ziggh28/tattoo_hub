<?php
include "connection.php";

session_start();
/*if(isset($_SESSION['name'])) {
    header("Location: index.php");
}*/

if(isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $sql = "select * from sign_up where username='$username' OR email='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if($row) {
        if(password_verify($password, $row["password"])) {
            $sql = "select username from sign_up where username='$username' or email = '$username'";
            $result = mysqli_fetch_array(mysqli_query($conn, $sql));
            session_start();
            $_SESSION['name'] = $result['username'];
            header("Location: welcome_back.php");
        }      
    }
    else
        echo '<script>
                window.location.href="login_page.php";
                alert("Invalid username/email or password! Please try again.");
            </script>'; 
}