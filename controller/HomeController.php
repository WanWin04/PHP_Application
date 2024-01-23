<?php

class HomeController extends UserController
{
    public $model;

    public function indexAction()
    {
        $this->CheckUserAccess();   
        return require_once('../view/dashboard.php');
    }
}

// if (isset($_GET['logout'])) {
//     unset($_SESSION['userLogInStatus']); 
// } 

// if (isset($_SESSION['userLogInStatus'])) {
//     return require_once('../view/dashboard.php');
// }
// if (isset($_GET['register'])) {
//     return require_once('../view/register.php');
// }
// if (isset($_GET['login']) || isset($_GET['logout'])) {
//     return require_once('../view/login.php');
// }
