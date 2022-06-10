<body id="d">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script >
    $(document).ready(function() {
        callAjax();
    });


    // Handler for .ready() called.

    function callAjax() {
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('VS/wait/3')?>",
            data: $(this).serialize(),
            success: function (data) {
                $('#d').html(data);
            }

        });
    }
</script>
</body>