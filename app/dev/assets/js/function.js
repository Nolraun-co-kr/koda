
(function(window, $){

  // sitemap toggle
  $('.sitemap .btn').on('click', function(){
    $(this).parents('.sitemap').stop().slideUp();
  });
  $('.sitemap-btn').on('click', function(){
    $('.sitemap').stop().slideDown();
  });

  // mobile gnb toggle dropbox
  $('.mobile-gnb__body .col__title a').on('click', function(e){
    e.preventDefault();
    if($(this).hasClass('active')) {
      $('.mobile-gnb__body .col__title a').removeClass('active');
      $(this).removeClass('active');
    } else {
      $('.mobile-gnb__body .col__title a').removeClass('active');
      $(this).addClass('active');
    }
    $('.mobile-gnb__body .col__list').stop().slideUp();
    $(this).parents('.col__title').siblings('.col__list').stop().slideToggle();
  })
  // mobile gnb close
  $('.mobile-gnb .close').on('click', function(){
    $(this).parents('.mobile-gnb').hide();
  })
  // mobile gnb show
  $('.mobile-gnb-button').on('click', function(){
    $('.mobile-gnb').show();
  })

  $('.mobile-search-button').on('click', function(e){
    e.preventDefault();
    $('.searchform').toggle();
  })




  $(window).scroll(function(){
    var h = $(this).scrollTop();
    var isScrolled = h > 0;
    if(isScrolled) {
      $('body').addClass('scrolled');
    } else {
      $('body').removeClass('scrolled');
    }

    if( h > 500 ) {
      $('.quick').addClass('fixed')
    } else {
      $('.quick').removeClass('fixed')
    }
  });



  $('.datepicker').datepicker({
    dateFormat: 'yy.mm.dd'
  });
})(window, $)
