document.addEventListener("DOMContentLoaded", function () {
    // Select all elements with the "add-to-cart" class
    const addToCartButtons = document.querySelectorAll(".add-to-cart");
    const cartModal = document.querySelector(".cart-modal");
    const exitButton = document.querySelector(".exit");
    const reg = document.getElementById("16oz");
    const large = document.getElementById("22oz");
    const totalPrice = document.querySelector(".total-price");

    addToCartButtons.forEach(button => {
        button.addEventListener("click", function () {
            if (cartModal) {
                cartModal.classList.remove("hidden");  // Remove "hidden" class
                quantity.value = minValue;
                reg.checked = true;
                totalPrice.value = 89;
            }
        });
    });

    if (exitButton) {
        exitButton.addEventListener("click", function() {
            cartModal.classList.add("hidden");
        });
    }

    const quantity = document.querySelector(".quantity-val");
    const addQ = document.querySelector(".add");
    const subQ = document.querySelector(".subtract");
    const minValue = 1;
    const maxValue = 20;
    
    subQ.addEventListener("click", function() {
        let currentValue = parseInt(quantity.value, 10);
        if (currentValue > minValue) {
            quantity.value = currentValue - 1;
            if (reg.checked) {
                totalPrice.value = 89 * quantity.value;
            }
            else if(large.checked) {
                totalPrice.value = 109 * quantity.value;
            }
        }
    });

    addQ.addEventListener("click", function() {
        let currentValue = parseInt(quantity.value, 10);
        if (currentValue < maxValue) {
            quantity.value = currentValue + 1;
            if (reg.checked) {
                totalPrice.value = 89 * quantity.value;
            }
            else if(large.checked) {
                totalPrice.value = 109 * quantity.value;
            }
        }
    });
});