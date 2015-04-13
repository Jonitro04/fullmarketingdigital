$(function(){
  SyntaxHighlighter.all();
});
$(window).load(function(){
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 2000,
    itemMargin: 5,
    pausePlay: true,
    start: function(slider){
      $('body').removeClass('loading');
    }
  });
});