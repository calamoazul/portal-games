<?php

namespace Calamo\HTTP\Helpers;

enum HTTPRequestMethod: string  {
    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case DELETE = 'DELETE';
}


class Router {

    /**
     * Rutas almacenadas en la aplicación
     */
    protected $routes = [];

    public function __construct(){
        foreach (HTTPRequestMethod::cases() as $method) {
            $this->routes[$method->value] = [];
        }
    }

    /**
     * Método para añadir registros de peticiones GET
     * 
     * @param string $uri uri de la request
     * @param array|callable  Método a ejecutar
     */

    public function get(string $uri, array|callable $action) {

        $this->routes[HTTPRequestMethod::GET->value][$uri] = $action;
    }

    /**
     * Método para añadir registros de peticiones POST
     * 
     * @param string $uri uri de la request
     * @param array|callable  Método a ejecutar
     */

    public function post(string $uri, array|callable $action) {

        $this->routes[HTTPRequestMethod::POST->value][$uri] = $action;
    }

    /**
     * Método para añadir registros de peticiones PUT
     * 
     * @param string $uri uri de la request
     * @param array|callable  Método a ejecutar
     */

    public function put(string $uri, array|callable $action) {

        $this->routes[HTTPRequestMethod::PUT->value][$uri] = $action;
    }

    /**
     * Método para añadir registros de peticiones DELETE
     * 
     * @param string $uri uri de la request
     * @param array|callable  Método a ejecutar
     */

    public function delete(string $uri, array|callable $action) {

        $this->routes[HTTPRequestMethod::DELETE->value][$uri] = $action;
    }

    
}