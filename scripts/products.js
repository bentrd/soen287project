function showmore() {
    let e = document.getElementsByClassName("txt")[0];
    e.classList.toggle("show");
}

function updateImage(v) {
    document.getElementById("product-image").src = v;
}