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
request.open("GET", "./scripts/all-products.json", false);
request.send();
var allProducts = JSON.parse(request.responseText);

function loadProducts() {
    let productList = document.getElementsByClassName("container")[0];
    productList.innerHTML = "";
    for (var i = 0; i < allProducts.length; i++) {
        let product = document.createElement("div");
        product.classList.add("product-card");
        product.innerHTML = `<span class="productname">{0}</span>
                            <a href="{5}"><img src="{1}"></a>
                            <div class="productbuy">
                                <span class="price"><span class="dollarsign">$</span><span id="span-price-{4}">{2}</span></span>
                                <input id="quantity-input-{4}" type="number" min="1" max="99" value="{3}" onclick="updatePrice({4})">
                                <button onclick="">
                                    <ion-icon name="bag-add-outline"></ion-icon>
                                </button>
                            </div>
                            `.format(allProducts[i].name, allProducts[i].img, (allProducts[i].price * allProducts[i].quantity).toFixed(2), allProducts[i].quantity, i, allProducts[i].link);
        productList.appendChild(product);
    }
}

function updatePrice(index) {
    let quantityInput = document.getElementById("quantity-input-"+index);
    allProducts[index].quantity = quantityInput.value;
    loadProducts();
}