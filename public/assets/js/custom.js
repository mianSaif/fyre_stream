$("#sign_up").on("click", function (){
    $(".x-hidden").show();
    let first_name = $("input[name='first_name']").val();
    let last_name = $("input[name='last_name']").val();
    let username = $("input[name='username']").val();
    let email = $("input[name='email']").val();
    let password = $("input[name='password']").val();
    let gender = $("#gender").val();
    let privacy_agree = $("input[name='privacy_agree']").val();
    if (first_name != '' && last_name != '' && username != '' && email != '' && password != '' && gender != 'none' && privacy_agree != '') {
        $.ajax({
            type: "GET",
            url: "register_data",
            data: {
                        first_name : first_name,
                        last_name : last_name,
                        username : username,
                        email : email,
                        password : password,
                        gender : gender,
                        privacy_agree : privacy_agree,
            },
            success: function (response) {
                if (response.status == false) {
                    $(".error_msg").html(response.msg);
                    $(".error_msg").show();
                }
                else
                {
                     window.location.href = "started";
                }
            }
        })
    }
    else
    {
        alert("All fields are Required");
    }

});
