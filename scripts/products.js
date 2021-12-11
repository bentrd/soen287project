const showmore = () => {
    let e = document.getElementsByClassName("txt")[0];
    e.classList.toggle("show");
};

const updateImage = v => {
    document.getElementById("product-image").src = v;
};

const updatePrice = (id, price) => {
    var quantityInput = document.getElementById("qtyInput" + id);
    if (quantityInput == null) return false;
    if (!(quantityInput = quantityInput.value) || isNaN(quantityInput = quantityInput) || (quantityInput = parseInt(quantityInput, 10)) <= 0) {
        quantityInput = 1; document.getElementById("qtyInput" + id).value = quantityInput;
    }
    else document.getElementById("qtyInput" + id).value = quantityInput;
    var pricetag = document.getElementById("price" + id);
    pricetag.innerText = (price * quantityInput).toFixed(2);
    return false;
};

const addToCart = (pd, id, fromCart = false) => {
    var toAdd = document.getElementById(id);
    if (toAdd == null) return false;
    pd.quantity = parseInt(toAdd.value);
    if (localStorage.getItem('cart') === null)
        localStorage.setItem('cart', JSON.stringify([]));
    var cart = JSON.parse(localStorage.getItem('cart'));
    var inCart = false;
    cart.map(e => {
        if (e.name === pd.name) {
            if (fromCart) e.quantity = pd.quantity;
            else e.quantity += pd.quantity;
            inCart = true;
        }
    });
    if (!inCart) cart.push(pd);
    localStorage.setItem('cart', JSON.stringify(cart));
    getCartSize();
    if (fromCart) loadCart();
    return false;
};

const handleCartChange = (id, price, pd) => {
    updatePrice(id, price);
    addToCart(pd, "qtyInput" + id, true);
};

const deleteProduct = id => {
    var cart = JSON.parse(localStorage.getItem('cart'));
    cart = [...cart.slice(0, id), ...cart.slice(id + 1)]
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
}

const getCartSize = () => {
    var cart = JSON.parse(localStorage.getItem('cart'));
    var span = document.getElementById('cartQty');
    var size = 0;
    if (!!cart)
        cart.forEach(e => {
            size += e.quantity;
        });
    span.innerText = size;
};

const loadCart = () => {
    var subtotal = 0;
    var totalQuantity = 0;
    var productList = document.getElementById("cart-products-ul");
    productList.innerHTML = "";
    var cart = JSON.parse(localStorage.getItem('cart'));

    cart.forEach((pd, i) => {
        var product = document.createElement("li");
        product.innerHTML = `<div class="cart-content-left">
                                <img src="../products${pd.img}">
                                <span class="productname">${pd.name}</span>
                            </div>
                            <div class="productbuy">
                                <span class="price"><span class="dollarsign">$</span><span id="price${i}">${(pd.price * pd.quantity).toFixed(2)}</span></span>
                                <input id="qtyInput${i}" name="cartQuantity" type="number" min="1" max="99" value="${pd.quantity}">
                                <button onclick="deleteProduct(${i})"><ion-icon name="trash-outline"></ion-icon></button>
                            </div>`;
        productList.appendChild(product);
        var input = document.getElementById('qtyInput' + i);
        input.onchange = () => handleCartChange(i, pd.price, pd);
        subtotal += pd.price * pd.quantity;
        totalQuantity += pd.quantity;
        getCartSize();
    });

    var totalPrices = document.getElementsByClassName("subtotal");
    totalPrices[0].innerText = `${totalQuantity} items`;
    totalPrices[1].innerText = `sub-total: ${subtotal.toFixed(2)}`;
    totalPrices[2].innerText = `QST: ${(subtotal * 0.0996).toFixed(2)}`;
    totalPrices[3].innerText = `GST: ${(subtotal * 0.0499).toFixed(2)}`;
    document.getElementsByClassName("total")[0].innerHTML = `Total: <span class="dollarsign">$</span><span class="price">${(subtotal + subtotal * 0.0996 + subtotal * 0.0499).toFixed(2)}</span>`;
};