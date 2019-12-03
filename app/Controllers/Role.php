<?php


namespace role;


class Role
{
    public function __construct()
    {
        if (isset($_POST['register'])) {
            $user_name = $_POST['user_name'];
            $user_email = $_POST['user_email'];
            $user_psw = $_POST['user_password'];
            setcookie("user_data[name]", "$user_name");
            setcookie("user_data[email]", "$user_email");
            setcookie("user_data[psw]", "$user_psw");
            setcookie("user_data[role]", "1");
        }

        if ($_COOKIE){
            if ($_COOKIE['user_data']['role'] == 1) {
                header('Location: http://localhost:8888/simple_web_page_layout/app/Views/user/darbuotojas.php');
            } elseif ($_COOKIE['user_data']['role'] == 0) {
                header('Location: http://localhost:8888/simple_web_page_layout/app/Views/admin/administratorius.php');
            } elseif ($_COOKIE['user_data']['role'] == 2) {
                header('Location: http://localhost:8888/simple_web_page_layout/app/Views/team/komandosLyderio.php');
            }else{
                header('Location: http://localhost:8888/simple_web_page_layout/app/Views/error.php');
            }
        }
    }
}
$role = New Role();