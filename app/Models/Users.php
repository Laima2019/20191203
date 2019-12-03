<?php

namespace user;

// inkludas parodo, kad bus naudojamos formos ir lenteles
include_once 'Tables.php';
include_once 'Forms.php';

// kai indekse index.php iskvietinesim metodus, reikes include
use db\Database;
use form\Forms;
use datatable\Tables;

class Users
{
    public function viewPostsById($user_id)
    {
        $db = New Database();
        $sql = "SELECT `id_posts`, `u_id`, `title`, `text`, `date` FROM `posts` WHERE `u_id` = '$user_id'";
        $postsArrayById = $db->select($sql);

        $userPostTable = New Tables();
        $userPostTable->userPostsTable($postsArrayById);
    }

    public function editPost($post_id)
    {
        $db = New Database();
        $sql = "SELECT `id_posts`, `u_id`, `title`, `text`, `date` FROM `posts` WHERE `u_id` = '$post_id'";
        $postData = $db->select($sql);

        $title = $postData[0]->title;
        $text = $postData[0]->text;

        if (isset($_POST['update'])) {
            $sqlPost = "UPDATE `posts` SET `title` = :title, `text` =:text WHERE `id_post` = '$post_id'";
            $name = [
                'title' => $_POST['title'],
                'text' => $_POST['Text'],
            ];
            $updateForm = new Forms();
            $updateForm->editForm();
        }
    }
}

$users = new Users;




//padalinime  register ir login ir perkeliame i atinkamas klases Login.php ir Register.php

//namespace user;
//
//include_once 'Frame/Database.php';
//include_once 'Forms.php';
//
//use db\Database;
//use form\Forms;
//
//class Users extends Database
//{
////    iraso i db nauja vartotoja arba pakeicia jau esamo vartotojo duomenis pagal el pasta
//    public function insertLogInUserData()
//    {
//        $db = New Database();
//        $form = New Forms();
//        $form->insertLogInUserForm();
//
//        $userEmailData = '';
//
//        if (isset($_POST['register'])) {
//            $userEmailPOST = $_POST['user_email'];
//            $sql = "SELECT `email` FROM `users` where `email` = '$userEmailPOST'";
//            $dataFromDbArray = $db->select($sql);
//            foreach ($dataFromDbArray as $user) {
//                $userEmailData = $user->email;
//                var_dump($userEmailData);
//            }
//            if ($userEmailData === $_POST['user_email']) {
//                print 'Toks useris jau egzistuoja, iveskite kita @ pasta.';
//            } else {
//                $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (:User_name, :User_email, :User_password)";
//                $name = [
//                    'User_name' => $_POST['user_name'],
//                    'User_email' => $_POST['user_email'],
//                    'User_password' => $_POST['user_password'],
//                ];
//                $db->deleteInsert($sql, $name);
//                print "<h1 style='color: red'>Registracija sekminga !</h1>";
//            }
//        }
//
//
//        if (isset($_POST['login'])) {
//            $userEmailPOST = $_POST['user_email'];
//            $sql = "SELECT `name`, `email`, `password`, `role` FROM `users` where `email` = '$userEmailPOST'";
//            $dataFromDbArray = $db->select($sql);
//            foreach ($dataFromDbArray as $user) {
//                if ($user->email === $_POST['user_email'] && $user->password === $_POST['user_password']) {
//                    $user_name = $user->name;
//                    $user_email = $user->email;
//                    $user_psw = $user->password;
//                    $user_role = $user->role;
//                    setcookie("user_data[name]", "$user_name");
//                    setcookie("user_data[email]", "$user_email");
//                    setcookie("user_data[psw]", "$user_psw");
//                    setcookie("user_data[role]", "$user_role");
//                    print 'Sekmingai prisijungete.';
//                } elseif ($user->password !== $_POST['user_password']) {
//                    print 'Neteisingas slaptazodis';
//                }
//            }
//            if (empty($dataFromDbArray)) {
//                print 'Toks vartotojas neegzistuoja.';
//            }
//        }
//        if ($_COOKIE) {
//            if ($_COOKIE['user_data']['role'] == 1) {
//                header('Location: http://localhost:/simple_web_page_layout-master/app/Views/user/darbuotojas.php');
//            } elseif ($_COOKIE['user_data']['role'] == 0) {
//                header('Location: http://localhost:/simple_web_page_layout-master/app/Views/admin/administratorius.php');
//            } elseif ($_COOKIE['user_data']['role'] == 2) {
//                header('Location: http://localhost:/simple_web_page_layout-master/app/Views/team/komandosLyderio.php');
//            } else {
//                header('Location: http://localhost:/simple_web_page_layout-master/app/Views/error.php');
//            }
//        }
//    }
//}
//
//$data = New Users;
?>