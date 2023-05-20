<?php

namespace Calamo\Models;
use Calamo\DB\Database;

class Game {

    /**
     * Nombre del juego
     * @var string
     */
    public $name;

    /**
     * Portada del juego
     * @var string
     */
    public $cover;

    /**
     * Estudio desarrollador del juego
     * @var string
     */
    public $studio;

    /**
     * Género del juego
     * @var string
     */
    public $gender;

    /**
     * Precio del juego
     * @var float
     */
    public $price;

    /**
     * Descripción del juego
     * @var string
     */
    public $description;
    
    /**
     * Stock del juego
     * @var int
     */
    public $stock;

    /**
     * Estado del juego
     * @var string
     */
    public $state;

    /**
     * Instancia del Modelo Game
     * @param array $data
     */
    public function __construct(array $data) {

        $this->name = $data['name'];
        $this->cover = $data['cover'];
        $this->studio = $data['studio'];
        $this->gender = $data['gender'];
        $this->price = $data['price'];
        $this->description = $data['description'];
        $this->stock = $data['stock'];
        $this->state = $data['state'];
        
    }

    /**
     * Método para crear un juego en la base de datos
     * @var array $data Datos del juego
     */
    public function create() {

        $db = new Database();

        return $db->save('games', $this);
        
    }
}