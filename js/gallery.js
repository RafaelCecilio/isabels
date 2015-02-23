/*
 * Bootstrap Image Gallery JS Demo 3.0.1
 * https://github.com/blueimp/Bootstrap-Image-Gallery
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

/*jslint unparam: true */
/*global blueimp, $ */

$(function () {
    'use strict';
    /*var events = {imgs: ['1.JPG', '2.JPG', '3.JPG', '4.JPG', '5.JPG', '6.JPG'],*/
    var language=document.documentElement.lang;
    var events = {imgs: ['1.JPG', '2.JPG', '3.JPG', '4.JPG', '5.JPG', '6.JPG'],
        string: {pt: "Jantar temático de aniversário", en: "Thematic birthday dinner"}, img_path: 'img/events/',
        id_cat: 'events-gallery', title: {pt: "Jantar temático de aniversário", en: "Thematic birthday dinner"}};

    var boat = {imgs: ['aluguer-barco-iate-lisboa-festas2.jpg', 'aluguer-barco-iate-portugal2.jpg',
        'aluguer-barco-iate-lisboa2.jpg', 'aluguer-barco-iate-cascais2.jpg',
        'P1000570.jpg', 'P1000572.jpg', 'P1000581.jpg', 'P1000579.jpg'],
        string: {pt: "O barco", en: "The boat"}, img_path: 'img/boat/',
        id_cat: 'boat-gallery', title: {pt: "O exterior", en: "The outside"}};

    var boat_int = {imgs: ['Fotografia0091.jpg', 'Fotografia0092.jpg', 'Fotografia0093.jpg',
        'Fotografia0096.jpg', 'Fotografia0098.jpg', 'Fotografia0099.jpg',
        'Fotografia0100.jpg', 'Fotografia0101.jpg'],
        string: {pt: "O interior do barco", en: "The interior of the boat"}, img_path: 'img/boat/interior/',
        id_cat: 'boat-int-gallery', title: {pt: "O interior", en: "The interior"}};
    var category;
    var categories=[boat, events,boat_int];
    /*var categories=[events];*/
    for(var i=0; i<categories.length; i++){
        category = categories[i];
        var linksContainer = $('#'+category.id_cat);
        if(category.title != undefined){
            $('<h3>')
                .prop('class', 'section-subheading text-muted text-left')
                .text(category.title[language])
                .appendTo(linksContainer);            
        }
        var row;
        // Add the demo images as links with thumbnails to the page:
        $.each(category.imgs, function (index, photo) {
            /*
                    <div class="col-md-3 col-sm-6 portfolio-item">
                    <a href="img/events/1.JPG" title="Jantar temático de aniversário 1" data-gallery="#blueimp-gallery-fruits">
                        <img class="img-circle img-responsive" src="img/events/1.JPG" alt="Banana">
                    </a>
                    </div>
            */
            if(index%4 ===0){
                row=$('<div/>')
                    .prop('class', 'row')
                    .appendTo(linksContainer);
            }
            var baseUrl = category.img_path+photo;
            var this_str = category.string[language]+' '+(index+1);
            var img = $('<img>')
                .prop('class', 'img-circle img-responsive')
                .prop('src', baseUrl)
                .prop('alt', this_str);
            var anchor = $('<a/>')
                .append(img)
                .prop('href', baseUrl)
                .prop('title', this_str)
                .attr('data-gallery', '#blueimp-gallery-'+category.id_cat);
            $('<div/>')
                .append(anchor)
                .prop('class', 'col-md-3 col-sm-6 portfolio-item')
                .appendTo(row);
        });
    }
});


/*
$(function () {
    'use strict';
    var events = { string: "Jantar temático de aniversário", img_path: 'img/events/',
        id_cat: 'events-gallery', title: "Jantar temático de aniversário"};
    events['imgs']=[];
    events['imgs'].push({pic: '1.JPG', cap: 'str'});
    events['imgs'].push({pic: '2.JPG', cap: 'str'});
    events['imgs'].push({pic: '3.JPG', cap: 'str'});
    events['imgs'].push({pic: '4.JPG', cap: 'str'});
    events['imgs'].push({pic: '5.JPG', cap: 'str'});
    events['imgs'].push({pic: '6.JPG', cap: 'str'});

    var boat = { string: "Barco", img_path: 'img/boat/',
        id_cat: 'boat-gallery', title: "O exterior"};
    boat['imgs'].push({pic: 'aluguer-barco-iate-lisboa-festas2.jpg', cap: 'str'});
    boat['imgs'].push({pic: 'aluguer-barco-iate-portugal2.jpg', cap: 'str'});
    boat['imgs'].push({pic: 'aluguer-barco-iate-lisboa2.jpg', cap: 'str'});
    boat['imgs'].push({pic: 'aluguer-barco-iate-cascais2.jpg', cap: 'str'});
    boat['imgs'].push({pic: 'P1000570.jpg', cap: 'str'});
    boat['imgs'].push({pic: 'P1000572.jpg', cap: 'str'});
    boat['imgs'].push({pic: 'P1000581.jpg', cap: 'str'});
    boat['imgs'].push({pic: 'P1000579.jpg', cap: 'str'});
    
    var boat_int = { string: "O interior do barco", img_path: 'img/boat/interior/',
        id_cat: 'boat-int-gallery', title: "O interior"};
    boat_int['imgs'].push({pic: 'Fotografia0091.jpg', cap: 'str'});
    boat_int['imgs'].push({pic: 'Fotografia0092.jpg', cap: 'str'});
    boat_int['imgs'].push({pic: 'Fotografia0093.jpg', cap: 'str'});
    boat_int['imgs'].push({pic: 'Fotografia0096.jpg', cap: 'str'});
    boat_int['imgs'].push({pic: 'Fotografia0098.jpg', cap: 'str'});
    boat_int['imgs'].push({pic: 'Fotografia0099.jpg', cap: 'str'});
    boat_int['imgs'].push({pic: 'Fotografia0100.jpg', cap: 'str'});
    boat_int['imgs'].push({pic: 'Fotografia0101.jpg', cap: 'str'});
    var category;
    var categories=[boat, events,boat_int];
    for(var i=0; i<categories.length; i++){
        category = categories[i];
        var linksContainer = $('#'+category.id_cat);
        if(category.title != undefined){
            $('<h3>')
                .prop('class', 'section-subheading text-muted text-left')
                .text(category.title)
                .appendTo(linksContainer);            
        }
        var row;
        // Add the demo images as links with thumbnails to the page:
        $.each(category.imgs, function (index, photo) {
            if(index%4 ===0){
                row=$('<div/>')
                    .prop('class', 'row')
                    .appendTo(linksContainer);
            }
            var baseUrl = category.img_path+photo;
            var this_str = category.string+' '+(index+1);
            var img = $('<img>')
                .prop('class', 'img-circle img-responsive')
                .prop('src', baseUrl)
                .prop('alt', this_str);
            var anchor = $('<a/>')
                .append(img)
                .prop('href', baseUrl)
                .prop('title', this_str)
                .attr('data-gallery', '#blueimp-gallery-'+category.id_cat);
            $('<div/>')
                .append(anchor)
                .prop('class', 'col-md-3 col-sm-6 portfolio-item')
                .appendTo(row);
        });
    }
});
*/