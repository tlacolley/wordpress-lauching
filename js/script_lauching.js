$(document).ready(function(){
    var formMail = $('#formMail')

    formMail.submit(function(event){
        event.preventDefault();
        $.ajax({
            url : $(this).attr('action'),
            method : "post",
            data : $(this).serializeArray(),
            success : function(response){
                $('#exampleModal').modal('hide');
                $('#recipient-mail').val("");
                $('#recipient-name').val("");
                alert("thanks for inscription")
            },
        });
    });




});
