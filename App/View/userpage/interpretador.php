<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php

function aberto($a){
	if ($a==1){
		return "netflix";
	}
	elseif ($a==2){
		return "facebook";
	}
	elseif ($a==3){
		return "twitter";
	}
	elseif ($a==4){
		return "spotify";
	}
	elseif ($a==5){
		return "youtube";
	}
	elseif ($a==6){
		return "whatsapp";
	}
	elseif ($a==211){
		return "ligado dispositivo1";
	}
	elseif ($a==210){
		return "desligado dispositivo1";
	}
	elseif ($a==221){
		return "ligado dispositivo2";
	}
	elseif ($a==220){
		return "desligado dispositivo2";
	}
	elseif ($a==231){
		return "ligado dispositivo3";
	}
	elseif ($a==230){
		return "desligado dispositivo3";
	}
	elseif ($a==241){
		return "ligado dispositivo4";
	}
	elseif ($a==240){
		return "desligado dispositivo4";
	}
	elseif ($a==100){
		return "the Myth is becoming a legend!";
	}
	elseif ($a==703){
		return "temperatura";
	}
	elseif ($a==704){
		return "umidade";
	}
	elseif ($a==705){
		return "fogo";
	}
	elseif ($a==706){
		return "presença";
	}
	elseif ($a==707){
		return "gás";
	}
	elseif ($a==601){
		return "câmera";
	}
	elseif ($a==0){
		return "comando nao reconhecido!";
	}
	else{
		return "nao é pra aparecer isso aqui!";
	}
}


$teste11 = $_GET['code'];
$dispositivo11 = $_GET['tomada1'];
$dispositivo22 = $_GET['tomada2'];
$dispositivo33 = $_GET['tomada3'];
$dispositivo44 = $_GET['tomada4'];
$acao = 0;

$teste1 = strtolower($teste11);
$dispositivo1 = strtolower($dispositivo11);
$dispositivo2 = strtolower($dispositivo22);
$dispositivo3 = strtolower($dispositivo33);
$dispositivo4 = strtolower($dispositivo44);

echo" <br><hr><h1> Codigo Falado = $teste1 </h1> ";
echo" <br><hr><h3> Tomada 1 = $dispositivo1 </h3> ";
echo" <br><hr><h3> Tomada 2 = $dispositivo2 </h3> ";
echo" <br><hr><h3> Tomada 3 = $dispositivo3 </h3> ";
echo" <br><hr><h3> Tomada 4 = $dispositivo4 </h3> ";

$code = strtolower($teste1);
if (preg_match('/^ligar/',$code)){
	if (preg_match("/\b".$dispositivo1."\b/", $code)){
		$acao = 211;
	}
	elseif(preg_match("/\b".$dispositivo2."\b/", $code)){
		$acao = 221;
	}
	elseif(preg_match("/\b".$dispositivo3."\b/", $code)){
		$acao = 231;
	}
	elseif(preg_match("/\b".$dispositivo4."\b/", $code)){
		$acao = 241;
	}
}

if (preg_match('/^desligar/',$code)){
	if (preg_match("/\b".$dispositivo1."\b/", $code)){
		$acao = 210;
	}
	elseif(preg_match("/\b".$dispositivo2."\b/", $code)){
		$acao = 220;
	}
	elseif(preg_match("/\b".$dispositivo3."\b/", $code)){
		$acao = 230;
	}
	elseif(preg_match("/\b".$dispositivo4."\b/", $code)){
		$acao = 240;
	}
}

if (preg_match('/^temperatura/', $code)){
	$acao = 703;
}
if (preg_match('/^umidade/', $code)){
	$acao = 704;
}
if (preg_match('/^fogo/', $code)){
	$acao = 705;
}
if (preg_match('/^presença/', $code)){
	$acao = 706;
}
if (preg_match('/^gás/', $code)){
	$acao = 707;
}
if (preg_match('/^câmera/', $code)){
	$acao = 601;
}
if (preg_match('/^abrir/', $code)){
	if (preg_match("/\bnetflix\b/", $code)){
		echo"<script> window.open('https://www.netflix.com/br/','_blank'); </script>";
		$acao = 1;
	}
	if (preg_match("/\bfacebook\b/", $code)){
		echo"<script> window.open('https://www.facebook.com/','_blank'); </script>";
		$acao = 2;
	}
	if (preg_match("/\btwitter\b/", $code)){
		echo"<script> window.open('https://twitter.com/?lang=pt-br','_blank'); </script>";
		$acao = 3;
	}
	if (preg_match("/\bspotify\b/", $code)){
		echo"<script> window.open('https://www.spotify.com/br/','_blank'); </script>";
		$acao = 4;
	}
	if (preg_match("/\byoutube\b/", $code)){
		echo"<script> window.open('https://www.youtube.com','_blank'); </script>";
		$acao = 5;
	}
	if (preg_match("/\bwhatsapp\b/", $code)){
		echo"<script> window.open('https://www.whatsapp.com/?lang=pt_br','_blank'); </script>";
		$acao = 6;
	}
}
if (preg_match('/^bolsonaro/', $code)){
	echo"<script> window.open('https://www.bolsonaro.com.br/','_blank'); </script>";
		$acao = 100;
}

if ($acao == 0) {
	echo "<script> window.location.href = ' https://ipplug.xyz/index.php?page=usuario&action=userpage&erro=1 '; </script>";
}
if ($acao >= 1 && $acao <= 6) {
	echo "<script> window.location.href = ' https://ipplug.xyz/index.php?page=usuario&action=userpage '; </script>";
}
if ($acao == 100 ){
	echo "<script> alert('MITO MITO MITO!'); </script>";
}
?>
<form action="http://<?php  $ip = $_GET['ip']; echo $ip; ?>/" method="get" id="envia">
<input type="hidden" name="side" id= "side" value="301">
<input type="hidden" name="code" value="<?php echo $acao; ?>"></input>

<button name="botao" type='submit' style="width: 100px; height: 30px;" ></button>
</form>
<script type="text/javascript">
	document.getElementById("envia").submit(); 
</script>
</body>
</html>