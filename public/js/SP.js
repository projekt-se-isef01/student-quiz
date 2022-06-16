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
                                window.location.href = `/ErgebnisSingle`;

                            }
                            $('#score').attr("value", data.score);

                            $('#frage').attr("value", data.data['frage']);
                            $('#frageId').attr("value", data.data['frageId']);
                            $('.next1').text(data.data['antwort1']);
                            $('.next2').text(data.data['antwort2']);
                            $('.next3').text(data.data['antwort3']);
                            $('.next4').text(data.data['antwort4']);
                            $('#hinweis').text(data.data['hinweis']);
                            var h= $('#hinweis').text();
                            $('.j1').text(data.data['Joker50501']);
                            var j1= $('.j1').text();
                            $('.j2').text(data.data['Joker50502']);
                            var j2= $('.j2').text();

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
                            localStorage.setItem("h", h);
                            localStorage.setItem("j1", j1);
                            localStorage.setItem("j2",j2);
                            if (getCookie("hinweis") ==="1") {

                                document.cookie = 'hinweis' + '=' + 0 + ';'+ 'path' + '=' + '/' + ';'+'SameSite=Lax'+';';
                            window.location.reload();
                            }
                            if (getCookie("joker") ==="1") {

                                document.cookie = 'joker' + '=' + 0 + ';'+ 'path' + '=' + '/' + ';'+'SameSite=Lax'+';';
                                window.location.reload();
                            }
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

    var  h = localStorage.getItem("h");
    if (h !== null) $('#hinweis').text(h);

    var  j1 = localStorage.getItem("j1");
    if (j1 !== null) $('.j1').text(j1);

    var  j2 = localStorage.getItem("j2");
    if (j2 !== null) $('.j2').text(j2);


});

        $(function () {
            $('#show2').on('click', function () {
                $.ajax({
                    type: "GET",
                    complete: function (data) {
                        let joker = getCookie("joker");
                        if (joker ==="") {
                            document.cookie = 'joker' + '=' + 1 + ';'+ 'path' + '=' + '/' + ';'+'SameSite=Lax'+';';
                                window.location.reload();
                        }
                        }
                });
            });
        })
    $(function () {
        $('#show').on('click', function () {
            $.ajax({
                type: "GET",
                complete: function (data) {
                    let hinweis = getCookie("hinweis");
                    if (hinweis ==="") {
                        document.cookie = 'hinweis' + '=' + 1 + ';'+ 'path' + '=' + '/' + ';'+'SameSite=Lax'+';';
                        window.location.reload();

                    }
                }
            });
        });
    })



    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";

    }