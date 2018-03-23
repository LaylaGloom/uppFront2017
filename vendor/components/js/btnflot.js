$(document).ready(function() {
//a.indice o .indice a
  $('a.btnfloat').click(function(e){

      e.preventDefault();

      $('body, html').animate({
			     scrollTop: '120px'
		  }, 5000);

      $(window).scroll(function(){
		      if( $(this).scrollTop() > 0 )
          {
            $('.ir-arriba').slideDown(300);
		      }
          else
          {
            $('.ir-arriba').slideUp(300);
		      }
	    });

  });

});
