<?php

    $api_key = '9b1b86aea6c605735a4df34da714639d023c6cfe508e55f453cf7ba34a479884';
    
    $barcode = (int) $_GET['barcode']; // force int

    $webshopUrl = $_GET['url'];

    // generer hash af de tre parametre
    $hash = hash('sha512', $api_key . $barcode . $webshopUrl);

    // $webshopUrl = urlencode($webshopUrl);

    // send destination url tilbage til javascript - barcode, webshopUrl, hash
    echo "https://greenheartshopping.com/demo/get?barcode=$barcode&url=$webshopUrl&hash=$hash";

    // echo "https://smallstepsmatter.dk/get?barcode=$barcode&url=$webshopUrl&hash=$hash";

