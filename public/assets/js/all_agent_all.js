function get_all_agents(my_mandate, my_region, my_constituency) {
    // console.log(AgentDetail);
    // alert(my_mandate);
    // return false;

    var table = $(".all_agent_list").DataTable();
    var nodes = table.rows().nodes();
    // let data = AgentDetail;
    $.ajax({
        type: "GET",
        url: "all-agents-list-api",
        datatype: "application/json",
        success: function (response) {
            console.log(response);
            // return false;
            if (response.status == "ok") {
                $("#agent_list_spinner").hide();
                $("#data_table_view").toggle("500");
                if (my_mandate == "NationalLevel") {
                    let data = response.data;

                    $.each(data, function (index) {
                        // console.log(data[index]);

                        table.row
                            .add([
                                `<td style="width: 36px;">
                                                        <img src=${data[index].Picture} alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                    </td>`,
                                data[index].Fname + " " + data[index].SurName,
                                data[index].Region,
                                data[index].Constituency,
                                data[index].ElectoralArea,
                                data[index].Gender,
                            ])
                            .draw(false);
                    });
                } else if (my_mandate == "RegionalLevel") {
                    let data = response.data;

                    $.each(data, function (index) {
                        // alert(my_region);
                        // return false;
                        if (data[index].Region == my_region) {
                            table.row
                                .add([
                                    `<td style="width: 36px;">
                                                        <img src=${data[index].Picture} alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                    </td>`,
                                    data[index].Fname +
                                        " " +
                                        data[index].SurName,
                                    data[index].Region,
                                    data[index].Constituency,
                                    data[index].ElectoralArea,
                                    data[index].Gender,
                                ])
                                .draw(false);
                        }
                    });
                } else if (my_mandate == "ConstituencyLevel") {
                    let data = response.data;

                    $.each(data, function (index) {
                        // console.log(data[index]);
                        if (data[index].Constituency == my_constituency) {
                            table.row
                                .add([
                                    `<td style="width: 36px;">
                                                        <img src=${data[index].Picture} alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                    </td>`,
                                    data[index].Fname +
                                        " " +
                                        data[index].SurName,
                                    data[index].Region,
                                    data[index].Constituency,
                                    data[index].ElectoralArea,
                                    data[index].Gender,
                                ])
                                .draw(false);
                        }
                    });
                } else {
                    return false;
                }
            } else {
                $("#agent_list_spinner").show();
                $("#data_table_view").hide();
            }
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                get_all_agents(my_mandate, my_region, my_constituency);
            }, $.ajaxSetup().retryAfter);
        },
    });
}

setTimeout(function () {
    // alert(my_mandate);
    // console.log(AgentDetail);
    get_all_agents(my_mandate, my_region, my_constituency);
}, 500);
