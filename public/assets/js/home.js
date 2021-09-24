function all_users() {
    // var table = $(".all_agent_list").DataTable();
    // var nodes = table.rows().nodes();

    $.ajax({
        type: "GET",
        url: "get-all-users-api",
        datatype: "application/json",
        success: function (response) {
            console.log(response.data);
            let data = response.data;

            var ahafo = 0;
            var ashanti = 0;
            var bono = 0;
            var bono_east = 0;
            var central = 0;
            var eastern = 0;
            var greater_accra = 0;
            var north_east = 0;
            var northern = 0;
            var oti = 0;
            var savannah = 0;
            var upper_east = 0;
            var upper_west = 0;
            var volta = 0;
            var western = 0;

            $.each(data, function (index) {
                if (data[index].Region === "AHAFO") {
                    ahafo++;
                } else if (data[index].Region === "ASHANTI") {
                    ashanti++;
                } else if (data[index].Region === "BONO") {
                    bono++;
                } else if (data[index].Region === "BONO EAST") {
                    bono_east++;
                } else if (data[index].Region === "CENTRAL") {
                    central++;
                } else if (data[index].Region === "EASTERN") {
                    eastern++;
                } else if (data[index].Region === "GREATER ACCRA") {
                    greater_accra++;
                    $(".greater_accra_agents").text(greater_accra);
                } else if (data[index].Region === "NORTH EAST") {
                    north_east++;
                } else if (data[index].Region === "NORTHERN") {
                    northern++;
                } else if (data[index].Region === "OTI") {
                    oti++;
                } else if (data[index].Region === "SAVANNAH") {
                    savannah++;
                } else if (data[index].Region === "UPPER EAST") {
                    upper_east++;
                } else if (data[index].Region === "UPPER WEST") {
                    upper_west++;
                } else if (data[index].Region === "VOLTA") {
                    volta++;
                } else if (data[index].Region === "WESTERN") {
                    western++;
                } else {
                    return false;
                }

                //     // let regions = data[index].Region;
                //     // console.log(regions);
                // });

                console.log(greater_accra);
                // console.log(ashanti);
            });
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                all_users();
            }, $.ajaxSetup().retryAfter);
        },
    });
}

$(document).ready(function () {
    setTimeout(function () {
        // alert("Winner");
        all_users();
    }, 200);
});
