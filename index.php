<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testshop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>

    <div class="header">
        <h3>Test Shop</h3>
    </div>

    <div class="header-nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="products/product.php">Produkt</a></li>
        </ul>
    </div>

    <div id="prod-row">

        <div id="product">
            <div id=imgalt>
                <img class="imgalt" src="/images/puma_smash_v2_3.jpg" alt="puma smash">
                <img class="imgalt" src="/images/puma_smash_v2_2.jpg" alt="puma smash">
            </div>
            <div id="image">
                <img src="/images/puma_smash_v2.jpg" alt="puma smash">
            </div>
        </div>

        <div id="prodinfo">
            <h1>Puma Smash V2</h1>
            <h2 id="price">600,- kr.</h2>

            <div id="envbrand"></div>

            <div class="dropdown">
                <button onclick="btnDropdown()" class="dropbtn">Vælg størrelse</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">Størrelse 41</a>
                    <a href="#">Størrelse 42</a>
                    <a href="#">Størrelse 43</a>
                </div>

            </div>
            <button id="cart-btn">Add to cart</button>
        </div>

    </div>

    <div>
        <h3>Relaterede produkter</h3>
        <div id="relimgs">
            <div id=rel1>
                <img src="/images/reebok_lite_2.jpg" alt="reebok lite 2.0">
                <p>Reebok Lite 2.0</p>
            </div>
            <div id=rel2>
                <img src="/images/air_force_1.jpg" alt="nike air force">
                <p>Nike Air Force 1</p>
            </div>
            <div id=rel3>
                <img src="/images/nike_downshifter.jpg" alt="nike downshifter">
                <p>Nike Air Force 1</p>
            </div>
            <div id=rel4>
                <img src="/images/new_balance_wl373.jpg" alt="new balance wl373">
                <p>New Balance WL373</p>
            </div>
        </div>
    </div>


    <script src="index.js"></script>
    <script src="envbrandscript.js"></script>


</body>

</html>