function init(t) {
    $("tr > td").parent().hide(), current = 0, width = t, $("tr > td").parent().slice(current, current + width).show()
}

function step(t) {
    rowcnt = $("table tr").length, current += width, width = t, $("tr > td").parent().slice(current, current + width).show(300), current + width >= rowcnt && $("#table-next-row").prop("disabled", !0)
}

$().click(function (t) {
}), init(5), $("button").click(function () {
    step(5)
})
$('.menu-bottom > ul > li span').click(function () {
    $(this).parent().siblings().find('ul').slideUp(300);
    $(this).next('ul').stop(true, false, true).slideToggle(300);
    return false;
});
$(function () {
    if ($(window).width() > 1000) {
        // debugger;
        $('.menu-top-main').hover(function () {
            if (!$(this).hasClass('active')) {
                $('.menu-top-main.active').children('.topper-menu').finish().slideUp();
                $(this).children('.topper-menu').finish().slideDown(300);
            }

        }, function () {
            if (!$(this).hasClass('active')) {
                $(this).children('.topper-menu').slideUp(300);
                $('.menu-top-main.active').children('.topper-menu').slideDown(300);
            }
            $(this).children('.topper-menu').slideUp(300);
        });
        $('.topper-menu li').hover(function () {
            $(this).children('ul').stop(true, false, true).finish().slideDown(300);
        }, function () {
            $(this).children('ul').stop(true, false, true).slideUp(300);
        })
        // $('.menu-top > ul > li').hover(function() {
        //     $('.menu-top ul .active').children('ul').stop(true, false, true).slideUp(300);
        //     $(this).children('ul').stop(true, false, true).slideDown(300);
        // }, function() {
        //     $(this).children('ul').stop(true, false, true).slideUp(300);
        //     $('.menu-top ul .active').children('ul').stop(true, false, true).slideDown(300);
        // });
        $(".menu1 > li").wrapAll("<div class='container'></div>");
        $(".menu2 > li").wrapAll("<div class='container'></div>");
        $(".menu3 > li").wrapAll("<div class='container'></div>");
        $(".menu33 > li").wrapAll("<div class='container'></div>");
        $(".menu4 > li").wrapAll("<div class='container'></div>");
    }
})
var bod = $('body');
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        bod.addClass("f-nav");
    } else {
        bod.removeClass("f-nav");
    }
});

$(function () {
    const projectsDirection = new Swiper('.projects-direction-slider', {
        slidesPerView: 'auto',
        spaceBetween: 20,
        watchSlidesVisibility: true,
        preloadImages: true,
        lazy: true,
        breakpoints: {
            320: {
                slidesOffsetBefore: 20,
                slidesOffsetAfter: 20
            },
            992: {
                slidesOffsetBefore: 45,
                slidesOffsetAfter: 45
            }
        },
        navigation: {
            nextEl: ".project-slider-next",
            prevEl: ".project-slider-prev"
        },
        pagination: {
            el: '.projects-pagination',
            clickable: true,
        },
    });

	$('.services-carousel').owlCarousel({
        navigation: false,
        loop: true,
        pagination: true,
		dots:true,
        responsive: {
            0: {
                items: 1,
				dots:false,
				nav:true,
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $('#slid').owlCarousel({
        navigation: true,
        loop: true,
        pagination: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
})
$("img.lazy").lazy();
$(function () {
    $('#header-slider').owlCarousel({
        responsiveClass: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    $("#portfolio-slider").owlCarousel({
        navigation: true,
        loop: true,
        pagination: true,
        lazyLoad: true,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $("#slider-carusel").owlCarousel({
        navigation: true,
        loop: true,
        pagination: true,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

	$("#slider-carusel-2").owlCarousel({
			navigation: true,
			loop: true,
			pagination: true,
			lazyLoad: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				1000: {
					items: 1
				}
			}
		});
    $('#expert-carusel').owlCarousel({
        responsiveClass: true,
        loop: true,
        navigation: true,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1
            },
            769: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
})
$(".btn-hide-tool").click(function () {
    $(".tool-slide").addClass("inActive");
    $(".btn-show-tool").addClass("open");
    $(".btn-hide-tool").addClass("inActive");
    return false;
});
$(".btn-show-tool").click(function () {
    $(".tool-slide").removeClass("inActive");
    $(".btn-show-tool").removeClass("open");
    $(".btn-hide-tool").removeClass("inActive");
    return false;
});
var offset = 300,
    scroll_top_duration = 700,
    $back_to_top = $('.cd-top');
$(window).scroll(function () {
    ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
});
$back_to_top.on('click', function (event) {
    event.preventDefault();
    $('body,html').animate({
            scrollTop: 0,
        }, scroll_top_duration
    );
});
$(function () {
    $('nav#menu').mmenu({
        // options
    }, {
        // configuration
        clone: true
    });
})
$(".mail-icon a").click(function () {
    $("body").addClass("overflow");
});
$(".close-reveal-modal").click(function () {
    $("body").removeClass("overflow");
});
$(function () {
    $('.activities-slider').owlCarousel({
        responsiveClass: true,
        // loop: true,
        navigation: true,
        // autoWidth:true,
        URLhashListener: true,
        responsive: {
            0: {
                items: 1,
                slideBy: 1
            },
            1000: {
                items: 2,
                slideBy: 1
            }
        }
    });
// $('.activities-slider .owl-nav > div').click(function(){
// 	$(this).parents('.activities-row').addClass('actives');
// })
// $('.activities-row').mouseleave(function(){
// 	$(this).removeClass('actives');
// })
})
// $(".list_tab").on('click','li',function(e){
//     e.preventDefault();
//       $(".list_tab").removeClass("act");
//       $(".total").removeClass("act");
// });


$(document).ready(function () {
    $(window).resize(function () {
        if ($(window).width() > '992px') {

        }
    });
});


if ($(window).width() > '992') {
    $(window).scroll(function (e) {
        if ($(this).scrollTop() > 700) {
            $('.modern-nav').css({'position': 'fixed'});
            $('.new-menu__top').css({'height': '0px', 'padding': '0px'});
            $('.newnav__logo').css({'width': '15%'});
            $('.newnav__logo img').css({'width': '120px'});
            $('.top-right--new').css({'width': '33%', 'display': 'flex'});
            $('.newnav__list').css({'width': '52%'});
            $('.newnav__list a').css({'font-size': '14px'});
            $('.header-sort').css({'top': '4.2vw'});
        } else if ($(this).scrollTop() < 650) {
            $('.header-sort').css({'top': '8.6vw'});
            $('.new-menu__top').css({'height': 'auto', 'padding-top': '15px', 'padding-bottom': '15px'});
            $('.newnav__logo').css({'width': 'unset'});
            $('.newnav__logo img').css({'width': '0px'});
            $('.newnav__list').css({'width': '56%'});
            $('.newnav__list a').css({'font-size': 'unset'});
            $('.top-right--new').css({'width': '0%', 'display': 'none'});
            $('.modern-nav').css({'position': 'static'});
        }
    });
}

let crumb = $('.bx-breadcrumb-item').last();

if (window.location.pathname !== '/portfolio/') {
    if (crumb.children('span').text() === 'Портфолио') {
        crumb.children('span').parent('.bx-breadcrumb-item').css('display', 'none')
    }
}


var mySwiper = new Swiper('.swiper-container', {
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-container .swiper-pagination',
        clickable: true,
    },
	navigation: {
	  nextEl: ".swiper-container .swiper-button-next",
	  prevEl: ".swiper-container .swiper-button-prev",
	},
})