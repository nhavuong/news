<?php
function checkExistUsername($conn, $username)
{
    // check existence
    $sql = "SELECT * FROM users where username = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login-register.php?error=sqlfail");
        mysqli_close($conn);
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            return false;
        }
    }
}

function checkExistEmail($conn, $email)
{
    // check existence
    $sql = "SELECT * FROM users where email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login-register.php?error=sqlfail");
        mysqli_close($conn);
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            return false;
        }
    }
}

function login($conn, $username){
    // use prepared mysqli stmt
    $sql = "SELECT * FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login-register.php?error=sqlfail");
        mysqli_close($conn);
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        
        $user = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        
        if ($user != null){
            return $user;
        }
        else{
            return false;
        }
    }
}
