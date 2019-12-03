<?php


//session_start();
//// priskiriame sesion
//$_SESSION =
//
//// tam reikia tureti masyva
//[
//    'name' => 'Tomas',
//    'lastname' => 'Tomauskas'
//];
//
//var_dump($_SESSION);
//// priskiriame duomenis is sesijos kintamajam
//$kintamasis = $_SESSION['name'];
//
//if(isset($_SESSION["name"] && isset($_SESSION["email"])){
//    print "Name is" . $_SESSION["name"] " . <br>";
//     print "Email is" . $_SESSION["mail"] ".";
//}


namespace db;

use PDO;
use PDOException;

class Database
{
    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host=localhost;dbname=master;charset=utf8', 'root', '');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "DB Connection Failed: " . $e->getMessage();
        }
    }

//    duomenu atvaizdavimas is DB ekrane
    public function select($sql)
    {
        return $this->connection->query($sql)->fetchAll(PDO::FETCH_OBJ);
    }

    function __destruct()
    {
        $this->connection = null;
    }
}

session_start();

$_SESSION = [
    'user_id'=> 1,
];
$obj = New Database();
$user_id = $_SESSION['user_id'];

$sql1 = "SELECT `id_posts`, `u_id`, `title`, `text`, `date` FROM `posts` WHERE `u_id` = '$user_id'";
$userPosts = $obj->select($sql1);

var_dump($userPosts);

function table ($postArray){
    $style ="padding:15px; border:3px solid black; border-collapse:collapse";
    print "<table style='$style'>";
        foreach ($postArray as $post){
            print "<tr>
                <td>$post->title</td>
                <td>$post->text</td>
                <td>$post->date</td>
                </tr>";
        }
        print '</table>';
}

        table($userPosts);