document.cookie = 'same-site-cookie=foo; SameSite=Lax';
document.cookie = 'cross-site-cookie=bar; SameSite=None; Secure';
$(function() {
	"use strict";
	
	$(window).on("scroll", function(event) {
		var scroll = $(window).scrollTop();
		if (scroll < 250) {
			$(".header-nav").removeClass("sticky");
		} else {
			$(".header-nav").addClass("sticky");
		}
	});
	$(".navbar-toggler").on("click", function() {
		$(this).toggleClass("active");
	});
	$(".navbar-nav a").on("click", function() {
		$(".navbar-toggler").removeClass("active");
	});
	var subMenu = $(".sub-menu-bar .navbar-nav .sub-menu");
	if (subMenu.length) {
		subMenu
			.parent("li")
			.children("a")
			.append(function() {
				return '<button class="sub-nav-toggler"> <i class="fal fa-angle-down"></i> </button>';
			});
		var subMenuToggler = $(".sub-menu-bar .navbar-nav .sub-nav-toggler");
		subMenuToggler.on("click", function() {
			$(this)
				.parent()
				.parent()
				.children(".sub-menu")
				.slideToggle();
			return !1;
		});
	}
	$(".team-active").slick({
		dots: !1,
		infinite: !0,
		autoplay: !0,
		autoplaySpeed: 3000,
		arrows: !0,
		prevArrow:
			'<span class="prev"><i class="fal fa-long-arrow-alt-left"></i></span>',
		nextArrow:
			'<span class="next"><i class="fal fa-long-arrow-alt-right"></i></span>',
		speed: 1500,
		slidesToShow: 2,
		slidesToScroll: 1,
		responsive: [
			{ breakpoint: 1201, settings: { slidesToShow: 2 } },
			{ breakpoint: 992, settings: { slidesToShow: 2 } },
			{ breakpoint: 768, settings: { slidesToShow: 1 } }
		]
	});
	$(".testinonials-active").slick({
		dots: !0,
		infinite: !0,
		autoplay: !0,
		autoplaySpeed: 3000,
		arrows: !1,
		speed: 1500,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{ breakpoint: 1201, settings: { slidesToShow: 3 } },
			{ breakpoint: 992, settings: { slidesToShow: 2 } },
			{ breakpoint: 768, settings: { slidesToShow: 1 } },
			{ breakpoint: 576, settings: { slidesToShow: 1 } }
		]
	});
	$(".testinonials-2-active").slick({
		dots: !1,
		infinite: !0,
		autoplay: !0,
		autoplaySpeed: 3000,
		arrows: !1,
		speed: 1500,
		slidesToShow: 2,
		slidesToScroll: 1,
		responsive: [
			{ breakpoint: 1201, settings: { slidesToShow: 2 } },
			{ breakpoint: 992, settings: { slidesToShow: 2 } },
			{ breakpoint: 768, settings: { slidesToShow: 1 } },
			{ breakpoint: 576, settings: { slidesToShow: 1 } }
		]
	});
	$(".testinonials-3-active").slick({
		dots: !1,
		infinite: !0,
		autoplay: !0,
		autoplaySpeed: 3000,
		arrows: !1,
		speed: 1500,
		slidesToShow: 1,
		slidesToScroll: 1
	});
	$(".services-active").slick({
		dots: !0,
		infinite: !0,
		autoplay: !0,
		autoplaySpeed: 3000,
		arrows: !1,
		speed: 1500,
		slidesToShow: 3,
		slidesToScroll: 1,
		centerMode: !0,
		centerPadding: "0px",
		focusOnSelect: !0,
		responsive: [
			{ breakpoint: 1201, settings: { slidesToShow: 3 } },
			{ breakpoint: 992, settings: { slidesToShow: 2 } },
			{ breakpoint: 768, settings: { slidesToShow: 1 } },
			{ breakpoint: 576, settings: { slidesToShow: 1 } }
		]
	});
	$(".brand-active").slick({
		dots: !1,
		infinite: !0,
		autoplay: !0,
		autoplaySpeed: 3000,
		arrows: !1,
		speed: 1500,
		slidesToShow: 6,
		slidesToScroll: 1,
		responsive: [
			{ breakpoint: 1201, settings: { slidesToShow: 6 } },
			{ breakpoint: 992, settings: { slidesToShow: 4 } },
			{ breakpoint: 768, settings: { slidesToShow: 3 } },
			{ breakpoint: 576, settings: { slidesToShow: 2 } }
		]
	});
	$(".product-item-slide").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: !1,
		fade: !0,
		asNavFor: ".product-details-slide-item ul"
	});
	$(".product-details-slide-item ul").slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: ".product-item-slide",
		dots: !1,
		centerMode: !0,
		arrows: !1,
		centerPadding: "0",
		focusOnSelect: !0,
		vertical: !0
	});
	$(".video-popup").magnificPopup({ type: "iframe" });
	$(".image-popup").magnificPopup({
		type: "image",
		gallery: { enabled: !0 }
	});
	$(".counter").counterUp({ delay: 10, time: 2000 });
	$("select").niceSelect();
	new WOW().init();
	$(".project-2-area").on("mouseover", ".project-item", function() {
		$(".project-item.active").removeClass("active");
		$(this).addClass("active");
	});
	$(".add").click(function() {
		if (
			$(this)
				.prev()
				.val()
		) {
			$(this)
				.prev()
				.val(
					+$(this)
						.prev()
						.val() + 1
				);
		}
	});
	$(".sub").click(function() {
		if (
			$(this)
				.next()
				.val() > 1
		) {
			if (
				$(this)
					.next()
					.val() > 1
			)
				$(this)
					.next()
					.val(
						+$(this)
							.next()
							.val() - 1
					);
		}
	});
	$(window).on("scroll", function(event) {
		if ($(this).scrollTop() > 600) {
			$(".back-to-top").fadeIn(200);
		} else {
			$(".back-to-top").fadeOut(200);
		}
	});
	$(".back-to-top").on("click", function(event) {
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, 1500);
	});
});

//Custom js
if ("serviceWorker" in navigator) {
	navigator.serviceWorker.register("../sw.js");
}
