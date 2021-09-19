$(".spinner-text").hide();

$("#success_alert").hide();
$("#error_alert").hide();
// $("#error_alert").delay(4000).hide();
// setTimeout("$('#error_alert').hide();", 4000);

// $(".login_form_button").attr("disabled", fale);
// $(".spinner-text").show();
// $(".log_in_text").hide();
function hide_alert() {
    setTimeout(function () {
        $("#error_alert").hide();
        $("#error_alert").hide();
    }, 3000);
}

function login(email, password) {
    $.ajax({
        type: "POST",
        url: "login-api",
        datatype: "application/json",
        data: {
            user_id: email,
            password: password,
        },
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            console.log(response.responseCode);
            // $("#success_alert").append();

            // $("#error_alert").append();
            // $("#success_alert").hide();
            // $("#error_alert").hide();
            if (response.responseCode == "ok") {
                // alert("success");
                // $("#success_alert").show();
                // $("#success_alert").html(response.message);

                window.location = "home";
                $("#login_form_button").attr("disabled", true);
            } else {
                $(".spinner-text").hide();
                $(".log_in_text").show();
                // alert(response.message);
                $("#error_alert").html(response.message);
                $("#error_alert").show();
                hide_alert();
            }
        },
    });
}

$("#login_form_button").click(function (e) {
    e.preventDefault();

    var email = $("#user_id").val();
    var password = $("#password").val();
    // $(".login_form_button").attr("disabled", true);

    if (email === "" || email === undefined) {
        $("#error_alert").toggle(500);
        $("#error_alert_message").text("Please Enter User Id");
    } else if (password === "" || password === undefined) {
        $("#error_alert").toggle(500);
        $("#error_alert_message").text("Please Enter Password");
    } else {
        $(".login_form_button").prop("disabled", true);
        $(".spinner-text").show();
        $(".log_in_text").hide();
        login(email, password);
    }
});




