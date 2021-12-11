<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#008a09" media="(prefers-color-scheme: light)">
	<meta name="theme-color" content="#008a09" media="(prefers-color-scheme: dark)">
	<title>Iventro — Backstore</title>
	<link rel="stylesheet" href="../style.css">
</head>

<body>
	<div class="main">
		<div class="header">
			<div class="top" style="flex-direction: column; align-items: center;">
				<a id="logo" href="../index.php"><img src="../logo.png" style="scale: 1.5;"></a>
				<h1>Backstore</h1>
			</div>
			<div class="bottom">
				<a class="link" href="./users.php">User List</a>
				<a class="link active" href="./products.php">Product List</a>
				<a class="link" href="./orders.php">Order List</a>
			</div>
		</div>

		<div class="container" style="width: 100%;">
			<div class="content add">
				<div class="top">
					<button onclick="history.back()" class="back-btn">
						<ion-icon name="chevron-back-outline"></ion-icon>
					</button>
					<h1>Add a Product</h1>
				</div>
				<form action="addproducthandler.php" method="post" enctype="multipart/form-data">
					<label for="name">Name of Product</label>
					<input type="text" id="name" name="name">
					<label for="price">Enter Product Price</label>
					<input type="price" id="price" name="price">
					<label for="desc">Enter Product Description</label>
					<textarea name="desc" cols="auto" rows="5" style="min-height: 3em;"></textarea>
					<label for="image">Choose Image File</label>
					<input type="file" name="picture" id="picture" />
					<label for="aisle">Aisle</label>
					<select name="aisle" id="aisle">
						<option value="">--- choose an aisle ---</option>
						<option value="Fruits & Vegetables">Fruits & Vegetables</option>
						<option value="Dairy">Dairy</option>
						<option value="Bread">Bread</option>
						<option value="Meat">Meat</option>
						<option value="Snacks">Snacks</option>
					</select>
					<input type="submit" value="add">
				</form>
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