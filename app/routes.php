<?php
// app/routes.php

$routes = [
    '' => ['HomeController', 'index'], // Ruta principal
    'dashboard' =>   [ 'HomeController', 'index'],
    'users' =>        ['UserController', 'index'],
    'users/create' => ['UserController', 'create'],
    'users/edit' =>   ['UserController', 'edit'],
    'users/show' =>   ['UserController', 'show'],
    // Añadir más rutas según sea necesario
];

return $routes;