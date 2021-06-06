<?php
$db_username = 'root';
$db_password = '';
$db_name = 'simple_php_chat';

$con = mysqli_connect("localhost", $db_username, $db_password, $db_name);
$con->set_charset("utf8");