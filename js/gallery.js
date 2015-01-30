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
    var events = {imgs: ['1.JPG', '2.JPG', '3.JPG', '4.JPG', '5.JPG', '6.JPG'],
        string: "Jantar temático de aniversário", img_path: 'img/events/',
        id_cat: 'events-gallery', title: "Jantar temático de aniversário"};
/*    var boat = {imgs: ['aluguer-barco-iate-lisboa-festas.jpg', 'aluguer-barco-iate-portugal.jpg',
        'aluguer-barco-iate-lisboa.jpg', 'aluguer-barco-iate-cascais.jpg',
        'P1000570.jpg', 'P1000572.jpg', 'P1000581.jpg', 'P1000579.jpg'],*/
    var boat = {imgs: ['aluguer-barco-iate-lisboa-festas2.jpg', 'aluguer-barco-iate-portugal2.jpg',
        'aluguer-barco-iate-lisboa2.jpg', 'aluguer-barco-iate-cascais2.jpg',
        'P1000570.jpg', 'P1000572.jpg', 'P1000581.jpg', 'P1000579.jpg'],
        string: "Barco", img_path: 'img/boat/',
        id_cat: 'boat-gallery', title: undefined};
    var category;
    var categories=[boat, events];
    /*var categories=[events];*/
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
