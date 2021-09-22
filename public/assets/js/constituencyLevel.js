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

                let total_polling_stations = response.data.length;
                console.log(total_polling_stations);

                $(".total_polling_stations").text(total_polling_stations);
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
                console.log(response.data.totalAssigned);
                let assigned_polling_station = response.data.totalAssigned;
                let unassigned_polling_station = response.data.totalUnAssigned;

                $(".assigned_polling_stations").text(assigned_polling_station);

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
            // console.log(data_);

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
                            <a class="btn btn-info" href=""><span class="text-white">UnAssign</span></a>
                            `,
                        ])
                        .draw(false);
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
            console.log(response);

            let data = response.data.totalUnAssigned;
            // let data_ = response.data.totalUnAssigned;
            // console.log(data_);

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

$(document).ready(function () {
    setTimeout(function () {
        // alert(constituency);
        get_all_polling_stations(constituency);
        polling_station_assignment(constituency);
        agent_assignments(constituency);
        agent_unassigned(constituency);
    }, 1000);

    $(".assigned_agent_list").DataTable();
});
