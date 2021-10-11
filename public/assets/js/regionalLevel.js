// $("#edit_spinner").hide();

function regional_constituencies_assigmnet(UserRegion) {
    // alert(UserRegion);
    // return false;
    if (UserRegion.indexOf("_") >= 0) {
        // alert("contains underscore");
        var request = UserRegion;
        UserRegion_ = request.replace("_", " ");
        // Constituency_ = request.replace(/ /g, " ");
        // alert(Constituency_);
    } else {
        UserRegion_ = UserRegion;
    }
    // alert(UserRegion_);
    // return false;
    var table = $(".all_constituency_list").DataTable();
    var unassigned = $(".unassigned_constituency_list").DataTable();
    var nodes = table.rows().nodes();
    $.ajax({
        type: "GET",
        url: "../regional-constituency/" + UserRegion_,
        datatype: "application/json",
        success: function (response) {
            // console.log(response);
            // return false;

            if (response.status === "ok") {
                $(".spinner-border").hide();
                $(".regional_assigment").show();

                // console.log(response.data);
                // console.log("=======");

                // return false;
                let total_constituencies = response.total;
                let assigned_constituencies = response.totalAssigned;
                let unassigned_contituencies = response.totalUnAssigned;

                $(".total_constituencies").text(total_constituencies);
                $(".assigned_constituencies").text(assigned_constituencies);
                $(".unassigned_constituencies").text(unassigned_contituencies);

                //Assigned Constituencies
                var count = 1;
                let data = response.data;
                $.each(data, function (index) {
                    // console.log(data[index]);
                    // return false;
                    var constituencyName_ = data[index].ConstituencyCode;
                    if (constituencyName_.indexOf(" ") >= 0) {
                        // alert("contains spaces");
                        var constituencyName = constituencyName_.replace(
                            / /g,
                            "_"
                        );
                    } else {
                        var constituencyName = constituencyName_;
                    }
                    // return false;
                    table.row
                        .add([
                            count++,
                            data[index].ConstituencyCode,
                            data[index].total,
                            data[index].assigned,
                            data[index].unAssigned,
                            `
                            <a class="btn btn-success" href="../constituency/${constituencyName}">View Details</a>
                            `,
                        ])
                        .draw(false);
                });

                //Unassigned Constituency

                let unassigned_constituency = response.data.unAssigned;
                var count_ = 1;
                $.each(unassigned_constituency, function (index) {
                    console.log(unassigned_constituency[index]);

                    unassigned.row
                        .add([
                            count_++,
                            unassigned_constituency[index].name,
                            `
                            <a class="btn btn-info text-white"> Assign</a>
                            `,
                        ])
                        .draw(false);
                });
            } else {
                $(".spinner-border").show();
            }
        },
    });
}

$(document).ready(function () {
    setTimeout(function () {
        // alert("Regional====== ");
        regional_constituencies_assigmnet(UserRegion);
    }, 1000);
});
