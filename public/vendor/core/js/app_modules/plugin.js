!function(t){var n={};function e(o){if(n[o])return n[o].exports;var r=n[o]={i:o,l:!1,exports:{}};return t[o].call(r.exports,r,r.exports,e),r.l=!0,r.exports}e.m=t,e.c=n,e.d=function(t,n,o){e.o(t,n)||Object.defineProperty(t,n,{configurable:!1,enumerable:!0,get:o})},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},e.p="",e(e.s=26)}({26:function(t,n,e){t.exports=e(27)},27:function(t,n){$(document).ready(function(){$("#plugin-list").on("click",".btn-trigger-change-status",function(t){t.preventDefault();var n=$(this);n.addClass("button-loading"),$.ajax({url:Botble.routes.change_plugin_status+"?alias="+n.data("plugin"),type:"GET",success:function(t){t.error?Botble.showNotice("error",t.message):(Botble.showNotice("success",t.message),$("#plugin-list #app-"+n.data("plugin")).load(window.location.href+" #plugin-list #app-"+n.data("plugin")+" > *"),window.location.reload()),n.removeClass("button-loading")},error:function(t){Botble.handleError(t),n.removeClass("button-loading")}})})})}});