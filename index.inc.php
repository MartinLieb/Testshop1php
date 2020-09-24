
<?php


function showBrandHere()
{

    // get the barcode
    $barcode = 123;

    //get url from your site
    $myUrl = 'https://shop-blue.dk/';

    // build envdata url
    $queryUrl = "https://greenheartshopping.com/smallstepsmatterMVC/get/$barcode/?url=tismand";

    $resource = curl_init($queryUrl);
    curl_setopt($resource, CURLOPT_USERPWD, 'green' . ":" . 'KormflaX3r'); 
    curl_exec($resource);

    //echo $envbrand;
}
