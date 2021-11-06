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
request.open("GET", "./scripts/aisles.json", false);
request.send();
var aisles = JSON.parse(request.responseText);

function loadAisles() {
    let aisleList = document.getElementsByClassName("content")[0];
    aisleList.innerHTML = "";
    for (var i in aisles) {
        let aisle = document.createElement("button");
        aisle.classList.add("aisle");
        aisle.innerText = i;
        let precontainer = document.createElement("div");
        precontainer.classList.add("pre-container");
        let container = document.createElement("div");
        container.classList.add("container");
        precontainer.appendChild(container);
        for (var j = 0; j < aisles[i].length; j++) {
            var product = document.createElement("div");
            product.classList.add("product-card");
            product.innerHTML = `<span class="productname">{0}</span>
                                <a href="{1}"><img src="{2}"></a>
                                <div class="productbuy">
                                    <span class="price"><span class="dollarsign">$</span>{3}</span>
                                    <input type="number" min="1" max="99" value="{4}" id="quantity-input-{5}-{6}" onchange="updatePrice({5},{6},'{7}')">
                                    <button onclick="">
                                        <ion-icon name="bag-add-outline"></ion-icon>
                                    </button>
                                </div>
                                `.format(aisles[i][j].name, aisles[i][j].link, aisles[i][j].img, (aisles[i][j].price * aisles[i][j].quantity).toFixed(2), aisles[i][j].quantity, Object.keys(aisles).indexOf(i), j, i);
            container.appendChild(product);
        }
        aisleList.appendChild(aisle);
        aisleList.appendChild(precontainer);
    }
}

function updatePrice(i, j, k) {
    let quantityInput = document.getElementById("quantity-input-{0}-{1}".format(i, j));
    aisles[k][j].quantity = parseInt(quantityInput.value);
    loadAisles();
}