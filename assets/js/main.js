const swiper = new Swiper('.swiper', {
	// Optional parameters
	loop: true,
	slidesPerView: "auto",
	centeredSlides: true,
	spaceBetween: 10,
	// If we need pagination
	pagination: {
		el: '.swiper-pagination',
	},

	// Navigation arrows
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

	// And if we need scrollbar
	scrollbar: {
		el: '.swiper-scrollbar',
	},
});

//Hamburger menu
let hamburger = document.querySelector('.hamburger');
let mobileMenu = document.querySelector('.menu');
let linkClose = document.querySelector('.menu__list');
let crossClose = document.querySelector('.cross-close');

hamburger.addEventListener('click', function () {
	mobileMenu.classList.toggle('menu--active')
});

function closeMenu() {
	mobileMenu.classList.remove('menu--active');
}

crossClose.addEventListener('click', function () {
	closeMenu()
});

linkClose.addEventListener('touchstart', function (event) {
	if (event.target.closest('.menu__link')) {
		closeMenu(), closeHam();
	}
});

//music player

const player = document.querySelector('.music'),
	audio = document.querySelector('.audio'),
	musicBtn = document.querySelector('.music__btn'),
	musicRedBtn = document.querySelector('.music-red');
	

function playSong() {
	player.classList.add('play');
	audio.play();
	musicBtn.classList.add('music__pause');
	musicRedBtn.classList.add('music__red-pause');
}

function pauseSong() {
	player.classList.remove('play');
	audio.pause();
	musicBtn.classList.remove('music__pause');
	musicRedBtn.classList.remove('music__red-pause');
}

player.addEventListener('click', () => {
	const isPlaying = player.classList.contains('play');
	if (isPlaying) {
		pauseSong();
	} else {
		playSong();
	}
});

musicRedBtn.addEventListener('click', () => {
	const isPlaying = player.classList.contains('play');
	if (isPlaying) {
		pauseSong();
		
	} else {
		playSong();
		
	}
});



//кнопка вверх при скроле

(function () {
	'use strict';

	function trackScroll() {
		let scrolled = window.pageYOffset;
		let coords = document.documentElement.clientHeight;

		if (scrolled > coords) {
			goTopBtn.classList.add('back_to_top-show');
		}
		if (scrolled < coords) {
			goTopBtn.classList.remove('back_to_top-show');
		}
	}

	function backToTop() {
		if (window.pageYOffset > 0) {
			window.scrollBy(0, -80);
			setTimeout(backToTop, 0);
		}
	}

	let goTopBtn = document.querySelector('.back_to_top');

	window.addEventListener('scroll', trackScroll);
	goTopBtn.addEventListener('click', backToTop);
})();


jQuery(function ($) {

	// AJAX загрузка страниц/записей WP 
	$('.btn-loadmore').on('click', function () {
		let _this = $(this);
		_this.html('<span class="fas fa-redo fa-spin"></span> Загрузка...'); // изменение кнопки 

		let data = {
			'action': 'loadmore',
			'query': _this.attr('data-param-posts'),
			'page': this_page,
		}

		$.ajax({
			url: '/wp-admin/admin-ajax.php',
			data: data,
			type: 'POST',
			success: function (data) {
				if (data) {
					_this.html('<span class="fas fa-redo"></span> Загрузить ещё');
					_this.prev().prev().append(data); // где вставить данные 
					this_page++;                      // увелич. номер страницы +1 
					if (this_page == _this.attr('data-max-pages')) {
						_this.remove();               // удаляем кнопку, если последняя стр. 
					}
				} else {                              // если закончились посты 
					_this.remove();                   // удаляем кнопку 
				}
			}
		});
	});

});