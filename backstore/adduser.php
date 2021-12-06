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
				<a id="logo" href="../index.html"><img src="../logo.png" style="scale: 1.5;"></a>
				<h1>Backstore</h1>
			</div>
			<div class="bottom">
				<a class="link active" href="./users.html">User List</a>
				<a class="link" href="./products.html">Product List</a>
				<a class="link" href="./orders.html">Order List</a>
			</div>
		</div>

		<div class="container" style="width: 100%;">
			<div class="content add">
				<div class="top">
					<button onclick="history.back()" class="back-btn">
						<ion-icon name="chevron-back-outline"></ion-icon>
					</button>
					<h1>Add a User</h1>
				</div>
				<form action="">
					<label for="name">Username</label>
					<input type="text" id="username" name="username">
					<label for="email">Email Address</label>
					<input type="text" id="email" name="email">
					<label for="pwd">Password</label>
					<input type="password" id="pwd" name="pwd">
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