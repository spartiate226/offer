$(function(){

    var menu=$('#menu');
var page=$(document);
page.scroll(function(e){
if(window.scrollY!=0){
menu.css({position:"fixed",top:0,background:'green'});
}else{
    menu.css({position:"static",background: 'rgba(0, 0, 0, 0.3)'});
}
});


});
