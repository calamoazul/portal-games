<?php

namespace HTTP;

/**
 * Clase para gestionar las peticiones
 * 
 */

class Request {

    /**
     * Datos enviados por la Request
     * @var array
     */
    public $data;

    public function __construct (array $data) {

        $this->data = $data;

    } 
}