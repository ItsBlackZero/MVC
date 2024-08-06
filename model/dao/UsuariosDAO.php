<?php
require_once 'config/Conexion.php';

class UsuariosDAO {
     private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }
     public function obtenerUsuario($username) {
        // sql de la sentencia
        $sql = "select * from usuarios";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        //retorna un arreglo de un objeto lol
        // retorna cada fila como un objeto de una clase anonima
        // cuyos nombres de atributos son iguales a los nombres de las columnas retornadas
        // retorna datos para el controlador
        return $resultados;
    }
    
    public function isExists($usuario) {
        try {
            // Sentencia SQL corregida
            $sql = "SELECT username, password FROM usuarios WHERE username = :username AND password= :pasword";
        
            $sentencia = $this->con->prepare($sql);
            $data = array(
                'username' => $usuario->getUsuario(),
                'pasword' => $usuario->getClave()
            );
        
            // Execute
            $sentencia->execute($data);
        
            // Retornar resultados
            if ($sentencia->rowCount() <= 0) {
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
        return true;
        
    }

    public function insert($cat){


    }
    public function update($cat){


    }

}
