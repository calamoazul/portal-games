<?php


/**
 * Función para cargar vistas
 * 
 * @param string $name_view Nombre de la vista
 * @param mixed $data Datos a cargar en la vista
 * @return void
 */

 function get_view(string $name_view, mixed $data = null) {

    $file = 'views/' . $name_view . '.php';
    if(is_array($data)):
      extract($data);
    endif;
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

