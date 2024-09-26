<?php
if (!function_exists('setActive')) {
    function setActive($routeName)
    {
        return Route::currentRouteName() == $routeName ? 'active' : '';
    }
}

?>

In composer.json


 "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/"
        },
        "files": [
            "app/helpers.php"
        ]
    }