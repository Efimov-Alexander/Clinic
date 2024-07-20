new Swiper('.check-up__swiper', {
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	},
	pagination: {
		el: '.swiper-pagination',
		type: 'fraction',
	},
	spaceBetween: 20,
})

let isMenu = false

const changeScroll = val => {
	val ? document.querySelector('body').classList.remove('_active') : document.querySelector('body').classList.add('_active')
}
const changeReceptionForm = val => {
	val ? document.querySelector('.reception-form').classList.add('_active') : document.querySelector('.reception-form').classList.remove('_active')
}
const changeMenu = val => {
	if (val) {
		isMenu = true
		document.querySelector('.icon-menu').classList.add('_active');
		document.querySelector('.bot-header').classList.add('_active');
	} else {
		isMenu = false
		document.querySelector('.icon-menu').classList.remove('_active');
		document.querySelector('.bot-header').classList.remove('_active');
	}
}
const changeOverlay = val => {
	val ? document.querySelector('.overlay').classList.add('_active') : document.querySelector('.overlay').classList.remove('_active')
}

window.onload = function () {
	document.addEventListener("click", documentActions);

	function documentActions(e) {
		const targetElement = e.target;

		if (targetElement.classList.contains('icon-menu')) {
			if (isMenu) {
				changeMenu(false)
				changeScroll(true)
			} else {
				changeMenu(true)
				changeScroll(false)
			}
		}

		if (targetElement.classList.contains('actions-header__reception-button') || targetElement.classList.contains('slide-check-up__reception-button') || targetElement.classList.contains('bot-header__reception-button')) {
			changeReceptionForm(true)
			changeOverlay(true)
			changeScroll(false)
		}

		if (targetElement.classList.contains('reception-form__close-button') || targetElement.classList.contains('overlay')) {
			if (isMenu) {
				changeReceptionForm(false)
				changeOverlay(false)
			} else {
				changeReceptionForm(false)
				changeOverlay(false)
				changeScroll(true)
			}
		}
	}
}