// generer url fra php script på webshop-server
// var url = "<?php require 'ghs.php?barcode=123&url=https://www.cosby.dk/products/12'; ?>";

// var barcode = "<YOUR BARCODE HERE>";
// var url = "<?php require 'ghs.php?barcode=" + barcode + "&url=" + window.location.href + "'; ?>";

// fetch("smallstepsmatter.dk/ghs.php?barcode=123&url=" + window.location.href).then(res => {
//     url = res;
// });

fetch("ghs.php?barcode=234&url=" + window.location.href)
    .then(res => res.text())
    .then(url => {

        let newurl = new URL(url);

        requestEnvBrand(newurl.search.replace("?", ""));

        // var xhr = new XMLHttpRequest();
        // xhr.open("post", "https://greenheartshopping.com/demo/get", true, "green", "KormflaX3r");
        // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        // xhr.onload = function () {
        //     if (xhr.readyState === 4 && xhr.status === 200) {
        //         console.log("STATUS 200");
        //         // show xhr.responseText somehow
        //         document.getElementById('envbrand').innerHTML = xhr.responseText;
        //         console.log("XHR STATUS TEXT (success) " + xhr.statusText);
        //     }
        //     else {
        //         console.log("STATUS NOT 200");
        //         // handle failure, status code in xhr.status)
        //         document.getElementById('envbrand').innerHTML = "FEJL";
        //         console.log("XHR STATUS TEXT (failure) " + xhr.statusText);
        //     }
        // }

        // var reqBody = newurl.search.replace("?", "");

        // xhr.send(reqBody);


    }).catch(err => {
        console.log("no brand for you pal");
        console.log(err);
    });

/*
console.log("URL ===========" + url);
// hent url
var xhr = new XMLHttpRequest();
xhr.open('POST', url, true);
xhr.onload = function () {
    if (xhr.status === 200) {
        // show xhr.responseText somehow
        document.getElementById('envbrand').innerHTML = xhr.responseText;
    }
    else {
        // handle failure, status code in xhr.status)
        document.getElementById('envbrand').innerHTML = "FEJL";
    }
}
xhr.send()

*/

function requestEnvBrand(body) {

    fetch('https://greenheartshopping.com/demo/get', {
        method: 'POST',
        headers: new Headers({
            "Authorization": 'Basic ' + btoa('green:KormflaX3r')
        }),
        credentials: 'include',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }, // this line is important, if this content-type is not set it wont work
        body: body,
        //mode: "no-cors",

    })
    .then(res => res.text())
    .then(data => {
        // show xhr.responseText somehow
        document.getElementById('envbrand').innerHTML = data;
    })
    .catch(err => {
        document.getElementById('envbrand').innerHTML = "FEJL";
        console.log("2: no brand for you pal");
        console.log(err);
    })
}





