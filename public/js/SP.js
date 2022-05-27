if($("#singleplayerForm").length > 0) {
    $("#singleplayerForm").validate({
        rules: {
            antwort: {
                required: true,
            },

        },
        messages: {
            antwort: {
                required: "Bitte Antwort wählen",
            },

        },
        submitHandler: function(form) {
            $('#send_form').html('Sending..');
            $.ajax({
                url: "getNextFrage",
                type: "POST",
                data: $('#singleplayerForm').serialize(),
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    console.log(response.success);
                    $('#send_form').html('Submit');
                    $('#res_message').html(response.msg);
                    $('#res_message').show();
                    $('#res_message').removeClass('d-none');
                    document.getElementById("singleplayerForm").reset();
                    setTimeout(function() {
                        $('#res_message').hide();
                        $('#res_message').html('');
                    }, 10000);
                }
            });
        }
    })
}