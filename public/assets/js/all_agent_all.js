function get_all_agents(AgentDetail) {
    console.log(AgentDetail);
    // alert("called");
    // return false;

    var table = $(".all_agent_list").DataTable();
    var nodes = table.rows().nodes();
    let data = AgentDetail;
    // return false;
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
}

setTimeout(function () {
    // alert("Welcome");
    get_all_agents(AgentDetail);
}, 500);
