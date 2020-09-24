<?php

    $api_key = '1234567890qwertyuioasdfghjkcvbnm';
    $barcode = (int) $_GET['barcode']; // force int

    $webshopUrl = $_GET['url'];

    // generer hash af de tre parametre
    $hash = hash('sha512', $api_key . $barcode . $webshopUrl);

    // $webshopUrl = urlencode($webshopUrl);

    // send destination url tilbage til javascript - barcode, webshopUrl, hash
    echo "https://www.greenheartshopping.com/demo/get?barcode=$barcode&url=$webshopUrl&hash=$hash";

    // echo "https://smallstepsmatter.dk/get?barcode=$barcode&url=$webshopUrl&hash=$hash";

