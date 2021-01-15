<?php
include('../connect.php');
include('user.functions.php');

if (isset($_POST['password'])) {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    if ($user = checkExistUsername($conn, $username) !== false) {
        header("location: ../index");
        mysqli_close($conn);
        exit();
    }
}
