<?php
namespace Calamo\Controllers;

/**
 * Controlador para cargar vistas básicas del portal
 */

class HomeController {

    /**
     * Método para cargar la vista de la home
     */

    public static function index() {
        
        return get_view('home');
    }

    /**
     * Método para cargar la vista de la página de contacto
     * 
     */

    public static function contacto(){

        return get_view('contacto');
    }
}