// generer url fra php script på webshop-server
// var url = "<?php require 'ghs.php?barcode=123&url=https://www.cosby.dk/products/12'; ?>";

// var barcode = "<YOUR BARCODE HERE>";
// var url = "<?php require 'ghs.php?barcode=" + barcode + "&url=" + window.location.href + "'; ?>";

// fetch("smallstepsmatter.dk/ghs.php?barcode=123&url=" + window.location.href).then(res => {
//     url = res;
// });

fetch("ghs.php?barcode=123&url=" + window.location.href)
    .then(res => res.text())
    .then(url => {

        let newurl = new URL(url);

        var xhr = new XMLHttpRequest();
        xhr.open("post", url, true, "green", "KormflaX3r");
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onload = function () {
            if (xhr.status === 200) {
                // show xhr.responseText somehow
                document.getElementById('envbrand').innerHTML = xhr.responseText;
                console.log("XHR STATUS TEXT (success) " + xhr.statusText);
            }
            else {
                // handle failure, status code in xhr.status)
                document.getElementById('envbrand').innerHTML = "FEJL";
                console.log("XHR STATUS TEXT (failure) " + xhr.statusText);
            }
        }
        xhr.send(newurl.search);

        // fetch(newurl.href, {
        //     method: 'POST',
        //     headers: new Headers({
        //         "Authorization": 'Basic' + btoa('green:KormflaX3r')
        //     }),
        //     headers: { 'Content-Type': 'application/x-www-form-urlencoded' }, // this line is important, if this content-type is not set it wont work
        //     body: newurl.search,
        //     mode: "no-cors",

        // })
        //     .then(res => res.text())
        //     .then(data => {
        //         console.log("DATA: " + data);
        //     })
        //     .catch(err => {
        //         console.log("2: no brand for you pal");
        //         console.log(err);
        //     })

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





