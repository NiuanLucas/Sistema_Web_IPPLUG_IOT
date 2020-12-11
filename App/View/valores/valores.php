<!DOCTYPE html>
<html>
	<head>
	<title> IP-PLUG / Valores </title>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="2;url=https://ipplug.xyz/index.php?page=usuario&action=userpage">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.45, user-scalable=no">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>		
	</head>
<center>

<style type="text/css">
	
.centro {

  position: absolute;
  left: 50%; /* posiciona na metade da tela */
  margin-left: -280px; /* e retrocede metade da largura */

}


			.container{

				width: 400px;
				padding:30px;
				border: 1px solid #ccc;
				box-shadow: 1px 5px 20px 10px #d1d1d1;
				margin-bottom: 30px;
				font-family: arial;
				font-size: 20px;
				line-height: 25px;
			}
			.container textarea{

				width: 90%;
				height: 150px;
				resize: none;
				outline: none;
				padding: 10px;
                border: 1px solid #d1d1d1;
                box-shadow: 1px 5px 10px 5px #d1d1d1;

			}
			.container label{
				display: block;
				width: 400px;
				font-family: arial;
				font-size: 18px;
				margin-left: -40px;
			}
			.container label span{
				width: 100px;
				margin-top: 20px;
				display: inline-block;
			}
			.container label select, .container label input{
				width: 290px;
			}
			.button{
				display: inline-block;
				background: #f6f6f6;
				padding: 10px 20px;
				color: #000;
				border: 1px solid #ccc;
				cursor: pointer;
				margin-top: 20px;
			}
			.button:hover{
				box-shadow: 4px 4px 10px 0 #ccc;
			}


</style>

</br></br>
<body style="width: 600px;" class="centro">

<div style="
padding: 50px; 
border: 1px solid #d1d1d1;
box-shadow: 1px 5px 20px 10px #d1d1d1;
font-weight: bolder;
font-size: 14pt;
 ">


<?php

$tomada1 = $sensor->getTomada1(); 
$tomada2 = $sensor->getTomada2(); 
$tomada3 = $sensor->getTomada3(); 
$tomada4 = $sensor->getTomada4(); 

$temperatura = $sensor->getTemperatura(); 
$umidade = $sensor->getUmidade(); 
$chama = $sensor->getFogo(); 
$presenca = $sensor->getPresenca(); 
$gas = $sensor->getGas(); 
$distancia = $sensor->getDistancia(); 
$potencia = $sensor->getPotencia();
$tensao = $sensor->getTensao();
$corrente = $sensor->getCorrente();





echo "</br></br><hr></br> Status Tomada 1: " .$tomada1. " "; 

echo "</br> Status Tomada 2: " .$tomada2. " "; 

echo "</br> Status Tomada 3: " .$tomada3. " "; 

echo "</br> Status Tomada 4: " .$tomada4. " "; 



echo "</br></br><hr></br> Corrente Elétrica: " .$corrente. " "; 

echo "</br> Tensão Elétrica: " .$tensao. " "; 

echo "</br> Potência Elétrica: " .$potencia. " "; 



echo "</br></br><hr></br> Sensor de Temperatura: " .$temperatura. " "; 

echo "</br> Sensor de Umidade: " .$umidade. " "; 

echo "</br> Sensor de Fogo/Chama: " .$chama. " "; 

echo "</br> Sensor de Presença: " .$presenca. " "; 

echo "</br> Sensor de Gás: " .$gas. " "; 

echo "</br> Sensor de Distância: " .$distancia. " Cm"; 


?>

</div>
</form>
</html>


