function get_all_agents() {
    var table = $(".all_agent_list").DataTable();
    var nodes = table.rows().nodes();
    $.ajax({
        tpye: "GET",
        url: "all-agents-list-api",
        datatype: "application/json",
        success: function (response) {
            // console.log(response);

            let data = response.data;
            $.each(data, function (index) {
                console.log(data[index]);

                table.row
                    .draw([
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
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                get_all_agents();
            }, $.ajaxSetup().retryAfter);
        },
    });
}

$(document).ready(function () {
    setTimeout(function () {
        get_all_agents();
    }, 200);
});
