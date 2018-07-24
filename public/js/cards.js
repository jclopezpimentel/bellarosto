$(document).ready(function(){

  var zindex = 10;
  
  $("div.card").click(function(e){
    e.preventDefault();

    var isShowing = false;

    if ($(this).hasClass("show")) {
      isShowing = true
    }

    if ($("div.cards").hasClass("showing")) {
      // a card is already in view
      $("div.card.show")
        .removeClass("show");

      if (isShowing) {
        // this card was showing - reset the grid
        $("div.cards")
          .removeClass("showing");
      } else {
        // this card isn't showing - get in with it
        $(this)
          .css({zIndex: zindex})
          .addClass("show");
      }

      zindex++;

    } else {
      // no cards in view
      $("div.cards")
        .addClass("showing");
      $(this)
        .css({zIndex:zindex})
        .addClass("show");

      zindex++;
    }
  });

/*----------------------------------------------------------------------------------------------*/
/* Contáctanos */
  // show contact
  $('.chat-wrap').click(function(){
    $(this).addClass('active');
    $('.contactme').addClass('active');
    $('.overlay').fadeIn();
  });

  // overlay escape click
  $('.overlay').click(function(){
    $('.chat-wrap').removeClass('active');
    $('.contactme').removeClass('active');
    $('.overlay').fadeOut();
  });

  // inputs background on blur
  $('.inputs').blur(function(){
    if($(this).val().length > 0){
      $(this).addClass('white');
    } else {
      $(this).removeClass('white');
    }
  });

/*----------------------------------------------------------------------------------------------*/
/* Slider */
  var elem = document.querySelectorAll('.carousel');
  var options = {
    indicators: true,
    dist : 0
  }

  var instance = M.Carousel.init(elem,options);
  autoplay();

  function autoplay(){
    var sliders = $("#all-categories > .carousel-item").length;
    if ( sliders <= 1) {
      //#NOthing
    }else {
      $('.carousel').carousel('next');
      setTimeout(autoplay, 3000);     
    }
  }


  $("#gallery").on('change', '#imageCategory', function() {
    event.preventDefault();

    var idCategory = $(this).val();

    $.ajax({
      url: '/carouselCategory',
      type: 'POST',
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: {idCategory: idCategory}
    })
    .done(function(e) {
      $("#container-carousel").html(e);
      var elem = document.querySelectorAll('.carousel');
      var options = {
        indicators: true,
        dist : 0
      }
      var instance = M.Carousel.init(elem,options);
      autoplay();
    })
    .fail(function(e){
      console.log("error");
    })
    .always(function(e){
      console.log(e);
    });
  });

  $('.collapsible').collapsible();

});


