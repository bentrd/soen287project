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
				<a class="link" href="coupons.php">Coupons</a>
			</div>
		</div>

		<div class="container" style="width: 100%;">
			<div class="receipt-card">
				<h1>Receipt</h1>
				<div class="cart-content">
					<ul>
						<li>
							<div class="cart-content-left">
								<img src="./products/doritos.jpeg">
								<span class="productname">Nacho Cheese Doritos</span>
							</div>
							<div class="productbuy">
								<span class="price"><span class="dollarsign">$</span> 3.78</span>
								<input type="number" min="1" max="99" value="2" disabled>
							</div>
						</li>
						<li>
							<div class="cart-content-left">
								<img src="./products/oreo.jpeg">
								<span class="productname">Oreo Cookies</span>
							</div>
							<div class="productbuy">
								<span class="price"><span class="dollarsign">$</span> 3.49</span>
								<input type="number" min="1" max="99" value="1" disabled style="appearance: none;">
							</div>
						</li>
						<li>
							<div class="cart-content-left">
								<img src="./products/steak.jpeg">
								<span class="productname">Steak</span>
							</div>
							<div class="productbuy">
								<span class="price"><span class="dollarsign">$</span> 58.02</span>
								<input type="number" min="1" max="99" value="3" disabled style="appearance: none;">
							</div>
						</li>
						<li>
							<div class="cart-content-left">
								<img src="./products/banana.jpg">
								<span class="productname">Banana</span>
							</div>
							<div class="productbuy">
								<span class="price"><span class="dollarsign">$</span> 1.98</span>
								<input type="number" min="1" max="99" value="6" disabled style="appearance: none;">
							</div>
						</li>
						<li>
							<div class="cart-content-left">
								<img src="./products/yogurt.jpeg">
								<span class="productname">Yogurt</span>
							</div>
							<div class="productbuy">
								<span class="price"><span class="dollarsign">$</span> 4.20</span>
								<input type="number" min="1" max="99" value="1" disabled style="appearance: none;">
							</div>
						</li>
						<li>
							<div class="cart-content-left">
								<img src="./products/wbread.jpeg">
								<span class="productname">White Bread</span>
							</div>
							<div class="productbuy">
								<span class="price"><span class="dollarsign">$</span> 3.99</span>
								<input type="number" min="1" max="99" value="1" disabled style="appearance: none;">
							</div>
						</li>
						<li>
							<div class="cart-content-left">
								<img src="./products/beef-jerky.jpeg">
								<span class="productname">Beef Jerky</span>
							</div>
							<div class="productbuy">
								<span class="price"><span class="dollarsign">$</span> 6.99</span>
								<input type="number" min="1" max="99" value="1" disabled style="appearance: none;">
							</div>
						</li>
					</ul>
					<div class="cart-content-bottom">
						<div class="cart-content-bottom-left">
							<span class="subtotal" style="border-bottom: 1px dashed #aaa;">15 items</span>
						</div>
						<div class="cart-content-bottom-right">
							<span class="subtotal">sub-total: $ 2.45</span>
							<span class="subtotal">QST: $ 8.22</span>
							<span class="subtotal">GST: $ 4.12</span>
							<span class="total">Total: <span class="dollarsign">$</span><span class="price">94.79</span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<p>SOEN 287 — Group Project — Maxime Joanisse, Steven Monahan, Zaheer Quraishi, Benjamin Tordjman, Paul Xie,Dongping Yu, Ellane Zhou.</p>
		</footer>
	</div>
	<!-- easy to setup icons -->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script type="text/javascript" src="./scripts/products.js"></script>
</body>

</html>