<?php
$mysqli = new mysqli('localhost', 'laravel', '1', 'test') or die('cannot connect to database');
$mysqli->set_charset('utf-8');

$id = $_POST['id'];
$query_int = "SELECT * FROM chat WHERE id_chat >'".$id."'";
$result_int = $mysqli->query($query_int);

if($result_int->num_rows > 0){
    $arr = $result_int->fetch_assoc();
    do {
        printf('<li id="%s">%s</li>', $arr['id_chat'], $arr['text']);
    } while ($arr = $result_int->fetch_assoc());

} else {
    echo 1;
}
$result_int->close();
$mysqli->close();
