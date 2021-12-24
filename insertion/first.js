$(function() {
    'use strict';

$('[placeholder]').focus(function (){
    $(this).attr('data-text', $(this).attr(placeholder));
    $(this).attr('placeholder','');
}).blue(function (){
    $(this).attr('placeholder',$(this).attr('data-text'));
});
});
