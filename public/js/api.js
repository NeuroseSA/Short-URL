$(function(){

    $('form[name="formShortUrl"]').submit(function(event){
        event.preventDefault();
        $.ajax({
            url: "/api/short/",
            type: "post",
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response){
                if(response.link){    
                    $("#url").val(response.link);
                    $('.messageBox').removeClass('d-none').addClass('alert-success').html('<b>Link encurtado com sucesso!</b>');
                }else{
                    $('.messageBox').removeClass('d-none').addClass('alert-danger').html('<b>Não foi possível gerar o link</b>');
                }              
            }
        });
    });

});
