<?php

include_once('config.php');
include_once("Connection.php");

spl_autoload_register(function ($class) {
    if (file_exists('controller/'.$class.'.php')) {
        require 'controller/'.$class.'.php';
    }

    if (file_exists('model/'.$class.'.php')) {
        require 'model/'.$class.'.php';
    }
});

$db = Connection::connect($config);

