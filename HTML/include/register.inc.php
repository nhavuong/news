<?php
if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];

    require_once 'connect.php';
    require_once 'login.functions.inc.php';

    if (emptyInputSignup($username, $email, $password1, $password2) !== false) {
        header("location: ../login-register?error=emptyinput");
        exit();
    }
    if (invalidUsername($username) !== false) {
        header("location: ../login-register?error=invalidusername");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../login-register?error=invalidemail");
        exit();
    }
    if (pwdMatch($password1, $password2) !== false) {
        header("location: ../login-register?error=pwdnotmatch");
        exit();
    }
    if (usernameExist($conn, $username) !== false) {
        header("location: ../login-register?error=usernameexist");
        exit();
    }

    createUser($username, $email, $password1);
} else {
    header("location: ../login-register.php");
    exit();
}
