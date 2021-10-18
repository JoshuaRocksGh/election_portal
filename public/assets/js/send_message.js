// API CALLS

function get_regions() {
    $.ajax({
        type: "GET",
        url: "get-regions-api",
        datatype: "application/json",
        success: function (response) {
            // console.log(response);

            let data = response.data;
            // console.log("===");
            // console.log(data);

            $.each(data, function (index) {
                // console.log(data[index]);
                $("#agent_region").append(
                    $("<option>", {
                        value: data[index],
                    }).text(data[index])
                );
            });
        },
    });
}

function get_constituency(region) {
    $(".constituency_spinner").show();
    $.ajax({
        type: "GET",
        url: "get-constituency-api?region=" + region,
        datatype: "application/json",
        success: function (response) {
            console.log(response);
            let data = response.data;
            // console.log(data);
            $("#agent_constituency option").remove();
            if (response.status == "ok") {
                $("#agent_constituency").prop("disabled", false);
                $("#agent_constituency").css("background", "#fefefe");
                $(".constituency_spinner").hide();
                $("#agent_constituency").show();

                $.each(data, function (index) {
                    // console.log(data[index]);
                    $("#agent_constituency").append(
                        $("<option>", {
                            value: data[index].code,
                        }).text(data[index].name)
                    );
                });
            }
        },
    });
}

$("#send_to").prop("disabled", true);
$("#send_to").css("background", "#DCDCDC");

function getUserRegion(agent_region) {
    get_constituency(agent_region);
    // alert(agent_region);
}

function toaster(message, icon, timer) {
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: timer,
        timerProgressBar: false,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });

    Toast.fire({
        icon: icon,
        title: message,
    });
}

$(document).ready(function () {
    setTimeout(function () {
        // alert(my_mandate);
        if (my_mandate == "NationalLevel") {
            get_regions();
        } else if (my_mandate == "RegionalLevel") {
            var agent_region = $("#agent_region").val();

            getUserRegion(agent_region);
        } else {
            return false;
        }
    }, 200);

    $("#agent_region").change(function () {
        var region = $(this).val();
        if (region == "") {
            // $("#agent_constituency").prop("disabled", true);
            // $("#agent_constituency").css("background", "#DCDCDC");
        }
        console.log(region);
        get_constituency(region);
    });

    // ALL IS SELECTED
    $("#checkbox6c").click(function () {
        if ($(this).is(":checked")) {
            // alert("Checked");
            $("#agent_constituency").prop("disabled", true);
            $("#agent_constituency").css("background", "#DCDCDC");
            $("#agent_region").prop("disabled", true);
            $("#agent_region").css("background", "#DCDCDC");
            $("#send_to").val("ALL");
        } else {
            // alert("Not Checked");
            $("#agent_constituency").prop("disabled", false);
            $("#agent_constituency").css("background", "#fefefe");
            $("#agent_region").prop("disabled", false);
            $("#agent_region").css("background", "#fefefe");
        }
    });

    var count = 0;
    var arr = [];
    $("#agent_constituency").click(function (e) {
        e.preventDefault();

        arr.push($(this).val());
        arr.join(" " + " , " + " ");
        $("#send_to").val(arr);
        console.log(arr);
        count++;
    });

    // var count = 0;
    // var arr = [];
    // $("#agent_region").click(function (e) {
    //     e.preventDefault();

    //     arr.push($(this).val());
    //     arr.join(" " + " , " + " ");
    //     $("#send_to").val(arr);
    //     console.log(arr);
    //     count++;
    // });

    $("#send_message_button").click(function (e) {
        e.preventDefault();
        $(".send_message_text").hide();
        $(".spinner-text").show();
        // return false;
        // alert("clicked on send");
        var subject = $("#message_subject").val();
        var recipients = $("#send_to").val();
        var message = $("#text_message").val();

        console.log("subject =>" + subject);
        console.log("recipients =>" + recipients);
        console.log("message =>" + message);

        if (subject != "" && message != "" && recipients != "") {
            $.ajax({
                type: "POST",
                url: "send-agent-message-api",
                datatype: "application/json",
                data: {
                    title: subject,
                    body: message,
                    region: recipients,
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (response) {
                    console.log(response);

                    if (response.status == "ok") {
                        Swal.fire(response.message, "", "success");
                        location.reload();
                        $(".send_message_text").show();
                        $(".spinner-text").hide();
                    } else {
                        toaster(response.message, "error", 10000);
                        $(".send_message_text").show();
                        $(".spinner-text").hide();
                    }
                },
            });
        } else {
            toaster("Please fill all required fields", "error", 10000);
            $(".send_message_text").show();
            $(".spinner-text").hide();
        }
    });
});
