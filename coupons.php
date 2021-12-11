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
				<a id="logo" href="backstore/products.php"><img src="./logo.png"></a>
				<div class="searchbar">
					<div></div>
					<button type="submit">
						<ion-icon name="search-outline"></ion-icon>
					</button>
					<input type="text" placeholder="Search a product..">
				</div>
				<div class="buttons">
					<a href="log.php">
						<ion-icon name="person-circle-outline"></ion-icon>
					</a>
					<a href="cart.php">Cart (<span id="cartQty">0</span>)</a>
					<a href="cart.php">
						<ion-icon name="cart-outline"></ion-icon>
					</a>
				</div>
			</div>
			<div class="bottom">
				<a class="link" href="index.php">Home</a>
				<a class="link" href="products.php">All products</a>
				<a class="link" href="aisles.php">Aisles</a>
				<a class="link" href="promotions.php">Promotions</a>
				<a class="link active" href="coupons.php">Coupons</a>
			</div>
		</div>
		<div class="container">
			<h1 style="color: #888;"><i>No coupons yet..</i></h1>

		</div>
		<footer>
			<p>SOEN 287 — Group Project — Maxime Joanisse, Steven Monahan, Zaheer Quraishi, Benjamin Tordjman, Paul Xie, Dongping Yu, Ellane Zhou.</p>
		</footer>
	</div>
	<!-- easy to setup icons -->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script type="text/javascript" src="./scripts/products.js"></script>
</body>

</html>