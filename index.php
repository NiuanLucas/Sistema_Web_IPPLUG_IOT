<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="O projeto IPPLUG tem o intuito de revolucionar os conceitos de IoT e Acessibilidade. O IPPLUG trabalha com vários mecanismos de acessibilidade para usuário" /> 
        
        <meta name="google-site-verification" content="yrAQHPwU8JXfcqKabevTo6ANkufT-kzi8NTeKIT_LkE" />
        
        <meta name="keywords" content=" ipplug, ip plug, iplug, IPPLUG, IP PLUG, ipfire, ip fire, IPFIRE, tomada inteligente, cefet, niuan, Niuan Lucas, João Paulo Costa, Barreto Lucas, Matheus Zaché, Tomada Inteligente, IoT, Internet das Coisas, Cefet, Nova Iguaçu, Arduino   "/>  
        <meta name="robots" content="index, follow">
        
        
        <link rel="shortcut icon" href="https://ipplug.xyz/App/favicon.ico" type="image/x-icon">
        <link rel="icon" href="https://ipplug.xyz/App/favicon.ico" type="image/x-icon">
        <title>IPPLUG - Rede Sensorial para Acessibilidade</title>
    </head>
    <body>
        <?php
        define("DIR", dirname(__FILE__));
        define("DS", DIRECTORY_SEPARATOR);
        
        include_once DIR.DS."App".DS."Loader.php";
        $loader = new \App\Loader();
        $loader->register();

        session_start();

        //PDO para desenvolvimento
        $pdo = new \PDO("mysql:host=127.0.0.1;dbname=ipplug_usuarios", "root", "", array(\PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES utf8", "SET time_zone = 'Europe/London'"));

        //PDO para o site
        //$pdo = new \PDO("mysql:host=198.71.237.22;dbname=ipplug_usuarios", "pv97ke0rej6o", "Ipplug#1234");

        $usuariopdo = new App\Model\UsuarioPDO($pdo);
        $tomadapdo = new App\Model\TomadaPDO($pdo);
        
        $page = isset($_GET["page"])?$_GET["page"]: "";
        $action = isset($_GET["action"])?$_GET["action"]: "index";
        
        switch ($page){
            //Um case de switch para cada controller
            case "compra":
                $compra = new \App\Controller\CompraController();
                $compra->index();
                break;
            case "usuario":
                $usuario = new App\Controller\UsuarioController($usuariopdo, $tomadapdo);
                $usuario->$action();
                break;
            case "sensor":
                $tomada = new App\Controller\SensorController($tomadapdo);
                $tomada->$action();
                break;
            default:
                $home = new \App\Controller\HomeController();
                $home->index();
                break;
        }
        ?>
    </body>
</html>
