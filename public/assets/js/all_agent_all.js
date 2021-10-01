function get_all_agents() {
    console.log(AgentDetails);
    // return false;
    var table = $(".all_agent_list").DataTable();
    var nodes = table.rows().nodes();
    let data = AgentDetails;
    $.each(data, function (index) {
        console.log(data[index]);

        // table.row
        //     .add([
        //         `<td style="width: 36px;">
        //                                                 <img src=${data[index].Picture} alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
        //                                             </td>`,
        //         data[index].Fname + " " + data[index].SurName,
        //         data[index].Region,
        //         data[index].Constituency,
        //         data[index].ElectoralArea,
        //         data[index].Gender,
        //     ])
        //     .draw(false);
    });
}

$(document).ready(function () {
    setTimeout(function () {
        get_all_agents();
    }, 200);
});
