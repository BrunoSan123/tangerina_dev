/* eslint-disable no-console */
/* eslint-disable eol-last */
/* eslint-disable no-undef */
/* eslint-disable semi */
/* eslint-disable comma-dangle */
/* eslint-disable key-spacing */
/* eslint-disable indent */
/* eslint-disable space-in-parens */
/* eslint-disable space-before-blocks */
/* eslint-disable linebreak-style */
jQuery(document).ready(function($){
    $('.tang_slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive:[
          {
            breakpoint:900,
            settings:{
              slidesToShow:1,
              slidesToScroll:1
            }
          }
        ]
      });
      console.log('hello')
})