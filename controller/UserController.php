<?php

class UserController
{
    public $model;

    public function CheckUserAccess()
    {
        if (!isset($_SESSION['userLogInStatus'])) {
            require_once('../view/login.php');
            exit;
        }
    }

    public function LoginAction()
    {
        if (isset($_GET['logout'])) {
            unset($_SESSION['userLogInStatus']);
        }

        if (isset($_POST['LoginSubmit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $checkUserLogin = $this->model->CheckUserLogin($username, md5($password));
            if ($checkUserLogin == 1) {
                $_SESSION['userLogInStatus'] = 1;
                return require_once('../view/dashboard.php');
            }
        }

        if (!isset($_SESSION['userLogInStatus'])) {
            return require_once('../view/login.php');
        } else {
            return require_once('../view/dashboard.php');
        }
    }

    public function LogoutAction()
    {
        unset($_SESSION['userLogInStatus']);
        return require_once('../view/login.php');
    }

    public function RegisterAction()
    {
        if (isset($_POST['RegisterSubmit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->model->UserRegister($username, md5($password));
            $_SESSION['userLogInStatus'] = 1;
        }

        if (!isset($_SESSION['userLogInStatus'])) {
            return require_once('../view/register.php');
        } else {
            return require_once('../view/dashboard.php');
        }
    }
}
