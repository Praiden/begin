<?php
$mysqli = new mysqli('localhost', 'laravel', '1', 'test') or die('cannot connect to database');
$mysqli->set_charset('utf-8');

$text = $_POST['text_chat'];
$query_act = "INSERT INTO chat (text) VALUE ('".$text."')";
$result_act = $mysqli->query($query_act);
$result_act->close();
$mysqli->close();