    <script src="<?= base_url("assets/js/dashboard.js") ?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            
        });
    </script>
</body>
</html>