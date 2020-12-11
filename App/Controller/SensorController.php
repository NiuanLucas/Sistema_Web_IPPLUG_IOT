<?php

namespace App\Controller;

use App\Superclasses\Controller;
use \App\Model\TomadaPDO;
/**
 * Description of TomadaController
 *
 * @author pheli
 */
class SensorController extends Controller{
    private $pdo;
    public function __construct(TomadaPDO $pdo) {
        parent::__construct();
        $this->pdo = $pdo;
    }
    
    public function index(){
        if(isset($_GET["token"]))
            $this->view->render('tomada');
        else
            header ("Location: index.php?page=usuario&action=userpage");
    }
    
    public function valores(){
        $sensor = new \App\Model\Sensor();
        $sensor->setDistancia($_POST['distancia']);
        $sensor->setFogo($_POST['chama']);
        $sensor->setGas($_POST['gas']);
        $sensor->setPresenca($_POST['presenca']);
        $sensor->setTemperatura($_POST['temperatura']);
        $sensor->setUmidade($_POST['umidade']);
        $sensor->setCorrente($_POST['corrente']);
        $sensor->setPotencia($_POST['potencia']);
        $sensor->setTensao($_POST['tensao']);
        $sensor->setTomada1($_POST["tomada1"]);
        $sensor->setTomada2($_POST["tomada2"]);
        $sensor->setTomada3($_POST["tomada3"]);
        $sensor->setTomada4($_POST["tomada4"]);
        $bool = $this->pdo->inserirSensor($sensor);
       
        if($bool){
            $this->view->set("sensor", $sensor);
            $this->view->render('valores');
        }else 
            header("Location: index.php?page=usuario&action=userpage");
    }
}
