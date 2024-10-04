<?php
if (!function_exists('setActive')) {
    function setActive($routeName)
    {
        return Route::currentRouteName() == $routeName ? 'active' : '';
    }
}

?>
