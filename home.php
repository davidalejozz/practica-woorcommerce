<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
	<title>Proyecto WordPress</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<section class="navbar_up">
				<nav class="navbar navbar-light bg-light">
				  <div class="container-fluid">
				    <a class="navbar-brand" href="">
				     	 <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="green" class="bi bi-shop" viewBox="0 0 16 16">
  <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
</svg>
	Prueba Woocommerce
	<div class="cars">
	 <span class="carrito">
		<a href="carrito.html">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20	" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
		  	<path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
			</svg>
		</a>
     </div>
	</span>
				    </a>
				  </div>
				</nav>
	</section>
	<section class="tienda">
		<div class="productos">
			<span class="titulo">PRUEBA WOOCOMMERCE</span>
			<div class="Productos">
				<h1 class="titulo_producto">Productos</h1>

				<div class="arrow">
					<article class="produc_img">	
							<figure class="circle">
								<img class="img" src="<?php echo get_template_directory_uri();?>/css/assets/1.jpg" alt="">
							</figure>
								<p class="n">carro1</p>
								<p class="precio">$100000000</p>
								<div class="comprar">
									<a class="boton" href="">comprar</a>
								</div>				
					</article>
					<article class="produc_img">	
							<figure class="circle">
								<img class="img" src="<?php echo get_template_directory_uri();?>/css/assets/2.jpeg" alt="">
							</figure>
								<p class="n">carro1</p>
								<p class="precio">$100000000</p>
								<div class="comprar">
									<a class="boton" href="">comprar</a>
								</div>						
					</article>
				</div>
				<div class="arrow">
					<article class="produc_img">	
							<figure class="circle">
								<img class="img" src="<?php echo get_template_directory_uri();?>/css/assets/3.jpeg" alt="">
							</figure>
								<p class="n">carro1</p>
								<p class="precio">$100000000</p>
								<div class="comprar">
									<a class="boton" href="">comprar</a>
								</div>						
					</article>
					<article class="produc_img">	
							<figure class="circle">
								<img  class="img" src="<?php echo get_template_directory_uri();?>/css/assets/4.jpeg" alt="">
							</figure>
								<p class="n">carro1</p>
								<p><?php the_field( 'pon_tu_nombre' ); ?></p>
								<p class="precio">$100000000</p>
								<div class="comprar">
									<a class="boton" href="">comprar</a>
								</div>				
					</article>
				</div>
			</div >
		</div>
	</section>
	<section class="footer">
		<footer class="final">
			<span class="titulo_footer">footer</span>
			<p>ya termine</p>
		</footer>
	</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</html>