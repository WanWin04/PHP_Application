<?php

if (isset($_GET['action'])) {
    $request = $_GET['action'];

    if ($request == 'home') {
        $route = "HomeController@indexAction";
    }
    if ($request == 'login') {
        $route = "UserController@LoginAction";
    }
    if ($request == 'logout') {
        $route = "UserController@LogoutAction";
    }
    if ($request == 'register') {
        $route = "UserController@RegisterAction";
    }
}
