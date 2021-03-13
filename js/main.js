$(window).scroll(function () {
	var scrollTop = $(window).scrollTop();

	if (scrollTop > 20) {
      $('.site-navbar').css("background-color", "rgba(0, 0, 0, 1)");
      $('.site-mobile-menu .site-menu > li > span').css("padding-top", "12px");
		$('.site-navbar').addClass('position-fixed');
		$('.site-navbar').addClass('menu-padding');
		$('.site-navbar').removeClass('py-4');

	} else if (scrollTop  < 20) {
      $('.site-navbar').css("background-color", "rgba(0, 0, 0, 0)");
      $('.site-mobile-menu .site-menu > li > span').css("padding-top", "30px");
		$('.site-navbar').removeClass('position-fixed')
		$('.site-navbar').removeClass('menu-padding');
		$('.site-navbar').addClass('py-4');
	};

});

(function ($) {
   //Humberger Menu
   $(".humberger__open").on('click', function () {
       $(".humberger__menu__wrapper").addClass("show__humberger__menu__wrapper");
       $(".navbar-toggler-awesome").removeClass("fa-bars");
       $(".navbar-toggler-awesome").addClass("fa-times");
       $(".humberger__menu__overlay").addClass("active");

       $("body").addClass("over_hid");
   });

   $(".humberger__menu__overlay").on('click', function () {
       $(".humberger__menu__wrapper").removeClass("show__humberger__menu__wrapper");
       $(".navbar-toggler-awesome").removeClass("fa-times");
       $(".navbar-toggler-awesome").addClass("fa-bars");
       $(".humberger__menu__overlay").removeClass("active");
       $("body").removeClass("over_hid");
   });
})(jQuery)