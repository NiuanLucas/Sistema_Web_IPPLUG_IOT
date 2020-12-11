<!DOCTYPE html>
<html>

<head>
<title> Login IPPLUG </title>
<link rel="stylesheet" href="App/View/login/login.css" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">  
<link rel="stylesheet" href="App/View/login/assets/css/main.css" />
</head>

<style type="text/css">
body {
font-family: Arial, Helvetica, sans-serif;
}
</style>

<body>
    <!-- Header -->
        <header id="header" class="alt">
                <a href="#menu" style=" padding: 0px 0px 0px 25px; background-color: black; border-radius: 40px 0px 0px 40px; "> Menu &nbsp; </a>
        </header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">

					<li><a href="?page=home"> <img src="App/View/home/assets/css/home.png" width="14.7px" height="14.7px"> &nbsp; Início. </a></li>
					<li><a href="?page=compra"> <img src="App/View/home/assets/css/cart.png" width="14.7px" height="14.7px"> &nbsp; Comprar sua IP-Plug. </a></li>
                    <li><a href="?page=usuario"> <img src="App/View/home/assets/css/door.png" width="14.7px" height="14.7px"> &nbsp; Login IP-Plug. </a></li>
					<li><a href="?page=usuario&action=cadastro"> <img src="App/View/home/assets/css/use.png" width="14.7px" height="14.7px"> &nbsp; Fazer Cadastro. </a></li>
                  
                  	<li> <a href="https://developer.spotify.com/legal/third-party-licenses/"><center>  </br></br> <img src="http://www.campaignbrief.com/spotify-connect.png" width="250" > <iframe src="https://open.spotify.com/embed/user/obbjwl1j5tj5o6xbus0imv2pf/playlist/4KMDhTNz2QqcKChMzf0X1E" width="250" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media" style="border-radius: 1px; border: 1px solid black;"> </iframe> Copyright © 2018 Spotify Ltd <center></a></li>

				</ul>
			</nav>
        
        
<center>

</br></br></br></br>
<div class="container center centro">

</br>
<div class="login-block"> <!-- A brincadeira do Login Come�a Aqui, area de inserir username(email) e senha -->

</br><center><a> <img src="App/View/login/img/ipat1.png" width="235px" height="95px"></a></center></br>
  <h1>Acesse sua IPPLUG</h1>
 
<form method="post" action="index.php?page=usuario&action=login" >

  <input type="email" id="username" name="email" placeholder="Email do Usuário"  /> <!-- Pagina que o usuario deve chegar -->
  <input type="password" id="senha" name="senha" placeholder="Senha"  />

  <?= isset($erro)? $erro : "" ;?>

<style type="text/css">

.botao6{

color: white;
background-color: rgba(14,164,227, 1.0);
border-radius: 5px;
border: 0px;
font-family: Arial, Helvetica, sans-serif;
font-weight: bold;
font-size: 15px;

padding: 10px;
margin: 10px;

width: 50%;
height: 50px;

border-top: 10px solid #70D4FF;
  transition: all 1s;
 }

.botao6:hover{
background-color: #73C9EE;
  border-top: 15px solid #0078FF;
  height: 55px;
  transition: all 1s;
 }

</style>

</br><input type="submit" value="Entrar" class="botao6"/></br>

 </form>

  <br> <a href="https://ipplug.xyz/?page=usuario&action=cadastro" style=" color: #1A9AED; "> Não Tem Cadastro? Faça o seu agora mesmo! </a></br>


</div></br>
</div></br></br> <!-- A brincadeira do Login Termina Aqui -->
<!-- Scripts -->
    <script src="App/View/login/assets/js/jquery.min.js"></script>
    <script src="App/View/login/assets/js/jquery.scrolly.min.js"></script>
    <script src="App/View/login/assets/js/jquery.scrollex.min.js"></script>
    <script src="App/View/login/assets/js/skel.min.js"></script>
    <script src="App/View/login/assets/js/util.js"></script>
    <script src="App/View/login/assets/js/main.js"></script>
</body>
</center>
</html>



