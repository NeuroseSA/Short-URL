function createShortLink2() {
    fetch('https://kutt.it/api/v2/links', {
        method: 'POST',
        mode: 'no-cors',
        body: JSON.stringify({
            target: 'https://www.youtube.com/watch?v=vRI4xEG6FmM&ab_channel=TekZoom-ReinaldoSilotto',
            description: 'Video',
            expire_in: '2 hours',
            password: 'string',
            customurl: 'MeuNovoLinkParaVideo2',
            reuse: false,
            domain: ""
        }),
        headers: {
            'Content-Type': 'application/json',
            'X-API-KEY': 'R~f_LzhsdaeyehqduCutSRsm0Owdh8UAECHj_l81'
        }
    })
        .then(function (data) {
            console.log(data);
            return data.json()
        })
        .then(function (novoTweet) {
            console.log(novoTweet)
        })
}

function createShortLink(){
    let request = new XMLHttpRequest();

    const dadosForm = {
        target: "https://www.youtube.com/watch?v=vRI4xEG6FmM&ab_channel=TekZoom-ReinaldoSilotto",
        description: "Video",
        expire_in: "2 hours",
        password: "string",
        customurl: "MeuNovoLinkParaVideo2",
        reuse: false,
        domain: ""
    }
    
    request.open("POST", "https://kutt.it/api/v2/links");
    request.setRequestHeader("Content-Type", "application/json");
    request.setRequestHeader("X-API-KEY", "R~f_LzhsdaeyehqduCutSRsm0Owdh8UAECHj_l81");
    request.
    request.send(JSON.stringify(dadosForm));
    return request.responseText;
}

function createShortLink21() {
    const dadosForm = {
        target: "https://www.youtube.com/watch?v=vRI4xEG6FmM&ab_channel=TekZoom-ReinaldoSilotto",
        description: "Video",
        expire_in: "2 hours",
        password: "string",
        customurl: "MeuNovoLinkParaVideo2",
        reuse: false,
        domain: ""
    }
    $.ajax({
        type: "POST",
        url: "https://kutt.it/api/v2/links",
        contentType: 'application/json',
        mode: "no-cors",

        dataType : 'json',
        body: JSON.stringify(
            dadosForm
        ),
        headers: {
           // "Content-Type": "application/json",
            "X-API-KEY": "R~f_LzhsdaeyehqduCutSRsm0Owdh8UAECHj_l81"
        },
        success: function (data) {
            console.log("sucesso!");
            console.log(data);
        },
        error: function (error) {
            console.log(error);
        }
    });
}