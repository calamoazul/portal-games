<?php

namespace Calamo\DB;

/**
 * Clase para gestionar la base de datos
 * 
 */

class Database{

    /**
     * Servidor de la base de datos
     * @var string
     */
    public $db_host;

    /**
     * Nombre de la base de datos
     * @var string
     */

    public $db_name;

    /**
     * Usuario de la base de datos
     * @var string
     */
    public $db_user;

    /**
     * Contraseña de la base de datos
     * @var string
     */
    public $db_pass;

    public function __construct($db_host = DB_HOST, $db_name = DB_NAME, $db_user = DB_USER, $db_pass = DB_PASSWORD) {

        $this->db_host = $db_host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
    }

    /**
     * Método para realizar búsqueda en la base de datos
     * @param string $sql Sentencia sql
     */
    public function query(string $sql){

        /**
         * Resultado de la búsqueda de la base de datos
         * @var array
         */
        $result = [];

        $connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        $query = mysqli_query($connection, $sql);

        while($data = mysqli_fetch_assoc($query)):
            array_push($data, $result);
        endwhile;

        mysqli_close($connection);
        
        return $result;
    }

    /**
     * Método para guardar registros en la base de datos
     * 
     * @param string $table Nombre de la base de datos
     * @param mixed $data Datos a guardar
     * @return mysqli_result 
     */

    public function save($table, $data){

        /**
         * Nombres de las columnas de las bases de datos
         * @var array
         */
        $keys = [];

        /**
         * Valores a insertar en la base de datos
         * @var array
         */
        $values = [];

        foreach($data as $key => $value) {
            array_push($keys, $key);
            array_push($values, $value);
        }

        $connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        $sql = 'INSERT into ' . $table . ' (' . implode(',', $keys)
        . ' ) values ( '. implode(',', $values) . ')';

        mysqli_query($connection, $sql);

        mysqli_close($connection);


    }
}