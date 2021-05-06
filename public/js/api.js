function shortUrl() {
        $.ajax({
        method: "POST",
        url: "/api/short/",
        data: {
            url: $("#url").val()
        },
        success: function (data) {
            serv = JSON.parse(data);
            $("#url").val(serv.link);
        },
        error: function (error) {            
            $("#url").val("Não foi possivel gerar o link");
        }
    });
}

function getLinks() {

    console.log("passei por aqui!");
    //link = $("#url").val();
    link = 
       "https://stackoverflow.com/questions/61550730/laravel-7-http-client-unable-to-send-post-request-with-body"
    ;
        $.ajax({
        type: "GET",
        url: "/api/links/",
        context: this,
        success: function (data) {
            console.log(data);
            serv = JSON.parse(data);
            console.log(serv);
            console.log("Editado com sucesso!");
            console.log(serv);
            $("#url").val("DEU CERTO");
            alert("OK");
        },
        error: function (error) {
            
            console.log(error);
        }
    });

}