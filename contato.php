<?php  

	

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr" class="csstransforms no-csstransforms3d csstransitions">
<head>
	<title> ETIM Informática Jaú </title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html">
  <meta name="author" content="ETIM Informatica Jaú - Turma 2016">
  <meta name="description" content="Encontre conteúdo e posts relacionados a nossas matérias e a nossa turma rapidamente, onde e quando você quiser.">
  <meta name="keywors" content="ETIM Informática - Jaú - ETEC Joaquim Ferreira do Amaral - Turma 2016">
    
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript" src="scripts/function.js"></script>

        <link rel="stylesheet" href="styles/giovani.css" type="text/css"/>
        <link rel="stylesheet" href="styles/andre.css" type="text/css"/>
        <link rel="stylesheet" href="styles/desktop_style.css" type="text/css"/>
        <link rel="stylesheet" href="styles/general_style.css" type="text/css">

	<link rel="icon" type="image/ico" href="images/favicon.ico"/>
</head>
<body>

<div id="wrap">
  <header>
  	<div class="inner relative">

      <div id="wrap-logo">
			   <span class="logo" href="#"> <a href="index.html"> <img id="logo" src="images/logo4.png" alt="logo"> </a> </span>
      </div>
			<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
			<nav id="navigation">
				<ul id="main-menu">
					<li class="current-menu-item"><a href="index.html">Home</a></li>
					<li class="parent">
						<a href="#">Categorias</a>
						<ul class="sub-menu">
							<li>
								<a class="parent" href="#"><i class="icon-file-alt"></i> Técnico</a>
								<ul class="sub-menu">
									<li><a href="bd.html">Banco de Dados</a></li>
									<li><a href="#">Instalação e Manutenção de Computadores</a></li>
									<li><a href="#">Lógica de Programação</a></li>
									<li><a href="#">Operação de Software Aplicativo</a></li>
                  <li><a href="#">Técnicas de Programação para Internet</a></li>
								</ul>
							</li>
              <li>
                <a class="parent" href="#"><i class="icon-file-alt"></i> Ensino Médio</a> 
                <ul class="sub-menu">
                  <li><a href="#">Arte</a></li>
                  <li><a href="#">Biologia</a></li>
                  <li><a href="#">Educação Física</a></li>
                  <li><a href="#">Filosofia</a></li>
                  <li><a href="#">Física</a></li>
                  <li><a href="#">Geografia</a></li>
                  <li><a href="#">História</a></li>
                  <li><a href="#">Inglês</a></li>
                  <li><a href="#">Matemática</a></li>
                  <li><a href="#">Português</a></li>
                  <li><a href="#">Química</a></li>
                  <li><a href="#">Sociologia</a></li>
                </ul>
              </li>
						</ul>
					</li>
					<li class="parent">
						<a href="#">Multimídia</a>
						<ul class="sub-menu">
							<li><a href="#">Áudios</a></li>
							<li><a href="#">Galeria</a></li>
              				<li><a href="videos.html">Vídeos</a></li>
						</ul>
					</li>
          <li><a href="contato.html">Contato</a></li>
   		<li><a href="#">Sobre</a> </li>

				</ul>
			</nav>

			<div class="clear"></div>
		</div>	 
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">

    <!-- Formulário p/ Contato -->
    <form id="contato" method="POST" action="salvar_mensagem.php">
        <label for="campoNome">
            Nome Completo: <input type="text" name="nome" class="campoNome" required="">
        </label>

        <label for="campoEmail">
            E-mail: <input type="email" name="email" class="campoEmail" required="">
        </label>

        <textarea name="mensagem" class="campoMensagem" placeholder="Digite sua mensagem aqui!" required=""></textarea>

        <input type="submit" value="Enviar" class="botao_enviar">


    </form>

    <aside id="aside_contato">
        <p class="titulo_contato">Contato</p>
        <p class="texto_contato">Deixe aqui elogios, críticas ou sugestões sobre o site!</p>
    </aside>

  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates" target="_blank">OS Templates</a></p>

    <nav id="navegation2">
      <ul id="rodape-menu">
        <a href="#"> <li class="rede-social" id="facebook"> </li> </a>
        <a href="#"> <li class="rede-social" id="plus"> </li> </a>
        <a href="#"> <li class="rede-social" id="youtube"> </li> </a>
      </ul>
    </nav>

    <p class="fl_left">Copyright &copy; 2016 - Todos os Direitos Reservados - ETIM Informática Jaú</p>
  </footer>
</div>
</body>
</html>