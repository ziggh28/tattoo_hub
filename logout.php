<?php
    session_start();
    session_destroy();
    '<script>
    alert("Logout Successful!");
    </script>';
    header("Location: index.php");
