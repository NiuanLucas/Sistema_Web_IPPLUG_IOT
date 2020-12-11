<?php
namespace App;

//Classe para gerenciar as dependências, é receita de bolo. Não precisa entender 100%.

class Loader {
    
    public function register(){
        spl_autoload_register(array($this, 'autoload'));
    }
    
    public function autoload($class){
        $class = DIR.DS.str_replace("\\", DS, $class).".php";
        include_once $class;
    }
}