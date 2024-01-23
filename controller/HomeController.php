<?php

class HomeController
{
    public $model;

    public function indexAction()
    {
        if (isset($_POST['LoginSubmit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $checkUserLogin = $this->model->CheckUserLogin($username, $password);
            if ($checkUserLogin == 1) {
                $_SESSION['userLogIn'] = 1;
            }
        }
        $this->routeManager();
    }

    public function routeManager()
    {
        if (isset($_SESSION['userLogIn'])) {
            return require_once('view/dashboard.php');
        }
        return require_once('view/login.php');
    }
}
