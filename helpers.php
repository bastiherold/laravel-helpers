<?php

function isActiveRoute($route, $output = 'active')
{
    return (Route::currentRouteName() == $route) ? $output : null;
}

function areActiveRoutes(Array $routes, $output = 'active')
{
    foreach ($routes as $route) {
        if (Route::currentRouteName() == $route) return $output;
    }
}

function containsActiveRoute($route , $output = 'active')
{
    return (mb_strpos(Route::currentRouteName(), $route) !== false) ? $output : null;
}
