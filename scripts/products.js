function showmore() {
    let e = document.getElementsByClassName("txt")[0];
    e.classList.toggle("show");
}
/*
function showmore() {
    let e = document.getElementById("description");
    if (window.getComputedStyle(e).color === 'rgb(255, 255, 255)' ) {
        e.style.maxHeight = "fit-content";
        e.style.color = "black";
    } else {
        e.style.maxHeight = "0";
        e.style.color = "white";
    }
}
*/