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
				<a class="link active" href="#">User List</a>
				<a class="link" href="./products.html">Product List</a>
				<a class="link" href="./orders.html">Order List</a>
			</div>
		</div>

		<div class="content">
			<div class="pre-container">
				<div class="container" style="margin: 0 20%;">
					<a href="adduser.html" class="addproductbutton"><ion-icon name="add-circle-outline"></ion-icon> add a new user</a>
					<div class="cart-content">
						<ul>
							<li>
								<div class="cart-content-left"
									style="flex-direction: column; align-items: flex-start; justify-content: space-around;">
									<span class="name">Maxime Joanisse</span>
									<span class="email">maxime.joanisse@iventro.com</span>
								</div>
								<div class="cart-content-right">
									<button onclick="window.open('./edituser.html','_self')">
										<ion-icon name="create-outline"></ion-icon>
									</button>
									<button onclick="">
										<ion-icon name="trash-outline"></ion-icon>
									</button>
								</div>
							</li>

							<li>
								<div class="cart-content-left"
									style="flex-direction: column; align-items: flex-start; justify-content: space-around;">
									<span class="name">Steven Monahan</span>
									<span class="email">steven.monahan@iventro.com</span>
								</div>
								<div class="cart-content-right">
									<button onclick="window.open('./edituser.html','_self')">
										<ion-icon name="create-outline"></ion-icon>
									</button>
									<button onclick="">
										<ion-icon name="trash-outline"></ion-icon>
									</button>
								</div>
							</li>

							<li>
								<div class="cart-content-left"
									style="flex-direction: column; align-items: flex-start; justify-content: space-around;">
									<span class="name">Zaheer Quraishi</span>
									<span class="email">zaheer.quraishi@iventro.com</span>
								</div>
								<div class="cart-content-right">
									<button onclick="window.open('./edituser.html','_self')">
										<ion-icon name="create-outline"></ion-icon>
									</button>
									<button onclick="">
										<ion-icon name="trash-outline"></ion-icon>
									</button>
								</div>
							</li>

							<li>
								<div class="cart-content-left"
									style="flex-direction: column; align-items: flex-start; justify-content: space-around;">
									<span class="name">Benjamin Tordjman</span>
									<span class="email">benjamin.tordjman@iventro.com</span>
								</div>
								<div class="cart-content-right">
									<button onclick="window.open('./edituser.html','_self')">
										<ion-icon name="create-outline"></ion-icon>
									</button>
									<button onclick="">
										<ion-icon name="trash-outline"></ion-icon>
									</button>
								</div>
							</li>

							<li>
								<div class="cart-content-left"
									style="flex-direction: column; align-items: flex-start; justify-content: space-around;">
									<span class="name">Paul Xie</span>
									<span class="email">paul.xie@iventro.com</span>
								</div>
								<div class="cart-content-right">
									<button onclick="window.open('./edituser.html','_self')">
										<ion-icon name="create-outline"></ion-icon>
									</button>
									<button onclick="">
										<ion-icon name="trash-outline"></ion-icon>
									</button>
								</div>
							</li>

							<li>
								<div class="cart-content-left"
									style="flex-direction: column; align-items: flex-start; justify-content: space-around;">
									<span class="name">Dongping Yu</span>
									<span class="email">dongping.yu@iventro.com</span>
								</div>
								<div class="cart-content-right">
									<button onclick="window.open('./edituser.html','_self')">
										<ion-icon name="create-outline"></ion-icon>
									</button>
									<button onclick="">
										<ion-icon name="trash-outline"></ion-icon>
									</button>
								</div>
							</li>

							<li>
								<div class="cart-content-left"
									style="flex-direction: column; align-items: flex-start; justify-content: space-around;">
									<span class="name">Ellane Zhou</span>
									<span class="email">ellane.zhou@iventro.com</span>
								</div>
								<div class="cart-content-right">
									<button onclick="window.open('./edituser.html','_self')">
										<ion-icon name="create-outline"></ion-icon>
									</button>
									<button onclick="">
										<ion-icon name="trash-outline"></ion-icon>
									</button>
								</div>
							</li>
						</ul>
					</div>
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