<?php


namespace login;

include_once 'Frame/Database.php';
include_once 'Forms.php';

use db\Database;

class Login extends Database
{
    public function login()
    {
        $db = New Database();

        if (isset($_POST['login'])) {
            $userEmailPOST = $_POST['user_email'];
            $sql = "SELECT `id`,`user_name`, `user_email`, `password`, `role` FROM `vartotojai` where `user_email` = '$userEmailPOST'";
            $dataFromDbArray = $db->select($sql);
            foreach ($dataFromDbArray as $user) {
                if ($user->user_email === $_POST['user_email'] && $user->password === $_POST['user_password']) {
// i paprasta masyva sukuriame sesiona masyva priskyreme reiksmes is duomenu bazes
                    $_SESSION = [
                    'id' => $user-> id,
                    'user_name' => $user->user_name,
                    'user_email' => $user->user_email,
                    'user_password' => $user->password,
                    'role' => $user->role,
];
                    print 'Sekmingai prisijungete.';

                } elseif ($user->password !== $_POST['user_password']) {
                    print 'Neteisingas slaptazodis';
                }
            }
            if (empty($dataFromDbArray)) {
                print 'Toks vartotojas neegzistuoja.';
            }
        }
//        var_dump($_SESSION);
        if (isset ($_SESSION)) {
            if ($_SESSION ['role'] == 1) {
                header('Location: http://localhost:/simple_web_page_layout-master/app/Views/user/darbuotojas.php');
            } elseif ($_SESSION ['role'] == 0) {
                header('Location: http://localhost:/simple_web_page_layout-master/app/Views/admin/administratorius.php');
            } elseif ($_SESSION ['role'] == 2) {
                header('Location: http://localhost:/simple_web_page_layout-master/app/Views/team/komandosLyderio.php');
            } else {
                header('Location: http://localhost:/simple_web_page_layout-master/app/Views/error.php');
            }
        }
    }
}

$login = New Login();



