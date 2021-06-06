<?php
include_once '../../env.php';
global $con;

session_start();


//store message
if (isset($_POST['store']) and isset($_POST['text']) and isset($_SESSION['user_id']) and isset($_POST['friend_id'])) {
    $text = $_POST['text'];
    $user_id = $_SESSION['user_id'];
    $friend_id = $_POST['friend_id'];
    $query = "insert into chat_detail(body,user_id,friend_id) VALUES ('$text','$user_id','$friend_id')";
    $post = mysqli_query($con, $query);
}


//get and show all messages
if (isset($_POST['show']) and isset($_SESSION['user_id']) and isset($_POST['friend_id'])) {
    $user_id = $_SESSION['user_id'];
    $friend_id = $_POST['friend_id'];

    /**
     * ---------------------------------------------------------------
     * main query to create chat box and build application with php :)
     * ---------------------------------------------------------------
     */
    $query = "SELECT * FROM chat_detail
                    where user_id = '$user_id' and friend_id = '$friend_id'
                       or user_id = '$friend_id' and friend_id = '$user_id'
                        order by created_at asc";

    $chat_list = mysqli_query($con, $query);
    while ($row_chat_list = mysqli_fetch_array($chat_list))
        if ($row_chat_list['user_id'] == $user_id)
            echo ' <li style="text-align: right" dir="rtl"><span dir="ltr">' . $row_chat_list['body'] . '</span></li>';
        else
            echo ' <li style="text-align: left">' . $row_chat_list['body'] . '</li>';

}
