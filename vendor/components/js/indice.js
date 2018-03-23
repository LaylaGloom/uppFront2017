$(document).ready(function() {
//a.indice o .indice a
  $('a.indice').click(function(e){

      e.preventDefault();
      var strAncla = $(this).attr('href');

      $('body,html').stop(true,true).animate({

        scrollTop: $(strAncla).offset().top

      },5000,'swing');

  });

});
