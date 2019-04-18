$(document).ready(function () {
	/*===============
				MENU
	===============*/

	function openMenu() {
		$(".menu-nav").addClass('active');
		$(".menu__substrate").show();
	}

	function closeMenu() {
		$(".menu-nav").removeClass('active');
		$(".menu__substrate").hide();
	}

	$("#btnOpenMenu").click(function () {
		openMenu();
	});

	$("#btnCloseMenu").click(function () {
		closeMenu();
	});

	$(".menu__substrate").click(function () {
		closeMenu();
	});

	/* work animation navigation */
	$(".menu nav li, .slider-content button").click(function (event) {
		event.preventDefault();

		if ($(window).width() >= 1152) {
			var index = $(this).data('index-slide');
			Slide.current = $("section").eq(index);
			$(".main").moveTo(index);
		} else {

			var el = $(this).find("a").attr('href').replace('#', '');

			Slide.current  = $("section."+el);

			var h = 40; // height fixed header

			var top = Slide.current.offset().top - h;
			$('body,html').animate({scrollTop: top}, 500, function () {
				Slide.work = false;
			});
		}

		closeMenu();
	});


	/*===============
		SCROLL SLIDE
	===============*/
	var Slide = {
		current : false,
		next 		: false,
		work 		: false, // slide word or not
		posScroll : false,

		setCurSlide : function (window) {
			if (window.scrollTop() >= $(".start").offset().top){
				Slide.current = $(".start");
			}

			if (window.scrollTop() >= $(".team").offset().top){
				Slide.current = $(".team");
			}

			if (window.scrollTop() >= $(".philosophy").offset().top){
				Slide.current = $(".philosophy");
			}

			/*if (window.scrollTop() >= $(".directions").offset().top){
				Slide.current = $(".directions");
			}*/

			/*if (window.scrollTop() >= $(".shop").offset().top - 0.5){
				Slide.current = $(".shop");
			}*/

			if (window.scrollTop() >= $(".sponsors").offset().top - 0.5){
				Slide.current = $(".sponsors");
			}


			Slide.next = Slide.current;
		},

		down : function () {

			// next slide
			var ns = Slide.current.offset().top + ((Slide.current.height() - $(window).height()));

			//scroll down
			Slide.next = Slide.current.next("section.slide");

			if (Slide.current.height() == $(window).height()) {
				Slide.goSlide();

				//prevent page fom scrolling
				return false;

				// very height block
			} else {

				if ($(window).scrollTop() >= ns + 250) { // for btn descr. end shop
					Slide.goSlide();
					return false;
				}
			}

		},
		
		up : function () {

			if (Slide.current.height() == $(window).height()) {
				Slide.next = Slide.current.prev("section.slide");
				Slide.goSlide();

				//prevent page fom scrolling
				return false;

				// very height block - set start current block
			} else {

				if (Slide.current.height() == $(window).height()) {
					Slide.goSlide();
					return false;

				} else {

					if (Slide.next.data('slide') !== Slide.current.data('slide')) {
						Slide.next = Slide.current;
					} else {
						Slide.next = Slide.current.prev("section.slide");
					}

					Slide.goSlide();
					return false;
				}
			}
		},

		init : $("body").ready(function () {

			// showLgog();
			Slide.posScroll = $(window).scrollTop();

			Slide.setCurSlide($(window));



			if ($(window).width() >= 1152) {
				Slide.goSlide();

				$(".main").onepage_scroll({

					responsiveFallback: false,
					loop: false,
					animationTime : 700,

					beforeMove : function (index) {

						Slide.current = $("section").eq(index-1);

						Slide.current.find('.my-animate').each(function( index ) {
							var el = $(this);
							var animate = el.data('animated');
							/* if delay */
							if (sec = el.data('delay')) {
								setTimeout(function () {
									el.addClass("animated "+animate);
								}, sec);
							} else {
								el.addClass("animated "+animate);
							}
						});
					},

					afterMove: function(index) {

						var prev = Slide.current.prev('section'),
								next = Slide.current.next('section');

						prev.find('.my-animate').each(function( index ) {
							$(this).removeClass($(this).data('animated'));
						});

						next.find('.my-animate').each(function( index ) {
							$(this).removeClass($(this).data('animated'));
						});
					},

				});
			}




			
			function scrollMove(e) {

				if (!Slide.work) {

					Slide.work = true;

					if(e.originalEvent.detail > 0) {
						Slide.down();
					} else {
						Slide.up();
					}
				}
			}
		}),

		setAnimation : function () {

			if ($(window).width() >= 1152) {
				Slide.next.find('.my-animate').each(function( index ) {
					var el = $(this);
					var animate = el.data('animated');
					/* if delay */
					if (sec = el.data('delay')) {
						setTimeout(function () {
							el.addClass("animated "+animate);
						}, sec);
					} else {
						el.addClass("animated "+animate);
					}

				});
			}

		},

		goSlide : function () {


			if (Slide.next.is("section")) {

				// не анимировать если вернулись назад в высоком блоке
				if ($(window).width() >= 1152
					//&& Slide.next.data('slide') !== Slide.current.data('slide')
				)
				{
					Slide.next.find('.my-animate').each(function( index ) {
						var el = $(this);
						el.removeClass(el.data('animated'));
					});
				}

				var h = 0;
				if ($(window).width() < 992) {
					h = 56;
				}


				var top = Slide.next.offset().top - h;
				$('body,html').animate({scrollTop: top}, 700, function () {
					Slide.work = false;
				});


				Slide.setAnimation();

				Slide.current = Slide.next;

			}


		}

	};


	/*===============
				SHOP
	===============*/
	var Shop = {

		height: false,

		setHeight : $("body").ready(function () {
			Shop.height = $(".shop .product-list").height();
		}),

	};

	$(".shop .name-block span").click(function () {

		$(".shop .content").hide();

		var elem = $(".shop ."+$(this).data('name'));
		console.log(elem);

		if ($(this).data('name') !== 'product-list') {
			elem.css({"height": Shop.height});
		}
		elem.show();
	});

});

	/*===============
	 		MASK PHONE
	===============*/
	jQuery(function ($) {
		$("input[name=phone]").mask("+38 (099) 999-99-99");
	});


	/*===============
			PP FORM
	===============*/
	var ppForm = {

		show: function () {
			$('.overlay, .pp-form').css({'opacity': '1', 'visibility': 'visible'});
		},

		hide: function () {
			$('.overlay, .pp-form, .message').css({'opacity': '0', 'visibility': 'hidden'});
			//$(".pp-form form input[name=first_name]").removeAttr('autofocus');
		},


		delMess : $(".pp-form form").on('click', ".mess", function () {
			$(this).remove();
		}),

		sendData: function (form) {

			// очистим всё сообщения
			$(".mess").remove();

			$.ajax({
				url: '/layouts.php',
				type: "POST",
				dataType: "json",
				data: form.serialize(),
				success: function (response) {
					if (response.errs) {
						for (var key in response.errs) {
							form.find("*[name=" + key + "]").after('<p class="mess">' + response.errs[key] + '</p>');
							break;
						}
					} else if (response['success']) {
						dataLayer.push({'event': 'formOK'});
						form.find("button").after('<p class="mess">' + response['success'] + '</p>');

						setTimeout(function () {
							$(".mess").remove();
							ppForm.hide();
						}, 1500);

					}
				}

			}); // end ajax
		}

	};
	

	/* open */
	$(".ppf").click(function () {
		ppForm.show();
	});

	/* close */
	$(".overlay, .form > .close").click(function () {
		ppForm.hide();
	});


	/* send data */
	$(".pp-form .btn-send").click(function (e) {
		e.preventDefault();
		ppForm.sendData($(this).closest("form"));
	});

	/*===============
				SWITCH
	===============*/

	$(".switch span").click(function () {
		if ($(".switch").is(".run")) {
            $(".switch").removeClass("run");
			$(".directions-substrate__run").removeClass("active");
			$(".directions-substrate__triathlon").addClass("active");
		} else {
            $(".switch").addClass("run");
            $(".directions-substrate__run").addClass("active");
            $(".directions-substrate__triathlon").removeClass("active");
		}

		var directions = $(".directions");
		var cost = $(".cost");

		var content = $(this).attr("data-content");

		directions.find(".content").hide();
		cost.find(".content").hide();
		$(".dir-"+content).show();
		$(".cost-"+content).show();
	});

$(document).ready(function () {
	var pointList = [
		{
			title: 'Athens',
			y: '89.5%',
			x: '59%'
		},
		{
			title: 'Kharkiv',
			y: '63%',
			x: '82%'
		}
	];

	var points = document.querySelectorAll('[data-point]');
	var cards = document.querySelectorAll('[data-card]');
	var list = document.querySelector('.start-info-list');

	for (var i=0; i < pointList.length; i++) {
		[].forEach.call(points, function (el) {
			if(el.dataset.point == pointList[i].title) {
				pointList[i].point = el;
				el.style.top = pointList[i].y;
				el.style.left = pointList[i].x;
			}
		});

		[].forEach.call(cards, function (el) {
			if(el.dataset.card == pointList[i].title) {
				pointList[i].card = el;
			}
		});
	}

	function removeClass() {
		[].forEach.call(points, function (point) {
			point.classList.remove('active');
		});

		[].forEach.call(cards, function (card) {
			card.classList.remove('active');
		});
	}

	pointList.map(function (el) {
		el.point.addEventListener('click', function () {
			list.scrollTop = 0;

			list.insertBefore(el.card, list.firstChild);

			removeClass();

			var self = this;

			function addClassActive() {
				self.classList.add('active');
				el.card.classList.add('active');
			}

			setTimeout(addClassActive, 10);
		});

		el.card.addEventListener('click', function () {
			removeClass();

			this.classList.add('active');
			el.point.classList.add('active');
		})
	})
});


function scrollbars() {
	var ps = new PerfectScrollbar('#startInfo', {
		wheelSpeed: 2,
		wheelPropagation: false,
		minScrollbarLength: 20
	});
};

window.addEventListener('load',scrollbars);