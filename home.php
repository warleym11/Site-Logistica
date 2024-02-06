
<?php
session_start();

// Verifica se a variável de sessão para o login com sucesso está definida
if (isset($_SESSION['login_success']) && $_SESSION['login_success'] == true) {
    // Remove a variável de sessão após exibir o alerta
    unset($_SESSION['login_success']);
    echo "<script>alert('Login bem-sucedido!');</script>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Home</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="One page parallax responsive HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Bingo HTML Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="plugins/lightbox2/css/lightbox.min.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body id="body">

<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
	<div class="container">
	  <!-- main nav -->
	  <nav class="navbar navbar-expand-lg navbar-light px-0">
		<!-- logo -->
		<a href="home.php">
		  <img loading="lazy" class="logo-default" src="images/logo-correios-4096 2.png" alt="logo" />
		  <img loading="lazy" class="logo-white" src="images/logo-correios-4096 2.png" alt="logo" />
		</a>
		<!-- /logo -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
		  aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
  
		<div class="collapse navbar-collapse" id="navigation">
		  <ul class="navbar-nav ml-auto text-center">
			<li class="nav-item dropdown active">
			  
			  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
				<li><a class="dropdown-item" href="index.html">Homepage</a></li>
				<li><a class="dropdown-item" href="onepage-slider.html">Onepage</a></li>
				<li><a class="dropdown-item" href="onepage-text.html">Onepage 2</a></li>
					
				<li class="dropdown dropdown-submenu dropright">
				  <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu  <i class="tf-ion-chevron-down"></i></a>
		
				  <ul class="dropdown-menu" aria-labelledby="dropdown0501">
					<li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
					<li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
				  </ul>
				</li>
			  </ul>
			</li>
			<li class="nav-item ">
			  <a class="nav-link" href="login.php">Login</a>
			</li>
			<li class="nav-item ">
			  <a class="nav-link" href="cadastro.php">Cadastro</a>
			</li>
			<li class="nav-item ">
			  <a class="nav-link" href="home.php">Home</a>
			</li>
			<li class="nav-item ">
			  <a class="nav-link" href="sobre.php">Sobre</a>
			</li>
		   
		   
		   
			  <ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
				<li><a class="dropdown-item" href="404.html">404 Page</a></li>
				<li><a class="dropdown-item" href="blog.html">Blog Page</a></li>
				<li><a class="dropdown-item" href="single-post.html">Blog Single Page</a></li>
					
				<li class="dropdown dropdown-submenu dropleft">
				  <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0201" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu  <i class="tf-ion-chevron-down"></i></a>
		
				  <ul class="dropdown-menu" aria-labelledby="dropdown0201">
					<li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
					<li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
				  </ul>
				</li>
			  </ul>
			</li>
		  </ul>
		</div>
	  </nav>
	  <!-- /main nav -->
	</div>
  </header>
<!--
End Fixed Navigation
==================================== -->

<div class="hero-slider">
	<div class="slider-item th-fullpage hero-area" style="background-image: url(images/carrosel_1.png);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Para cada necessidade
						 existe um sedex</h1>
					<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Precisou enviar?<br>conte com o sedex, aqui é rapidez e eficácia.</p>
					
				</div>
			</div>
		</div>
	</div>
	<div class="slider-item th-fullpage hero-area" style="background-image: url(images/carrosel_2.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Receba suas encomendas de forma rápida e segura</h1>
					<p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Receba suas encomendas
						na porta da sua casa
						<br> com rapidez e segurança!</p>
					
				</div>
			</div>
		</div>
	</div>
</div>

<!--
Start About Section
==================================== -->
<section class="service-2 section">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-6">
        <!-- section title -->
        <div class="title text-center">
          <h2>A encomenda líder do Brasil</h2>
          <p>Sendo o serviço líder de envios expressos no Brasil, o SEDEX atende a você de acordo com a sua necessidade, sempre com a qualidade dos Correios, um dos melhores serviços postais do mundo!

			Disponível em todo o território brasileiro, os Correios oferecem o serviço de envio ideal para a sua encomenda.
		  </p>
			<a href="">Confira a melhor modalidade para a sua necessidade.</a>
          <div class="border"></div>
        </div>
        <!-- /section title -->
      </div>
    </div>
    <div class="row">

      <div class="col-md-4 text-center d-none d-md-block">
        <img src="images/about/member.jpg" alt="">
      </div>
      <div class="col-md-8">
        <div class="row text-center">
          <div class="col-md-6 col-sm-6">
            <div class="service-item">
				
				<img src="images/mapa.png" class="icones10" alt="">
              <h4>Acompanhe seu objeto</h4>
              <a href="">Consulte aqui a situação da sua encomenda e previsão de entrega</a>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6">
            <div class="service-item">
			  <img src="images/pacote.png" class="icones10" alt="">
              <h4>Proibições e Restrições</h4>
              <a href="">Antes de enviar, veja aqui a relação de objetos que os Correios NÃO transportam</a>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6">
            <div class="service-item">
              <img src="images/gps.png" class="icones10" alt="">
              <h4>Encontre sua Agência</h4>
              <a href="">Saiba onde encontrar a agência mais próxima a você</a>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6">
            <div class="service-item">
              <img src="images/mundoo.png" class="icones10" alt="">
              <h4>Minhas Importações</h4>
              <p>Veja o andamento do seu objeto adquirido no exterior</p>
			  <a href="#" class="btn btn-main mt-20">Acesse o minhas importações</a>
			  
			  
            </div>
          </div><!-- END COL -->
        </div>
      </div>
    </div> <!-- End row -->
  </div> <!-- End container -->
</section> <!-- End section -->


<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8 text-center">
				<h2>Serviços de Entrega Expressa</h2>
				<p>Cruzando Fronteiras e Superando Distâncias, Nossa Missão é Entregar Confiança em Cada Pacote.</p>
				
			</div>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Counter Section
==================================== -->
<section class="counter-wrapper section-sm">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-8 text-center">
				<div class="title">
					<h2>Visão geral</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- first count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-alarm-outline"></i>
					<div>
						<span class="counter" data-count="1000000">0</span>
					</div>
					<h3>Clientes felizes</h3>
				</div>
			</div>
			<!-- end first count item -->

			<!-- second count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-analytics-outline"></i>
					<div>
						<span class="counter" data-count="130000">0</span>
					</div>
					<h3>Projetos completos</h3>
				</div>
			</div>
			<!-- end second count item -->

			<!-- third count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item">
					<i class="tf-ion-ios-compose-outline"></i>
					<div>
						<span class="counter" data-count="900000">0</span>
					</div>
					<h3>Feedbacks positivos</h3>

				</div>
			</div>
			<!-- end third count item -->

			<!-- fourth count item -->
			<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
				<div class="counters-item kill-border">
					<i class="tf-ion-ios-bolt-outline"></i>
					<div>
						<span class="counter" data-count="250000000">0</span>
					</div>
					<h3>Entregas concluidas</h3>
				</div>
			</div>
			<!-- end fourth count item -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

<!-- Start Testimonial
=========================================== -->
		
	<section class="testimonial section" id="testimonial">
		<div class="container">
			<div class="row">				
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div class="testimonial-slider">
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Warley é um aluno dedicado no curso de informática na escola "Professora Luiza de Teodoro Vieira". Seu entusiasmo pela programação web é evidente em sua abordagem apaixonada para desenvolver soluções inovadoras. Ele é conhecido por sua habilidade técnica excepcional, sempre explorando novas linguagens e frameworks para aprimorar suas habilidades de programação.

									No campo de banco de dados, Warley destaca-se pela capacidade de criar estruturas robustas e eficientes para armazenamento e recuperação de dados. Sua precisão e atenção aos detalhes garantem que os sistemas que ele projeta sejam eficientes e confiáveis.
									
									Warley também demonstra aptidão no design, combinando criatividade com uma compreensão sólida dos princípios de usabilidade. Seus projetos destacam-se não apenas pela estética, mas também pela experiência do usuário cuidadosamente planejada.
									
									Além disso, Warley destaca-se em gerenciamento de conteúdo, assegurando que a informação seja organizada e acessível. Sua habilidade em estruturar conteúdo é fundamental para criar experiências de usuário envolventes e informativas.
									
									Quanto à gestão de startups, Warley exibe habilidades empreendedoras promissoras. Ele compreende a importância de uma visão estratégica e está sempre buscando oportunidades para inovar e melhorar processos.</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img loading="lazy" src="images/warleym2.jpg" class="warleym" alt="">
							</div>
							<div class="client-meta">
								<h3>Warley Marques</h3>
								<span>CEO , Correios </span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
				
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lais é uma estudante notável no curso de informática na escola "Professora Luiza de Teodoro Vieira". Seu talento em programação web é evidente, destacando-se por sua capacidade de transformar conceitos abstratos em código funcional. Sua abordagem criativa e mente analítica a torna uma programadora excepcional.

									Na área de banco de dados, Lais demonstra habilidades sólidas na criação e otimização de estruturas de dados. Sua meticulosidade garante a integridade e eficiência dos sistemas em que ela trabalha.
									
									Lais traz uma abordagem única para o design, equilibrando estética com funcionalidade. Seus projetos não apenas impressionam visualmente, mas também oferecem uma experiência de usuário intuitiva.
									
									No gerenciamento de conteúdo, Lais se destaca por sua capacidade de organizar informações de maneira lógica e acessível. Sua abordagem estruturada garante que o conteúdo seja apresentado de maneira clara e eficiente.
									
									Quanto à gestão de startups, Lais demonstra uma mentalidade empreendedora sólida. Ela entende a importância da inovação e está sempre pronta para explorar novas oportunidades e desafios. Sua habilidade em articular uma visão estratégica é uma mais-valia para qualquer projeto em que ela esteja envolvida.</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img loading="lazy" src="images/lais.jpg" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h3>Lais Costas</h3>
								<span>CEO , Correios </span>
							</div>
						</div>
					</div>
				</div> 		<!-- end col lg 12 -->
			</div>	    <!-- End row -->
		</div>       <!-- End container -->
	</section>    <!-- End Section -->

<!--
Start Blog Section
=========================================== -->
<section class="blog" id="blog">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center ">
					<h2> Alguns de nossos <span class="color">serviços</span></h2>
					<div class="border"></div>
					
				</div>
			</div>
			<!-- /section title -->
		</div>

		<div class="row">
			<!-- single blog post -->
			<article class="col-lg-4 col-md-6">
				<div class="post-item">
					<div class="media-wrapper">
						<img src="images/sedexhj.png" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3><a href="single-post.html">SEDEX Hoje</a></h3>
						<p>Sua encomenda entregue no mesmo dia, conforme área de cobertura.</p>
						<a href="">Saiba mais sobre o SEDEX Hoje</a>
					</div>
				</div>
			</article>
			<!-- /single blog post -->

			<!-- single blog post -->
			<article class="col-lg-4 col-md-6">
				<div class="post-item">
					<div class="media-wrapper">
						<img loading="lazy" src="images/sedex10.png" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3><a href="single-post.html">SEDEX 10</a></h3>
						<p>Sua encomenda entregue até as 10h do dia útil seguinte.</p>
						<a href="">Saiba mais sobre o SEDEX 10</a>
					</div>
				</div>
			</article>
			<!-- end single blog post -->

			<!-- single blog post -->
			<article class="col-lg-4 col-md-6">
				<div class="post-item">
					<div class="media-wrapper">
						<img loading="lazy" src="images/sedex12.png" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3><a href="single-post.html">SEDEX 12</a></h3>
						<p>Sua encomenda entregue até o meio dia, do dia útil seguinte.</p>
						<a href="">Saiba mais sobre o SEDEX 12</a>
					</div>
				</div>
			</article>
			<!-- end single blog post -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

<footer id="footer" class="bg-one">
	<div class="top-footer">
	  <div class="container">
		<div class="row justify-content-around">
		  <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
			<h3>Sobre</h3>
			<p>A Expresso Ágil é uma empresa de correios dedicada a oferecer soluções de entrega rápidas e confiáveis para seus clientes.</p>
		  </div>
		  <!-- End of .col-sm-3 -->
  
		  <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
			<ul>
			  <li>
				<h3>Nossos Serviços</h3>
			  </li>
			  <li><a href="#">Ui/Ux Design</a></li>
			  <li><a href="#">Graphic Design</a></li>
			  <li><a href="#">Web Design</a></li>
			  <li><a href="#">Web Development</a></li>
			</ul>
		  </div>
		  <!-- End of .col-sm-3 -->
  
		  <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
			<ul>
			  <li>
				<h3>Links rápidos</h3>
			  </li>
			  <li><a href="cadastro.php">Cadastro</a></li>
			  <li><a href="login.php">login</a></li>
			  <li><a href="home.php">Home</a></li>
			  <li><a href="sobre.php">Sobre</a></li>
			</ul>
		  </div>
		  <!-- End of .col-sm-3 -->
  
		  <div class="col-lg-3 col-md-6">
			<ul>
			  <li>
				<h3>CONECTE-NOS SOCIALMENTE</h3>
			  </li>
			  <li><a href="#">Facebook</a></li>
			  <li><a href="#">Twitter</a></li>
			  <li><a href="#">Youtube</a></li>
			  <li><a href="#">Github</a></li>
			</ul>
		  </div>
		  <!-- End of .col-sm-3 -->
  
		</div>
	  </div> <!-- end container -->
	</div>
	<div class="footer-bottom">
	  <h5>&copy; Copyright 2020. All rights reserved.</h5>
	  <h6>Design and Developed by <a href="https://themefisher.com/">Themefisher</a></h6>
	</div>
  </footer> <!-- end footer -->



<!-- end Footer Area
========================================== -->
<!-- 
    Essential Scripts
    =====================================-->
<!-- Main jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap4 -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Parallax -->
<script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
<!-- lightbox -->
<script src="plugins/lightbox2/js/lightbox.min.js"></script>
<!-- O Carousel -->
<script src="plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Smooth Scroll js -->
<script src="plugins/smooth-scroll/smooth-scroll.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Custom js -->
<script src="js/script.js"></script>

</body>

</html>
