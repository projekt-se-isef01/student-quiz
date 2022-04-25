<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Validation library file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>

    $(function() {

    // Adding form validation
    $('#frm-add-user').validate();

    // Ajax form submission with image
    $('#frm-add-user').on('submit', function(e) {

    e.preventDefault();

    var formData = new FormData(this);
    // OR var formData = $(this).serialize();

    //We can add more values to form data
    //formData.append("key", "value");

    $.ajax({
    url: "<?= site_url('registrieren') ?>",
    type: "POST",
    cache: false,
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON",
    success: function(data) {
    if (data.success == true) {
    Swal.fire('Saved!', '', 'success')
}
},
    error: function(jqXHR, textStatus, errorThrown) {
    alert('Error at add data');
}
});
});
});
