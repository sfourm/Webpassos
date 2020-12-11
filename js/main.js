$(window).scroll(function () {
	var scrollTop = $(window).scrollTop();

	if (scrollTop > 20) {
      $('.site-navbar').css("background-color", "rgba(0, 0, 0, 1)");
      $('.site-mobile-menu .site-menu > li > span').css("padding-top", "12px");
		$('.site-navbar').addClass('position-fixed');
		$('.site-navbar').addClass('menu-padding');
		$('.site-navbar').removeClass('py-4');

	} else if (scrollTop  < 20) {
      $('.site-navbar').css("background-color", "rgba(0, 0, 0, 1)");
      $('.site-mobile-menu .site-menu > li > span').css("padding-top", "30px");
		$('.site-navbar').removeClass('position-fixed')
		$('.site-navbar').removeClass('menu-padding');
		$('.site-navbar').addClass('py-4');
	};

});


if ($(window).width() <= 991){
   $('.site-navigation').removeClass('site-navigation').addClass('site-mobile-menu');
   // ou
   $('.site-navigation').attr('class','site-mobile-menu');
 }else if ($(window).width() > 991){
    $('.site-mobile-menu').removeClass('site-mobile-menu').addClass('site-navigation');
    // ou
    $('.site-mobile-menu').attr('class','site-navigation');
 }

window.addEventListener('resize', function () {
   //var altura = window.innerHeight;
   var largura = window.innerWidth;

   if (largura <= 991){
      $('.site-navigation').removeClass('site-navigation').addClass('site-mobile-menu');
   } else if (largura > 991){
      $('.site-mobile-menu').removeClass('site-mobile-menu').addClass('site-navigation');
   }
});


$(document).ready(function() {
   //Cache dos elementos em variáveis
  var botao = $('#btntoggle');
  var menuToogle = $('.site-mobile-menu');    
   //Clica no botão para abrir e fechar o dropDown
   botao.on('click', function(event){
      menuToogle.css("right", "0px");
       //Evita que o evento seja notificado aos outros elementos. 
       event.stopPropagation();
   });
    
   //Clicando no html vai fechar o dorpDown
   $('html').on('click', function(){
      menuToogle.css("right", "-200px");
   });
});


