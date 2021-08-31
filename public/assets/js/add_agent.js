// API CALLS

function get_regions() {
    $.ajax({
        type: "GET",
        url: "get-regions-api",
        datatype: "application/json",
        success: function (response) {
            // console.log(response);

            let data = response.data;
            console.log("===");
            console.log(data);

            $.each(data, function (index) {
                $("#agent_region").append(
                    $("<option>", {
                        value: data[index],
                    }).text(data[index])
                );
            });
        },
    });
}

function get_constituency() {
    $.ajax({
        type: "GET",
        url: "get-constituency-api",
        datatype: "application/json",
        success: function (response) {
            console.log(response);

            let data = response.data;

            $.each(data, function (index) {
                $("#agent_constituency").append(
                    $("<option>", {
                        value: data[index],
                    }).text(data[index])
                );
            });
        },
    });
}

$(document).ready(function () {
    setTimeout(function () {
        get_regions();
        get_constituency();
    }, 1000);

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

    $("#log_in").click(function (e) {
        e.preventDefault();
    });
});
