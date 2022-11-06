<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select = " SELECT * FROM user WHERE username = '$username' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if ($row['user_type'] == 'admin') {

            $_SESSION['admin_name'] = $row['username'];
            header('location:adminPage.php');
        } elseif ($row['user_type'] == 'user') {

            $_SESSION['user_name'] = $row['username'];
            header('location:userPage.php');
        }
    } else {
        $error[] = 'incorrect email or password!';
    }
};
?>

<html>

</html>