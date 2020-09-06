
var url = 'http://52.19.16.4/get/5154876599586/?url=' + window.location.href;

fetch(url).then((response) => {
    return response.text();
}).then(html => {
    document.getElementById("envbrand").innerHTML = html;
}).catch(err => {
    document.getElementById("envbrand").innerHTML = "Kunne ikke få fat i miljødata på dette produkt."
})
