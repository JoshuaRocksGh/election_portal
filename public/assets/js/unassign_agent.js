//

function get_polling_station(constituency) {
    // alert(constituency);+
    // return false;
    $.ajax({
        type: "GET",
        url: "get-unassigned-polling-station-api?constituency=" + constituency,
        datatype: "application/json",
        success: function (response) {
            $(".agent_details").toggle("500");
            $(".assign_spinner").hide();

            // console.log("=========");
            // console.log(response);
            // console.log("=========");

            let data = response.data.unAssigned;
            let selectize = $("#agent_electoral_area").selectize()[0].selectize;
            // selectize.onDropdownOpen();

            $.each(data, function (index) {
                // console.log("Here!!!!!!!!!!!!");
                // console.log(data[index]);
                $("#agent_electoral_area").append(
                    selectize.addOption({
                        value: data[index].code + "~" + data[index].code,
                        text: data[index].name,
                    })
                );
            });
        },
    });
}

function polling_station_assignment(constituency) {
    $.ajax({
        type: "GET",
        url: "get-assigned-polling-stations-api?constituency=" + constituency,
        datatype: "application/json",
        success: function (response) {
            // console.log(response);

            if (response.status === "ok") {
                // console.log(response.data);
                // console.log("=======");
                // console.log(response.data.unAssigned);
                let assigned_polling_station = response.data.totalAssigned;
                let unassigned_polling_station = response.data.totalUnAssigned;
                let total_polling_stations = response.data.total;

                $(".assigned_polling_stations").text(assigned_polling_station);
                $(".total_polling_stations").text(total_polling_stations);

                $(".unassigned_polling_stations").text(
                    unassigned_polling_station
                );
            }
        },
    });
}

function get_agent_details(user_id) {
    $.ajax({
        type: "POST",
        url: "get-agent-details",
        datatype: "application/json",
        data: {
            phone_number: user_id,
        },
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            // console.log(response);

            if (response.status === "ok") {
                let data = response.data;
                // console.log(data[0].UserId);

                $(".agent_id").val(data[0].UserId);
                $(".agent_id").text(data[0].UserId);
                $(".agent_name").val(data[0].Fname + " " + data[0].SurName);
                $(".agent_name").text(data[0].Fname + " " + data[0].SurName);
                $(".agent_gender").val(data[0].Gender);
                $(".agent_gender").text(data[0].Gender);
                $(".agent_region").val(data[0].Region);
                $(".agent_region").text(data[0].Region);
                $(".agent_constituency").val(data[0].Constituency);
                $(".agent_constituency").text(data[0].Constituency);
                $(".agent_electoral_area").val(data[0].ElectoralArea);
                $(".agent_electoral_area").text(data[0].ElectoralArea);
            }
        },
    });
}

$(document).ready(function () {
    // $(function () {
    //     var $select = $("#agent_electoral_area").selectize({
    //         valueField: "Id",
    //         labelField: "Name",
    //         searchField: "Name",

    //         load: function (constituency, callback) {
    //             $.ajax({
    //                 url:
    //                     "get-unassigned-polling-station-api?constituency=" +
    //                     encodeURIComponent(constituency),
    //                 success: function (response) {
    //                     console.log(response);
    //                     $select.options = response;
    //                     callback(response);
    //                 },
    //             });
    //         },
    //     });

    //     var selectize = $select[0].selectize;
    // });

    setTimeout(function () {
        // alert(constituency);
        // alert(user_id);
        // get_all_polling_stations(constituency);
        get_agent_details(user_id);
        polling_station_assignment(constituency);
        get_polling_station(constituency);
        // agent_assignments(constituency);
        // agent_unassigned(constituency);
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

    $("#unassign_agent_button").click(function (e) {
        e.preventDefault();
        $(".confirm_text").hide();
        $(".spinner-text").show();
        var polling_station = $(".agent_electoral_area").val();
        var userID = $(".agent_id").val();
        var assign = $(".assign").text();
        var user_constituency = $("#user_constituency").val();
        // console.log(user_constituency);
        // alert(polling_station);
        // return false;

        function redirect_page() {
            window.location.href = "../constituency/" + user_constituency;
        }
        $.ajax({
            type: "POST",
            url: "unassign-agent-api",
            datatype: "application/json",
            data: {
                pollingID: polling_station,
                userID: userID,
                assign: assign,
            },
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                // console.log(response);
                $(".confirm_text").show();
                $(".spinner-text").hide();
                if (response.status === "ok") {
                    Swal.fire(response.message, "", "success");
                    setTimeout(() => {
                        redirect_page();
                        // return back();
                    }, 2000);
                } else {
                    $(".confirm_text").show();
                    $(".spinner-text").hide();
                    toaster(response.message, "error", 10000);
                    setTimeout(() => {
                        // redirect_page();
                        // return back();
                    }, 2000);
                }
            },
        });
    });
});
