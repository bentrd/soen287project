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
request.send();
var cart = JSON.parse(request.responseText);

function loadCart() {
    var subtotal = 0;
    var totalQuantity = 0;
    let productList = document.getElementById("cart-products-ul");
    productList.innerHTML = "";
    for (var i = 0; i < cart.length; i++) {
        let product = document.createElement("li");
        product.innerHTML = `<div class="cart-content-left">
                                <img src="{0}">
                                <span class="productname">{1}</span>
                            </div>
                            <div class="productbuy">
                                <span class="price"><span class="dollarsign">$</span>{2}</span>
                                <input id="quantity-input-{4}" name="cartQuantity" type="number" min="1" max="99" value="{3}" onchange="updatePrice({4})">
                                <button onclick="deleteProduct({4})">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </button>
                            </div>
                            `.format(cart[i].img, cart[i].name, (cart[i].price * parseInt(cart[i].quantity)).toFixed(2), parseInt(cart[i].quantity), i);
        productList.appendChild(product);
        subtotal += cart[i].price * cart[i].quantity;
        totalQuantity += parseInt(cart[i].quantity);
    }

    document.getElementById("cart-icon-text").innerText = "Cart ({0})".format(totalQuantity);

    let totalPrices = document.getElementsByClassName("subtotal");
    totalPrices[0].innerText = "{0} items".format(totalQuantity);
    totalPrices[1].innerText = "sub-total: ${0}".format(subtotal.toFixed(2));
    totalPrices[2].innerText = "QST: ${0}".format((subtotal*0.0996).toFixed(2));
    totalPrices[3].innerText = "GST: ${0}".format((subtotal*0.0499).toFixed(2));
    document.getElementsByClassName("total")[0].innerHTML = `Total: <span class="dollarsign">$</span><span class="price">{0}</span>`.format((subtotal + subtotal*0.0996 + subtotal*0.0499).toFixed(2));
}

function updatePrice(index) {
    let quantityInput = document.getElementById("quantity-input-"+index);
    cart[index].quantity = parseInt(quantityInput.value);
    loadCart();
}

function deleteProduct(index) {
    cart.splice(index,1);
    loadCart();
}