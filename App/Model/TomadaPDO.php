<?php

namespace App\Model;


// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');

/**
 * Description of TomadaPDO
 *
 * @author Matheus
 */
class TomadaPDO {
    private $pdo;
    
    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    public function inserirSensor(Sensor $sensor){
        $stmt = $this->pdo->prepare("INSERT INTO sensores VALUES"
                . "(default, :fogo, :distancia, :presenca, :gas, :temperatura, :umidade, :tensao, :corrente, :potencia, :data, :tomada1, :tomada2, :tomada3, :tomada4)");
        $stmt->bindValue(":temperatura", $sensor->getTemperatura());
        $stmt->bindValue(":umidade", $sensor->getUmidade());
        $stmt->bindValue(":fogo", $sensor->getFogo());
        $stmt->bindValue(":gas", $sensor->getGas());
        $stmt->bindValue(":presenca", $sensor->getPresenca());
        $stmt->bindValue(":distancia", $sensor->getDistancia());
        $stmt->bindValue(":corrente", $sensor->getCorrente());
        $stmt->bindValue(":potencia", $sensor->getPotencia());
        $stmt->bindValue(":tensao", $sensor->getTensao());
        $stmt->bindValue(":tomada1", $sensor->getTomada1());
        $stmt->bindValue(":tomada2", $sensor->getTomada2());
        $stmt->bindValue(":tomada3", $sensor->getTomada3());
        $stmt->bindValue(":tomada4", $sensor->getTomada4());
        $stmt->bindValue(":data", date('Y-m-d H:i'));
        
        $stmt->execute();
        
        return $stmt->rowCount() > 0;
    }
    
    public function pegarSensores(){
        $stmt = $this->pdo->prepare("SELECT *, date_format(data_registro, '%H:%i') as 'horario', date_format(data_registro, '%d/%m/%Y') as 'data' FROM sensores ORDER BY data_registro ASC");
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "App\Model\Sensor");
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
    
    
    public function alterarTomada(Usuario $usuario){
    	$stmt = $this->pdo->prepare("UPDATE usuarios SET tomada1 = :t1, tomada2 = :t2, tomada3 = :t3, tomada4 = :t4 WHERE id = :id");
    	$stmt->bindValue(":t1", $usuario->getTomada1());
    	$stmt->bindValue(":t2", $usuario->getTomada2());
    	$stmt->bindValue(":t3", $usuario->getTomada3());
    	$stmt->bindValue(":t4", $usuario->getTomada4());
    	$stmt->bindValue(":id", $usuario->getId());
    	$stmt->execute();
    
    }
}
