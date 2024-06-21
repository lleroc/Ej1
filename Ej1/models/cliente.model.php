<?php

class Clase_Cliente
{

    public function todos()
    {
        try {
            $con = new Clase_Conectar();
            $con = $con->Procedimiento_Conectar();
            $cadena = "SELECT * FROM clientes";
            $resultado = mysqli_query($con, $cadena);
            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        } finally {
            $con->close();
        }
    }
    public function uno($id)
    {
        try {
            $con = new Clase_Conectar();
            $con = $con->Procedimiento_Conectar();
            $cadena = "SELECT * FROM clientes where id=$id";
            $resultado = mysqli_query($con, $cadena);
            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        } finally {
            $con->close();
        }
    }
    public function insertar($nombre, $apellido, $email, $telefono)
    {
        try {
            $con = new Clase_Conectar();
            $con = $con->Procedimiento_Conectar();
            $cadena = "INSERT INTO `clientes`(`nombre`, `apellido`, `email`, `telefono`) VALUES ('$nombre','$apellido','$email',$telefono')";
            if (mysqli_query($con, $cadena)) {
                return "ok";
            } else {
                return $con->error;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        } finally {
            $con->close();
        }
    }
    public function actualizar($id, $nombre, $apellido, $email, $telefono)
    {
        try {
            $con = new Clase_Conectar();
            $con = $con->Procedimiento_Conectar();
            $cadena = "UPDATE `clientes` SET ,`nombre`='$nombre',`apellido`='$apellido',`email`='$email',`telefono`='$telefono' WHERE `id`=$id";
            if (mysqli_query($con, $cadena)) {
                return "ok";
            } else {
                return $con->error;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        } finally {
            $con->close();
        }
    }
    public function eliminar($id)
    {
        try {
            $con = new Clase_Conectar();
            $con = $con->Procedimiento_Conectar();
            $cadena = "DELETE FROM clientes where id=$id";
            if (mysqli_query($con, $cadena)) {
                return "ok";
            } else {
                return $con->error;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        } finally {
            $con->close();
        }
    }
    public function buscarXNombre($nombre)
    {
        try {
            $con = new Clase_Conectar();
            $con = $con->Procedimiento_Conectar();
            $cadena = "SELECT * FROM clientes where nombre=$nombre";
            $resultado = mysqli_query($con, $cadena);
            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        } finally {
            $con->close();
        }
    }
}
