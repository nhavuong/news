<?php
function checkExistUser($conn, $username, $email)
{
    // check existence
    $sql = "SELECT * FROM users where username = ? or email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login-register.php?error=sqlfail");
        mysqli_close($conn);
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
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
