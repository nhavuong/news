<?php
include('connect.php');
include('user.functions.php');

if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    

    if ($user = login($conn, $username)) {
        $pwd_check = password_verify($password, $user["pwd"]);
        
        if($pwd_check){
            session_start();
            $_SESSION['username'] = $user['username'];
            header("location: ../index");
        }
        else{
            header("location: ../login-register.php?error=pwdinvalid#tab1");
        }
    }
    else{
        header("location: ../login-register.php?error=usernotexist#tab1");
    }
}

mysqli_close($conn);
exit();