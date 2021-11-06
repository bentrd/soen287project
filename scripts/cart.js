if (!String.prototype.format) {
    String.prototype.format = function () {
        var args = arguments;
        return this.replace(/{(\d+)}/g, function (match, number) {
            return typeof args[number] != 'undefined'
                ? args[number]
                : match
                ;
        });
    };
}

var request = new XMLHttpRequest();
request.open("GET", "./scripts/cart.json", false);
request.send(null);
var json = JSON.parse(request.responseText);

let productList = document.getElementById("cart-products-ul");
for (var i = 0; i < json.cart.length; i++) {
    let product = document.createElement("li");
    product.innerHTML = `<div class="cart-content-left">
                            <img src="{0}">
                            <span class="productname">{1}</span>
                        </div>
                        <div class="productbuy">
                            <span class="price"><span class="dollarsign">$</span> {2}</span>
                            <input name="cartQuantity" type="number" min="1" max="99" value="{3}">
                            <button onclick="deleteProduct(this)">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>
                        </div>
                        `.format(json.cart[i].img,json.cart[i].name, (json.cart[i].price*json.cart[i].quantity).toFixed(2), json.cart[i].quantity);

    productList.appendChild(product);

}

function deleteProduct(e) {
    e.parentNode.parentNode.style.display = "none";
}