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

$(document).ready(function () {
    //call functions
    setTimeout(function () {
        // alert("Winner");
        get_regions();
    }, 200);

    $("#create_admin").click(function (e) {
        e.preventDefault();
        // alert("Admin create");
        $(".log_in_text").hide();
        $(".spinner-text").show();
        $("#create_admin").attr("disabled", true);

        var admin_id = $("#admin_user_id").val();
        var admin_password = $("#admin_password").val();
        var confirm_admin_password = $("#confirm_admin_password").val();

        if (admin_password == confirm_admin_password) {
            $.ajax({
                type: "POST",
                url: "create-admin-user-api",
                datatype: "application/json",
                data: {
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
