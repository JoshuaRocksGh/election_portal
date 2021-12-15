function numberWithCommas(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}

function get_all_regional_list() {
    var table = $(".all_regional_heads_list").DataTable();

    var nodes = table.rows().nodes();

    $.ajax({
        type: "GET",
        url: "get-all-regional-heads-list",
        datatype: "application/json",
        success: function (response) {
            // console.log("regional list=>", response);

            let data = response.data;

            let count = 1;

            if (response.status === "ok") {
                $.each(data, function (index) {
                    console.log("regional list=>", data[index]);

                    var image = data[index].Picture;
                    var name = data[index].Fname + " " + data[index].SurName;
                    var image_name =
                        `<span style="width: 36px;">
                                                        <img src=${data[index].Picture} alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                    </span>` +
                        " " +
                        " " +
                        name;
                    let button = table.row
                        .add([
                            `<b class="h5">${count++}</b>`,
                            `<b class="h5">${image_name}</b>`,
                            `<b class="h5">${data[index].PhoneNumber}</b>`,
                            `<b class="h5">${data[index].Username}</b>`,
                            `<b class="h5">${data[index].Region}</b>`,
                            `<button class="btn  btn-blue waves-effect all_regional_list_action"  data-toggle="modal" data-target="#bs-example-modal-lg" >More Actions</button>`,
                        ])
                        .draw(false);

                    $(".user_buttons").append(
                        `
                                    <div class="col-md-4">
                                            <a href="#" type="button"
                                                class="btn btn-outline-warning btn-rounded waves-effect waves-light mb-1"><b>Reset
                                                Password</b></a>
                                        </div>

                                        <div class="col-md-4 text-center">
                                            <a href="#" type="button"
                                                class="btn btn-outline-info btn-rounded waves-effect waves-light mb-1"><b>Forgot
                                                Password</b></a>
                                        </div>

                                        <div class="col-md-4">
                                            <a href="delete-regional-user?userId=${data[index].Username}" type="button"
                                               class="btn btn-outline-pink btn-rounded waves-effect waves-light mb-1 float-right"><b>Delete
                                                User</b></a>
                                        </div>
                            `
                    );
                    $(".user_image_id").append(
                        `
                            <img src=${image} alt="image"
                                        class="img-fluid avatar-xxl rounded-circle" />
                        `
                    );

                    $(".users_name").text(name);
                    $(".user_telephone").text(data[index].PhoneNumber);
                    $(".user_mandate").text(data[index].UserMandate);
                    $(".user_region").text(data[index].Region);
                    $(".user_id").text(data[index].Username);
                });
            }
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                get_all_regional_list();
            }, $.ajaxSetup().retryAfter);
        },
    });
}

setTimeout(() => {
    get_all_regional_list();
}, 500);

$(document).ready(function () {
    // document.addEventListener("touchstart", handler, { passive: true });

    $(".all_regional_list_action").click(() => {
        var data_toggle = $("button").attr("data-toggle");
        console.log(data_toggle);
    });
});
