<?php

    $api_key = '35b4484e9e0171d69325657cec3cef85a8a5c3c78806fce54a7d4963f43229ca';
    $barcode = (int) $_GET['barcode']; // force int

    $webshopUrl = $_GET['url'];

    // generer hash af de tre parametre
    $hash = hash('sha512', $api_key . $barcode . $webshopUrl);

    // $webshopUrl = urlencode($webshopUrl);

    // send destination url tilbage til javascript - barcode, webshopUrl, hash
    echo "https://www.greenheartshopping.com/demo/get?barcode=$barcode&url=$webshopUrl&hash=$hash";

    // echo "https://smallstepsmatter.dk/get?barcode=$barcode&url=$webshopUrl&hash=$hash";

