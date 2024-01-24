<?php

$routeList = [];

class Route
{
    public static function Add($routeName, $pointControllerAction)
    {
        $GLOBALS['routeList'][] = ['name' => $routeName, 'action' => $pointControllerAction];
    }

    public static function Run()
    {
        $request = $_SERVER['REQUEST_URI'];

        foreach ($GLOBALS['routeList'] as $r) {
            if ($r['name'] == $request) {
                return $r['action'];
            }
        }

        return null;
    }
}
