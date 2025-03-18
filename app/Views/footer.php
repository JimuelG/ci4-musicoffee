    <script src="<?= base_url("/assets/js/jquery.min.js") ?>"></script>
    <script>
        $(document).ready(function(){
            updateOrderTotal();

            $(".continue-shopping").click(function (){
                window.location.href = "<?= base_url("/menu") ?>";
            });

            $(".add-to-cart").click(function(){
                let productId = $(this).data("id");
                let productName = $(this).data("name");
                let productPrice = $(this).data("price");
                let productImg = $(this).data("img");


                $(".modal-img").attr("src", productImg);
                $(".modal-name").text(productName);
                $(".total-price").text("Total P " + productPrice);
                $(".cart-modal").removeClass("hidden");
                $(".quantity-val").val(1);
                
                $(".size-16oz").text("16oz - P " + productPrice + ".00");
                $(".size-22oz").text("22oz - P " + (productPrice + 20) + ".00");

                $("#16oz").data("price", productPrice);
                $("#22oz").data("price", productPrice + 20);

                $(".modal-name").attr("data-price", productPrice);
                $("#16oz").prop("checked", true);
                updateTotal();
                
            });

            $(".exit").click(function(){
                $(".cart-modal").addClass("hidden");
            });

            $(".increase-qty").click(function (){
                let quantity = parseInt($(".quantity-val").val());
                $(".quantity-val").val(quantity + 1);
                updateTotal();
            });

            $(".decrease-qty").click(function(){
                let quantity = parseInt($(".quantity-val").val());
                if (quantity > 1) {
                    $(".quantity-val").val(quantity - 1);
                    updateTotal();
                }
            });

            $(".size-opt input").change(function (){
                updateTotal();
            });
            
            function updateTotal() {
                let selectedSize = $(".size-opt input:checked");
                let price = parseFloat($(selectedSize).data("price"));
                let quantity = parseInt($(".quantity-val").val());

                if (!isNaN(price) && !isNaN(quantity)) {
                    $(".total-price").text("Total P " + (price * quantity) + ".00");
                }
            };

            $(".total-add").click(function(){
                let productName = $(".modal-name").text();
                let productSize = $(".size-opt input:checked").attr("id");
                let productPrice = $(".size-opt input:checked").data("price");
                let quantity = $(".quantity-val").val();
                let productImg = $(".modal-img").attr("src");
                let totalPrice = $(".total-price").text().replace("Total P ", "").trim();

                console.log(productPrice);
                $.ajax({
                    url: "<?= base_url('/addCart') ?>",
                    type: "POST",
                    data: {
                        productName: productName,
                        productSize: productSize,
                        quantity: quantity,
                        productPrice: productPrice,
                        productImg: productImg
                    },
                    success: function(response) {
                        if (response.status === "success") {
                            alert("Item added to cart successfully!");
                            window.location.href = "<?= base_url('/menu') ?>";
                            $(".cart-modal").addClass("hidden");
                        }
                    },
                    error: function() {
                        alert("Error adding to cart.");
                    }
                });
            });

            $(".remove-item").click(function (e) {
                e.preventDefault();

                let cartId = $(this).data("id");
                let row = $(this).closest("tr");

                if(confirm("Are you sure you want to remove this item?"))
                {
                    $.ajax({
                        url: "<?= base_url('/orders/remove') ?>",
                        type: "POST",
                        data: {id:cartId},
                        success: function (response) {
                            if (response.status === "success") {
                                alert("Item removed from cart.");
                                row.fadeOut(300, function () {
                                    row.remove()
                                });
                            } else {
                                alert("Failed to remove item.");
                            }
                        },
                        error: function () {
                            alert("Error removing item.");
                        }
                    });
                }
            });

            $(".add-qty").click(function (){
                let cartId = $(this).data("id");
                let quantityInput = $(".quantity-input[data-id='" + cartId + "']");
                let totalPrice = $(".priceTotal[data-id='" + cartId + "']");
                let price = parseInt($(".priceTotal[data-id='" + cartId + "']").data("price"));
                let newQuantity = parseInt(quantityInput.val()) + 1;
                quantityInput.val(newQuantity);
                let newTotalPrice = price * newQuantity;
                totalPrice.text ("P " + newTotalPrice.toFixed(2));
                updateOrderTotal();
            });
            
            $(".subtract-qty").click(function(){
                let cartId = $(this).data("id");
                let quantityInput = $(".quantity-input[data-id='" + cartId + "']");
                let totalPrice = $(".priceTotal[data-id='" + cartId + "']");
                let price = parseInt($(".priceTotal[data-id='" + cartId + "']").data("price"));
                let newQuantity = parseInt(quantityInput.val());
                if (newQuantity > 1){
                    newQuantity -= 1;
                    quantityInput.val(newQuantity);
                    let newTotalPrice = price * newQuantity;
                    totalPrice.text ("P " + newTotalPrice.toFixed(2));
                }
                updateOrderTotal();
            });

            function updateOrderTotal(){
                let totalCartPrice = 0;
                let itemCount = 0;
                let customer_name = $(this).find(".priceTotal").data("name");
                let itemDate = $(this).find(".priceTotal").data("date");

                $(".product-item").each(function (){
                    let itemPrice = parseInt($(this).find(".priceTotal").text().replace("P ", "").trim());

                    itemCount++;
                    
                    if(!isNaN(itemPrice)) {
                        totalCartPrice += itemPrice;
                    }
                });

                $(".itemCount").text(itemCount + " items(s)");
                $(".itemCount2").text("ITEMS (" + itemCount +")");
                
                $(".cart-total").text("P " + totalCartPrice.toFixed(2));
            }

            $("#checkout").click(function (){
                let updatedCart = [];
                let hasChanges = false;

                $(".product-item").each(function (){
                    let inputQty = $(this).find(".quantity-input").val();
                    let currentQty = $(this).find(".quantity-input").data("original");

                    if (inputQty != currentQty){
                        hasChanges = true;
                        updatedCart.push({
                            cId: $(this).find(".remove-item").data("id"),
                            quantity: inputQty
                        });
                    }
                });

                console.log(hasChanges);

                if (hasChanges){
                    $.ajax({
                    url: "<?= base_url('/update-cart') ?>",
                    type: "POST",
                    data: { cart: updatedCart },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === "success") {
                            proceedToCheckout();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function() {
                        alert("An error occured. Please try again.");
                    }
                    });
                } else {
                    proceedToCheckout();
                }
            });

            function proceedToCheckout() {
                $.ajax({
                    url: "<?= base_url('/checkout') ?>",
                    type: "POST",
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === "success") {
                            alert("Order placed successfully! Order ID: " + response.order_id);
                            location.reload();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function() {
                        alert("An error occured. Please try again.");
                    }
                });
            }
            
        });
    </script>
</body>
</html>