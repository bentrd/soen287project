var imgMap = {
    "mcintosh" : "./apple.jpeg",
    "green" : "./variations/green-apple.jpeg",
    "gala" : "./variations/gala-apple.jpeg",
    "original" : "./beef-jerky.jpeg",
    "peppered" : "./variations/peppered-beef-jerky.jpeg",
    "teriyaki" : "./variations/teriyaki-beef-jerky.jpeg",
    "jumbo" : "./carrot.png",
    "baby" : "./variations/baby-carrot.jpg",
    "0-milk" : "./variations/0-milk.jpg",
    "2-milk" : "./milk.jpeg",
    "325-milk" : "./variations/325-milk.jpg",
    "regular-oreo" : "./oreo.jpeg",
    "golden-oreo" : "./variations/golden-oreo.jpg"
};

function showmore() {
    let e = document.getElementsByClassName("txt")[0];
    e.classList.toggle("show");
}

function updateImage(v) {
    document.getElementById("product-image").src = imgMap[v];
}