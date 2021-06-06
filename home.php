<?php
include_once 'app/helpers.php';
session_start();
if (!isset($_SESSION['username']))
    header('Location: index.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat | home</title>

    <!-- style -->
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
<center>
    <!-- show camelCase userName -->
    <h1><?= ucwords(strtolower($_SESSION['username'])); ?> </h1>

    <!-- select your friends -->
    <aside>
        <label for="friend_id"></label>
        <select id="friend_id">
            <option disabled>select your friend</option>
            <?php users(); ?>
        </select>
        <button id="show_message">show message</button>
    </aside>

    <!-- show all message -->
    <article>
        <hr/>
        <ul id="result">No Message</ul>
        <hr/>
    </article>

    <!-- send message -->
    <div>
        <label for="text">text:</label>
        <input type="text" id="text">
        <button id="send">send</button>
    </div>
</center>
</body>

<!-- scripts -->
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/main.js" async></script>

</html>
