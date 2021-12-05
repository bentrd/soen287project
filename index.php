<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#008a09" media="(prefers-color-scheme: light)">
	<meta name="theme-color" content="#008a09" media="(prefers-color-scheme: dark)">
	<title>Iventro — online grocery shopping</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="main">
		<div class="header">
			<div class="top">
				<a id="logo" href="backstore/products.html"><img src="./logo.png"></a>
				<div class="searchbar">
					<div></div>
					<button type="submit">
						<ion-icon name="search-outline"></ion-icon>
					</button>
					<input type="text" placeholder="Search a product..">
				</div>
				<div class="buttons">
					<a href="log.html">
						<ion-icon name="person-circle-outline"></ion-icon>
					</a>
					<a href="cart.html">Cart (15)</a>
					<a href="cart.html">
						<ion-icon name="cart-outline"></ion-icon>
					</a>
				</div>
			</div>
			<div class="bottom">
				<a class="link active" href="#">Home</a>
				<a class="link" href="products.html">All products</a>
				<a class="link" href="aisles.html">Aisles</a>
				<a class="link" href="promotions.html">Promotions</a>
				<a class="link" href="coupons.html">Coupons</a>
			</div>
		</div>
		<div class="container home">
			<div class="content">
				<h1 style="text-align: center;">Welcome To Iventro!</h1>
				<p>
					We are a new grocery store that is easy to
					order from at any time, we have promotions which changes every month. Check our Aisles to see each
					category of foods we offer.
				</p>
				<img src="index_img.jpeg">
			</div>
			<div class="content">
				<h1>RECENT PROMOTIONS</h1>
				<p>Click <a class="link" href="promotions.html">here</a></p>
			</div>
			<div class="content">
				<h1>OUR BEST SELLERS</h1>
				<ul>
					<li>
						Try our delicious apples imported from south africa! Click <a class="link"
							href="products/apple.html">here</a> to order.
					</li>
					<li>
						Fancy a gluten free bread? Click <a class="link" href="products/gfbread.html">here</a> to order.
					</li>
				</ul>
			</div>
			<div style="width:100%; display: flex; flex-direction: row; justify-content: space-between;">
				<div class="content" style="min-width: 40%;">
					<h1>Our Location</h1>
					<p>
						click <a
							href="https://www.google.com/maps/dir//Concordia+University,+1455+Boulevard+de+Maisonneuve+O,+Montreal,+Quebec+H3G+1M8/@45.5017156,-73.5547127,14z/data=!4m9!4m8!1m0!1m5!1m1!1s0x4cc91a6a636dd639:0x9e85cac6415827f0!2m2!1d-73.5779128!2d45.4948363!3e0">
							here</a>
					</p>
				</div>
				<div class="content" style="min-width: 40%;">
					<h1> Technical difficulties?</h1>
					<p>
						</b>Email Us:</b> <a href="mailto:IventroIT@gmail.com">iventroit@gmail.com</a>
					</p>
				</div>
			</div>
		</div>
		<footer>
			<p>SOEN 287 — Group Project — Maxime Joanisse, Steven Monahan, Zaheer Quraishi, Benjamin Tordjman, Paul Xie, Dongping Yu, Ellane Zhou.</p>
		</footer>
	</div>
	<!-- easy to setup icons -->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>