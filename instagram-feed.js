$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '1254026799',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '1254026799.1677ed0.600c90cab90645ebb4b55115ebe763d1',
        sortBy: 'most-recent',
        template: '<div class="col-lg-3 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});