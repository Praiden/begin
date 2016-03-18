<?php
session_start();
header('Content-type, text/html charset=UTF-8 ');
$mysqli = new mysqli('localhost', 'laravel', '1', 'test') or die('cannot connect to database');
$mysqli->set_charset('utf-8');
mb_internal_encoding('UTF-8');
$act = isset($_GET['act']) ? $_GET['act']: 'list';

switch($act){

    case 'list':

        require ('templates/list.php');
        break;

    case 'view-entry':
        if(isset($_SESSION['name'])){

        }else{
            header('Location: .');
        }

        require('templates/entry.php');
        break;
    case 'logout':

            unset($_SESSION['name']);
            header('Location: .');

        require ('templates/list.php');
        break;

    case 'view-register':

        if(isset($_REQUEST['submit'])){

            $login = $_REQUEST['login'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $password = md5(md5($password));

            $query_compare = "SELECT * FROM users WHERE login = '$login'";

            if($result_compare = $mysqli->query($query_compare)){
                $row_compare = $result_compare->fetch_assoc();

                if($row_compare['login'] == $login){
                    echo("<h4 class='text-center text-warning'>Такой логин уже занят</h4>");
                }else{
                    $query_record = "INSERT INTO users(login, email, password) VALUES (?, ?, ?)";
                    $record = $mysqli->prepare($query_record);
                    $record->bind_param("sss", $login, $email, $password);
                    $record->execute();
                    $record->close();

                    if($record){
                        header('Location: ?act=view-auth');
                    }else{
                        echo ("<h4 class='text-center text-danger'>Повторите попытку позже</h4>\"");
                    }
                }

            }
            $mysqli->close();

        }

        require ('templates/register.php');
        break;

    case 'view-auth':
        if(isset($_REQUEST['enter'])) {
            $log = $_REQUEST['login_auth'];
            $pass = md5(md5($_REQUEST['password_auth']));

            $query_select = "SELECT * FROM users WHERE password ='$pass'";
            if ($result_select = $mysqli->query($query_select)) {
                if ($row_select = $result_select->fetch_assoc()) {
                    if ($row_select['password'] == $pass) {
                        session_start();
                        $_SESSION['name'] = $log;
                        header('Location: ?act=view-entry');
                    }
                }else {
                    echo ("<h4 class='text-center text-danger'>Пользователя с таким именем или логином не существует</h4>");
                }
            }
        }
        require ('templates/auth.php');
        break;

    default:
        die('Not such action');
}
