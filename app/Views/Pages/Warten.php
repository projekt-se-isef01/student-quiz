<body id="d">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script >

    $('document').ready(function(){

        timeOutId=setTimeout(ajaxFn,5000);
    });
    // Handler for .ready() called.
    var timeOutId = 0;
    //we define our function and STORE it in a var
    var ajaxFn = function () {
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('VS/wait/3')?>",
            data: $(this).serialize(),
            success: function (data) {
                $('#d').html(data);
                clearTimeout(timeOutId);
            }

        });
    }

</script>
</body>