$(document).ready(function() {
    // Efecto de Transicion navbar
    $(window).scroll(function() {
      // 
      if($(this).scrollTop() > 100) { 
          $('.kevtech-nav').addClass('bg-dark');
          $('.kevtech-nav').removeClass('bg-transparent');
          $('.kevtech-nav').removeClass('nav-big');
      } else {
          $('.kevtech-nav').removeClass('bg-dark');
          $('.kevtech-nav').addClass('bg-transparent');
          $('.kevtech-nav').addClass('nav-big');
        }
    });
    $('#top-scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});