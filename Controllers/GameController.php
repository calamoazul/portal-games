<?php

namespace Calamo\Controllers;


/**
 * Controlador para el modelo Game
 */

class GameController {


    /**
     * Método para cargar la vista de catálogo
     * 
     */

    public static function index() {
        get_view('catalogo');
    }
}