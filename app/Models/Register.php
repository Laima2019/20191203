<?php


namespace reg;
include_once 'Frame/Database.php';
use db\Database;
use form\Forms;

class Register
{
    public function register()
    {

        $db = New Database();
        $form = New Forms();
        $form->insertLogInUserForm();

        $userEmailData = '';

        if (isset($_POST['register'])) {
            $userEmailPOST = $_POST['user_email'];
            $sql = "SELECT `email` FROM `users` where `email` = '$userEmailPOST'";
            $dataFromDbArray = $db->select($sql);
            foreach ($dataFromDbArray as $user) {
                $userEmailData = $user->email;
                var_dump($userEmailData);
            }
            if ($userEmailData === $_POST['user_email']) {
                print 'Toks useris jau egzistuoja, iveskite kita @ pasta.';
            } else {
                $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (:User_name, :User_email, :User_password)";
                $name = [
                    'User_name' => $_POST['user_name'],
                    'User_email' => $_POST['user_email'],
                    'User_password' => $_POST['user_password'],
                ];
                $db->deleteInsert($sql, $name);
                print "<h1 style='color: red'>Registracija sekminga !</h1>";
            }
        }
    }
}
$reg = New Register();
