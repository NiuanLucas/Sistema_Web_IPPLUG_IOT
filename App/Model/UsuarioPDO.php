<?php

namespace App\Model;

class UsuarioPDO {
    //put your code here
    private $pdo;
    
    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    public function getUsuario($nome, $senha) {
        $sql = "SELECT * FROM usuarios WHERE email = :nome and senha = :senha";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":nome", $nome, \PDO::PARAM_STR);
        $stmt->bindValue(":senha", $senha, \PDO::PARAM_STR);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Usuario");
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getUsuarioId($id) {
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_STR);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Usuario");
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function insertUsuario($dados){

        try{
        $sql = "INSERT INTO usuarios(hora_cadastro, nome, email, senha, nascimento, telefone, sexo, estado, foto, cor) VALUES(now(), :nome, :email, :senha, :nascimento, :telefone, :sexo, :estado, :foto, :cor)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":nome", $dados["nome"], \PDO::PARAM_STR);
        $stmt->bindValue(":email", $dados["email"], \PDO::PARAM_STR);
        $stmt->bindValue(":senha", $dados["senha"], \PDO::PARAM_STR);
        $stmt->bindValue(":nascimento", $dados["nascimento"], \PDO::PARAM_STR);
        $stmt->bindValue(":telefone", $dados["telefone"], \PDO::PARAM_STR);
        $stmt->bindValue(":sexo", $dados["sexo"], \PDO::PARAM_STR);
        $stmt->bindValue(":estado", $dados["estado"], \PDO::PARAM_STR);
        $stmt->bindValue(":foto", 'userM.png', \PDO::PARAM_STR);
        $stmt->bindValue(":cor", $dados["cor"], \PDO::PARAM_STR);
        
        $stmt->execute();
        
        } catch (Exception $ex){
            throw new Exception($ex, 1);
            
        }
        return $stmt->rowCount() > 0;
    }

    public function atualizarCor($dados){
        $sql = "UPDATE usuarios SET cor = :cor WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":cor", $dados["cor"], \PDO::PARAM_STR);
        $stmt->bindValue(":id", $dados["id"], \PDO::PARAM_STR);
        $stmt->execute();
    }

    
    public function atualizarIp($dados){
        $sql = "UPDATE usuarios SET ip = :ip WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":ip", $dados["ip"], \PDO::PARAM_STR);
        $stmt->bindValue(":id", $dados["id"], \PDO::PARAM_INT);
        $stmt->execute();
    }


    /*public function uploadFoto($foto, $sexo)
    {
        if (empty($foto)) {
            return "user" . $sexo . ".png";
        }else {
            $validas = array(".jpg", ".png");
            $extensao = strtolower(substr($foto["name"], -4));
            $newName = md5(time()) . $extensao;

            if ($extensao === $validas[0] || $extensao === $validas[1]) {
                $dir = "../IpPlug1/App/View/uploads/";
                move_uploaded_file($foto['tmp_name'], $dir . $newName);
                return $newName;
            }else{
                return "user" . $sexo . ".png";
            }
        }
    }*/
    
}

?>