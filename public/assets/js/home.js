// $(".region_data").hide();
$(".spinner-border ").show();

function all_users() {
    // var table = $(".all_agent_list").DataTable();
    // var nodes = table.rows().nodes();

    $.ajax({
        type: "GET",
        url: "get-all-users-api",
        datatype: "application/json",
        success: function (response) {
            $(".region_data").show();
            $(".spinner-border ").hide();
            console.log(response);
            console.log(response.data);

            if (response.status == "ok") {
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
                        $(".ahafo_agents").text(ahafo);
                    } else if (data[index].Region === "ASHANTI") {
                        ashanti++;
                        $(".ashanti_agents").text(ashanti);
                    } else if (data[index].Region === "BONO") {
                        bono++;
                        $(".bono_agents").text(bono);
                    } else if (data[index].Region === "BONO EAST") {
                        bono_east++;
                        $(".bono_east_agents").text(bono_east);
                    } else if (data[index].Region === "CENTRAL") {
                        central++;
                        $(".central_agents").text(central);
                    } else if (data[index].Region === "EASTERN") {
                        eastern++;
                        $(".eastern_agents").text(eastern);
                    } else if (data[index].Region === "GREATER ACCRA") {
                        greater_accra++;
                        $(".greater_accra_agents").text(greater_accra);
                    } else if (data[index].Region === "NORTH EAST") {
                        north_east++;
                        $(".north_east_agents").text(north_east);
                    } else if (data[index].Region === "NORTHERN") {
                        northern++;
                        $(".northern_agents").text(northern);
                    } else if (data[index].Region === "OTI") {
                        oti++;
                        $(".oti_agents").text(oti);
                    } else if (data[index].Region === "SAVANNAH") {
                        savannah++;
                        $(".savannah_agents").text(savannah);
                    } else if (data[index].Region === "UPPER EAST") {
                        upper_east++;
                        $(".upper_east_agents").text(upper_east);
                    } else if (data[index].Region === "UPPER WEST") {
                        upper_west++;
                        $(".upper_west_agents").text(upper_west);
                    } else if (data[index].Region === "VOLTA") {
                        volta++;
                        $(".volta_agents").text(volta);
                    } else if (data[index].Region === "WESTERN") {
                        western++;
                        $(".western_agents").text(western);
                    } else {
                        return false;
                    }

                    //     // let regions = data[index].Region;
                    //     // console.log(regions);
                    // });

                    console.log(greater_accra);
                    // console.log(ashanti);
                });
            } else {
                $(".spinner-border ").show();
            }
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
