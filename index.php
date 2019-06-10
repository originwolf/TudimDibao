<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<title>TudimDibão</title>

	<meta name="author" content="Pedro Martins">
	<meta name="description" content="Website do restaurante delivery de marmitex tudimdibão">
	<meta name="keywords" content="delivery, marmitex, marmita, restaurante, comida">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/estilo.css">

	<!-- favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="image/logo.ico">

</head>
<body>

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3"></script>

	<div class="container-fluid">

		<header>
			
			<!-- START TOP-NAVIGATION -->
			<section class="row top-navigation">

				<div class="col-12 text-center">
					
					<h1 class="nomeRestaurante">TudimDibão <span class="d-none d-sm-inline">- Restaurante</span> <span class="d-none d-sm-none d-md-inline">delivery</span></h1>

				</div>

				<div class="col-12 text-center">

					<div class="iconTop fab fa-whatsapp mx-2 my-2 align-middle">
						<span class="telefoneTop">(35) 9 9950-0180</span>
					</div>

					<div class="iconTop fas fa-phone mx-2 align-middle">
						<span class="telefoneTop">(35) 3625-1517</span>
					</div>
					
				</div>

			</section>
			<!-- END TOP-NAVIGATION -->
			<!-- START NAVBAR -->
			<nav class="navbar navbar-expand-xl no-margin">

				<div class="navbar-brand text-center">

					<button class="navbar-toggler" data-toggle="collapse" data-target="#menubar"><span class="fas fa-bars botao"></span></button>

				</div>

				<div>
					<img src="image/logo.ico" class="img-fluid">
				</div>

				<ul id="menubar" class="navbar-nav nav collapse navbar-collapse justify-content-end">

					<li class="nav-item">
						<a href="#cardapio" class="nav-link mx-2">Cardápio</a>
					</li>

					<li class="nav-item">
						<a href="#infos" class="nav-link mx-2">Informações</a>
					</li>

					<li class="nav-item">
						<a href="#encontre" class="nav-link mx-2">Nos encontre</a>
					</li>
					
				</ul>
				
			</nav>
			<!-- END NAVBAR -->

		</header>
		
		<!-- START BANNER -->
		<section class="banner no-margin">

			<img src="image/bannerxl.png" class="d-none d-lg-block img-fluid">

			<img src="image/bannermd.png" class="d-none d-sm-block d-lg-none img-fluid">

			<img src="image/banner.png" class="d-block d-sm-none img-fluid">
		
		</section>
		<!-- END BANNER -->
		<!-- START INFOS -->
		<section id="infos" class="row apresentacao no-margin justify-content-center pb-5">

			<div class="col-12 text-center my-4">
					
				<h1 class="nomeRestaurante">TudimDibão <span class="d-none d-sm-inline">- Restaurante</span> <span class="d-none d-sm-none d-md-inline">delivery</span></h1>

			</div>

			<div class="card col-5 text-right mr-4">

				<div class="card-body">

					<h5 class="card-title fas fa-phone"> Fale conosco:</h5>
					<p class="card-text fab fa-whatsapp"> 99950-0180</p>
					<p class="card-text"> 3265-1517</p>

					<h5 class="card-title fas fa-clock"> Nossos Horários:</h5>
					<p class="card-text">Segunda à sábado</p>
					<p class="card-text">das 10:30h até 14:00h</p>
					
				</div>

			</div>

			<div class="card col-5 text-left ml-2">

				<div class="card-body">

					<h5 class="card-title fas fa-home"> Endereço:</h5>
					<p class="card-text">Rua ambrozina de Jesus, 199</p>
					<p class="card-text">Alcides Mesquita, Três Pontas MG</p>

					<h5 class="card-title fas fa-credit-card d-none d-sm-block"> Pague com o seu cartão:</h5>
					<p class="card-text">Aceitamos cartões de crédito e débito.</p>
					
				</div>
				
			</div>
			
		</section>
		<!-- END INFOS -->
		<!-- START SLIDESHOW -->
		<section id="slideshow" class="carousel slide carousel-fade no-margin" data-ride="carousel">

			<ul class="carousel-indicators">

				<li data-target="#slideshow" data-slide-to="0" class="active"></li>
				<li data-target="#slideshow" data-slide-to="1"></li>
				<li data-target="#slideshow" data-slide-to="2"></li>

			</ul>

			<div class="carousel-inner mb-0 pb-0">

				<figure class="carousel-item active">
					<img src="image/slide1.png" alt="" class="img-fluid">
				</figure>

				<figure class="carousel-item">
					<img src="image/slide2.png" alt="" class="img-fluid">
				</figure>

				<figure class="carousel-item">
					<img src="image/slide3.png" alt="" class="img-fluid">
				</figure>

			</div>

			<a href="#slideshow" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
			<a href="#slideshow" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>

			<script>

				$('#slideshow').carousel({
					interval: 3500,
					pause: false,
				});

			</script>

		</section>
		<!-- END SLIDESHOW -->
		<!-- START CARDAPIO -->
		<section id="cardapio" class="row cardapio no-margin justify-content-center">

			<h1 class="text-center py-3 col-12">Cardápio</h1>

			<div class="col-md-8 col-sm-10 pb-4">

				<iframe src="cardapio.php" frameborder="0" width="90%" height="340"></iframe>
				
			</div>

			<div class="row col-4 pb-4 d-none d-md-inline">

				<div class="card preco" style="width: 18rem;">
					
					<div class="card-body">

				    	<h5 class="card-title d-none d-md-block">Confira nossos preços:</h5>
				    	<h5 class="card-title d-block d-md-none">Nossos preços:</h5>
				    	<h6 class="card-subtitle mb-2 text-muted d-none d-sm-block">O preço só varia no tamanho da marmitex:</h6>
				    	<p class="card-text negrita">Marmitex pequena:</p>
				    	<p class="card-text negrita">R$ 14,00</p>
				    	<p class="card-text negrita">Marmitex média:</p>
				    	<p class="card-text negrita">R$ 17,00</p>
				    	<p class="card-text negrita">Marmitex Grande:</p>
				    	<p class="card-text negrita">R$ 20,00</p>

					</div>

				</div>
				
			</div>
			
		</section>
		<!-- END CARDAPIO -->
		<!-- START ENCONTRE -->
		<section id="encontre" class="encontre no-margin">

			<h1 class="text-center pt-3">Encontre-nos</h1>

			<div class="row pb-4 justify-content-center col-12">

				<iframe class="d-none d-sm-inline col-7" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d516.6315928338332!2d-45.5149940875411!3d-21.375290697020592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1559395445450!5m2!1spt-BR!2sbr" width="700" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>

				<div class="fb-page d-inline d-sm-none d-lg-inline col-3 mr-5" data-href="https://www.facebook.com/tudimdibao/" data-tabs="" data-width="260" data-height="220" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tudimdibao/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tudimdibao/">TudimDibão</a></blockquote></div>
				
			</div>
			
		</section>	
		<!-- END ENCONTRE -->
		<!-- START FOOTER -->
		<footer>

			<section class="row justify-content-center rodape">	

				<div class="col-12">
					<h1 class="text-center pt-3">TudimDibao</h1>
					<hr>
				</div>
					
				<div class="col-sm-4">

					<h3>Contatos:</h3>
					<p><span class="negrita">WhatsApp: </span>99950-0180</p>
					<p><span class="negrita">Telefone: </span>3265-1517</p>

				</div>

				<div class="col-sm-4">	

					<h3>Endereço:</h3>
					<p>Rua ambrozina de Jesus, 199</p>
					<p>Alcides Mesquita, Três Pontas MG</p>

				</div>

				<div class="col-sm-4">

					<h3>Horário de funcionamento:</h3>
					<p>Segunda à sábado</p>
					<p>das 10:30h até 14:00h</p>

				</div>

				<div class="col-12 text-center">			
					<hr>
					<p>TudimDibao - Restaurante Delivery - 2019</p>	
				</div>		

			</section>
			
		</footer>
		<!-- END FOOTER -->
		
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>

</html>