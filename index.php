<!DOCTYPE html>
<html>

<!-- CÓDIGO MARCADOR DO SITE -->
<head>
	<title>My Portfolio</title>
	<link href="estilo/fontawesome.css" rel="stylesheet" />
	<link href="estilo/fontawesome.min.css" rel="stylesheet" />
	<link href="estilo/style.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--SE ADPTAR A QUALQUER TIPO DE TELA -->
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<meta name="author" content="Josiel Costa">
	<meta charset="utf-8">
		
</head>
<body>
  
 <!-- <i class="fab fa-css3-alt"></i>  uses brands style -->

	<!--O elemento Center do HTML  (<center>) se tornou aboleto, 
		is a block-level element queexibe o conteúdo em nível de bloco 
		ou em linha centralizado horizontalmente dentro do elem ento que o contém-->

	<header><!--TOP SITE-->
		<div class="center">
		<div class="logo left">Welcome Portifólio</div><!--LOGOMARCA-->
		<nav class="desktop right">
		<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Sobre</a></li>
				<li><a href="">Serviços</a></li>
				<li><a href="">Contato</a></li>
			</ul>
		</nav>
		<nav class="mobile right">
			<div class="botao-menu-mobile">
			<i class="fa fa-bars" aria-hidden="true">Botão</i>
			</div>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Sobre</a></li>
				<li><a href="">Serviços</a></li>
				<li><a href="">Contato</a></li>
			</ul>
		</nav>	
		<div class="clear"></div><!--CLEAR--> 
	</div><!--center-->
	</header>

	<section class="banner-principal"> <!--BANNER PRINCIPAL-->
	<div class="overlay"></div><!--OVERLAY-->
		<div class="center">
		<form>
			<h5>Qual o seu melhor e-mail?</h5>
			<input type="email" name="email" required />
			<input type="submit" name="acao" value="Cadastrar!">
		</form>
	</div><!--center-->
	</section><!--BANNER PRINCIPAL-->

	<section class="descricao-autor">
			<div class="center">
			<div class="w50 left">		
			<h2>Josiel C. Martins</h2>
			

			<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
			<p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).</p>
		</div><!--w50-->
		<div class="w50 left">
			<!--Pegar imagen depois-->
			<img class="right" src="imagens/EUperfil.jpeg"/>
		</div><!--w50-->
		<div class="clear"></div>
	</div><!--center-->
	</section><!--descriçao-autor-->

	<section class="especialidades"><!--ESPECIALIDADS-->

	<div class="center">
		<h2 class="title">Especialidades</h2>
				<div class="w33 left box-especialidades">
				<!--<h3><i class="fab fa-css3-alt"></i></h3>-->
				<img class="" src="imagens/css.png"/>
				<h4>CSS3</h4>
				<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
			</div><!--box-especialidads-->

				<div class="w33 left box-especialidades">
				<!--<h3><i class="fab fa-html5" aria-hidden="true"></i></h3>-->
				<img class="" src="imagens/html.png"/>
				<h4>HTML</h4>
				<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
			</div><!--box-especialidads-->

				<div class="w33 left box-especialidades">
				<!--<h3><i class="fab fa-js-square"></i></h3>-->
				<img class="" src="imagens/php.png"/>
				<h4>PHP</h4>
				<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
			</div><!--box-especialidads-->

			<div class="w33 left box-especialidades">
				<!--<h3><i class="fab fa-html5" aria-hidden="true"></i></h3>-->
				<img class="" src="imagens/java.png"/>
				<h4>JAVA</h4>
				<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
			</div><!--box-especialidads-->

			<div class="w33 left box-especialidades">
				<!--<h3><i class="fab fa-html5" aria-hidden="true"></i></h3>-->
				<img class="" src="imagens/sql.png"/>
				<h4>SQL</h4>
				<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
			</div><!--box-especialidads-->

			<div class="clear"></div> <!--ALTURAA-->
		</div><!--center-->
	</section><!--especialidades-->

	<section class="extras">

		<div class="center">
		<div class="w50 left depoimentos-conteiner">
			<h2 class="title">Depoimentos</h2>
			<div class="depoimento-sigle">
				<p class="depoimento-descricao">
					"É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras.."
				</p>
				<p class="nome-autor">RDS Construção</p>
			</div><!--depoimento-sigle-->

			<div class="depoimento-sigle">
				<p class="depoimento-descricao">
					"É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras.."
				</p>
				<p class="nome-autor">Lu Tec Service</p>
			</div><!--depoimento-sigle-->

		</div><!--w50-->

		<div class="w50 left">
		
			</div><!--depoimento-sigle-->
			</div><!--depoimento-sigle-->
		</div><!--w50-->
		<div class="w50 left servicos-conteiner">
		<div class="clear"></div>
			<h2 class="title">Serviços</h2>
			<div class="servicos">
			<ul>
				<li>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui",</li>
				<li>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui",</li>
				<li>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui",</li>
				
			</ul>
		</div><!--serivos-->
	</div><!--w50-->
	<div class="clear"></div>
	</div><!--center-->
	</section><!--extras-->

	<footer>
		<div class="center">
		<div class="w33 left box-direitos">
		<p>Todos os direitos reservados. <img class="" src="imagens/mug.png"/></p>
		
		</div><!--box-direitos-->
		</div><!--center-->

	</footer> <!--rodapé-->


</body>
</html>

<!--<img class="" src="imagens/mug.png"/>-->