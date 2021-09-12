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
            console.log(response);
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

// $(function () {
//     $("#datepicker").datepicker({
//         changeMonth: true,
//         changeYear: true,
//         showButtonPanel: true,
//         dateFormat: "mm yy",
//         onClose: function (dateText, inst) {
//             $(this).datepicker(
//                 "setDate",
//                 new Date(inst.selectedYear, inst.selectedMonth, 1)
//             );
//         },

//         .on( "change", function() {
//         to.datepicker( "option", "minDate", getDate( this ) );
//       }),
//     to = $( "#toDate" ).datepicker({
//       dateFormat: "yy-mm-dd",
//       changeMonth: true
//     })
//     .on( "change", function() {
//       from.datepicker( "option", "maxDate", getDate( this ) );
//     })

//   function getDate( element ) {
//     var date;
//     var dateFormat = "yy-mm-dd";
//     try {
//       date = $.datepicker.parseDate( dateFormat, element.value );
//     } catch( error ) {
//       date = null;
//     }

//     return date;
//     });
// });

$("#agent_constituency").prop("disabled", true);
$("#agent_constituency").css("background", "#DCDCDC");
$("#agent_electoral_area").prop("disabled", true);
$("#agent_electoral_area").css("background", "#DCDCDC");
$(document).ready(function () {
    setTimeout(function () {
        get_regions();
    }, 200);

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

    //Confirm Before Postin to api

    $("#agent_submit_form").click(function (e) {
        e.preventDefault();

        // get image form phot uploaded
        var image = $("#image_upload_").val();
        var fname = $("#first_name").val();
        var middile_name = $("#middle_name").val();
        var surname = $("#surname").val();
        var gen = $("#select_gender").val().split("~");
        var gender = gen[1];
        var dob = $("#agent_dob").val();
        var national_id = $("#id_number").val();
        var telephone_1 = $("#telephone_number_1").val();
        var telephone_2 = $("#telephone_number_2").val();
        var insititution_name = $("#institution_name").val();
        var education_level = $("#educational_level").val();
        var year_completion = $("#completion_year").val();
        var agent_region = $("#agent_region").val();
        var agent_elec_area = $("#agent_electoral_area").val().split("~");
        var agent_electoral_area = agent_elec_area[0];
        var agent_cons = $("#agent_constituency").val().split("~");
        var agent_constituency = agent_cons[1];

        if (
            (image =
                "" ||
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
                agent_constituency == "" ||
                insititution_name == "")
        ) {
            // alert("Please fill all required fields");
            $("#agent_submit_form").removeAttr("data-target");
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
            $("#display_institution_name").text(insititution_name);
            $("#display_educational_level").text(education_level);
            $("#display_completion_year").text(year_completion);
            $("#display_agent_region").text(agent_region);
            $("#display_agent_constituency").text(agent_constituency);
            $("#display_agent_electoral_area").text(agent_electoral_area);
        }
    });
    //POST TO API
    $("#confirm_agent").click(function (e) {
        e.preventDefault();
        // alert("clicked");

        var id_image = $("#image_upload_").val();

        var first_name = $("#first_name").val();

        var middile_name = $("#middle_name").val();

        var surname = $("#surname").val();

        var gen = $("#select_gender").val().split("~");
        var gender = gen[1];

        var dob = $("#agent_dob").val();

        var national_id = $("#id_number").val();

        var telephone_1 = $("#telephone_number_1").val();

        var telephone_2 = $("#telephone_number_2").val();

        var insititution_name = $("#institution_name").val();

        var education_level = $("#educational_level").val();

        var year_completion = $("#completion_year").val();

        var agent_region = $("#agent_region").val();

        var agent_elec_area = $("#agent_electoral_area").val().split("~");
        var agent_electoral_area = agent_elec_area[1];

        var agent_con = $("#agent_constituency").val().split("~");
        var agent_constituency = agent_con[0];

        function redirect_page() {
            window.location.href = "{{ url('add-agent') }}";
        }

        $.ajax({
            type: "POST",
            url: "create-agent-api",
            datatype: "application/json",
            data: {
                Id: national_id,
                PhoneNumber1: telephone_1,
                PhoneNumber2: telephone_2,
                PhoneNumber3: null,
                Fname: first_name,
                MiddleName: middile_name,
                SurName: surname,
                DOB: dob,
                Picture: id_image,
                Region: agent_region,
                Constituency: agent_constituency,
                ElectoralArea: agent_electoral_area,
                EducationalLevel: education_level,
                Institution: insititution_name,
                YearOfCompletion: year_completion,
                Gender: gender,
            },
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                console.log(response);

                if (response.status == "ok") {
                    Swal.fire(response.message, "", "success");
                    redirect_page();
                } else {
                    toaster(response.message, "error", 10000);
                }
            },
        });
    });
});
