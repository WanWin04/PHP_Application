<?php
// include_once(__DIR__ . "/route.php");

// Route::Add("/home", "HomeController@indexAction");
// Route::Add("/login", "UserController@LoginAction");
// Route::Add("/logout", "UserController@LogoutAction");
// Route::Add("/register", "UserController@RegisterAction");
// Route::Add("/upload", "FileController@UploadAction");
// Route::Add("/fileUpload", "FileController@UploadAction");

// $route = Route::Run();

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
    if ($request == 'upload') {
        $route = "FileController@UploadAction";
    }
    if ($request == 'fileUpload') {
        $route = "FileController@UploadAction";
    }
}
