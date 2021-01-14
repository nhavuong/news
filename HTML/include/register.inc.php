<?php

include('../connect.php');
include('user.functions.php');

if (isset($_POST["password2"])) {

    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $password1 = htmlspecialchars($_POST["password1"]);
    $password2 = htmlspecialchars($_POST["password2"]);

    if (checkExistUser($conn, $username, $email) !== false) {
        header("location: ../login-register.php?error=sqlfail");
        mysqli_close($conn);
        exit();
    } else {

        $hashedPwd = password_hash($password2, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (id, username, email, f_name, l_name, phone, created_at, pwd) VALUES (NULL, ?, ?, NULL, NULL, NULL, current_timestamp(), ?);";

        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../login-register.php?error=sqlfail");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("location: ../index");
            mysqli_close($conn);
            exit();
        }
    }
}
