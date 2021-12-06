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
				<a class="link" href="index.html">Home</a>
				<a class="link" href="products.html">All products</a>
				<a class="link" href="aisles.html">Aisles</a>
				<a class="link active" href="#">Promotions</a>
				<a class="link" href="coupons.html">Coupons</a>
			</div>
		</div>
		<div class="container home">
			<div class="content">
				<h1>Promotions of This Month!</h1>
				<p>
					<u>Apples</u> are <b>2 for 1</b>!<br>
					<u>Whole Wheat bread</u> are <b>50% off</b>!<br>
					<b>Buy 2 get 1</b> free for <u> Chicken Breast</u>!<br>
					click <a class="link" href="products.html">here</a> to see these products<br><br>
					<i style="color: #888;">Valid Until November 1st</i>
				</p>
			</div>
			<div>&nbsp;</div>
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