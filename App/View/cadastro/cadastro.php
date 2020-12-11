<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="App/View/cadastro/css/estilo4.css">
<link rel="stylesheet" href="App/View/cadastro/assets/css/main.css" />
  
  <script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
  
<title> CADASTRO </title>
</head>

<body></br></br>

<!-- Header -->
        <header id="header" class="alt">
                <a href="#menu" width="55px" height="55px" style=" padding: 15px 0px 12px 0px; background-color: black; border-radius: 40px 0px 0px 40px; width: 100px; "> Menu &nbsp; </a>
        </header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">

					<li><a href="?page=home"> <img src="App/View/home/assets/css/home.png" width="14.7px" height="14.7px"> &nbsp; Início. </a></li>
					<li><a href="?page=compra"> <img src="App/View/home/assets/css/cart.png" width="14.7px" height="14.7px"> &nbsp; Comprar sua IP-Plug. </a></li>
                    <li><a href="?page=usuario"> <img src="App/View/home/assets/css/door.png" width="14.7px" height="14.7px"> &nbsp; Login IP-Plug. </a></li>
					<li><a href="?page=usuario&action=cadastro"> <img src="App/View/home/assets/css/use.png" width="14.7px" height="14.7px"> &nbsp; Fazer Cadastro. </a></li>
                  
                  	<li> <a href="https://developer.spotify.com/legal/third-party-licenses/"><center>  </br></br> <img src="http://www.campaignbrief.com/spotify-connect.png" width="250" > <iframe src="https://open.spotify.com/embed/user/obbjwl1j5tj5o6xbus0imv2pf/playlist/4KMDhTNz2QqcKChMzf0X1E" width="250" height="100" frameborder="0" allowtransparency="true" allow="encrypted-media" style="border-radius: 1px; border: 1px solid black;"> </iframe> </br> Copyright © 2018 Spotify Ltd <center></a></li>

				</ul>
			</nav>

  
</br>
<center>
</br></br></br>


<div class="container center centro" >
</br></br></br></br>
<div class="login-block"> 
    
    <!-- A Brincadeira Começa Aqui, area do cadastro. -->

 </br><a> <img src="App/View/cadastro/css/ipat1.png" width="235px" height="95px" ></a></br>
<h2> <u>Cadastro - Crie uma conta IPPLUG</u> </h2>

	 <form method="post" action="?page=usuario&action=cadastrar" enctype="multipart/form-data">   <!-- Pagina que os dados serão enviados -->

        </br>
		<input type="text" id="nomecompleto" name="nome" class="inputx" placeholder=" Nome Completo "  required /> 

	    </br>
		<input type="email"  id="email" name="email" class="inputx" placeholder=" Endereço de E-mail "  required />  
        </br>

	    </br>
		<input type="password"  id="senha" name="senha" class="inputx" placeholder=" Senha de Acesso "   required />
        </br>
                                                                               
        </br>
        <input type="text"  id="data" name="nascimento" class="inputx" placeholder=" Data de Nascimento " onfocus="(this.type='date')" onblur="(this.type='text')" required />             
        </br>

	    </br>
        <input type="text"  id="cel" name="telefone" class="inputx" placeholder=" Celular/Telefone (Com DDD) " maxlength="13" OnKeyPress="formatar('## ####-#####', this)" required />
	    </br>

      <select name='cor' class="inputx">

      <option disabled selected>Escolha sua Cor</option>
      <OPTION value='#C5150F'> Vermelho </OPTION>
      <OPTION value='#EA8307'> Laranja </OPTION>
      <OPTION value='#FFC300'> Amarelo </OPTION>
      <OPTION value='#11BB21'> Verde </OPTION>
      <OPTION value='#CC0CB2'> Rosa </OPTION>
      <OPTION value='#1A7DC5'> Azul </OPTION>
      <OPTION value='#6305A0'> Roxo </OPTION>

      </select>

        </br>
<select name="sexo"  id="sexo" class="inputx" placeholder=" Gênero Sexual "   required> 
  		<option value="" disabled selected > Selecione seu Gênero Sexual </option> 
		<option value="M">Masculino</option> 
		<option value="F">Feminino</option> 
		<option value="O">Outros</option> 
	</select>
        </br>


        </br>
<select name="estado"  id="est" class="inputx"  required> 
        <option value="" disabled selected > Selecione seu Estado (UF) </option> 
		<option value="Acre">Acre</option> 
		<option value="Alagoas">Alagoas</option> 
		<option value="Amazona">Amazonas</option> 
		<option value="Amapá">Amapá</option> 
		<option value="Bahia">Bahia</option> 
		<option value="Ceará">Ceará</option> 
		<option value="Distrito Federal">Distrito Federal</option> 
		<option value="Espírito Santo">Espírito Santo</option> 
		<option value="Goiás">Goiás</option> 
		<option value="Maranhão">Maranhão</option> 
		<option value="Mato Grosso">Mato Grosso</option> 
		<option value="Mato Grosso do Sul">Mato Grosso do Sul</option> 
		<option value="Minas Gerais">Minas Gerais</option> 
		<option value="Pará">Pará</option> 
		<option value="Paraíba">Paraíba</option> 
		<option value="Paraná">Paraná</option> 
		<option value="Pernambuco">Pernambuco</option> 
		<option value="Piauí">Piauí</option> 
		<option value="Rio de Janeiro">Rio de Janeiro</option> 
		<option value="Rio Grande do Norte">Rio Grande do Norte</option> 
		<option value="Rondônia">Rondônia</option> 
		<option value="Rio Grande do Sul">Rio Grande do Sul</option> 
		<option value="Roraima">Roraima</option> 
		<option value="Santa Catarina">Santa Catarina</option> 
		<option value="Sergipe">Sergipe</option> 
		<option value="São Paulo">São Paulo</option> 
		<option value="Tocantins">Tocantins</option> 
	</select>

         <br><br>

        
         Foto de Perfil: <input type="file" name="foto"  accept="image/png, image/jpeg" /> 
         

         </br></br> <input type="submit" value="Fazer Cadastro" class="botao1"/>

</form>
</div>
</div></br></br></br> 

<!-- A Brincadeira TERMINA Aqui, Fim da area do cadastro. -->

<!-- Scripts -->
        <script src="App/View/cadastro/assets/js/jquery.min.js"></script>
        <script src="App/View/cadastro/assets/js/jquery.scrolly.min.js"></script>
        <script src="App/View/cadastro/assets/js/jquery.scrollex.min.js"></script>
        <script src="App/View/cadastro/assets/js/skel.min.js"></script>
        <script src="App/View/cadastro/assets/js/util.js"></script>
        <script src="App/View/cadastro/assets/js/main.js"></script>

</center>			
</body>
</html>