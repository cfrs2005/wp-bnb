function b(){	
	t = parseInt(x.css('top'));
	y.css('top','44px');	
	x.animate({top: t - 44 + 'px'},'slow');	//30Ϊÿ��li�ĸ߶�
	if(Math.abs(t) == h-44){ //30Ϊÿ��li�ĸ߶�
		y.animate({top:'0px'},'slow');
		z=x;
		x=y;
		y=z;
	}
	setTimeout(b,3000);//�������ʱ�� ������3��
}
$(document).ready(function(){
	$('.swap').html($('.newsList').html());
	x = $('.newsList');
	y = $('.swap');
	h = $('.newsList li').length * 44; //30Ϊÿ��li�ĸ߶�
	setTimeout(b,3000);//�������ʱ�� ������3��
	$('.nav ul > li:last').addClass('nr');
	$('.nav ul > li:first').addClass('nl');
	$('.nav ul li').hover(function(){
		$(this).addClass('open');
	},function(){
		$(this).removeClass('open');
	});
	/*nav*/
	$('.mobilenav').click(function(){
		$(this).toggleClass('curbtn');
		$('.nav').toggleClass('open');
		$('.mobilesch').removeClass('cursch');
		$('.search-form').removeClass('open');
	});
	$('.mobilesch').click(function(){
		$(this).toggleClass('cursch');
		$('.search-form').toggleClass('open');
		$('.mobilenav').removeClass('curbtn');
		$('.nav').removeClass('open');
	});

    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        loop : true,
        autoplayDisableOnInteraction: false
    });
});