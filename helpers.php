<?php

function isActiveRoute($route, $output = 'active')
{
    if (is_array($route)) {
        foreach ($route as $r) {
            if (Route::currentRouteName() == $r) return $output;
        }
        
        return null;
    }
    
    return (Route::currentRouteName() == $route) ? $output : null;
}

function containsActiveRoute($route , $output = 'active')
{
    return (mb_strpos(Route::currentRouteName(), $route) !== false) ? $output : null;
}
