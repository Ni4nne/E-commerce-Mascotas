<?php
// Se define la clase llamada conexion y se establecen los valores
class Conexion
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "db_tienda";
    private $con;

    //Se define el constructor
    public function __construct()
    {
        $this->con = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($this->con->connect_error) {
            die("Conexión fallida: " . $this->con->connect_error);
        }
    }

    //Se establece el método getConexion
    public function getConexion()
    {
        return $this->con;
    }
    //Se establece el método cerrarConexion
    public function cerrarConexion()
    {
        $this->con->close();
    }
}