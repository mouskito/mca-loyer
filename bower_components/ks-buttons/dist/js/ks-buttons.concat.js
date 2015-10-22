/*!
 * ks-buttons - v0.0.1 - 2015-03-11
 * https://github.com/ks-frontend/ks-buttons
 * Copyright (c) 2015 
 * Licensed ISC
 */
// Buttons

// prevent default action on disabled btn elements
if(!$('.btn-disable').attr('disabled') || 
    typeof $('.btn-disable').attr('disabled') == typeof undefined)
{
    $('.btn-disable').attr('disabled', true);

    $('.btn-disable').click(function(e) {
        e.preventDefault();
    });
}