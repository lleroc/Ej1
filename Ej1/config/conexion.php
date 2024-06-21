<?php

//POO
class Clase_Conectar
{
    public $conexion;
    protected $db;
    private $server = "localhot";
    private $usuario = "root";
    private $clave = "root";  //contrasenia super usuario en mamp
    private $base = "quinto";

    public function Procedimiento_Conectar()
    {
        $this->conexion = mysqli_connect($this->server, $this->usuario, $this->clave, $this->base);
        mysqli_query($this->conexion, "SET NAME 'utf8'");
        if ($this->conexion == 0) die("error al conectar con mysql");
        $this->db = mysqli_select_db($this->conexion, $this->base);
        if ($this->db == 0) die("error al conectar con la base de datos");
    }
}
