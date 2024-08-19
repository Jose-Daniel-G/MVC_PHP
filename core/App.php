<?php

class App
{
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $routes = require 'app/routes.php'; // Cargar las rutas desde routes.php
        
        $url = $this->parseUrl();

        $route = $url ? implode('/', $url) : ''; // Convierte la URL en una cadena de ruta

        // Verifica si la ruta existe en la matriz de rutas
        if (array_key_exists($route, $routes)) {
            $this->controller = $routes[$route][0];
            $this->method = $routes[$route][1];
        }

        // Cargar el controlador
        require_once 'app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Llamar al método con los parámetros si existen
        $this->params = $url ? array_slice($url, 2) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
