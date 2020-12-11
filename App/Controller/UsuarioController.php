<?php

namespace App\Controller;

use App\Model\UsuarioPDO;
use App\Superclasses\Controller;
use App\Superclasses\View;
use App\Model\Usuario;
use App\Model\TomadaPDO;
use App\Model\Tomada;

class UsuarioController extends Controller {
    private $usuariopdo;
    private $usuario;
    private $tomadapdo;
    
    public function __construct(UsuarioPDO $usuariopdo, TomadaPDO $tomadapdo) {
        parent::__construct();
        $this->usuariopdo = $usuariopdo;
        $this->usuario = $this->restore();
        $this->tomadapdo = $tomadapdo;
    }
    
    public function index() {
        $this->view->render("login");
    }

    public function login(){
        if (isset($_POST["email"]) && isset($_POST["senha"])){
            $this->usuario = $this->usuariopdo->getUsuario($_POST["email"], $_POST["senha"]);

            if ($this->usuario instanceof Usuario) {
                header("Location: index.php?page=usuario&action=userpage");
            }else{
                $this->view->set("erro", "E-mail ou senha incorretos!");
                $this->view->render("login");
            }
        }else{
            $this->view->set("erro", "<b style='color:#ff0000;'></br> Email ou Senha Incorretos! </br></b> ");
            $this->view->render("login");
        }
    }
       
    public function userpage() {
    	if($this->usuario instanceof Usuario){
	        $this->view->set("sensores", $this->tomadapdo->pegarSensores());
	        $this->view->set("log", $this->usuario);
	        $this->view->render("userpage");
	}else{
		header("Location: index.php?page=usuario");	
	}
    }
    
    public function cadastro(){
        $this->view->render("cadastro");
    }
    
    public function cadastrar(){
        if (!(isset($this->usuario) && empty($_POST))) {
            if ($this->usuariopdo->insertUsuario($_POST)) {
                $this->usuario = $this->usuariopdo->getUsuario($_POST["email"], $_POST["senha"]);
                $this->userpage();
            } else {
                $this->cadastro();
            }
        } else {
            $this->userpage();
        }
    }

    public function __destruct() {
        $_SESSION["usuario"] = serialize($this->usuario);
    }

    public function restore(){
        return isset($_SESSION["usuario"])? unserialize($_SESSION["usuario"]) : null;
    }

    public function cor(){
    	$this->usuariopdo->atualizarCor($_POST);
    	$this->usuario = $this->usuariopdo->getUsuarioId($this->usuario->getId());
    	header("Location: index.php?page=usuario&action=userpage");
    }
    
    public function deslogar(){
    	unset($_SESSION["usuario"]);
    	unset($this->usuario);
    	header("Location: index.php?page=usuario");
    }
    
    public function ip(){
    	$this->usuariopdo->atualizarIp($_POST);
    	$this->usuario = $this->usuariopdo->getUsuarioId($this->usuario->getId());
    	header("Location: index.php?page=usuario&action=userpage");
    }
    
    public function tomada(){
    
    	$method = 'set'.ucfirst($_POST['id']);
    	$this->usuario->$method($_POST["nome"]);
    	$this->tomadapdo->alterarTomada($this->usuario, $_POST["id"]);
    	
    	header("Location: index.php?page=usuario&action=userpage");
    
    }

}
