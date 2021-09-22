function get_regions() {
    // alert("called");
    // return false;
    $.ajax({
        type: "GET",
        url: "get-regions-api",
        datatype: "application/json",
        success: function (response) {
            console.log(response);

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
        error: function (xhr, status, error) {
            setTimeout(function () {
                get_regions();
            }, $.ajaxSetup().retryAfter);
        },
    });
}

function get_constituency(region) {
    $("#constituency_spinner").show();
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
                $("#constituency_spinner").hide();
                $.each(data, function (index) {
                    // console.log(data[index]);
                    $("#agent_constituency").append(
                        $("<option>", {
                            value: data[index].name + "~" + data[index].code,
                        }).text(data[index].name)
                    );
                });
            }
        },
    });
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

$("#agent_region").prop("disabled", true);
$("#agent_region").css("background", "#DCDCDC");
$("#agent_constituency").prop("disabled", true);
$("#agent_constituency").css("background", "#DCDCDC");

function dont_call_constituency() {
    $("#constituency_spinner").hide();

    $("#agent_constituency").prop("disabled", true);
    $("#agent_constituency").css("background", "#DCDCDC");
}

$("#user_mandate").change(function () {
    var user_mandate = $(this).val();
    console.log(user_mandate);

    // $("#agent_region").prop("disabled", true);
    // $("#agent_region").css("background", "#DCDCDC");
    // $("#agent_constituency").prop("disabled", true);
    // $("#agent_constituency").css("background", "#DCDCDC");

    if (user_mandate === "NationalLevel") {
        $("#agent_region").prop("disabled", true);
        $("#agent_region").css("background", "#DCDCDC");
        $("#agent_constituency").prop("disabled", true);
        $("#agent_constituency").css("background", "#DCDCDC");
        return;
    } else if (user_mandate === "RegionalLevel") {
        console.log("mandate is =>" + user_mandate);
        $("#agent_region").prop("disabled", false);
        $("#agent_region").css("background", "#FFFFFF");
        $("#constituency_spinner").hide();

        $("#agent_constituency").prop("disabled", true);
        $("#agent_constituency").css("background", "#DCDCDC");
        toaster("Please Select Region of User", "info", 10000);
        return;
    } else if (user_mandate === "ConstituencyLevel") {
        $("#agent_region").prop("disabled", false);
        $("#agent_region").css("background", "#FFFFFF");

        $("#agent_region").change(function () {
            var region = $(this).val();
            $("#agent_constituency").prop("disabled", true);
            $("#agent_constituency").css("background", "#DCDCDC");

            console.log(region);
            get_constituency(region);
        });
        toaster("Please Select Region and Constituency of User", "info", 10000);
        return;
    } else {
    }

    // switch (user_mandate) {
    //     case "NationalLevel":
    //         $("#agent_region").prop("disabled", true);
    //         $("#agent_region").css("background", "#DCDCDC");
    //         $("#agent_constituency").prop("disabled", true);
    //         $("#agent_constituency").css("background", "#DCDCDC");
    //         break;

    //     case "RegionalLevel":
    //         // $("#agent_region").prop("disabled", false);
    //         // $("#agent_region").css("background", "#FFFFFF");
    //         $("#agent_region").prop("disabled", false);
    //         $("#agent_region").css("background", "#DCDCDC");
    //         $("#constituency_spinner").hide();

    //         $("#agent_constituency").prop("disabled", true);
    //         $("#agent_constituency").css("background", "#DCDCDC");

    //         toaster("Please Select Region of User", "info", 10000);
    //         // dont_call_constituency();
    //         break;

    //     case "ConstituencyLevel":
    //         $("#agent_region").prop("disabled", false);
    //         $("#agent_region").css("background", "#FFFFFF");

    //         $("#agent_region").change(function () {
    //             var region = $(this).val();
    //             $("#agent_constituency").prop("disabled", true);
    //             $("#agent_constituency").css("background", "#DCDCDC");

    //             console.log(region);
    //             get_constituency(region);
    //         });
    //         toaster(
    //             "Please Select Region and Constituency of User",
    //             "info",
    //             10000
    //         );

    //         break;

    //     default:
    //         break;
    // }
});
$(document).ready(function () {
    //call functions
    setTimeout(function () {
        // alert("Winner");
        get_regions();
    }, 200);

    $("#create_admin").click(function (e) {
        e.preventDefault();
        // alert("Admin create");

        var first_name = $("#user_first_name").val();
        var last_name = $("#user_last_name").val();
        var phone_number = $("#user_telephone_number").val();
        var voters_id = $("#user_voters_id").val();
        var user_mandate = $("#user_mandate").val();
        var user_region = $("#agent_region").val();
        var user_constituency = $("#agent_constituency").val();
        var admin_id = $("#admin_user_id").val();
        var admin_password = $("#admin_password").val();
        var confirm_admin_password = $("#confirm_admin_password").val();
        var isnum = /^\d+$/.test(phone_number);
        var isnum_ = /^\d+$/.test(voters_id);

        if (phone_number.replace(/ /g, "").length != 10 || isnum === false) {
            toaster("Invalid Phone Number", "error", 5000);
            return false;
        } else if (
            voters_id.replace(/ /g, "").length != 10 ||
            isnum_ === false
        ) {
            toaster("Invalid Voter ID Number", "error", 5000);
            return false;
            // } else if (user_mandate === "RegionalLevel") {
            //     toaster("Region of User Required", "error", 5000);
            //     return false;
        } else if (
            user_mandate === "ConstituencyLevel" &&
            user_region == "" &&
            user_constituency == ""
        ) {
            toaster("Region and Constituency of User", "error", 5000);
            return false;
        } else if (user_mandate === "ConstituencyLevel" && user_region == "") {
            toaster("Region of User Required", 5000);
            return false;
        } else if (
            user_mandate === "ConstituencyLevel" &&
            user_constituency == ""
        ) {
            toaster("Constituency of User Required", "error", 5000);
            return false;
        } else if (
            first_name.trim() == "" ||
            last_name.trim() == "" ||
            user_mandate.trim() == ""
        ) {
            toaster("Mandatory Fields Required", "error", 5000);
            return false;
        } else if (admin_password == confirm_admin_password) {
            $(".log_in_text").hide();
            $(".spinner-text").show();
            $("#create_admin").attr("disabled", true);
            $.ajax({
                type: "POST",
                url: "create-admin-user-api",
                datatype: "application/json",
                data: {
                    first_name: first_name,
                    last_name: last_name,
                    phone_number: phone_number,
                    voters_id: voters_id,
                    user_mandate: user_mandate,
                    user_region: user_region,
                    user_constituency: user_constituency,
                    admin_id: admin_id,
                    admin_password: confirm_admin_password,
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
                        // window.location = "home";
                        $("#log_in_text").show();
                        $(".spinner-text").hide();
                        $("#create_admin").attr("disabled", true);
                    } else {
                        toaster(response.message, "error", 5000);
                        $("#log_in_text").show();
                        $(".spinner-text").hide();
                        $("#create_admin").attr("disabled", false);
                    }
                },
            });
        } else {
            toaster("Passwords do not match", "error", 5000);
            $("#log_in_text").show();
            $(".spinner-text").hide();
            $("#create_admin").attr("disabled", false);
        }
    });
});
