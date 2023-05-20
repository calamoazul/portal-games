<?php

namespace Calamo\Controllers;
use Calamo\Models\Game;
use HTTP\Request;


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

    /**
     * Método para crear un videojuego en la base de datos
     * 
     */
    
    public function store(Request $request) {

        $data = $request->validate();

        $game = new Game($data);

        $game->create();
    }
}