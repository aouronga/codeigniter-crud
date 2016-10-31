/**
 * Created by abir on 10/30/16.
 */

$(".edit").click(function() {
    $('#userform').attr('action', 'update');
    var id = $(this).data('id');
    $('#userform input[name="id"]').val(id);
    var fname = $(this).closest("tr").find(".fname").text();
    $('#userform input[name="fname"]').val(fname);
    var lname = $(this).closest("tr").find(".lname").text();
    $('#userform input[name="lname"]').val(lname);
    var mobile = $(this).closest("tr").find(".mobile").text();
    $('#userform input[name="mobile"]').val(mobile);
    $('#userform input[type="submit"]').val("Update");
});

$(document).ready(function () {
    if($('#flash_msg').length){
        setTimeout(function () {
            $('#flash_msg').remove();
        }, 2000);
    }
});