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
                <a class="link active" href="#">Product List</a>
                <a class="link" href="./orders.php">Order List</a>
            </div>
        </div>

        <div class="content">
            <div class="pre-container">
                <div class="container" style="margin: 0 20%;">
                    <a href="addproduct.php" class="addproductbutton">
                        <ion-icon name="add-circle-outline"></ion-icon> add a new product
                    </a>
                    <div class="cart-content">
                        <ul>
                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/banana.jpg">
                                    <span class="productname">Banana</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/apple.jpeg">
                                    <span class="productname">Apple</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/carrot.png">
                                    <span class="productname">Carrot</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/milk.jpeg">
                                    <span class="productname">Milk</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/butter.jpeg">
                                    <span class="productname">Butter</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/yogurt.jpeg">
                                    <span class="productname">Yogurt</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/chicken.jpeg">
                                    <span class="productname">Chicken</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/salmon.jpeg">
                                    <span class="productname">Salmon</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/steak.jpeg">
                                    <span class="productname">Steak</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/wwbread.jpeg">
                                    <span class="productname">Whole Wheat Bread</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/wbread.jpeg">
                                    <span class="productname">White Bread</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/gfbread.jpeg">
                                    <span class="productname">Gluten Free Bread</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/oreo.jpeg">
                                    <span class="productname">Oreo Cookies</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/doritos.jpeg">
                                    <span class="productname">Nacho Cheese Doritos</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                            <li>
                                <div class="cart-content-left">
                                    <img src="../products/beef-jerky.jpeg">
                                    <span class="productname">Beef Jerky</span>
                                </div>
                                <div class="cart-content-right">
                                    <button onclick="window.open('./editproduct.php','_self')">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                    <button onclick="">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </div>
                            </li>

                    </div>
                    </li>
                    </ul>
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