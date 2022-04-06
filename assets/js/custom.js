$(document).ready(function() {
    //TOGGLING NESTED ul
    $(".drop-down .selected a").click(function() {
        $(".drop-down .options ul").toggle();
    });

    //SELECT OPTIONS AND HIDE OPTION AFTER SELECTION
    $(".drop-down .options ul li a").click(function() {
        var text = $(this).html();
        $(".drop-down .selected a span").html(text);
        $(".drop-down .options ul").hide();
    });


    //HIDE OPTIONS IF CLICKED ANYWHERE ELSE ON PAGE
    $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (!$clicked.parents().hasClass("drop-down"))
            $(".drop-down .options ul").hide();
    });

    /*Submit the vcard form*/
    $('.btn-download-contact').on('click', function() {
        $('#frm_vcard').submit();
    });

    /*Submit the vcard form*/
    $('.btnDownloadVcard').on('click', function() {
        $('#mangeVcard').submit();
    });

    //Validate the contact form
    $("#frm_contact_form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            message: "required"
        },
        submitHandler: function(form) {
            //Form Submit Event
            $(form).ajaxSubmit({
                type: "post",
                url: 'controllers/contact.php',
                dataType: 'json',
                beforeSend: function() {
                    $("#btn_contact_submit").attr('disabled', true);
                    $("#btn_contact_submit").html("Sending");
                },
                success: function(response) {
                    //Set the form tag
                    $("#btn_contact_submit").attr('disabled', false);
                    $("#btn_contact_submit").html("CONTACT");

                    if (response.status == true) {
                        $("#frm_contact_form")[0].reset();
                        $('.alert-success').removeClass('d-none');
                    } else {
                        $('.alert-danger').removeClass('d-none');
                    }
                }
            });
        }
    });

});