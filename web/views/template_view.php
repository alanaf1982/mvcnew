<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Free CSS template by ChocoTemplates.com</title>
	<link rel="stylesheet" href="/web/static/css/style.css" type="text/css" media="all" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
	
	<meta name="keywwords" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	<meta name="description" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	
	<!-- JS -->
	<script src="/web/static/js/jquery-1.4.1.min.js" type="text/javascript"></script>	
	<script src="/web/static/js/jquery.jcarousel.pack.js" type="text/javascript"></script>	
	<script src="/web/static/js/jquery-func.js" type="text/javascript"></script>	
	<!-- End JS -->
	
</head>
<body>
	
<!-- Shell -->	
<div class="shell">
	
	<!-- Header -->	
	<div id="header">
		<h1 id="logo"><a href="#">shoparound</a></h1>	
		
		<!-- Cart -->
		<div id="cart">
			<a href="#" class="cart-link">Корзина</a>
			<?
				if (!$_SESSION["auth"]){
			?>
					<a href ="/registration.<?=$config['prefix']?>" class = "reg">Вход / Регистрация</a>
			<?
				}else{
			?>
					<a href ="/user/exit" class = "reg">Выход</a>
					<a href ="/profile.<?=$config['prefix']?>" class = "reg">Ваш профиль</a>
			<?
				}
			?>	
			<div class="cl">&nbsp;</div>
			<span>Товаров: <strong>4</strong></span>
			&nbsp;&nbsp;
			<span>Стоимость: <strong>$250.99</strong></span>
		</div>
		<!-- End Cart -->
		
		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a href="/" >Главная</a></li>
			    <li><a href="/catalog.<?=$config['prefix']?>" class="active">Каталог</a></li>
			    <li><a href="#">Контакты</a></li>
			    <li><a href="#">О нас</a></li>
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
	<!-- End Header -->
	
	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			
			<!-- Content Slider -->
			<div id="slider" class="box">
				<div id="slider-holder">
					<ul>
					    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
					</ul>
				</div>
				<div id="slider-nav">
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
				</div>
			</div>
			<!-- End Content Slider -->
			

			<!-- Products -->
			<div class="products">
			<div class="cl">&nbsp;</div>
			<?include 'web/views/'.$content_view; ?>
			<div class="cl">&nbsp;</div>
			</div>
		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">
			
			<!-- Search -->
			<div class="box search">
				<h2>Search by <span></span></h2>
				<div class="box-content">
					<form action="" method="post">
						
						<label>Keyword</label>
						<input type="text" class="field" />
						
						<label>Category</label>
						<select class="field">
							<option value="">-- Select Category --</option>
						</select>
						
						<div class="inline-field">
							<label>Price</label>
							<select class="field small-field">
								<option value="">$10</option>
							</select>
							<label>to:</label>
							<select class="field small-field">
								<option value="">$50</option>
							</select>
						</div>
						
						<input type="submit" class="search-submit" value="Search" />
	
					</form>
				</div>
			</div>
			<!-- End Search -->
			
			<!-- Categories -->
			<div class="box categories">
				<h2>Categories <span></span></h2>
				<div class="box-content">
					<ul>
					    <li><a href="#">Category 1</a></li>
					    <li><a href="#">Category 2</a></li>
					    <li><a href="#">Category 3</a></li>
					    <li><a href="#">Category 4</a></li>
					    <li><a href="#">Category 5</a></li>
					    <li><a href="#">Category 6</a></li>
					    <li><a href="#">Category 7</a></li>
					    <li><a href="#">Category 8</a></li>
					    <li><a href="#">Category 9</a></li>
					    <li><a href="#">Category 10</a></li>
					    <li><a href="#">Category 11</a></li>
					    <li><a href="#">Category 12</a></li>
					    <li class="last"><a href="#">Category 13</a></li>
					</ul>
				</div>
			</div>
			<!-- End Categories -->
			
		</div>
		<!-- End Sidebar -->
		
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
	
	<!-- Side Full -->
	<div class="side-full">
		
	</div>
	<!-- End Side Full -->
	
	<!-- Footer -->
	<div id="footer">
		<p class="left">
			<a href="#">Главная</a>
			<span>|</span>
			<a href="#">Каталог</a>
			<span>|</span>
			<a href="#">Контакты</a>
			<span>|</span>
			<a href="#">О нас</a>
		</p>
		<p class="right">
			&copy; 2016 Shop Around.
			Design by <a href="http://chocotemplates.com" target="_blank" title="The Sweetest CSS Templates WorldWide">Chocotemplates.com</a>
		</p>
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->
	
	
</body>
</html>
