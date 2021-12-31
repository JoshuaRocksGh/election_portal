// function
// alert("Welcome");

function get_regions() {
    $.ajax({
        type: "GET",
        url: "get-regions-api",
        datatype: "application/json",
        success: function (response) {
            // console.log(response);

            let data = response.data;

            $.each(data, function (index) {
                $(".user_region").append(
                    $("<option>", {
                        value: data[index],
                    }).text(data[index])
                );
                $("#chat_region").append(
                    $("<option>", {
                        value: data[index],
                    }).text(data[index])
                );
            });
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                get_regions();
            }, $.ajaxSetup().retryAfter);
        },
    });
}

function toaster(message, icon, timer) {
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: timer,
        timerProgressBar: false,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });

    Toast.fire({
        icon: icon,
        title: message,
    });
}

/*function getAllData(my_mandate, my_region) {
    db.collection("region")
        .get()
        .then((querySnapshot) => {
            var regions = [];
            querySnapshot.forEach((doc) => {
                regions.push(doc.data());
            });
            // console.log("querySnapshot =>", querySnapshot);
            if (my_mandate == "NationalLevel") {
                $.each(regions, function (index) {
                    // console.log(regions[index].name);
                    $(".");
                    console.log("for each region=>", regions);
                });
            } else {
                $.each(regions, function (index) {
                    // console.log("for each region=>", regions);

                    if (my_region == regions[index].name) {
                        console.log(regions[index].name);
                        $(".national_details").append(
                            `
                            <tr>

                                <td><b>${regions[index].name}</b></td>
                                <td><b></b></td>
                                <td>
                                    <button href="#" type="button" class="btn btn-soft-success btn-block waves-effect waves-light get_chats"
                                    region-name="${regions[index].name}">View Chats</button>
                                </td>
                            </tr>
                            `
                        );
                    }
                });

            }


        });

    db.collection("region")
        .doc("ASHANTI")
        .collection("chats")
        .get()
        .then((snapshots) => {
            // console.log(snapshots.docs)
            snapshots.docs.forEach((doc) => {
                var region_details = doc.data();

                // console.log("region_details=>", region_details);
            });
        });

    let editButtons = document.querySelectorAll(".get_chats");

    editButtons.forEach((button) => {
        button.addEventListener("click", (e) => {
            console.log("clicked");
            return false;
            const editButton = e.currentTarget;
            console.log(editButton);
            return false;
            const region_chats = data.find(
                (e) => e.regionName === $(editButton).attr("region-name")
            );
            console.log(region_chats);
        });
    });
} */

function updateScroll() {
    var element = document.getElementById("view_chats");
    element.scrollTop = element.scrollHeight;
}

$(document).ready(function () {
    get_regions();

    db.collection("region")
        .doc(my_region)
        .collection("chats")
        .orderBy("time", "asc")
        .onSnapshot((snapshots) => {
            // console.log(snapshots.docs)
            $("#view_chats").empty();

            snapshots.docs.forEach((doc) => {
                var chat_details = doc.data();
                // console.log("chat_details=>", chat_details);
                // console.log(userID);
                var user_image = "assets/images/agent-user.png";

                var date_time = chat_details.time.split("T");
                var date = date_time[0];
                var time_ = date_time[1].split(".");
                var chat_time = time_[0];
                // console.log(date);
                // console.log(chat_time);
                // $("#view_chats li").remove();

                if (chat_details.userId != userID) {
                    // console.log("chat_details=>", chat_details);

                    $("#view_chats").append(
                        `
                            <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="${user_image}"
                                                    class="rounded" alt="${chat_details.userName}" />
                                                <i>${chat_time}</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>${chat_details.userName}-${chat_details.userId}</i>
                                                    <p>
                                                        ${chat_details.text}
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                        `
                    );
                } else if (chat_details.userId == userID) {
                    // console.log(chat_details.);
                    $("#view_chats").append(
                        `
                            <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="${user_image}"
                                                    class="rounded" alt="${chat_details.userName}" />
                                                <i>${chat_time}</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>${chat_details.userName}</i>
                                                    <p>
                                                        ${chat_details.text}
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                        `
                    );
                } else {
                    return false;
                }
                // updateScroll();
                // setInterval(updateScroll, 1000);
            });
        });

    $(".send_notification").click(function (e) {
        e.preventDefault();
        console.log("submit");

        var user_region = $("#user_region").val();
        var message_title = $("#message_title").val();
        var send_message = $("#send_message").val();
        // console.log(user_region);
        // console.log(message_title);
        // console.log(send_message);

        // return false;
        if (
            user_region == "" ||
            user_region == null ||
            message_title == "" ||
            message_title == null ||
            send_message == "" ||
            send_message == null
        ) {
            toaster("Please Fill Required Fields", "error", 10000);
        } else {
            $.ajax({
                type: "POST",
                url: "send-notification-api",
                datatype: "application/json",
                data: {
                    title: message_title,
                    body: send_message,
                    region: user_region,
                },
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (response) {
                    console.log(response);

                    if (response.status == "ok") {
                        // Swal.fire(response.message, "", "success");
                        toaster(response.message, "success", 2000);

                        // location.reload();
                        // $(".send_message_text").show();
                        // $(".spinner-text").hide();
                    } else {
                        toaster(response.message, "error", 10000);
                        // $(".send_message_text").show();
                        // $(".spinner-text").hide();
                    }
                },
            });
            // return false;
        }
    });
});
