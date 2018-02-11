$(document).ready(function() {

    /* Default whenever modal pops up */
    $('.rsvp-button').click(function() {
        $('.alert').hide();
        $('.hiddenUntilAttending').hide();
        $('.second-rsvp-form-div').hide();
    });

    /* First form */
    $('#rsvpForm').submit(function(event) {
        event.preventDefault();
        var data = $(this).serialize();
        var url = $(this).attr('action');

        $.ajax({
            method: "get",
            url: url,
            data: data,
            error: function(jqXHR, textStatus, errorThrown) {
                errorHandler(jqXHR);
            },
            success: function(response) {

                if (response.error) {
                    displayAlert(response.error, "error", 100);
                    return;
                }

                if (response.success) {

                    var glyphicon = 'glyphicon glyphicon-ok';

                    var success = "<ul>";
                    success += "<li>" + response.success + "</li>";

                    if (response.attending === '1') {

                        glyphicon = 'glyphicon glyphicon-heart';

                        $('.first-rsvp-form-div').fadeOut(1000, function() {
                            $(this).hide();
                        });

                        $('#invitorFirstName').val(response.invitorFN);
                        $('#invitorLastName').val(response.invitorLN);

                        success += "<li>You can invite another again.</li>";
                        success += "</ul>";

                        $('.second-rsvp-form-div').delay(900).fadeIn(1000, function() {
                            $(this).show();
                        });
                    }

                    displayAlert(success, "success", glyphicon, 900);
                }

            }
        });
    });

    /* Second form */
    $('#rsvpForm2').submit(function(event) {
        event.preventDefault();
        var data = $(this).serialize();
        var url = $(this).attr('action');

        $.ajax({
            method: "get",
            url: url,
            data: data,
            error: function(jqXHR, textStatus, errorThrown) {
                errorHandler(jqXHR);
            },
            success: function(response) {

                if (response.error) {
                    displayAlert(response.error, "error", 100);
                    return;
                }

                if (response.success) {
                    $('.second-rsvp-form-div').fadeOut(1000, function() {
                        $(this).hide();
                    });

                    document.getElementById("rsvpForm2").reset();
                    $('#invitorFirstName').val(response.invitorFN);
                    $('#invitorLastName').val(response.invitorLN);

                    $('.second-rsvp-form-div').delay(900).fadeIn(1000, function() {
                        $(this).show();
                    });
                    var success = "<ul>";
                    success += "<li>" + response.success + "</li>";
                    success += "<li>You can invite another again.</li>";
                    success += "</ul>";
                    displayAlert(success, "success", 'glyphicon glyphicon-heart', 900);
                }

            }
        });
    });

    /* Fields that should only display once guest is attending */
    $('input[name="attending"]').click(function(eventObj) {
        var obj = eventObj.target;

        if (obj.id === 'attending1') {
            $('.hiddenUntilAttending').show();
        } else {
            $('.hiddenUntilAttending').hide();
        }
    });

    /* Error Hander */
    function errorHandler(jqXHR) {
        var response = JSON.parse(jqXHR.responseText);
        var errors = "<ul>";
        for (var errorTitle in response.errors) {
            errors += "<li>" + response.errors[errorTitle] + "</li>";
        }
        errors += "</ul>";
        displayAlert(errors, "error", 100);
    }

    /* Display Alert */
    function displayAlert(alertMsg, alertType, glyphicon, delayTime = 0) {
        $('.alert').empty().hide();
        var header = '';

        if (alertType === "error") {
            header = "<h4 class='text-center'>Error!</h4>"
            $('#alert-error').html(header + alertMsg).delay(delayTime).fadeIn(1000, function() {
                $(this).show();
            });
        } else {
            header = "<h4 class='text-center'>Success! <span class='" + glyphicon + "'></span></h4>";
            $('#alert-success').html(header + alertMsg).delay(delayTime).fadeIn(1000, function() {
                $(this).show();
            });
        }
    }
});