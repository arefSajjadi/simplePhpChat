<?php
include_once 'db/db.php';
session_start();

function users()
{
    global $con;
    $user_list = mysqli_query($con, 'SELECT * FROM user');
    while ($row_user = mysqli_fetch_array($user_list)) {
        $user_id = $row_user['id'];
        $username = $row_user['username'];

        //auth user, not able to be show.
        if ($user_id != $_SESSION['user_id'])
            echo "<option value='$user_id'>$username</option>";

    }

}
