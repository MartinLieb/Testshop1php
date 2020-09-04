<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Test Shop</h1>

<div>

    <div id="product">
        <div id="image">
        <img src="/images/air_force_1.jpg" alt="air force">
        </div>
        <div id ="prodinfo">
        <h2>Nike Air Force 1</h2>
        <p id="price">500,- kr.</p>
        <div id="envbrand">
            <?php
            $response = file_get_contents("http://52.19.16.4/get/5154876599586/?url=http://localhost:3400/");
            echo($response);
            ?>
        </div>
        <button>Add to cart</button>
        </div>


    </div>
</div>

<div>
<h3>Relaterede produkter</h3>
    <div id="relimgs">
        <div id=rel1>
        <img src="/images/air_force_1.jpg" alt="air force">
        <p>Nike Air Force 1</p>
        </div>
        <div id=rel2>
        <img src="/images/air_force_1.jpg" alt="air force">
        <p>Nike Air Force 1</p>
        </div>
        <div id=rel3>
        <img src="/images/air_force_1.jpg" alt="air force">
        <p>Nike Air Force 1</p>
        </div>
        <div id=rel4>
        <img src="/images/air_force_1.jpg" alt="air force">
        <p>Nike Air Force 1</p>
        </div>
    </div>
</div>
    
</body>
</html>