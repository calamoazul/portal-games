<?php

namespace Calamo\HTTP;

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

    /**
     * Método para validar datos de la request
     * 
     * @param array|false $data datos a validar
     * @return array
     */

    public function validate($data = false):array {
        
        $validate_data = [];
        foreach($data as $key => $value):
        endforeach;
        return $validate_data;
    }
}