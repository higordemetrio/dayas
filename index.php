<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<link href="estilo.css" rel="stylesheet">
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<head>
	<title>Dayas Modas</title>
</head>
<body  data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="container-fluid" style="background-color:white;color:#fff;height:200px;">
	  	<div id=logo>
			<p align="center">Dayas Modas</p> 
		</div>
	</div>
	 
	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="z-index:10; border-radius: 0px" >
		<div class="container-fluid" style="background-color: black">
		    <div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		    	</button>
		    	<a class="navbar-brand" href="#" style="font-family: 'Dayas'; font-size: 30px">Dayas</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		    	<ul class="nav navbar-nav">
		        	<li><a href="#sobre">Sobre</a></li>
		        	<li><a href="#contato">Contato</a></li>
		        	<li><a href="#localizacao">Localização</a></li>
		    	</ul>
		    	<ul class="nav navbar-nav navbar-right" style="margin: -5px 0px -5px 0px;">
		        	<li><a href="https://www.instagram.com/dayas_modas"> <img src="icons/insta.png" width="30px"> </a></li>
					
					<li><a href="https://www.facebook.com/dayas.ituiutaba"> <img src="icons/face.png" width="30px"> </a></li>
		    	</ul>
		    </div>
		</div>
	</nav>
 
	<div id=galeria  style="z-index:1;">
		<div class="container-fluid col-md-7 col-md-offset-3"  style="z-index:1;">
			<?php include('galeria.php') ?>
		</div>
	</div>

	<div id=sobre class="secao col-md-12">
		<br><br><br>
		<h1 class="spam-secao"> Sobre </h1>
		<hr>
	</div>

	<div class="col-md-6 col-md-offset-3 borda_esq">
		<img src="imagens/faixada.png" style="width: 60%">

		<h2 align="justify"> Fundada em  1989, vestindo gerações que acompanham com fidelidade nossa marca e nosso produtos. A quase 30 anos conseguindo cumprir os desafios do dia a dia do mercado, onde cada etapa foi muito importante para conquistar o que conquistamos e chegar onde chegamos.<br>
		Abrangimos o público adulto masculino e feminino com roupas e acessórios. A Dayas Modas estará sempre em busca de renovações para nossos clientes. </h2>
	</div>
	<br>

	<div id="contato" class="secao col-md-12">
		<br><br><br>
		<h1 class="spam-secao"> Contato </h1>
		<hr>
	</div>

	<div class="col-md-7 col-md-offset-3 col-sm-12 borda_esq">
		<div class="row col-sm-12">
			<span> <img src="icons/tele_preto.png" width="50px">  (34) 3262 2458</span><br><br>
		</div>
		<div class="row col-sm-12">
			<span> <img src="icons/wpp_preto.png" width="50px">  (34) 9 9206 0023</span><br><br>
		</div>
		<div class="row col-sm-12">
			<span> <a href="https://www.facebook.com/dayas.ituiutaba" target="_blank"> <img src="icons/face_preto.png" width="50px"> https://www.facebook.com/dayas.ituiutaba </a></span><br><br>
		</div>
		<div class="row col-sm-12">
			<span> <a href="https://www.instagram.com/dayas_modas" target="_blank"> <img src="icons/insta_preto.png" width="50px"> https://www.instagram.com/dayas_modas</a></span><br><br>
		</div>
		<div class="row col-sm-12">
			<span> <img src="icons/email_preto.png" width="50px">  dayasmodas@gmail.com</span><br><br>	
		</div>	
	</div>

	<div id="localizacao" class="secao col-md-12" > 
		<br><br><br>
		<h1 class="spam-secao"> Localização</h1>
		<hr>
		<div id=mapa_endereco class="col-md-7 col-md-offset-3 borda_esq">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1886.4847387088075!2d-49.47053208848588!3d-18.976934695536475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94a231e533ecb12b%3A0xcb9bc9158d568d75!2sDayas+Modas!5e0!3m2!1spt-BR!2sbr!4v1497826473920" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

			<h2>Ituiutaba-MG</h2>
			<h4>Avenida Dezessete, 2020, Bairro Platina</h4>
		</div>
	</div>
	
		
	<footer class="container-fluid text-center col-md-12 rodape">
	  <p>Todos os direitos reservados</p>
	</footer>-->
</body>
</html>
