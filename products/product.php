<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#008a09" media="(prefers-color-scheme: light)">
	<meta name="theme-color" content="#008a09" media="(prefers-color-scheme: dark)">
	<title>Iventro — online grocery shopping</title>
	<link rel="stylesheet" href="../style.css">
</head>

<body>
	<div class="main">
		<div class="header">
			<div class="top">
				<a id="logo" href="../backstore/products.php"><img src="../logo.png"></a>
				<div class="searchbar">
					<div></div>
					<button type="submit">
						<ion-icon name="search-outline"></ion-icon>
					</button>
					<input type="text" placeholder="Search a product..">
				</div>
				<div class="buttons">
					<a href="../log.html">
						<ion-icon name="person-circle-outline"></ion-icon>
					</a>
					<a href="cart.html">Cart (<span id="cartQty">0</span>)</a>
					<a href="../cart.html">
						<ion-icon name="cart-outline"></ion-icon>
					</a>
				</div>
			</div>
			<div class="bottom">
				<a class="link" href="../index.html">Home</a>
				<a class="link active" href="../products.php">All products</a>
				<a class="link" href="../aisles.php">Aisles</a>
				<a class="link" href="../promotions.html">Promotions</a>
				<a class="link" href="../coupons.html">Coupons</a>
			</div>
		</div>
		<div class="container" style="width: 100%;">
			<div class="product-container" style="margin: 0 10%;">
				<?php
				$id = $_GET["id"];
				$jsondata = file_get_contents("../data/products.json");
				$data = json_decode($jsondata, true);
				$pd = $data[$id];
				$output = "<h1>" . $pd['name'] . "</h1>";
				$output .= "<div class='product'>";
				$output .= "<img id='product-image' src='." . $pd['img'] . "'>";
				$output .= "<div class='description'><div class='aisle' onclick='showmore()'>description:</div>";
				$output .= "<p class='txt'>" . $pd['desc'] . "</p>";
				if (array_key_exists("variations", $pd)) {
					$output .= "<select onchange='updateImage(this.value)'><optgroup label='pick variety'>";
					foreach ($pd['variations'] as $var) {
						$output .= "<option value=" . $var['link'] . ">" . $var['name'] . "</option>";
					}
					$output .= "</optgroup></select>";
				}
				$output .= "</div></div><div class='productbuy'><span class='price' style='padding-right: 1.4em;'>";
				$output .= "<span class='dollarsign'>$</span><span id='price" . $id . "'>" . $pd['price'] . "</span></span>";
				$output .= "<input id='qtyInput" . $id . "' onchange='updatePrice(\"" . $id . "\"," . $pd['price'] . ")' type='number' min='1' max='99' value='1'><button onclick='addToCart(" . json_encode($pd) . ",\"qtyInput" . $id . "\")'><ion-icon name='bag-add-outline'></ion-icon></button>";
				$output .= "</div></div>";
				echo $output
				?>
			</div>
			<footer>
				<p>SOEN 287 — Group Project — Maxime Joanisse, Steven Monahan, Zaheer Quraishi, Benjamin Tordjman, Paul Xie, Dongping Yu, Ellane Zhou.</p>
			</footer>
		</div>
		<!-- easy to setup icons -->
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		<script type="text/javascript" src="../scripts/products.js"></script>
</body>

</html>