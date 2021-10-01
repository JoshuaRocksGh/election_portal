// $("#edit_spinner").hide();

function regional_constituencies(UserRegion) {
    // alert(UserRegion);
    // return false;
    // if (Mandate == "NationalLevel") {
    //     alert("Right");
    //     var url = "../regional-constituency/" + UserRegion;
    // } else if (Mandate != "NationalLevel") {
    //     var url = "../regional-constituency/" + UserRegion;
    // } else {
    //     return;
    // }

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

                    
                });
            }
        },
    });
}

$(document).ready(function () {
    setTimeout(function () {
        regional_constituencies(UserRegion);
    }, 1000);
});
