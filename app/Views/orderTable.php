<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../../Frame/Database.php');
include('../Models/OrdersData.php');

use Order\OrdersData;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
<header>
    <a href="../../index.php">Home</a>
    <a href="orderTable.php">Order Table</a>
    <a href="insertOrder.php">Insert Order</a>
    <a href="updateDelete.php">Update | Delete</a>
</header>
<!--cia patalpinti filtra-->
<?php
$getOrders = New OrdersData();
$getOrders->getOrders();
?>
</body>
</html>