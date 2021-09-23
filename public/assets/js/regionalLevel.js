// $("#edit_spinner").hide();

function regional_constituencies() {
    // alert(UserRegion);
    // return false;
    $.ajax({
        type: "GET",
        url: "../regional-constituency/" + UserRegion,
        datatype: "application/json",
        success: function (response) {
            // console.log(response);

            let data = response.data;
            console.log(data);

            if (data.length > 0) {
                // $(".card").hide();
                // $(".card").attr("style", "display:none");

                $.each(data, function (index) {
                    let constituency_name = data[index].code;

                    $(".list_of_constituency").append(
                        `<div class="col-md-3 p-1">
                            <a href="{{ url('../../../constituency-polling-station/${constituency_name}') }}">
                                <div class="card text-xs-center"
                                    style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <h3 class="text-black text-center">${constituency_name}</h3>
                                        </blockquote>
                                    </div>
                                </div>
                            </a>
                        </div>`
                    );
                });
            }
        },
    });
}

$(document).ready(function () {
    setTimeout(function () {
        regional_constituencies();
    }, 1000);
});
