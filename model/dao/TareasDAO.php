<?php

require_once 'config/Conexion.php';

class TareasDAO {
    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }



  public function selectAll($parametro) {
    // SQL de la sentencia
    $sql = "SELECT * FROM tareas WHERE tareas_nombre LIKE :b1";
    $stmt = $this->con->prepare($sql);
    // Preparar la sentencia
    $conlike = '%' . $parametro . '%';
    $data = array('b1' => $conlike);
    // Ejecutar la sentencia
    $stmt->execute($data);
    // Recuperar resultados
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Retornar resultados
    return $resultados;
}


  public function selectOne($id) { // buscar un producto por su id
        $sql = "select * from tareas where ".
        "tareas_id =:id";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $tareas = $stmt->fetch(PDO::FETCH_ASSOC);// fetch retorna el primer registro
        // retornar resultados
        return $tareas;
    }

    public function insert($tareas) {
        try {
            // Sentencia SQL
            $sql = "INSERT INTO tareas (tareas_nombre, tareas_descripcion, tareas_estado, tareas_prioridad, tiempo_estimado) VALUES (:nombre, :descripcion, :estado, :prioridad, :tiempo)";
    
            // Bind parameters
            $sentencia = $this->con->prepare($sql);
            $data = array(
                'nombre' => $tareas->getNombre(),
                'descripcion' => $tareas->getDescripcion(),
                'estado' => $tareas->getEstado(),
                'prioridad' => $tareas->getPrioridad(),
                'tiempo' => $tareas->getEstimado()
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
    
    public function update($tareas){
        try{
            //prepare
            $sql = "UPDATE tareas SET tareas_nombre=:nombre," .
                   "tareas_descripcion=:descripcion,tareas_estado=:estado,tareas_prioridad=:prioridad," .
                   "tiempo_estimado=:tiempo WHERE tareas_id =:id";
    
            //bind parameters
            $sentencia = $this->con->prepare($sql);
            $data = array(
                'nombre' =>  $tareas->getNombre(),
                'descripcion' =>  $tareas->getDescripcion(),
                'estado' =>  $tareas->getEstado(),
                'prioridad' =>  $tareas->getPrioridad(),
                'tiempo' =>  $tareas->getEstimado(),
                'id' => $tareas->getId()
            );
    
            //execute
            $sentencia->execute($data);
            
            //retornar resultados, 
            if ($sentencia->rowCount() <= 0) {
                return false;
            }
        }catch(Exception $e){
            echo $e->getMessage();
            return false;
        }
        return true;       
    }
    
    public function delete($tareas) {
        try {
            // Prepare
            $sql = "DELETE FROM tareas WHERE tareas_id = :id";
            
            // Bind parameters
            $sentencia = $this->con->prepare($sql);
            $data = array('id' => $tareas->getId());
    
            // Execute
            $sentencia->execute($data);
            
            // Retornar resultados
            if ($sentencia->rowCount() <= 0) { // Verificar si se eliminó
                return false;
            }
        } catch(Exception $e) {
            echo $e->getMessage();
            return false;
        }
        
        return true;
    }
    
    
    
}
