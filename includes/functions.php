<?php


/**
 * Función para cargar vistas
 * 
 * @param string $name_view Nombre de la vista
 * @return void
 */

 function get_view(string $name_view):void {

    $file = 'views/' . $name_view . '.php';

    if(file_exists($file)):
        require_once $file;
    endif;
 }

 /**
  * Función para cargar plantillas
  *
  * @param string $name_template Nombre de la plantilla
  * @return void
  */

  function get_template(string $name_template):void {

    $file = 'templates/' . $name_template . '.php';
    if(file_exists($file)):
        require_once $file;
    endif;
  }

