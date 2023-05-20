<?php

/**
 * Función para el autoload
 * @param string $class Clase a cargar
 * @return void
 */

function load_classes($class) {

    /**
     * Longitud del namespace de las classes
     * @var string
     */
    $len = strlen('Calamo');

   
    $new_class = str_replace('\\', '/', $class);

    if(!str_contains($class, 'Calamo')):
        $file = $new_class. '.php';
    else: 
        $len = strlen('/Calamo');
        $file = substr($new_class, $len) . '.php'; 
    endif;
    if(file_exists($file)):
        require_once $file;
    else: 
        var_dump($file);
    endif;
      
}

spl_autoload_register('load_classes');