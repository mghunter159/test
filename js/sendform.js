
$(document).ready(function() {

    $('#btn').click(function() {
    
    if(document.getElementById("name").value == '' || document.getElementById("email").value == '' || document.getElementById("comment").value == '') {
    
    $('#ModalReq').show(0).delay(3500).hide(0);
    throw "stop";

    }
        $.ajax({
            url: "function/sendform.php",
            type: "POST",
            cashe: false,
            data: {
                name: $('#name').val(),
                email: $('#email').val(),
                comment: $('#comment').val()
            },
            success: function(data) {
                $('#name').val('');
                $('#email').val('');
                $('#comment').val('');
                $('#ModalSucc').show(0).delay(3500).hide(0);
                throw "stop";
            },
            error: function(data) {
                $('#ModalErr').show(0).delay(3500).hide(0);
                throw "stop";
            }

        });

    });

});


