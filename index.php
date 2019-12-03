<?php


include_once('./Frame/Database.php');
//include_once('./app/Models/Users.php');
include_once('./app/Models/Register.php');
include_once('./app/Models/Login.php');

use login\Login;
use reg\Register;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration form</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<?php
//$data->insertLogInUserData();

$reg ->register();
$login->login();
?>
</body>
</html>

<!-- 1. $_SESSION['user_id] = 1
     2. ekrane sukurti lentele su user_id POST #
     3. sukurti forma kuri leistu editint posta  pazymim/paspaudziame mygtuka/editinam  -->