$(document).ready(function() {


   time=setTimeout(callAjax,5000)

});

var time=0
// Handler for .ready() called.

function callAjax() {
    var url = $(location).attr('href');
    var parts = url.split("/");
    var last_part = parts[parts.length-1];
    $.ajax({
        type: 'POST',
        url: "wait/"+last_part,
        data: $(this).serialize(),
        success: function (data) {
            $('#d').html(data);
            clearTimeout(time);
        }

    });
}
