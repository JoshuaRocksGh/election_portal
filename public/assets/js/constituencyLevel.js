function get_all_polling_stations(constituency) {
    // alert(constituency);
    // return false;
    $.ajax({
        type: "GET",
        url: "../get-polling-station-api?constituency=" + constituency,
        datatype: "application/json",
        success: function (response) {
            // console.log(response);

            if (response.status === "ok") {
                // console.log(response.data);
                // let total_polling_stations = response.data.length;
                // console.log(total_polling_stations);
                // $(".total_polling_stations").text(total_polling_stations);
            }
        },
    });
}

function polling_station_assignment(constituency) {
    $.ajax({
        type: "GET",
        url:
            "../get-assigned-polling-stations-api?constituency=" + constituency,
        datatype: "application/json",
        success: function (response) {
            // console.log(response);

            if (response.status === "ok") {
                console.log(response.data);
                console.log("=======");
                console.log(response.data.unAssigned);
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

function agent_assignments(constituency) {
    var table = $(".assigned_agent_list").DataTable();
    // var table = $(".unassigned_agent_list").DataTable();
    var nodes = table.rows().nodes();
    $.ajax({
        type: "GET",
        url: "../get-agents-assignments-api?constituency=" + constituency,
        datatype: "application/json",
        success: function (response) {
            console.log(response);

            let data = response.data.assigned;
            // let data_ = response.data.totalUnAssigned;
            // console.log(data);

            if (response.status === "ok") {
                var count = 1;

                $.each(data, function (index) {
                    console.log(data[index]);
                    var polling_station_name = data[index].ElectoralArea;
                    // count++;
                    table.row
                        .add([
                            count++,
                            data[index].Fname + " " + data[index].SurName,
                            data[index].Region,
                            data[index].Constituency,
                            data[index].ElectoralArea,
                            data[index].UserId,
                            `
                            <a class="btn btn-info" href='../unassign-agent?electoral_area=${data[index].ElectoralArea}&user_id=${data[index].UserId}' data-value=${data[index].ElectoralArea}>UnAssign</a>
                            `,
                        ])
                        .draw(false);

                    $(".agent_id").val(data[index].UserId);
                    $(".agent_id").text(data[index].UserId);
                    $(".agent_name").val(
                        data[index].Fname + " " + data[index].SurName
                    );
                    $(".agent_name").text(
                        data[index].Fname + " " + data[index].SurName
                    );
                    $(".agent_gender").val(data[index].Gender);
                    $(".agent_gender").text(data[index].Gender);
                    $(".agent_region").val(data[index].Region);
                    $(".agent_region").text(data[index].Region);
                    $(".agent_constituency").val(data[index].Constituency);
                    $(".agent_constituency").text(data[index].Constituency);
                    $(".agent_electoral_area").val(data[index].ElectoralArea);
                    $(".agent_electoral_area").text(data[index].ElectoralArea);
                });
            }
        },
    });
}

function agent_unassigned(constituency) {
    var table = $(".unassigned_agent_list").DataTable();
    var nodes = table.rows().nodes();

    $.ajax({
        type: "GET",
        url: "../get-agents-assignments-api?constituency=" + constituency,
        datatype: "application/json",
        success: function (response) {
            // console.log(response);

            let data = response.data.totalUnAssigned;
            // let data_ = response.data.totalUnAssigned;
            // console.log(data);

            if (response.status === "ok") {
                var count = 1;

                $.each(data, function (index) {
                    console.log(data[index]);
                    // count++;
                    table.row
                        .add([
                            count++,
                            data[index].Fname + " " + data[index].SurName,
                            data[index].Region,
                            data[index].Constituency,
                            data[index].ElectoralArea,
                            data[index].UserId,
                        ])
                        .draw(false);
                });
            }
        },
    });
}
function confirm_unassignment() {
    // alert("delete function called");
    Swal.fire({
        title: "Do you want to Unassign Agent?",
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: `Proceed`,
        confirmButtonColor: "#18c40d",
        cancelButtonColor: "#df1919",
        //  denyButtonText: `Don't save`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            var electoral_id = $(".unassign_btn").attr("data-value");
            alert(electoral_id);
            // confirm_deletion();
        } else if (result.isDenied) {
            Swal.fire("Failed to UnAssign Agent", "", "info");
        }
    });
}

function doSomething() {
    // alert("Click event is triggered on the link.");
    // var bene_ID = $(".delete_beneficiary_data").attr("data-value")
    confirm_unassignment();
}

$(document).ready(function () {
    setTimeout(function () {
        // alert(constituency);
        get_all_polling_stations(constituency);
        polling_station_assignment(constituency);
        agent_assignments(constituency);
        agent_unassigned(constituency);
    }, 1000);

    $(".assigned_agent_list").DataTable();

    $(".unassign_btn").click(function () {
        // e.preventDefault();
        alert("clicked");
        return false;
        var id = $(this).attr("data-value");
        console.log(id);
    });

    $("#unassign_agent_button").click(function (e) {
        e.preventDefault();
        var polling_station = $(".agent_electoral_area").val();
        var userID = $(".agent_id").val();

        // alert(polling_station);
        $.ajax({
            type: "Post",
            url: "../unassign-agent-api",
            datatype: "application/json",
            data: {
                pollingID: polling_station,
                userID: userID,
            },
            success: function (response) {
                // console.log(response);
            },
        });
    });

    $("button").click(function () {
        $("a")[0].click();
    });
});
