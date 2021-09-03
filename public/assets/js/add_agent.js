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

function get_polling_station(constituency) {
    $.ajax({
        type: "GET",
        url: "get-polling-station-api?constituency=" + constituency,
        datatype: "application/json",
        success: function (response) {
            // console.log(response);
            let data = response.data;
            // console.log(data);

            $("#agent_electoral_area option").remove();

            if (response.status == "ok") {
                $("#agent_electoral_area").prop("disabled", false);
                $("#agent_electoral_area").css("background", "#fefefe");

                $.each(data, function (index) {
                    console.log(data[index]);
                    $("#agent_electoral_area").append(
                        $("<option>", {
                            value: data[index].name + "~" + data[index].code,
                        }).text(data[index].name)
                    );
                });
            }
        },
    });
}

$("#agent_constituency").prop("disabled", true);
$("#agent_constituency").css("background", "#DCDCDC");
$("#agent_electoral_area").prop("disabled", true);
$("#agent_electoral_area").css("background", "#DCDCDC");
$(document).ready(function () {
    setTimeout(function () {
        get_regions();
        // get_constituency();
        // get_polling_station();
    }, 1000);

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

    $("#image_upload").change(function () {
        var file = $("#image_upload[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function () {
                $(".display_selected_id_image").attr("src", reader.result);
            };

            reader.readAsDataURL(file);

            reader.onload = function () {
                // {{--  alert(reader.result)  --}}
                $(".display_selected_id_image").attr("src", reader.result);
                $("#image_upload_").val(reader.result);
            };
        }

        $(".display_selected_id_image").show();
    });

    $("#agent_region").change(function () {
        var region = $(this).val();
        if (region == "") {
            $("#agent_constituency").prop("disabled", true);
            $("#agent_constituency").css("background", "#DCDCDC");
        }
        console.log(region);
        get_constituency(region);
    });

    $("#agent_constituency").change(function () {
        var con = $(this).val().split("~");
        var constituency = con[1];

        console.log(constituency);
        get_polling_station(constituency);
    });

    $("#agent_submit_form").click(function (e) {
        e.preventDefault();
        // $("#agent_submit_form").removeAttr("data-target");

        // get image form phot uploaded
        var fname = $("#first_name").val();
        var middile_name = $("#middle_name").val();
        var surname = $("#surname").val();
        var gender = $("#select_gender").val();
        var dob = $("agent_dob").val();
        var national_id = $("id_number").val();
        var telephone_1 = $("telephone_number_1").val();
        var telephone_2 = $("telephone_number_2").val();
        // var education_level = $("#educational_level");
        var education_level = $("#educational_level").val();
        var year_completion = $("#completion_year").val();
        var agent_region = $("#agent_region").val();
        var agent_electoral_area = $("#agent_electoral_area").val();
        var agent_constituency = $("#agent_constituency").val();

        if (
            fname == "" ||
            middile_name == "" ||
            surname == "" ||
            gender == "" ||
            dob == "" ||
            national_id == "" ||
            telephone_1 == "" ||
            education_level == "" ||
            year_completion == "" ||
            agent_region == "" ||
            agent_electoral_area == "" ||
            agent_constituency == ""
        ) {
            // alert("Please fill all required fields");
            toaster("Please fill all required fields", "error", 10000);
        } else {
            $("#display_first_name").text(fname);
            $("#display_middle_name").text(middile_name);
            $("#display_surname").text(surname);
            $("#display_gender").text(gender);
            $("#display_id_number").text(national_id);
            $("#display_dob").text(dob);
            $("#display_phone_number_1").text(telephone_1);
            $("#display_phone_number_2").text(telephone_2);
            $("#display_educational_level").text(education_level);
            $("#display_completion_year").text(year_completion);
            $("#display_agent_region").text(agent_region);
            $("#display_agent_constituency").text(agent_constituency);
            $("#display_agent_electoral_area").text(agent_electoral_area);
        }

        $("#confirm_agent").click(function (e) {
            e.preventDefault();
        });
    });
});
