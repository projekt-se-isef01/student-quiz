$(document).ready(function() {
callAjax();
});


// Handler for .ready() called.

function callAjax() {
    $.ajax({
        type: 'POST',
        url: "<?php echo site_url('VS/wait/3')?>",
        data: $(this).serialize(),
        dataType: 'json',
        success: function (data) {
            alert('llll');
        }

    });
}




