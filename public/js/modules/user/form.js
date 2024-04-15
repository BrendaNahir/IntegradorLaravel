$(document).ready(function(){
    //debugger

});

function validateForm() {
    var flag = true;

    if ($('#name').val() == "")
        flag = chekedInputOrFields("name");

    if ($('#first_name').val() == "")
        flag = chekedInputOrFields("first_name");

    if ($('#last_name').val() == "")
        flag = chekedInputOrFields("last_name");

    if ($('#email').val() != "")
        flag = validateEmail(email);

    if ($('#email').val() == "")
        flag = chekedInputOrFields("email");

    if ($('#password').val() == "")
        flag = chekedInputOrFields("password");

    if ($('#username').val() == "")
        flag = chekedInputOrFields("username");

    if ($('#role').val() == null)
        flag = chekedInputOrFields("role");

    const avatar = $('#avatar').files[0]

    debugger

    if ($('#dni').val() == "")
        flag = chekedInputOrFields("dni");

    if ($('#address').val() == "")
        flag = chekedInputOrFields("address");

    if ($('#mobile').val() == "")
        flag = chekedInputOrFields("mobile");

    if ($('#date_of_birth').val() == "")
        flag = chekedInputOrFields("date_of_birth");

    if ($('#mobile').val() == "")
        flag = chekedInputOrFields("mobile");


    //return flag;
}


function chekedInputOrFields(classOrIdJquery) {
    $(`#${classOrIdJquery}`).attr('required', true);
    $(`.${classOrIdJquery}`).css('color', 'red');
    return false;
}
function validateEmail(email) {
    var mailformat = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,6}$/;
    if (!email.match(mailformat)) {
        chekedInputOrFields("email");
    }
}
