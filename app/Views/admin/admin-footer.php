    <script src="<?= base_url("assets/js/dashboard.js") ?>"></script>
    <script src="<?= base_url("/assets/js/jquery.min.js") ?>"></script>
    <script>
        $(document).ready(function(){
            
            $('.status').each(function (){
                let stat = $(this).data('status');
                
                if (stat === 'pending')
                {
                    $(this).css('background-color', '#CE6803');
                } else if (stat === 'completed')
                {
                    $(this).css('background-color', '#024E2B');

                } else if (stat === 'cancelled')
                {
                    $(this).css('background-color', '#C60303');
                }
            });

            $(".table-item").click(function () {
                let productId = $(this).data("id");

                window.location.href = "<?= base_url("/admin/order/") ?>" + productId;
            });
            
            $(".btn-back").click(function (){
                window.location.href = "<?= base_url("/admin/orders") ?>"
            });

            $(".edit-btn-back").click(function (){
                window.location.href = "<?= base_url("/admin/products") ?>"
            });

            $(".btn-submit").click(function (){
                let orderId = $(".orderId").data('id');
                let newStatus = $("#status").val();
                console.log(orderId);
                console.log(newStatus);
                $.ajax({
                    url: "<?= base_url('/admin/update-status') ?>",
                    type: "POST",
                    data: { orderId: orderId, status: newStatus},
                    dataType: "json",
                    success: function (response) {
                        if (response.status === "success"){
                            alert("Order status updated successfully!");
                            window.location.href = "<?= base_url('/admin/orders') ?>";
                        } else {
                            alert("Failed to udpate status: " + response.message);
                        }
                    },
                    error: function () {
                        alert("An error occured. Please try again.");
                    }

                });
            });

            let currentUrl = window.location.href;

            $(".links .link").each(function () {
                if(this.href === currentUrl) {
                    $(this).addClass("active");
                }
            });

            $(".message_item").click(function (){
                let messageId = $(this).data("id");
                
                window.location.href = "<?= base_url("/admin/message/") ?>" + messageId;
            });
        });
    </script>
</body>
</html>