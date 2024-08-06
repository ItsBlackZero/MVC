<?php
require_once 'model/dao/UsuariosDAO.php';
require_once 'model/dto/Usuario.php';

class LoginController {
    private $model;
    public function __construct()
    {
        $this->model= new UsuariosDAO;
    }

    public function index(){
    //comunica con el modelo (enviar datos o obtener datos)
      $resultados = $this->model->obtenerUsuario("");
      // comunicarnos a la vista
      $titulo="Login";
      require_once "view/estaticas/login.php";
    }

    public function usuarioValidado() {
        $titulo = "Login";
    
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $usuario = new Usuario();
            $usuario->setUsuario($_POST["username"]);
            $usuario->setClave($_POST["pasword"]);
            $resultado = $this->model->isExists($usuario);
            $_SESSION['login'] = $_POST["username"];
            if ($resultado) {
                echo $_SESSION['login'];
                header("Location:index.php?");
                exit(); // Detener la ejecución después de la redirección
            } else {
                // Manejar el caso en que el usuario no sea válido
                // Por ejemplo, mostrar un mensaje de error
                echo "Usuario o contraseña incorrectos.";
            }
        }
    }
}
?>