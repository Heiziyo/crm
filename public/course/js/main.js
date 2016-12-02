$("document").ready(function(){

	 $(".title-list>h3").click(function(){ 
		$(this).next("ul").stop().slideToggle(); 
		$(this).find("a").toggleClass("active");
		$(this).find("span").toggleClass("active2");
		return false;
	});

	 $(".chapter").on("click",function(){
         $(".title-list").children("ul").slideUp(); 
         $(".title-list h3 a").removeClass("active");
         $(".title-list h3 span").removeClass("active2");
	 });

     $(".spread").on("click",function(){
         $(".title-list").children("ul").slideDown(); 
         $(".title-list h3 a").addClass("active");
         $(".title-list h3 span").addClass("active2");
	 });

	 $(window).scroll(function() {       //页面滚动显示元素。
		if($(window).scrollTop()>=200){
		$(".back-top").fadeIn(500); 
		}else{
		$(".back-top").fadeOut(500); 
		} 
		}); 

		$('.back-top').click(function (e) {
		  e.preventDefault();
		  $('html, body').animate({scrollTop: 0}, 800);
		});


});