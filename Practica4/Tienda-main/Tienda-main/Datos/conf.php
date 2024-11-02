<?php

Class Conf {
    private $server;
    private $user;
    private $password;  
    private $database;
    private $connection;
    private $result_query;

    public function __construct() {
        $this->server = "127.0.0.1"; // IP del localhost, tambien puedes poner localhost 
        $this->user = "root"; // tu usuario, root por defecto
        $this->password = ""; // tu contrasenia
        $this->database = "dbtienda"; // nombre de la base de datos
    }

    // funcion que nos permite conectarnos al servidor y a su vez a la base de datos
    protected function connect() {
        @$this->connection = mysqli_connect(
            $this->server, 
            $this->user, 
            $this->password, 
            $this->database)
            or die("error". mysqli_connect_error());
        return $this->connection;
    }

    // funcion para cerrar la conexion
    protected function disconnect() {
        return mysqli_close($this->connection);
    }

    // funcion para ejecutar las consultas
    public function exec_query($query) {
        $this->result_query = mysqli_query($this->connect(), $query) 
            or die("error". mysqli_error($this->connection));
        $this->disconnect();
        return $this->result_query;
    }

}