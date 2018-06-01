const DEBUG = false;

$(document).ready(function () {

    $("#select-all").click(function () {
        var checkAll = $("#select-all").prop('checked');
        if (checkAll) {
            $(".select-guest").prop("checked", true);
        } else {
            $(".select-guest").prop("checked", false);
        }
    });


    $('#send-reminder-btn').click(function (event) {
        event.preventDefault();
        var url = $(this).attr('action');

        var guestEmailList;
        guestEmailList = fetchGuestsToSendEmailTo();

        // Fetch all the guest rows with checkboxes names and parse for an email and with status of yes
        if (DEBUG) {
            console.log(guestEmailList);
            console.log(url);
            console.log("Email List Size:" + Object.keys(guestEmailList).length);
        }

        $("#rsvp-loading-container").fadeIn(1000);

        // Trigger Email Reminder if email list is not empty
        if (Object.keys(guestEmailList).length > 0) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                method: "post",
                url: url,
                dataType: 'JSON',
                data: {
                    emailList: JSON.stringify(guestEmailList)
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                },
                success: function (response) {
                    if (response.success) {
                        console.log(response.success);
                    }
                }
            });

        }
    });

});

function fetchGuestsToSendEmailTo() {

    var emailList = {};

    $("#listGuests > tbody > tr.guest-row").each(function () {
        $this = $(this);

        var isSelected = $this.find("td:nth-child(1) > input").get(0).checked;
        var name = $this.find("td:nth-child(2)").text().trim();
        var attending = $this.find("td:nth-child(3)").text().trim();
        var email = $this.find("td:nth-child(4)").text().trim();

        var isValidEmail = !(email === '' || null);
        var isAttending = (attending === 'Yes');

        if (isSelected && isValidEmail && isAttending) {
            emailList[name] = email;
        }

        if (DEBUG) {
            console.log(isSelected);
            console.log(attending + " Flag:" + (attending === 'Yes'));
            console.log(email + " Flag:" + !(email === '' || null));
        }
    });

    return emailList;
}