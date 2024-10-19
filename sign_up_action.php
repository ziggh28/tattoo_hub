<?php
    session_start();
    include "connection.php";
    if(isset($_SESSION['name'])) {
        header("Location: index.php");
    }

    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST ['password']); 
        $re_password = mysqli_real_escape_string($conn, $_POST['re-password']);

        $sql="select * from sign_up where username='$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql="select * from sign_up where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_user === 0 & $count_email===0) {
            if($password === $re_password) {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO sign_up(username, email, password) VALUES('$username', '$email', '$hash')";
                $result = mysqli_query($conn, $sql);
                if($result) {
                    header("Location: welcome.php");
                }
                else
                    echo '<script>
                    alert("Passwords do not match!);
                    window.location.href = "sign_up_page.php";
                </script>';
            }
        }
        else{
            if($count_user>0) {
                echo '<script>
                    window.location.href="sign_up_page.php";
                    alert("Username already exists! Please enter a different one.");
                </script>';
            }
            if($count_email>0) {
                echo '<script>
                    window.location.href="sign_up_page.php";
                    alert("Email is already associated with another account! Please enter a different one.";
                </script';
            }
        }
    }
?>