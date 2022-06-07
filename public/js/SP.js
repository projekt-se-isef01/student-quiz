    if ($("#singleplayerForm").length > 0) {
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

            submitHandler: function (form) {
                // CSRF Hash
                var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
                var csrfHash = $('.txt_csrfname').val(); // CSRF hash
                $.ajax({
                        url: "getNextFrage",
                        type: "POST",
                        data: $('#singleplayerForm').serialize(),
                        dataType: "json",
                        success: function (data) {
                            $('.txt_csrfname').val(data.token);
                            if (data.end === true) {
                                const expires = new Date(Date.now() + 1000).toUTCString()
                                document.cookie = 'score' + '=' + data.score + ';' + 'expires' + '=' + '${expires}' + ';' + 'path' + '=' + '/' + ';';
                                localStorage.clear();
                                window.location.href = `/Ergebnis`;

                            }
                            $('#score').attr("value", data.score);

                            $('#frage').attr("value", data.data['frage']);
                            $('#frageId').attr("value", data.data['frageId']);
                            $('.next1').text(data.data['antwort1']);
                            $('.next2').text(data.data['antwort2']);
                            $('.next3').text(data.data['antwort3']);
                            $('.next4').text(data.data['antwort4']);
                            var a1 = $('.next1').text();
                            var a2 = $('.next2').text();
                            var a3 = $('.next3').text();
                            var a4 = $('.next4').text();
                            var frage = $('#frage').attr("value");
                            var fId = $('#frageId').attr("value");
                            var s = $('#score').attr("value");
                            localStorage.setItem("s", s);
                            localStorage.setItem("fId", fId);
                            localStorage.setItem("frage", frage);
                            localStorage.setItem("a1", a1);
                            localStorage.setItem("a2", a2);
                            localStorage.setItem("a3", a3);
                            localStorage.setItem("a4", a4);

                        }
                    }
                );
            },
            errorElement: "div",
            errorPlacement: function (error, element) {
                error.addClass("invalid-feedback pt-3");
                error.insertBefore("#VSForm");

            },
            highlight: function (element) {
                $(element).removeClass('is-valid').addClass('is-invalid');
            },
            unhighlight: function (element) {
                $(element).removeClass('is-invalid').addClass('is-valid');
            }
        })

    }
history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
}
);



window.addEventListener('load', (event) => {
    var f= localStorage.getItem("frage");
    if (f !== null) $('#frage').attr("value",f);

    var s= localStorage.getItem("s");
    if (s !== null) $('#score').attr("value",s)

    var frId= localStorage.getItem("fId");
    if (frId !== null) $('#frageId').attr("value",frId);

    var ant1= localStorage.getItem("a1");
    if (ant1 !== null) $('.next1').text(ant1);

    var ant2= localStorage.getItem("a2");
    if (ant2 !== null) $('.next2').text(ant2);

    var ant3= localStorage.getItem("a3");
    if (ant3 !== null) $('.next3').text(ant3);

    var ant4= localStorage.getItem("a4");
    if (ant4 !== null) $('.next4').text(ant4);


});