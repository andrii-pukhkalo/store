const $ = require('jquery');

// var $ = require('jquery');
// window.$ = $;
// window.jQuery = $;
global.$ = global.jQuery = $;

console.log($('body'));
