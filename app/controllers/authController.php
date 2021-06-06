<?php
include_once '../../db.php';

session_start();

global $con;

if ($_POST['password'] and $_POST['username']) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $post = mysqli_query($con, "SELECT * FROM user where username = '$username' and password ='$password'");
    $val_user = mysqli_num_rows($post);

    if ($val_user == 1) {
        // logged in
        $row_user = mysqli_fetch_array($post);
        $_SESSION['user_id'] = $row_user['id'];
        $_SESSION['username'] = $row_user['username'];
        header('Location: ../../home.php');
    } else {
        //user not found so registered.
        $dd_post = mysqli_query($con, "insert into user(username, password) value ('$username','$password')");
        $_SESSION['user_id'] = mysqli_insert_id($con);
        $_SESSION['username'] = $username;
        header('Location: ../../home.php');
    }

}
