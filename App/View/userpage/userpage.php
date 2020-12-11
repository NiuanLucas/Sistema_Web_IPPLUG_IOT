<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css" />
    <style type="text/css">
      body{
        font-family: verdana;
      }
      #result{
        height: 200px;
        border: 1px solid #ccc;
        padding: 10px;
        box-shadow: 0 0 10px 0 #bbb;
        margin-bottom: 30px;
        font-size: 14px;
        line-height: 25px;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<?php
// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');
// CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
    $dataLocal = date('d/m/Y H:i:s', time());
?>
    <title>  IPPLUG </title>

    <!-- Bootstrap core CSS -->
    <link href="App/View/userpage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="App/View/userpage/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="App/View/userpage/vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="App/View/userpage/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="App/View/userpage/css/resume.min.css" rel="stylesheet">

  </head>

  <body id="page-top" onclick="speak();" >

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">



     
<span class="d-block d-lg-none"> IPPLUG: UserPage  
</span>


<script>
function mensagem() {


var name=confirm("Deseja Realmente ir Embora?")


if (name==true)
{
 window.location.replace("http://ipplug.xyz");
}


else
{
//Digite Aqui
}
  

}
</script>


<?php

$tomada1 = $_GET['tomada1']; 
$tomada2 = $_GET['tomada2']; 
$tomada3 = $_GET['tomada3']; 
$tomada4 = $_GET['tomada4']; 

$tensao = $_GET['tensao']; 
$corrente = $_GET['corrente']; 
$potencia = $_GET['potencia']; 

$kwh = 0.56; 
$horas = 2; 
$dias = 30;

$consumo = (($horas * $dias * $potencia) / 1000) ;
$gasto = ($consumo * $kwh ); 
$consumo = number_format($consumo, 2, '.', '');
$gasto = number_format($gasto, 2, '.', '');

$temperatura = $_GET['temperatura']; 
$umidade = $_GET['umidade']; 
$chama = $_GET['chama']; 
$presenca = $_GET['presenca']; 
$gas = $_GET['gas']; 
$distancia = $_GET['distancia']; 

$erro = $_GET['erro']; 

?>




        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="App/View/uploads/<?=$log->getFoto();?>" alt="">
        </span>

      </a>
   <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">


<span class="d-block d-lg-none" >
</br><li class="nav-item">  
<a class="nav-link js-scroll-trigger" href="#about">
<center><div style="height: 190px; width: 120%; background: rgba(255,255,255,0.2); padding: 10px; margin-left: -29px;">

<div style="height: 118px; width: 30%; background: rgba(255,255,255,0); padding: 0px; margin:10px; margin-bottom: 12px;">
<img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="App/View/uploads/<?=$log->getFoto();?>" width="100%" height="100%" style="border: 5px solid rgba(255,255,255,0.9);" alt="">
</div>

Bem-vindo, <?=$log->getNome();?>!

</div></center>
</a></li></span>


          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">
            &nbsp; <img src="App/View/userpage/img/home.svg" width="20px" height="20px" style="margin-bottom: 5px;"> &nbsp; Início</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">
            &nbsp; <img src="App/View/userpage/img/plug.svg" width="20px" height="20px" style="margin-bottom: 5px;"> &nbsp; Dispositivos Integrados</a>
          </li>


          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">
            &nbsp; <img src="App/View/userpage/img/sensor.svg" width="20px" height="20px" style="margin-bottom: 5px;"> &nbsp; Rede Sensorial</a>
          </li>


          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">
            &nbsp; <img src="App/View/userpage/img/cam.svg" width="20px" height="20px" style="margin-bottom: 5px;"> &nbsp; Segurança & Monitoramento</a>
          </li>


          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills2">
            &nbsp; <img src="App/View/userpage/img/line.svg" width="20px" height="20px" style="margin-bottom: 5px;"> &nbsp; Gráficos e Estatísticas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests"> 
            &nbsp; <img src="App/View/userpage/img/micro.svg" width="20px" height="20px" style="margin-bottom: 5px;"> &nbsp; Controle por Voz</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills3">
            &nbsp; <img src="App/View/userpage/img/media.svg" width="20px" height="20px" style="margin-bottom: 5px;"> &nbsp; Multímidia & Extras</a>
          </li>


           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">
            &nbsp; <img src="App/View/userpage/img/conf.svg" width="20px" height="20px" style="margin-bottom: 5px;"> &nbsp; Configurações</a>
          </li>



        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0"> <img src="App/View/userpage/img/ipat1.png" width="320px" style="margin: -15px;" > </h1>   
          </br><div class="subheading mb-5"> Um Projeto IoT </div>
          <p class="mb-5">


<div>

			<textarea id="myText" readonly style="width: 90%; padding: 10px;" >
			
<?php


if (isset($tomada1)) {
if ($tomada1 == 1) { echo "Sua Tomada Número 1 foi Desligada {$log->getNome()}. "; }
if ($tomada1 == 0) { echo "Sua Tomada Número 1 foi Ligada {$log->getNome()}. "; }}

if (isset($tomada2)) {
if ($tomada2 == 1) { echo "Sua Tomada Número 2 foi Desligada {$log->getNome()}. "; }
if ($tomada2 == 0) { echo "Sua Tomada Número 2 foi Ligada {$log->getNome()}. "; }}

if (isset($tomada3)) {
if ($tomada3 == 1) { echo "Sua Tomada Número 3 foi Desligada {$log->getNome()}. "; }
if ($tomada3 == 0) { echo "Sua Tomada Número 3 foi Ligada {$log->getNome()}. "; }}

if (isset($tomada4)) {
if ($tomada4 == 1) { echo "Sua Tomada Número 4 foi Desligada {$log->getNome()}. "; }
if ($tomada4 == 0) { echo "Sua Tomada Número 4 foi Ligada {$log->getNome()}. "; }}

if (isset($temperatura)) {
    echo "A temperatura atual, do seu Ambiente está por volta dos " .$temperatura. " graus. Tenha um Bom Dia {$log->getNome()}. ";}

if (isset($umidade)) {
    echo "A Umidade atual, do seu Ambiente está por volta dos " .$umidade. " porcento na atmosfera. Tenha um Bom Dia {$log->getNome()}.";}
    

if (isset($tensao)) {
    echo "A Tensão elétrica atual, de sua tomada está por volta dos " .$tensao. " volts. Tenha um Bom Dia {$log->getNome()}.";}

if (isset($corrente)) {
    echo "A Corrente elétrica atual, de sua tomada está por volta dos " .$corrente. " Amperes. Tenha um Bom Dia {$log->getNome()}.";}
    
if (isset($potencia)) {
    echo "A Potência elétrica atual, de suas tomadas estão por volta dos " .$potencia. " Watts. Tenha um Bom Dia {$log->getNome()} .
    Curiosidade. Estes Dispositivos Ligados Durante " .$horas. " horas por" .$dias. " dias, geram um consumo de aproximadamente" .$consumo.  "quilowatt-hora. ou um gasto em dinheiro de " .$gasto. " Reais ."
    
    ;}
    
if (isset($distancia)) {
    echo "A Distância atual, de sua tomada está por volta dos " .$distancia. " Centímetros. Tenha um Bom Dia {$log->getNome()}.";}
    
    

if (isset($chama)) {
if ($chama == 1) { echo "Não se Preocupe {$log->getNome()} , nenhum foco de incêndio Detectado no Momento. "; }
if ($chama == 0) { echo "Incêndio Detectado, por favor evacuem a Região Agora Mesmo! "; }}

if (isset($presenca)) {
if ($presenca == 1) { echo "Presença Humana Detectada, existem pessoas ou Seres Vivos no Local. "; }
if ($presenca == 0) { echo "Não Foram Detectados Sinais de Movimentação no Ambiente, Local possivelmente Vazio. "; }}

if (isset($gas)) {
if ($gas == 1) { echo "Não se Preocupe {$log->getNome()} , nenhum foco de Gás Metano Detectado no Momento. "; }
if ($gas == 0) { echo "Gás Metano Detectado, por favor evacuem a Região Agora Mesmo!" ; }}

if (isset($erro)) {
if ($erro == 1) { echo " Desculpe {$log->getNome()} , Não entendi oque você disse antes. "; }
}

else {
echo " Oque devo fazer por Você Agora,  {$log->getNome()}?  ";
}

?>

      </textarea></br></br>


      <label>
        Voz da Inteligência Artificial:
        </br><select id="voiceOptions" value="10" ></select>
      </label></br>
      
      </br><label>
         ●  Volume do Slider:
        <input type="range" id="volumeSlider" value="1"  />
      </label></br>
      
      <label>
         ● Taxa do Slider:
        <input type="range" id="rateSlider"  value="1" />
      </label></br>
      
      <label>
         ● Passo do Slider: 
        <input type="range" id="pitchSlider"  value="1" />
      </label></br></br>
			

<script type="text/javascript">

			function checkCompatibilty () {
				if(!('speechSynthesis' in window)){
					alert('Seu Dispositivo Não Suporta Inteligência Artificial IP-Plug. ');
				}
			};

			checkCompatibilty();

			var voiceOptions = document.getElementById('voiceOptions');
			var volumeSlider = document.getElementById('volumeSlider');
			var rateSlider = document.getElementById('rateSlider');
			var pitchSlider = document.getElementById('pitchSlider');
			var myText = document.getElementById('myText');

			var voiceMap = [];

			function loadVoices () {
				var voices = speechSynthesis.getVoices();
				for (var i = 0; i < voices.length; i++) {
					var voice = voices[i];
					var option = document.createElement('option');
					option.value = voice.name;
					option.innerHTML = voice.name;
					voiceOptions.appendChild(option);
					voiceMap[voice.name] = voice;
				};
			};

			window.speechSynthesis.onvoiceschanged = function(e){
				loadVoices();
			};

			function speak () {
				var msg = new SpeechSynthesisUtterance();
				msg.volume = volumeSlider.value;
				msg.voice = voiceMap[voiceOptions.value];
				msg.rate = rateSlider.value;
				msg.Pitch = pitchSlider.value;
				msg.text = myText.value;
				window.speechSynthesis.speak(msg);
			};
		</script>

</div>

</br><h4 style="width: 100%; height:  100%; background: #E6FFB5; border-top: 8px solid #58E324;  padding: 10px; padding-bottom: 20px; border-radius: 5px;">

<?php

if (isset($tomada1)) {
if ($tomada1 == 1) { echo "Sua Tomada Número 1 foi Desligada. ✔️ "; }
if ($tomada1 == 0) { echo "Sua Tomada Número 1 foi Ligada. ✔️ "; }}

if (isset($tomada2)) {
if ($tomada2 == 1) { echo "Sua Tomada Número 2 foi Desligada. ✔️ "; }
if ($tomada2 == 0) { echo "Sua Tomada Número 2 foi Ligada. ✔️ "; }}

if (isset($tomada3)) {
if ($tomada3 == 1) { echo "Sua Tomada Número 3 foi Desligada. ✔️ "; }
if ($tomada3 == 0) { echo "Sua Tomada Número 3 foi Ligada. ✔️ "; }}

if (isset($tomada4)) {
if ($tomada4 == 1) { echo "Sua Tomada Número 4 foi Desligada. ✔️ "; }
if ($tomada4 == 0) { echo "Sua Tomada Número 4 foi Ligada. ✔️ "; }}

if (isset($temperatura)) {
    echo "A temperatura atual, do seu Ambiente está por volta dos <b style='color: #ff0000;'> " .$temperatura. " graus.</b>  Tenha um Bom Dia. ✔️ ";}

if (isset($umidade)) {
    echo "A Umidade atual, do seu Ambiente está por volta dos <b style='color: #ff0000;'> " .$umidade. "</b> porcento</b> na atmosfera. Tenha um Bom Dia. ✔️ ";}
    

if (isset($tensao)) {
    echo "A Tensão elétrica atual, de suas tomadas estão por volta dos <b style='color: #ff0000;'> " .$tensao. " volts.</b> Tenha um Bom Dia. ✔️ ";}

if (isset($corrente)) {
    echo "A Corrente elétrica atual, de suas tomadas estão por volta dos  <b style='color: #ff0000;'> " .$corrente. " Amperes.</b> Tenha um Bom Dia. ✔️ ";}
    
if (isset($potencia)) {
    echo "A Potência elétrica atual, de suas tomadas estão por volta dos <b style='color: #ff0000;'> " .$potencia. " Watts.</b> Tenha um Bom Dia. ✔️ 
    </br> <hr>  Valor Medio do  kWh: <b style='color: #ff0000;'>" .$kwh. " R$.</b> </br><hr> *Curiosidade: Estes Dispositivos Ligados Durante <b style='color: #ff0000;'>" .$horas. " horas </b> por <b style='color: #ff0000;'>  " .$dias. " dias </b> </br> geram um consumo de aproximadamente <b style='color: #ff0000;'> " .$consumo.  " Kwh </b> ou  <b style='color: #ff0000;'> " .$gasto. " R$ </b>.</br>"

    ;}
    
    
    
if (isset($distancia)) {
    echo "A Distância atual, de sua tomada está por volta dos <b style='color: #ff0000;'> " .$distancia. " Centímetros.</b> Tenha um Bom Dia. ✔️ ";}
    
    

if (isset($chama)) {
if ($chama == 1) { echo "Não se Preocupe, nenhum foco de incêndio Detectado no Momento. ✔️  "; }
if ($chama == 0) { echo "Incêndio Detectado, por favor evacuem a Região Agora Mesmo! ✔️ "; }}

if (isset($presenca)) {
if ($presenca == 1) { echo "Presença Humana Detectada, existem pessoas ou Seres Vivos no Local. ✔️ "; }
if ($presenca == 0) { echo "Não Foram Detectados Sinais de Movimentação no Ambiente, Local possivelmente Vazio. ✔️ "; }}

if (isset($gas)) {
if ($gas == 1) { echo "Não se Preocupe, nenhum foco de Gás Metano Detectado no Momento. ✔️ "; }
if ($gas == 0) { echo "Gás Metano Detectado, por favor evacuem a Região Agora Mesmo! ✔️ " ; }}

if (isset($erro)) {
if ($erro == 1) { echo " Desculpe {$log->getNome()} , Não entendi oque você disse. "; }
}

else {
echo " </br> Obrigado <u> {$log->getNome()} </u> por Utilizar IP-PLUG. 🌎 ";
}

?>

</h4>
</br>
          <h2> Bem-vindo, <?=$log->getNome();?>!  </h2>

          Aquilo que começou como um pequeno projeto escolar se tornou uma equipe de produção de equipamentos inteligentes amplamente conectados e integrados a redes. </p>
        
           </br><hr><h3> IP do Dispositivo: <b><?=$log->getIp();?></b> </h3><hr>
<form method='post' action="https://ipplug.xyz/index.php?page=usuario&action=ip" >
<input type="text" name="ip" style="border-radius: 5px; border: 2px solid #e1e1e1; height: 35px; width: 240px; padding: 15px; margin-top: 10px;">
<input type="hidden" name="id" value="<?=$log->getId();?>" style="border-radius: 5px; border: 2px solid #e1e1e1; height: 35px; width: 240px; padding: 15px; margin-top: 10px;">
<input type='submit' value='Alterar IP' style="width: 100px; height: 40px; background: #727272; border: 3px solid #e0e0e0; color: #fff; font-size: 15px; border-radius: 10px; margin-top: 10px;">
</form> 


</br></br><hr><h3> Comandos Rápidos </h3>

<style>

.botaonow {
   text-align: center;
   width: 280px;
   height: 50px; 
   border: 0px solid #000; 
   color: #fff; 
   font-size: 20px;
   border-radius: 5px; 
   margin: 5px;
}

</style>



    
<table class="d-none d-lg-block" > <center>

<tr>

<td>
   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="804">
   <input type="submit" class="botaonow" 
   style="background: #E9CD05; border-right: 45px solid #B6A000; " 
   value="Corrente Elétrica" > 
   </form>	
</td>

<td>
   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="803">
   <input type="submit" class="botaonow" 
   style="background: #0162BE; border-right: 45px solid #044583; " 
   value=" Tensão Elétrica" > 
   </form>
</td>

<td>
   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="805">
   <input type="submit" class="botaonow" 
   style="background: #3503C5; border-right: 45px solid #1C0268; " 
   value="Potência Elétrica" > 
   </form>	
</td>

</tr>

<tr>
<td>
   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="703">
   <input type="submit" class="botaonow" 
   style="background: #E57600; border-right: 45px solid #D07B00; " 
   value="Temperatura" > 
   </form>	
</td>

<td>
   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="704">
   <input type="submit" class="botaonow" 
   style="background: #3FD000; border-right: 45px solid #35A404; " 
   value="Umidade" > 
   </form>	
</td>

<td>
   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="706">
   <input type="submit" class="botaonow" 
   style="background: #CF1E02; border-right: 45px solid #951E04; " 
   value="Presença" > 
   </form>	
</td>


<tr>
<td>
   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="705">
   <input type="submit" class="botaonow" 
   style="background: #7E00BD; border-right: 45px solid #4D027E; " 
   value="Fogo/Chama" > 
   </form>	
</td>

<td>
   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="707">
   <input type="submit" class="botaonow" 
   style="background: #CC04D5; border-right: 45px solid #730478; " 
   value="Gás Butano" > 
   </form>	
</td>

<td>
   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="708">
   <input type="submit" class="botaonow" 
   style="background: #008EB8; border-right: 45px solid #036D82; " 
   value="Distância" > 
   </form>	
</td>

</table>

<div class="d-lg-none" ><center>

   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="804">
   <input type="submit" class="botaonow" 
   style="background: #E9CD05; border-right: 45px solid #B6A000; " 
   value="Corrente Elétrica" > 
   </form>	

   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="803">
   <input type="submit" class="botaonow" 
   style="background: #0162BE; border-right: 45px solid #044583; " 
   value=" Tensão Elétrica" > 
   </form>

   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="805">
   <input type="submit" class="botaonow" 
   style="background: #3503C5; border-right: 45px solid #1C0268; " 
   value="Potência Elétrica" > 
   </form>	

   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="703">
   <input type="submit" class="botaonow" 
   style="background: #E57600; border-right: 45px solid #D07B00; " 
   value="Temperatura" > 
   </form>	

   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="704">
   <input type="submit" class="botaonow" 
   style="background: #3FD000; border-right: 45px solid #35A404; " 
   value="Umidade" > 
   </form>	

   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="706">
   <input type="submit" class="botaonow" 
   style="background: #CF1E02; border-right: 45px solid #951E04; " 
   value="Presença" > 
   </form>	

   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="705">
   <input type="submit" class="botaonow" 
   style="background: #7E00BD; border-right: 45px solid #4D027E; " 
   value="Fogo/Chama" > 
   </form>	

   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="707">
   <input type="submit" class="botaonow" 
   style="background: #CC04D5; border-right: 45px solid #730478; " 
   value="Gás Butano" > 
   </form>	

   </br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="708">
   <input type="submit" class="botaonow" 
   style="background: #008EB8; border-right: 45px solid #036D82; " 
   value="Distância" > 
   </form>	


</div>


</tr>
</center></table>

        </div>
        
      </section>


      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5"> Dispositivos Integrados </h2>


     <p class="mb-5">
Tem como objetivo desenvolver um dispositivo IoT (Internet das Coisas) que possa fazer o controle do consumo de energia de redes elétricas utilizando a internet como meio de comunicação para o envio de dados de controle e medição da energia aferidos no dispositivo. 

</p>

<div>


   <h6 style="color: #656565;"> *Use os Botões Abaixo para Controlar seus Dispositivos Inteligentes. </h6>


    <?php $tomadas = array('1' => $log->getTomada1(), '2' => $log->getTomada2(), '3' => $log->getTomada3(), '4' => $log->getTomada4()); ?>

    <?php foreach($tomadas as $key => $value):?>
   </br><h3> Disposito IoT Nº<?=$key?>: <?=$value;?> </br> <form action="index.php?page=usuario&action=tomada" method="post">
   <input type="hidden" name="id" value="<?='tomada'.$key;?>"/>
   
   <input type="text" name="nome" style="border-radius: 5px; border: 2px solid #e1e1e1; height: 35px; width: 200px; padding: 15px; margin-top: 10px;">
   <button type="submit" style=" height: 35px; width: 100px; margin-top: -5px; " class="btn btn-primary">Mudar nome</button>
   </h3> </br></br>
   

   
</form>


<center><form action="http://<?=$log->getIp();?>" method="get" >
  <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="2<?=$key;?>1">
   <input type="submit" 
   style="text-align: center;  width: 280px; height: 50px; 
   background: #00B367; border: 0px solid #000; 
   color: #fff; font-size: 20px; border-radius: 5px; 
   margin: 5px; border-right: 45px solid #02884F;" 
   value="Ligar <?=$value;?>" > 
   </form>
   
   
   <form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="2<?=$key;?>0">
   <input type="submit" 
   style="text-align: center;  width: 280px; height: 50px; 
   background: #C4032C; border: 0px solid #000; 
   color: #fff; font-size: 20px; border-radius: 5px; 
   margin: 5px; border-right: 45px solid #88022F;" 
   value="Desligar <?=$value;?>" > 
   </form>
   
   </center>

<hr>

<?php endforeach; ?>

<br/>

<!--
   </br></br><center><form action="http://<?=$log->getIp();?>" method="get" >
  <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="211">
   <input type="submit" 
   style="text-align: center;  width: 280px; height: 50px; 
   background: #00B367; border: 0px solid #000; 
   color: #fff; font-size: 20px; border-radius: 5px; 
   margin: 5px; border-right: 45px solid #02884F;" 
   value="Ligar Disposito Nº1" > 
   </form>

   <form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="210">
   <input type="submit" 
   style="text-align: center;  width: 280px; height: 50px; 
   background: #C4032C; border: 0px solid #000; 
   color: #fff; font-size: 20px; border-radius: 5px; 
   margin: 5px; border-right: 45px solid #88022F;" 
   value="Desligar Disposito Nº1" > 
   </form></center>
   
</br>

   </br><h3> Disposito IoT Nº2 </h3><hr>
   <input type="text" name="device" style="border-radius: 5px; border: 2px solid #e1e1e1; height: 35px; width: 240px; padding: 15px; margin-top: 10px;">
   &nbsp; <img src="https://image.flaticon.com/icons/svg/69/69455.svg" width="20px" height="20px" style="margin-bottom: 5px;"> </h3><hr> 
   <h6 style="color: #656565;"> *Use os Botões Abaixo para Controlar seus Dispositivos Inteligentes. </h6>


     </br></br><center><form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">   
   <input type="hidden" name="code" value="221" id= "code">
   <input type="submit" 
   style="text-align: center;  width: 280px; height: 50px; 
   background: #00B367; border: 0px solid #000; 
   color: #fff; font-size: 20px; border-radius: 5px; 
   margin: 5px; border-right: 45px solid #02884F;" 
   value="Ligar Disposito Nº2" > 
   </form>

   <form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301"> 
   <input type="hidden" name="code" id= "code" value="220">
   <input type="submit" 
   style="text-align: center;  width: 280px; height: 50px; 
   background: #C4032C; border: 0px solid #000; 
   color: #fff; font-size: 20px; border-radius: 5px; 
   margin: 5px; border-right: 45px solid #88022F;" 
   value="Desligar Disposito Nº2" > 
   </form></center>
   
</br>


   </br><h3> Disposito IoT Nº3 </h3><hr>
   <input type="text" name="device" style="border-radius: 5px; border: 2px solid #e1e1e1; height: 35px; width: 240px; padding: 15px; margin-top: 10px;">
   &nbsp; <img src="https://image.flaticon.com/icons/svg/69/69455.svg" width="20px" height="20px" style="margin-bottom: 5px;"> </h3><hr> 
   <h6 style="color: #656565;"> *Use os Botões Abaixo para Controlar seus Dispositivos Inteligentes. </h6>

   </br></br><center><form action="http://<?=$log->getIp();?>" method="get" >
  <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="231">
   <input type="submit" 
   style="text-align: center;  width: 280px; height: 50px; 
   background: #00B367; border: 0px solid #000; 
   color: #fff; font-size: 20px; border-radius: 5px; 
   margin: 5px; border-right: 45px solid #02884F;" 
   value="Ligar Disposito Nº3" > 
   </form>

   <form action="http://<?=$log->getIp();?>" method="get" >
   <input type="hidden" name="side" id= "side" value="301">
   <input type="hidden" name="code" id= "code" value="230">
   <input type="submit" 
   style="text-align: center;  width: 280px; height: 50px; 
   background: #C4032C; border: 0px solid #000; 
   color: #fff; font-size: 20px; border-radius: 5px; 
   margin: 5px; border-right: 45px solid #88022F;" 
   value="Desligar Disposito Nº3" > 
   </form></center>
   
</br>


   </br><h3> Disposito IoT Nº4 </h3><hr>
   <input type="text" name="device" style="border-radius: 5px; border: 2px solid #e1e1e1; height: 35px; width: 240px; padding: 15px; margin-top: 10px;">
   &nbsp; <img src="https://image.flaticon.com/icons/svg/69/69455.svg" width="20px" height="20px" style="margin-bottom: 5px;"> </h3><hr> 
   <h6 style="color: #656565;"> *Use os Botões Abaixo para Controlar seus Dispositivos Inteligentes. </h6>

   </br></br><center><form action="http://<?=$log->getIp();?>" method="get" >
  <input type="hidden" name="side" id= "side" value="301">
  <input type="hidden" name="code" id= "code" value="241">
   <input type="submit" 
   style="text-align: center;  width: 280px; height: 50px; 
   background: #00B367; border: 0px solid #000; 
   color: #fff; font-size: 20px; border-radius: 5px; 
   margin: 5px; border-right: 45px solid #02884F;" 
   value="Ligar Disposito Nº4" > 
   </form>

   <form action="http://<?=$log->getIp();?>" method="get" >
  <input type="hidden" name="side" id= "side" value="301">
  <input type="hidden" name="code" id= "code" value="240">
   <input type="submit" 
   style="text-align: center;  width: 280px; height: 50px; 
   background: #C4032C; border: 0px solid #000; 
   color: #fff; font-size: 20px; border-radius: 5px; 
   margin: 5px; border-right: 45px solid #88022F;" 
   value="Desligar Disposito Nº4" > 
   </form></center>
   
</br>

-->


</div>

<!--
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Senior Web Developer</h3>
              <div class="subheading mb-3">Intelitec Solutions</div>
              <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">March 2013 - Present</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Web Developer</h3>
              <div class="subheading mb-3">Intelitec Solutions</div>
              <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">December 2011 - March 2013</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Junior Web Designer</h3>
              <div class="subheading mb-3">Shout! Media Productions</div>
              <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">July 2010 - December 2011</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Web Design Intern</h3>
              <div class="subheading mb-3">Shout! Media Productions</div>
              <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">September 2008 - June 2010</span>
            </div>
          </div>
-->


        </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5"> Rede Sensorial </h2>




       <p class="mb-5">
O sensor é quem faz a monitoração do fenômeno que esta sendo analisado, ele é formado por: processador, rádio para comunicação, memória e bateria. O observador é o usuário final que deseja estudar e obter respostas sobre o fenômeno. O fenômeno é o objeto de estudo do observador, é o que esta sendo monitorado pela rede sensorial.

</p>

<div> 


<div style="font-size: 16px; font-weight: bold; color: #3d3d3d;">
Horário da Última Requisição: <input style="width: 160px; text-align: center; border: 0px solid #e1e1e1; background: #feffed" 
type="text" readonly value="<?=($sensores[0]->getData_registro() !== null)?$sensores[0]->getData_registro():"";?>" >



</div><hr>




</br>
<style>
#customers1 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 20px;
    margin-left: 0px;
}

#customers1 td, #customers1 th {
    border: 1px solid #ddd;
    padding: 1px;
}

#customers1 tr:nth-child(even){background-color: #f2f2f2;}

#customers1 tr:hover {background-color: #ddd;}

#customers1 th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #51017C;
    color: white;
} 
</style>

<table id="customers1" style="font-size: 14px;">
  <tr>
    <h3> Sensores do Ambiente </h3>
    <th>Temperatura</th>
    <th>Umidade</th>
    <th>Presença</th>
    <th>Horário</th>
    <th>Data</th>
  </tr> 
  
  <?php if($sensores !== null){
  	foreach($sensores as $sensor):?>
  
  <tr>
      <td><?=$sensor->getTemperatura()?>ºC</td>
      <td><?=$sensor->getUmidade();?>%</td>
      <td><?=$sensor->getPresenca()?"❌":"✔️"?></td>
      <td><?=$sensor->getHorario();?></td>
      <td><?=$sensor->getData();?></td>
  </tr>
  
  <?php endforeach; 
       }
  ?>
</table>
</br></br>


<style>
#customers2 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 20px;
    margin-left: 0px;
}

#customers2 td, #customers2 th {
    border: 1px solid #ddd;
    padding: 1px;
}

#customers2 tr:nth-child(even){background-color: #f2f2f2;}

#customers2 tr:hover {background-color: #ddd;}

#customers2 th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #0450a0;
    color: white;
} 
</style>
<table id="customers2" style="font-size: 14px;" >
  <tr>
    <h3> Sensores para Segurança </h3>
    <th>Chama/Fogo</th>
    <th>Gás</th>
    <th>Distância</th>
    <th>Horário</th>
    <th>Data</th>
  </tr>
  <?php if($sensores !== null){
        foreach($sensores as $sensor):?>
  
  <tr>
      <td><?=$sensor->getFogo()?"❌":"✔️"?></td>
      <td><?=$sensor->getGas()?"❌":"✔️";?></td>
      <td><?=$sensor->getDistancia();?>cm</td>
      <td><?=$sensor->getHorario();?></td>
      <td><?=$sensor->getData();?></td>
  </tr>
  
  <?php endforeach; 
        }?>
</table>

<br/><br/>


<style>
#customers3 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 20px;
    margin-left: 0px;
}

#customers3 td, #customers3 th {
    border: 1px solid #ddd;
    padding: 1px;
}

#customers3 tr:nth-child(even){background-color: #f2f2f2;}

#customers3 tr:hover {background-color: #ddd;}

#customers3 th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #D90603;
    color: white;
} 
</style>
<table id="customers3" style="font-size: 14px;" >
  <tr>
    <h3> Status das Tomadas </h3>
    <th>Tomada #1 </th>
    <th>Tomada #2 </th>
    <th>Tomada #3 </th>
    <th>Tomada #4 </th>
  </tr>
  <?php if($sensores !== null){
        foreach($sensores as $sensor):?>
  
  <tr>
      <td><?=$sensor->getTomada1();?></td>
      <td><?=$sensor->getTomada2();?></td>
      <td><?=$sensor->getTomada3();?></td>
      <td><?=$sensor->getTomada4();?></td>
  </tr>
  
  <?php endforeach; 
        }?>
</table>

<br/><br/>


<style>
#customers4 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 20px;
    margin-left: 0px;
}

#customers4 td, #customers4 th {
    border: 1px solid #ddd;
    padding: 1px;
}

#customers4 tr:nth-child(even){background-color: #f2f2f2;}

#customers4 tr:hover {background-color: #ddd;}

#customers4 th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #03BD77;
    color: white;
} 
</style>
<table id="customers4" style="font-size: 14px;" >
  <tr>
    <h3> Sensores de Energia Elétrica </h3>
    <th>Corrente</th>
    <th>Tensão</th>
    <th>Potência </th>
    <th>Horário</th>
    <th>Data</th>
  </tr>
  <?php if($sensores !== null){
        foreach($sensores as $sensor):?>
  
  <tr>
      <td><?=$sensor->getCorrente();?>A</td>
      <td><?=$sensor->getTensao();?>V</td>
      <td><?=$sensor->getPotencia();?></td>
      <td><?=$sensor->getHorario();?></td>
      <td><?=$sensor->getData();?></td>
  </tr>
  
  <?php endforeach; 
        }?>
</table>
<br/><br/>


 <form action="http://<?=$log->getIp();?>" method="get" >
<input type="hidden" name="side" id= "side" value="301">
<input type="hidden" name="code" id= "code" value="990">
<input type="submit" 
style="width: 320px; height: 45px; background: #727272; 
border: 3px solid #e0e0e0; color: #fff;
font-size: 18px; border-radius: 10px;"
value="Fazer Nova Requisição" > 
</form>


</div>


<!--
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">University of Colorado Boulder</h3>
              <div class="subheading mb-3">Bachelor of Science</div>
              <div>Computer Science - Web Development Track</div>
              <p>GPA: 3.23</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">August 2006 - May 2010</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">James Buchanan High School</h3>
              <div class="subheading mb-3">Technology Magnet Program</div>
              <p>GPA: 3.56</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">August 2002 - May 2006</span>
            </div>
          </div>
-->

        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5"> Segurança & Monitoramento </h2>

       <p class="mb-5">
O proprietário moderno deve se alertar para a importância do monitoramento diário de sua habitação. Quem investe uma boa soma em projeto arquitetônico, decoração, mobiliário e eletrodomésticos também deve destinar uma parte de seu orçamento para a aquisição e instalação de dispositivos de segurança eletrônica, como câmeras residenciais.
        </p>


<div>
  <h3> Câmera de Segurança Nº1 </h3>
  <iframe width="100%" height="300px" src="https://www.youtube-nocookie.com/embed/xS6pwQ1Gs2s?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

</div>










   <!--
          <div class="subheading mb-3">Programming Languages &amp; Tools</div>
          <ul class="list-inline list-icons">
            <li class="list-inline-item">
              <i class="devicons devicons-html5"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-css3"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-javascript"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-jquery"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-sass"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-less"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-bootstrap"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-wordpress"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-grunt"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-gulp"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-npm"></i>
            </li>
          </ul>

          <div class="subheading mb-3">Workflow</div>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-check"></i>
              Mobile-First, Responsive Design</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Browser Testing &amp; Debugging</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Functional Teams</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Agile Development &amp; Scrum</li>
          </ul>   
         -->
         

        </div>
      </section>







      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills2">
        <div class="my-auto">
          <h2 class="mb-5"> Gráficos e Estatísticas </h2>

<p class="mb-5">
Gráficos estatísticos são gráficos no domínio da estatística usados para visualizar dados quantitativos.
</p>


<div>
<h1 class="mb-0"> <img src="https://www.matematica.pt/images/resumos/grafico-barras-agrupadas.png" width="320px" style="margin: -15px;" > </h1>   
</div>


   <!--
          <div class="subheading mb-3">Programming Languages &amp; Tools</div>
          <ul class="list-inline list-icons">
            <li class="list-inline-item">
              <i class="devicons devicons-html5"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-css3"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-javascript"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-jquery"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-sass"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-less"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-bootstrap"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-wordpress"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-grunt"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-gulp"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-npm"></i>
            </li>
          </ul>

          <div class="subheading mb-3">Workflow</div>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-check"></i>
              Mobile-First, Responsive Design</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Browser Testing &amp; Debugging</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Functional Teams</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Agile Development &amp; Scrum</li>
          </ul>   
         -->
         

        </div>
      </section>







      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5"> Controle por Voz </h2>
       <p class="mb-5">
Nesse cenário, soluções de automação e inteligência computacional literalmente ganham voz e os recursos tecnológicos efetivamente deixam de ser habilitadores e tornam-se aceleradores de novos modelos operacionais, levando competitividade às empresas e permitindo o estreitamento das relações com seus clientes
</p>
<div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</br></br>
<div>

	<?php
		echo "<div id='resposta'></div>";
		?>
		
		
		<div id="result"></div>
		<script type="text/javascript">

		function pegaValorDiv(){ 
			var caminho = document.getElementById("resposta").innerHTML; //aqui eu pego o valor da div 'teste' e coloco na variavel 
			document.getElementById("codex").value = caminho; //aqui eu envio o conteudo da var para o campo 'code' 
			document.getElementById("envia").submit();
			} 
			
</script> 
		<script type="text/javascript">
			var r = document.getElementById('result');
			var b = document.getElementById('resposta');
			function startConverting () {
				if('webkitSpeechRecognition' in window){
					var speechRecognizer = new webkitSpeechRecognition();
					speechRecognizer.continuous = true;
					speechRecognizer.interimResults = true;
					speechRecognizer.lang = 'pt-BR';
					speechRecognizer.start();

					var finalTranscripts = '';

					speechRecognizer.onresult = function(event){
						var interimTranscripts = '';
						for(var i = event.resultIndex; i < event.results.length; i++){
							var transcript = event.results[i][0].transcript;
							transcript.replace("\n", "<br>");
							if(event.results[i].isFinal){
								finalTranscripts += transcript;
							}else{
								interimTranscripts += transcript;
							}
						}
						var a  = finalTranscripts +   interimTranscripts ;
						r.innerHTML = a;
						b.innerHTML = a;
					};
					speechRecognizer.onerror = function (event) {
					};
				}else{
					r.innerHTML = 'Seu dispositivo não suportado comandos de voz! Desculpe.';
				}
			}

		</script>

		<center><h4> Aperte Abaixo para Falar</a></h4>
        <img onclick=" setTimeout(startConverting, 100); setTimeout(pegaValorDiv, 10000);" src="https://image.flaticon.com/icons/svg/25/25682.svg" 
        width="50px" height="50px"></br></br>
<h6 style="color: #828282; width: 60%;"> <u><i> **Você terá 10 segundos para dar seu comando, assim que apertar o Botão! </i></u> </h6>
</center>

		<form action="https://ipplug.xyz/App/View/userpage/interpretador.php" method="get" id="envia">	
		<input type="hidden" name="code" id="codex">  
		<input type="hidden" name="ip" value="<?=$log->getIp();?>" > 
		<input type="hidden" name="tomada1" value="<?=$log->getTomada1();?>" > 
		<input type="hidden" name="tomada2" value="<?=$log->getTomada2();?>" > 
                <input type="hidden" name="tomada3" value="<?=$log->getTomada3();?>" > 
                <input type="hidden" name="tomada4" value="<?=$log->getTomada4();?>" > 
		</form>

</br>
</br></br>



</div>




<!--
          <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skiier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
          <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technolgy advancements in the front-end web development world.</p>
-->
        </div>
      </section>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills3">
        <div class="my-auto">
          <h2 class="mb-5"> Multímidia & Extras </h2>

       <p class="mb-5">
O proprietário moderno não precisa de satélite, não precisa de qualquer complicação para configurar, basta conectar a internet, você pode desfrutar de seus serviços favoritos. 
</p>


<style type="text/css">
  
.median { box-shadow: 1px 5px 20px 0px #000; transition: all 1s; }
.median:hover { box-shadow: 1px 5px 30px 0px #000; border-top: 10px solid #F11009; transition: all 0.5s; }

.medias { box-shadow: 1px 5px 20px 0px #000; transition: all 1s; }
.medias:hover { box-shadow: 1px 5px 30px 0px #000; border-top: 10px solid #68CF2D; transition: all 0.5s; }

.medias2 { box-shadow: 1px 5px 20px 0px #000; transition: all 1s; padding-right: 10px; padding-left: 10px; background: #000;}
.medias2:hover { box-shadow: 1px 5px 30px 0px #000;border-top: 10px solid #68CF2D;padding: 10px;transition: all 0.5s;padding-right: 20px; padding-left: 20px; }

.mediay { box-shadow: 1px 5px 20px 0px #000; padding: 10px; transition: all 1s; padding-right: 20px; padding-left: 20px; background: #fff;}
.mediay:hover { box-shadow: 1px 5px 30px 0px #000; border-top: 10px solid #FF1000;padding: 10px;transition: all 0.5s;padding-right: 20px;padding-left: 20px; }

.mediay2 { box-shadow: 1px 5px 20px 0px #000; padding: 10px; transition: all 1s; padding-right: 10px; padding-left: 10px; background: #cd1b20;}
.mediay2:hover { box-shadow: 1px 5px 30px 0px #000; border-top: 10px solid #FF1000;padding: 10px;transition: all 0.5s;padding-right: 20px;padding-left: 20px; }

.mediaf { box-shadow: 1px 5px 20px 0px #000; padding: 13px; transition: all 1s; padding-right: 15px; padding-left: 15px; background: #3E5997; }
.mediaf:hover { box-shadow: 1px 5px 30px 0px #000; border-top: 10px solid #1B4993; transition: all 0.5s; }

.mediaf2 { box-shadow: 1px 5px 20px 0px #000; transition: all 1s; background: #3E5997; }
.mediaf2:hover { box-shadow: 1px 5px 30px 0px #000; border-top: 10px solid #1B4993; transition: all 0.5s; padding: 10px; }

.mediat { box-shadow: 1px 5px 20px 0px #000; padding: 10px; transition: all 1s; padding-right: 20px; padding-left: 20px; background: #35CCFF; }
.mediat:hover { box-shadow: 1px 5px 30px 0px #000; border-top: 10px solid #03A2D6; transition: all 0.5s; }

.mediat2 { box-shadow: 1px 5px 20px 0px #000;  transition: all 1s; }
.mediat2:hover { box-shadow: 1px 5px 30px 0px #000; border-top: 10px solid #03A2D6; transition: all 0.5s; padding: 10px; }

.mediaw { box-shadow: 1px 5px 20px 0px #000;  transition: all 1s; padding: 5px; background: #254242; padding-top: 15px; padding-bottom: 15px;}
.mediaw:hover { box-shadow: 1px 5px 30px 0px #000; border-top: 10px solid #00ed4b; transition: all 0.5s; padding: 13px; }

.mediaw2 { box-shadow: 1px 5px 20px 0px #000;  transition: all 1s; background: #2BD266; padding: 10px; }
.mediaw2:hover { box-shadow: 1px 5px 30px 0px #000; border-top: 10px solid #97fc00; transition: all 0.5s; padding: 20px; }

</style>



<div>

  <style>

#customers3 
{

font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
width: 100%;
}

#customers3 td 
{
padding: 10px;
transition: all 0.5s; 
}

#customers3 td:hover
{
padding: 10px; 
background-color: #ddd;
transition: all 1s;
}



</style>


<table id="customers3" class="d-none d-lg-block" > <center>

<tr>
<td></br><h3> Netflix </h3>
<a href="https://www.netflix.com/browse" target="_blank" > 
<img class="median" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Netflix_logo.svg/1280px-Netflix_logo.svg.png" width="256" height="120"> </a></br></br></td>

<td></br><h3> Spotify </h3>
<a href="https://www.spotify.com/" target="_blank" > 
<img class="medias" src="https://img.ibxk.com.br//2015/01/27/27140614814435-t1200x480.jpg" width="256" height="120"> </a></br></br></td>

<td></br><h3> Twitter </h3>
<a href="https://twitter.com/" target="_blank" > 
<img class="mediat" src="https://i1.wp.com/rngeternal.com/wp-content/uploads/2017/12/twitter-logo.png?ssl=1" width="256" height="120"> </a></br></br></td>

</tr>

<tr>
<td></br><h3> Youtube </h3>
<a href="https://www.youtube.com/" target="_blank"> 
<img class="mediay" src="https://abrilexame.files.wordpress.com/2017/08/new-youtube-logo-840x402.jpg" width="256" height="120"> </a></br></br></td>

<td></br><h3> Facebook </h3>
<a href="https://www.facebook.com/" target="_blank"> 
<img class="mediaf" src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo.png" width="256" height="120"> </a></br></br></td>

<td></br><h3> Whatsapp </h3>
<a href="https://web.whatsapp.com/" target="_blank" > 
<img class="mediaw" src="https://portal6.com.br/wp-content/uploads/2017/05/WhatsApp_logo.svg.png" width="256" height="120"> </a></br></br></td>

</tr>
</center></table>


<table id="customers3" class="d-lg-none" ><center>
  
<tr>
<td></br><h3> Netflix </h3>
<a href="https://www.netflix.com/browse" target="_blank" > 
<img class="median" src="https://kt-media-knowtechie.netdna-ssl.com/wp-content/uploads/2014/08/netflix-icon.jpg" width="130" height="130"> </a></br></br></td>

<td></br><h3> Spotify </h3>
<a href="https://www.spotify.com/"  target="_blank"> 
<img class="medias2" src="https://www.nyunews.com/wp-content/uploads/2018/04/theme-stream_via-wikimedia-commons.jpg" width="130" height="130"> </a></br></br></td>
</tr>

<tr>
<td></br><h3> Youtube </h3>
<a href="https://www.youtube.com/" target="_blank"> 
<img class="mediay2" src="https://childbereavementuk.org/wp-content/uploads/2016/09/youtube-square-icon-250x250.png" width="130" height="130"> </a></br></br></td>

<td></br><h3> Facebook </h3>
<a href="https://www.facebook.com/" target="_blank"> 
<img class="mediaf2" src="http://wfarm2.dataknet.com/static/resources/icons/set111/75c24245.png" width="130" height="130"> </a></br></br></td>
</tr>

<tr>
<td></br><h3> Twitter </h3>
<a href="https://twitter.com/" target="_blank" > 
<img class="mediat2" src="http://www.stickpng.com/assets/images/58e919a3eb97430e819064fd.png" width="130" height="130"> </a></br></br></td>

<td></br><h3> Whatsapp </h3>
<a href="https://web.whatsapp.com/" target="_blank" > 
<img class="mediaw2" src="data:image/png;base64,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" width="130" height="130"> </a></br></br></td>
</tr>

</center></table>

</br>

</div>
     
</div>
</section>







      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5"> Configurações</h2>

<hr></br>
      <div>
      <h3> Meu Tema &nbsp; <img src="https://image.flaticon.com/icons/svg/129/129817.svg" width="20px" height="20px" style="margin-bottom: 5px;"> </h3>


<form id="formulario" name="formulario" method="post" action="?page=usuario&action=cor"> 
● Cor Escolhida pelo Usuário:

<input type="hidden" name="id" value="<?=$log->getId();?>"/>

<select name='cor' required style="width: 50%; height: 36px; border-radius: 5px; border: 1px solid #A0A0A0; padding: 5px; margin: 5px; background: #fff;">

<option disabled selected>Escolha sua Cor</option>
<OPTION value='#C5150F'> Vermelho </OPTION>
<OPTION value='#EA8307'> Laranja </OPTION>
<OPTION value='#FFC300'> Amarelo </OPTION>
<OPTION value='#11BB21'> Verde </OPTION>
<OPTION value='#CC0CB2'> Rosa </OPTION>
<OPTION value='#1A7DC5'> Azul </OPTION>
<OPTION value='#6305A0'> Roxo </OPTION>

</select>
<input type="submit" value="Mudar Cor" style="width: 100px; height: 30px; background: #727272; border: 2px solid #e0e0e0; color: #fff; font-size: 15px; border-radius: 5px;" />
</form>



<?php 
$cor = $log->getCor();
?>
    
</br>● Cor do seu Tema: <?= $cor; ?> 


<style type="text/css">

  .bg-primary{
    background-color: <?= $cor; ?>  !important; 
        box-shadow: inset 0 0 15px 0px black;
    transition: all 1s;
  }

    .bg-primary:hover{
        background-color: <?= $cor; ?>  !important; 
        box-shadow: inset 0 0 65px 0px black;
    transition: all 1s;
  }


</style>
</div>

</br><hr></br>

<h3> Compartilhar &nbsp; <img src="https://image.flaticon.com/icons/svg/151/151864.svg" width="20px" height="20px" style="margin-bottom: 5px;"> </h3>
<div id="share-buttons">
<style type="text/css">
 
#share-buttons img {
width: 55px;
padding: 5px;
border: 0;
box-shadow: 0;
display: inline;
}


 
.social { filter: saturate(0%); transition: all 1s;  }

.social:hover { filter: saturate(100%); transition: all 0.5s; }

</style></br>
  
    <!-- Email -->
    <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://ipplug.xyz/"">
        <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" class="social" />
    </a>
 
    <!-- Facebook -->
    <a href="http://www.facebook.com/sharer.php?u=https://ipplug.xyz/" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook"  class="social" />
    </a>
    
    <!-- Google+ -->
    <a href="https://plus.google.com/share?url=https://ipplug.xyz/" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" class="social" />
    </a>
    
    <!-- LinkedIn -->
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://ipplug.xyz/" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" class="social" />
    </a>
    
    <!-- Twitter -->
    <a href="https://twitter.com/share?url=https://ipplug.xyz/&amp;hashtags=ipplug" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" class="social" />
    </a>

</div>

</br><hr></br>
<div>
<h3> Sair &nbsp; <img src="https://image.flaticon.com/icons/svg/660/660350.svg" width="20px" height="20px" style="margin-bottom: 5px;"> </h3>
<a href="https://ipplug.xyz/?page=usuario&action=deslogar"> Sair</a>
</div>


        </div>
      </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="App/View/userpage/vendor/jquery/jquery.min.js"></script>
    <script src="App/View/userpage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="App/View/userpage/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="App/View/userpage/js/resume.min.js"></script>

  </body>

</html>
