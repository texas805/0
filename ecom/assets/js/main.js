// add-to-cart
var add_to_cart = document.querySelectorAll(".add-to-cart");

// console.log(add_to_cart);

//
// add_to_cart.addEventListener("click", function() {
//     alert("Product added to cart");
// });



add_to_cart.forEach(function(button) {
    button.addEventListener("click", function() {
        addToCart(button);
    });
});

function addToCart(button){
    var productId = button.getAttribute("data-product-id");
        alert("Product added to cart: " + productId);


    // Get cart counter
    var cartCount = document.querySelector(".cart-count");
    var currentCount = parseInt(cartCount.innerHTML);
    currentCount++;
    cartCount.innerHTML = currentCount;
}

function openCart(){
    alert("Cart opened");
}