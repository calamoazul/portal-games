<?php
namespace HTTP;

/**
 * Clase para gestionar peticiones HTTP
 * 
 */

 class Route {


    /**
     * Rutas recogidas en la aplicación
     * @var array
     */

    public $routes;

    public function __construct() {
        
    }

    /**
     * Instancia de la clase Route
     */

     public static function instance(){

        return new self();
     }

    /**
     * Método para realizar peticiones GET
     * 
     * @param string $uri_request Uri de la petición
     * @param array $options Clase y método a ejecutar en la petición
     * 
     */

    public static function get(string $uri_request, array $options) {

        /**
         * Uri
         * @var string
         */
        $uri_request === '/' ? $uri = $uri_request : $uri = '/' . $uri_request;

        /**
         * Clase a instanciar en la petición
         * @var class 
         */
        $class = $options[0];


        /**
         * Método de la clase que se ejecutará en la petición
         * @var callable
         */
        $method = $options[1];

        if($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === $uri):
            http_response_code(200);
            return $class::$method();
        endif;
    }

    /**
     * Método para realizar peticiones POST
     * 
     * @param string $uri_request Uri de la petición
     * @param array $method Clase y método a ejecutar en la petición
     * 
     */

     public static function post(string $uri_request, array $options) {

         /**
         * Uri
         * @var string
         */
        $uri_request === '/' ? $uri = $uri_request : $uri = '/' . $uri_request;

        /**
         * Clase a instanciar en la petición
         * @var class 
         */
        $class = $options[0];


        /**
         * Método de la clase que se ejecutará en la petición
         * @var callable
         */
        $method = $options[1];

        if($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === $uri):
            http_response_code(200);
            return $class::$method();
        endif;
     }

     /**
     * Método para realizar peticiones PUT
     * 
     * @param string $uri_request Uri de la petición
     * @param array $method Clase y método a ejecutar en la petición
     * 
     */

    public static function put(string $uri_request, array $options) {

         /**
         * Uri
         * @var string
         */
        $uri_request === '/' ? $uri = $uri_request : $uri = '/' . $uri_request;

        /**
         * Clase a instanciar en la petición
         * @var class 
         */
        $class = $options[0];


        /**
         * Método de la clase que se ejecutará en la petición
         * @var callable
         */
        $method = $options[1];

        if($_SERVER['REQUEST_METHOD'] === 'PUT' && $_SERVER['REQUEST_URI'] === $uri):
            http_response_code(200);
            return $class::$method();
        endif;

    }

    /**
     * Método para realizar peticiones DELETE
     * 
     * @param string $uri_request Uri de la petición
     * @param array $method Clase y método a ejecutar en la petición
     * 
     */

     public static function delete(string $uri_request, array $options) {

         /**
         * Uri
         * @var string
         */
        $uri_request === '/' ? $uri = $uri_request : $uri = '/' . $uri_request;

        /**
         * Clase a instanciar en la petición
         * @var class 
         */
        $class = $options[0];


        /**
         * Método de la clase que se ejecutará en la petición
         * @var callable
         */
        $method = $options[1];

        if($_SERVER['REQUEST_METHOD'] === 'DELETE' && $_SERVER['REQUEST_URI'] === $uri):
            http_response_code(200);
            return $class::$method();
        endif;
     }

     /**
      * método para cargar la vista 404
      */
     public function load_404() {

        if(!in_array($_SERVER['REQUEST_URI'], $this->routes)):
            get_view('404');
        endif;
     }
 }

 Route::instance();