    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
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
                let price = parseFloat($(".size-opt input:checked").siblings("label").data("price"));
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

            $(".add-qty").click(function (){
                let cartId = $(this).data("id");
                let quantityInput = $(".quantity-input[data-id='" + cartId + "']");
                let totalPrice = $(".priceTotal[data-id='" + cartId + "']");
                let price = parseInt($(".priceTotal[data-id='" + cartId + "']").data("price"));
                let newQuantity = parseInt(quantityInput.val()) + 1;
                quantityInput.val(newQuantity);
                let newTotalPrice = price * newQuantity;
                totalPrice.text ("P " + newTotalPrice.toFixed(2));
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
            });

            function updatePrice(cartId, newQuantity){
                let totalPrice = $(this).data("total");

            }
        });
    </script>
</body>
</html>