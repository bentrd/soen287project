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
                            <?php
                            $jsondata = file_get_contents("../data/products.json");
                            $data = json_decode($jsondata, true);
                            $index = 0;
                            foreach ($data as $pd) {
                                $output = "<li><div class='cart-content-left'>";
                                $output .= "<img src='../products/" . $pd['img'] . "'>";
                                $output .= "<span class='productname'>" . $pd['name'] . "</span></div>";
                                $output .= "<div class='cart-content-right'>";
                                $output .= "<button onclick='window.location = \"./editproduct.php?id=" . $index++ . "\"'><ion-icon name='create-outline'></ion-icon></button>";
                                $output .= "<button onclick=''>"; //TO DO (delete product)
                                $output .= "<ion-icon name='trash-outline'></ion-icon></button></div></li>";
                                echo $output;
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>SOEN 287 — Group Project — Maxime Joanisse, Steven Monahan, Zaheer Quraishi, Benjamin Tordjman, Paul Xie, Dongping Yu, Ellane Zhou.</p>
        </footer>
        <!-- easy to setup icons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>