if ($("#editForm").length > 0) {
    $("#editForm").validate({
        rules: {
            frage: {
                required: true,
                maxlength: 128

            },
            antwort1: {
                required: true,
                maxlength: 128
            },
            antwort2: {
                required: true,
                maxlength: 128
            },
            antwort3: {
                required: true,
                maxlength: 128

            },
            antwort4: {
                required: true,
                maxlength: 128
            },

            antwortLoesung: {
                required: true,
                maxlength: 1,
                digits: true
            },
            hinweis: {
                maxlength: 128
            },
            Joke50501: {
                maxlength: 1,
                digits: true
            },
            Joke50502: {
                maxlength: 1,
                digits: true
            },

        },
        messages: {
            frage: {
                required: "Frage benötigt",
            },
            antwort1: {
                required: "Antwort benötigt",
            },
            antwort2: {
                required: "Antwort benötigt",
            },
            antwort3: {
                required: "Antwort benötigt",
            },
            antwort4: {
                required: "Antwort benötigt",
            },
            antwortLoesung: {
                required: "Lösung benötigt. Kann nur Zahlen von 1 bis 4 enthalten"
            },
            hinweis: {
                required: "Name benötigt",
            },

        },
        errorElement: "div",
        errorPlacement: function ( error, element ) {
            error.addClass( "invalid-feedback" );
            error.insertAfter( element );
        },
        highlight: function(element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function(element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        }
    })
}
// Restricts input for each element in the set of matched elements to the given inputFilter.
(function($) {
    $.fn.inputFilter = function(inputFilter) {
        return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
        });
    };
}(jQuery));


// Install input filters.

$("#antwortLoesung").inputFilter(function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 4); });
$("#Joker50501").inputFilter(function(value) {
    return /^\d*$/.test(value) && (value === ""|| value <= 4);
});
$("#Joker50502").inputFilter(function(value) {
    return /^\d*$/.test(value) && (value === ""|| value <= 4);
});
