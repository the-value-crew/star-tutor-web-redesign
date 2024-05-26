/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

let swiper = new Swiper('#scoreCardContainer', {
	slidesPerView: 1.2,
	loop: true,
	effect: 'coverflow',
	centeredSlides: true,
	direction: 'horizontal',
	spaceBetween: 400,
	coverflowEffect: {
		rotate: 0,
		stretch: 0,
		depth: 800,
		modifier: 1,
		slideShadows: false,
	},
	autoplay: {
		delay: 3000,
		pauseOnMouseEnter: true,
	},
	breakpoints: {
		600: {
			spaceBetween: 400,
		},
		768: {
			spaceBetween: 500,
		},
		992: {
			spaceBetween: 600,
		},
		1200: {
			spaceBetween: 800,
		},
	},
});

let valueSwiper = new Swiper('#valueContainer', {
	slidesPerView: 3,
	spaceBetween: 24,
	breakpoints: {
		0: {
			slidesPerView: 1,
			spaceBetween: 24,
		},
		1024: {
			slidesPerView: 3,
			spaceBetween: 24,
		},
	},
});

const swiperWrapper = document.querySelector('.swiper-wrapper');
if (swiperWrapper) {
	swiperWrapper.addEventListener('click', function (event) {
		if (event.target.classList.contains('swiper-slide-prev')) {
			swiper.slidePrev();
		} else if (event.target.classList.contains('swiper-slide-next')) {
			swiper.slideNext();
		}
	});
}

const navBtn = document.getElementById('navBtn');
const navMenu = document.getElementById('navMenu');
navBtn.addEventListener('click', () => {
	if (navMenu.classList.contains('max-h-0')) {
		navMenu.classList.remove('max-h-0');
		navMenu.classList.add('max-h-[800px]');
		navMenu.classList.add('flex');

		navMenu.classList.add('flex-col');
		navMenu.classList.add('gap-5');
		navMenu.classList.add('py-4');
		navMenu.classList.add('my-4');
		navMenu.classList.add('space-y-10');
		navMenu.classList.add('transition-all');
		navMenu.classList.add('duration-300');
		navMenu.classList.add('text-center');
	} else {
		navMenu.classList.remove('max-h-[800px]');
		navMenu.classList.add('max-h-0');
		navMenu.classList.remove('py-4');
		navMenu.classList.remove('flex-col');
		navMenu.classList.remove('gap-5');
		navMenu.classList.remove('flex');

		navMenu.classList.remove('my-4');
		navMenu.classList.remove('space-y-10');
		navMenu.classList.remove('transition-all');
		navMenu.classList.remove('duration-300');
		navMenu.classList.remove('text-center');
	}
});

const mql = window.matchMedia('(min-width: 1024px)');

function checkViewport(e) {
	if (e.matches) {
		// 		// If media query matches
		navMenu.classList.remove('flex-col');
		navMenu.classList.remove('gap-5');
		navMenu.classList.remove('flex');
		navMenu.classList.remove('max-h-[800px]');
		navMenu.classList.remove('py-4');
		navMenu.classList.remove('my-4');
		navMenu.classList.remove('space-y-10');
		// 		navMenu.classList.remove('transition-all');
		// 		navMenu.classList.remove('duration-300');
		// 		navMenu.classList.remove('text-center');
	} else if (navMenu.classList.contains('max-h-0')) {
		navMenu.classList.remove('max-h-[800px]');
		// 		navMenu.classList.remove('max-h-0');
		// 		// navMenu.classList.add('flex');
		// 		// navMenu.classList.add('flex-col');
		// 		// navMenu.classList.add('gap-5');
		// 		// navMenu.classList.add('py-4');
		// 		// navMenu.classList.add('my-4');
		// 		// navMenu.classList.add('space-y-10');
		// 		// navMenu.classList.add('transition-all');
		// 		// navMenu.classList.add('duration-300');
		// 		// navMenu.classList.add('text-center');
	} else if (navMenu.classList.contains('max-h-[800px]')) {
		navMenu.classList.remove('max-h-[800px]');

		// 		navMenu.classList.remove('py-4');
		// 		navMenu.classList.remove('flex-col');
		// 		navMenu.classList.remove('gap-5');
		// 		navMenu.classList.remove('flex');
		// 		navMenu.classList.remove('my-4');
		// 		navMenu.classList.remove('space-y-10');
		// 		navMenu.classList.remove('transition-all');
		// 		navMenu.classList.remove('duration-300');
		// 		navMenu.classList.remove('text-center');
	}
}

// // Call listener function at run time
checkViewport(mql);

// // Attach listener function on state changes
mql.addEventListener('change', checkViewport);

let seeMoreLinks = document.querySelectorAll('.see-more');

seeMoreLinks.forEach((link) => {
	link.addEventListener('click', function (e) {
		console.log('See more link clicked');
		e.preventDefault();

		// Get the extra content related to this link only
		let extraContent = this.parentNode.querySelector('.extra-content');
		let visibleContent = this.parentNode.querySelector('.visible-content');

		if (
			extraContent.style.display === 'none' ||
			extraContent.style.display === ''
		) {
			extraContent.style.display = 'inline';
			visibleContent.style.display = 'inline';
			extraContent.textContent = extraContent.textContent.trim();
			visibleContent.textContent = visibleContent.textContent.trim();
			visibleContent.textContent = visibleContent.textContent.replace(
				'...',
				''
			);
			this.textContent = 'See less...';
		} else {
			extraContent.style.display = 'none';
			visibleContent.style.display = 'inline';
			visibleContent.textContent = visibleContent.textContent + '...';
			this.textContent = 'See more...';
		}
	});
});

if (window.location.pathname === '/') {
	// Introduction section animation
	const introSection = document.getElementById('introSection');
	const introLeft = document.getElementById('introLeft');
	const introIntroduction = document.getElementById('introIntroduction');
	const introQuestion = document.getElementById('introQuestion');
	const introContent = document.getElementById('introContent');
	const introButton = document.getElementById('introButton');

	// Reviews section animation
	const reviewsSection = document.getElementById('reviewsSection');
	const reviewsHeading = document.getElementById('reviewsHeading');
	const reviewsContent = document.getElementById('reviewsContent');
	const reviewsTitle = document.getElementById('reviewsTitle');
	const reviewsSubTitle = document.getElementById('reviewsSubTitle');
	const reviewsButton = document.getElementById('reviewsButton');

	// Videos section animation
	const videosSection = document.getElementById('videosSection');
	const videosHeading = document.getElementById('videosHeading');
	const videosContent = document.getElementById('videosContent');
	const videosTitle = document.getElementById('videosTitle');
	const videosSubTitle = document.getElementById('videosSubTitle');
	const videosButton = document.getElementById('videosButton');

	// Value section animation
	const valueSection = document.getElementById('valueSection');
	const valueSubHeading = document.getElementById('valueSubHeading');
	const valueTitle = document.getElementById('valueTitle');
	const valueHeading3 = document.getElementById('valueHeading3');
	const valueContent = document.getElementById('valueContent');
	const valueButton = document.getElementById('valueButton');

	// Stats section animation
	const statsSection = document.getElementById('statsSection');
	const statsSubHeading = document.getElementById('statsSubHeading');
	const statsTitle = document.getElementById('statsTitle');
	const statsHeading3 = document.getElementById('statsHeading3');
	const statsContent = document.getElementById('statsContent');

	// Success section animation
	const successSection = document.getElementById('successSection');
	const successSubHeading = document.getElementById('successSubHeading');
	const successTitle = document.getElementById('successTitle');
	const successHeading3 = document.getElementById('successHeading3');
	const successContent = document.getElementById('successContent');

	// Blogs section animation
	const blogsSection = document.getElementById('blogsSection');
	const blogsSubHeading = document.getElementById('blogsSubHeading');
	const blogsTitle = document.getElementById('blogsTitle');
	const blogsHeading3 = document.getElementById('blogsHeading3');
	const blogsContent = document.getElementById('blogsContent');
	const blogsButton = document.getElementById('blogsButton');

	// Contact section animation
	const contactSection = document.getElementById('contact');
	const contactSubHeading = document.getElementById('contactSubHeading');
	const contactTitle = document.getElementById('contactTitle');
	const contactHeading3 = document.getElementById('contactHeading3');
	const contactContent = document.getElementById('contactContent');

	window.onscroll = () => {
		const { offsetTop: videosOffset, offsetHeight: videosHeight } =
			videosSection;
		const { offsetTop: introOffset, offsetHeight: introHeight } =
			introSection;
		const { offsetTop: reviewsOffset, offsetHeight: reviewsHeight } =
			reviewsSection;
		const { offsetTop: valueOffset, offsetHeight: valueHeight } =
			valueSection;
		const { offsetTop: statsOffset, offsetHeight: statsHeight } =
			statsSection;
		const { offsetTop: successOffset, offsetHeight: successHeight } =
			successSection;
		const { offsetTop: blogsOffset, offsetHeight: blogsHeight } =
			blogsSection;
		const { offsetTop: contactOffset, offsetHeight: contactHeight } =
			contactSection;

		const top = window.scrollY;
		const bottom = top + window.innerHeight;

		if (bottom > videosOffset) {
			// Calculate scroll progress through the videos section
			const progress = Math.max(
				0,
				Math.min(1, (bottom - videosOffset) / (videosHeight / 3))
			);
			// Set the opacity based on scroll progress
			videosSection.style.opacity = progress;
			videosHeading.style.transform = 'translateY(0%)';

			videosTitle.style.transform = 'translateY(0%)';
			videosSubTitle.style.transform = 'translateY(0%)';
			videosContent.style.transform = 'translateY(0%)';
			videosButton.style.transform = 'translateY(0%)';
		} else {
			videosHeading.style.transform = 'translateY(100%)';
			videosTitle.style.transform = 'translateY(100%)';
			videosSubTitle.style.transform = 'translateY(300%)';
			videosContent.style.transform = 'translateY(10%)';
			videosButton.style.transform = 'translateY(100%)';
		}

		if (bottom > introOffset) {
			const progress = Math.max(
				0,
				Math.min(1, (bottom - introOffset) / (introHeight / 3))
			);
			introSection.style.opacity = progress;

			introLeft.style.transform = 'translateX(0%)';

			introIntroduction.style.transform = 'translateX(0%)';
			introQuestion.style.transform = 'translateX(0%)';
			introContent.style.transform = 'translateX(0%)';
			introButton.style.transform = 'translateX(0%)';
		} else {
			introLeft.style.transform = 'translateX(-50%)';

			introIntroduction.style.transform = 'translateX(60%)';
			introQuestion.style.transform = 'translateX(60%)';
			introContent.style.transform = 'translateX(70%)';
			introButton.style.transform = 'translateX(80%)';
		}

		if (bottom > reviewsOffset) {
			// Calculate scroll progress through the reviews section
			const progress = Math.max(
				0,
				Math.min(1, (bottom - reviewsOffset) / (reviewsHeight / 3))
			);
			// Set the opacity based on scroll progress
			reviewsSection.style.opacity = progress;
			reviewsHeading.style.transform = 'translateY(0%)';

			reviewsTitle.style.transform = 'translateY(0%)';
			reviewsSubTitle.style.transform = 'translateY(0%)';
			reviewsContent.style.transform = 'translateY(0%)';
			reviewsButton.style.transform = 'translateY(0%)';
		} else {
			reviewsHeading.style.transform = 'translateY(100%)';
			reviewsTitle.style.transform = 'translateY(100%)';
			reviewsSubTitle.style.transform = 'translateY(300%)';
			reviewsContent.style.transform = 'translateY(10%)';
			reviewsButton.style.transform = 'translateY(100%)';
		}

		if (bottom > valueOffset) {
			const progress = Math.max(
				0,
				Math.min(1, (bottom - valueOffset) / (valueHeight / 3))
			);
			valueSection.style.opacity = progress;

			valueTitle.style.transform = 'translateY(0%)';
			valueSubHeading.style.transform = 'translateY(0%)';
			valueHeading3.style.transform = 'translateY(0%)';
			valueContent.style.transform = 'translateY(0%)';
			valueButton.style.transform = 'translateY(0%)';
		} else {
			valueTitle.style.transform = 'translateY(100%)';
			valueSubHeading.style.transform = 'translateY(100%)';
			valueHeading3.style.transform = 'translateY(300%)';
			valueContent.style.transform = 'translateY(10%)';
			valueButton.style.transform = 'translateY(100%)';
		}

		if (bottom > statsOffset) {
			const progress = Math.max(
				0,
				Math.min(1, (bottom - statsOffset) / (statsHeight / 3))
			);
			statsSection.style.opacity = progress;

			statsTitle.style.transform = 'translateY(0%)';
			statsSubHeading.style.transform = 'translateY(0%)';
			statsHeading3.style.transform = 'translateY(0%)';
			statsContent.style.transform = 'translateY(0%)';
		} else {
			statsTitle.style.transform = 'translateY(100%)';
			statsSubHeading.style.transform = 'translateY(100%)';
			statsHeading3.style.transform = 'translateY(300%)';
			statsContent.style.transform = 'translateY(10%)';
		}

		if (bottom > successOffset) {
			const progress = Math.max(
				0,
				Math.min(1, (bottom - successOffset) / (successHeight / 4))
			);
			successSection.style.opacity = progress;

			successTitle.style.transform = 'translateY(0%)';
			successSubHeading.style.transform = 'translateY(0%)';
			successHeading3.style.transform = 'translateY(0%)';
			successContent.style.transform = 'translateY(0%)';
		} else {
			successTitle.style.transform = 'translateY(100%)';
			successSubHeading.style.transform = 'translateY(100%)';
			successHeading3.style.transform = 'translateY(300%)';
			successContent.style.transform = 'translateY(10%)';
		}

		if (bottom > blogsOffset) {
			const progress = Math.max(
				0,
				Math.min(1, (bottom - blogsOffset) / (blogsHeight / 3))
			);
			blogsSection.style.opacity = progress;

			blogsTitle.style.transform = 'translateY(0%)';
			blogsSubHeading.style.transform = 'translateY(0%)';
			blogsHeading3.style.transform = 'translateY(0%)';
			blogsContent.style.transform = 'translateY(0%)';
			blogsButton.style.transform = 'translateY(0%)';
		} else {
			blogsTitle.style.transform = 'translateY(100%)';
			blogsSubHeading.style.transform = 'translateY(100%)';
			blogsHeading3.style.transform = 'translateY(300%)';
			blogsContent.style.transform = 'translateY(10%)';
			blogsButton.style.transform = 'translateY(100%)';
		}

		if (bottom > contactOffset) {
			const progress = Math.max(
				0,
				Math.min(1, (bottom - contactOffset) / (contactHeight / 3))
			);
			contactSection.style.opacity = progress;

			contactTitle.style.transform = 'translateY(0%)';
			contactSubHeading.style.transform = 'translateY(0%)';
			contactHeading3.style.transform = 'translateY(0%)';
			contactContent.style.transform = 'translateY(0%)';
		} else {
			contactTitle.style.transform = 'translateY(100%)';
			contactSubHeading.style.transform = 'translateY(100%)';
			contactHeading3.style.transform = 'translateY(300%)';
			contactContent.style.transform = 'translateY(10%)';
		}
	};
}

// Phone card copy to clipboard
const phoneNumber = document.getElementById('phoneNumber');
const phoneCopied = document.getElementById('phoneCopied');

phoneNumber.addEventListener('click', () => {
	navigator.clipboard.writeText(phoneNumber.textContent);
	phoneCopied.style.display = 'block';
	setTimeout(() => {
		phoneCopied.style.display = 'none';
	}, 2000);
});

// Email card copy to clipboard
const email = document.getElementById('email');
const emailCopied = document.getElementById('emailCopied');

email.addEventListener('click', () => {
	navigator.clipboard.writeText(email.textContent);
	emailCopied.style.display = 'block';
	setTimeout(() => {
		emailCopied.style.display = 'none';
	}, 2000);
});

function openTabContent(event, context, tabId, containerType) {
	let i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName(`${context}--tabcontent`);
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = 'none';
	}
	tablinks = document.getElementsByClassName(`${context}--tablinks`);
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(
			' text-semibold font-semibold border-b-2 border-brand-default',
			''
		);
	}
	document.getElementById(`${context}-post-${tabId}`).style.display =
		containerType;
	event.currentTarget.className +=
		' text-semibold font-semibold border-b-2 border-brand-default';
}

const tabLinks = document.querySelectorAll("[class*='tablinks']");
for (let tabLink of tabLinks) {
	tabLink.addEventListener('click', (event) => {
		const context = tabLink.getAttribute('data-context');
		const tabId = tabLink.getAttribute('data-id');
		const display = tabLink.getAttribute('data-display');
		openTabContent(event, context, tabId, display);
	});
}

const aboutMeTabLink = document.querySelectorAll('.aboutme--tablinks')[0];
if (aboutMeTabLink) aboutMeTabLink.click();

const myHobbyTabLink = document.querySelectorAll('.myhobby--tablinks')[0];
if (myHobbyTabLink) myHobbyTabLink.click();

const reviewsTabLink = document.querySelectorAll('.reviews--tablinks')[0];
if (reviewsTabLink) reviewsTabLink.click();

function createReviewModalContent(review) {
	return `<div class="space-y-[8px]">
		<div class="flex items-center justify-between">
			<p class="leading-relaxed text-heading3 font-heading3 text-primary">
				${review['reviewerName']}
			</p>

			<div class="flex gap-[4px]">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
					fill="none">
					<path
						d="M18.3079 8.62241C18.2601 8.80724 18.1654 8.97666 18.0329 9.11407L14.4245 12.1224L15.5329 16.7057C15.5739 16.9216 15.5506 17.1447 15.4662 17.3474C15.3856 17.5223 15.2625 17.6742 15.1079 17.7891C14.949 17.9039 14.7617 17.9731 14.5663 17.9891H14.4663C14.3074 17.9867 14.1509 17.9498 14.0079 17.8807L9.98295 15.3391L6.02461 17.7974C5.83391 17.9029 5.61716 17.9521 5.39961 17.9391C5.20858 17.9152 5.02586 17.8467 4.86626 17.7391C4.71022 17.6226 4.58681 17.4678 4.50798 17.2897C4.42916 17.1117 4.39756 16.9162 4.41622 16.7224L5.54121 12.0641L1.9913 9.11407C1.95167 9.08432 1.91769 9.04766 1.8912 9.00574C1.78464 8.86824 1.71315 8.70691 1.68266 8.53566C1.65218 8.36432 1.66366 8.18826 1.71623 8.02243C1.77322 7.85626 1.86733 7.70523 1.9913 7.58076C2.11266 7.45478 2.26487 7.36282 2.43289 7.3141C2.4769 7.30534 2.52224 7.30534 2.56625 7.3141L7.24124 6.92243L9.01628 2.63908C9.10636 2.4534 9.24445 2.29517 9.4162 2.18076C9.57345 2.07984 9.75461 2.02232 9.9412 2.01408C10.1246 2.002 10.308 2.03639 10.4746 2.11408C10.6427 2.19808 10.7884 2.32093 10.8996 2.47243L10.9579 2.58908L12.7412 6.88075L17.4079 7.3141H17.4913C17.6767 7.3621 17.8481 7.45351 17.9913 7.58076C18.131 7.71351 18.2343 7.87994 18.2913 8.06409C18.3413 8.24621 18.347 8.43766 18.3079 8.62241Z"
						fill="#E4C045" />
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
					fill="none">
					<path
						d="M18.3079 8.62241C18.2601 8.80724 18.1654 8.97666 18.0329 9.11407L14.4245 12.1224L15.5329 16.7057C15.5739 16.9216 15.5506 17.1447 15.4662 17.3474C15.3856 17.5223 15.2625 17.6742 15.1079 17.7891C14.949 17.9039 14.7617 17.9731 14.5663 17.9891H14.4663C14.3074 17.9867 14.1509 17.9498 14.0079 17.8807L9.98295 15.3391L6.02461 17.7974C5.83391 17.9029 5.61716 17.9521 5.39961 17.9391C5.20858 17.9152 5.02586 17.8467 4.86626 17.7391C4.71022 17.6226 4.58681 17.4678 4.50798 17.2897C4.42916 17.1117 4.39756 16.9162 4.41622 16.7224L5.54121 12.0641L1.9913 9.11407C1.95167 9.08432 1.91769 9.04766 1.8912 9.00574C1.78464 8.86824 1.71315 8.70691 1.68266 8.53566C1.65218 8.36432 1.66366 8.18826 1.71623 8.02243C1.77322 7.85626 1.86733 7.70523 1.9913 7.58076C2.11266 7.45478 2.26487 7.36282 2.43289 7.3141C2.4769 7.30534 2.52224 7.30534 2.56625 7.3141L7.24124 6.92243L9.01628 2.63908C9.10636 2.4534 9.24445 2.29517 9.4162 2.18076C9.57345 2.07984 9.75461 2.02232 9.9412 2.01408C10.1246 2.002 10.308 2.03639 10.4746 2.11408C10.6427 2.19808 10.7884 2.32093 10.8996 2.47243L10.9579 2.58908L12.7412 6.88075L17.4079 7.3141H17.4913C17.6767 7.3621 17.8481 7.45351 17.9913 7.58076C18.131 7.71351 18.2343 7.87994 18.2913 8.06409C18.3413 8.24621 18.347 8.43766 18.3079 8.62241Z"
						fill="#E4C045" />
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
					fill="none">
					<path
						d="M18.3079 8.62241C18.2601 8.80724 18.1654 8.97666 18.0329 9.11407L14.4245 12.1224L15.5329 16.7057C15.5739 16.9216 15.5506 17.1447 15.4662 17.3474C15.3856 17.5223 15.2625 17.6742 15.1079 17.7891C14.949 17.9039 14.7617 17.9731 14.5663 17.9891H14.4663C14.3074 17.9867 14.1509 17.9498 14.0079 17.8807L9.98295 15.3391L6.02461 17.7974C5.83391 17.9029 5.61716 17.9521 5.39961 17.9391C5.20858 17.9152 5.02586 17.8467 4.86626 17.7391C4.71022 17.6226 4.58681 17.4678 4.50798 17.2897C4.42916 17.1117 4.39756 16.9162 4.41622 16.7224L5.54121 12.0641L1.9913 9.11407C1.95167 9.08432 1.91769 9.04766 1.8912 9.00574C1.78464 8.86824 1.71315 8.70691 1.68266 8.53566C1.65218 8.36432 1.66366 8.18826 1.71623 8.02243C1.77322 7.85626 1.86733 7.70523 1.9913 7.58076C2.11266 7.45478 2.26487 7.36282 2.43289 7.3141C2.4769 7.30534 2.52224 7.30534 2.56625 7.3141L7.24124 6.92243L9.01628 2.63908C9.10636 2.4534 9.24445 2.29517 9.4162 2.18076C9.57345 2.07984 9.75461 2.02232 9.9412 2.01408C10.1246 2.002 10.308 2.03639 10.4746 2.11408C10.6427 2.19808 10.7884 2.32093 10.8996 2.47243L10.9579 2.58908L12.7412 6.88075L17.4079 7.3141H17.4913C17.6767 7.3621 17.8481 7.45351 17.9913 7.58076C18.131 7.71351 18.2343 7.87994 18.2913 8.06409C18.3413 8.24621 18.347 8.43766 18.3079 8.62241Z"
						fill="#E4C045" />
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
					fill="none">
					<path
						d="M18.3079 8.62241C18.2601 8.80724 18.1654 8.97666 18.0329 9.11407L14.4245 12.1224L15.5329 16.7057C15.5739 16.9216 15.5506 17.1447 15.4662 17.3474C15.3856 17.5223 15.2625 17.6742 15.1079 17.7891C14.949 17.9039 14.7617 17.9731 14.5663 17.9891H14.4663C14.3074 17.9867 14.1509 17.9498 14.0079 17.8807L9.98295 15.3391L6.02461 17.7974C5.83391 17.9029 5.61716 17.9521 5.39961 17.9391C5.20858 17.9152 5.02586 17.8467 4.86626 17.7391C4.71022 17.6226 4.58681 17.4678 4.50798 17.2897C4.42916 17.1117 4.39756 16.9162 4.41622 16.7224L5.54121 12.0641L1.9913 9.11407C1.95167 9.08432 1.91769 9.04766 1.8912 9.00574C1.78464 8.86824 1.71315 8.70691 1.68266 8.53566C1.65218 8.36432 1.66366 8.18826 1.71623 8.02243C1.77322 7.85626 1.86733 7.70523 1.9913 7.58076C2.11266 7.45478 2.26487 7.36282 2.43289 7.3141C2.4769 7.30534 2.52224 7.30534 2.56625 7.3141L7.24124 6.92243L9.01628 2.63908C9.10636 2.4534 9.24445 2.29517 9.4162 2.18076C9.57345 2.07984 9.75461 2.02232 9.9412 2.01408C10.1246 2.002 10.308 2.03639 10.4746 2.11408C10.6427 2.19808 10.7884 2.32093 10.8996 2.47243L10.9579 2.58908L12.7412 6.88075L17.4079 7.3141H17.4913C17.6767 7.3621 17.8481 7.45351 17.9913 7.58076C18.131 7.71351 18.2343 7.87994 18.2913 8.06409C18.3413 8.24621 18.347 8.43766 18.3079 8.62241Z"
						fill="#E4C045" />
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
					fill="none">
					<path
						d="M18.3079 8.62241C18.2601 8.80724 18.1654 8.97666 18.0329 9.11407L14.4245 12.1224L15.5329 16.7057C15.5739 16.9216 15.5506 17.1447 15.4662 17.3474C15.3856 17.5223 15.2625 17.6742 15.1079 17.7891C14.949 17.9039 14.7617 17.9731 14.5663 17.9891H14.4663C14.3074 17.9867 14.1509 17.9498 14.0079 17.8807L9.98295 15.3391L6.02461 17.7974C5.83391 17.9029 5.61716 17.9521 5.39961 17.9391C5.20858 17.9152 5.02586 17.8467 4.86626 17.7391C4.71022 17.6226 4.58681 17.4678 4.50798 17.2897C4.42916 17.1117 4.39756 16.9162 4.41622 16.7224L5.54121 12.0641L1.9913 9.11407C1.95167 9.08432 1.91769 9.04766 1.8912 9.00574C1.78464 8.86824 1.71315 8.70691 1.68266 8.53566C1.65218 8.36432 1.66366 8.18826 1.71623 8.02243C1.77322 7.85626 1.86733 7.70523 1.9913 7.58076C2.11266 7.45478 2.26487 7.36282 2.43289 7.3141C2.4769 7.30534 2.52224 7.30534 2.56625 7.3141L7.24124 6.92243L9.01628 2.63908C9.10636 2.4534 9.24445 2.29517 9.4162 2.18076C9.57345 2.07984 9.75461 2.02232 9.9412 2.01408C10.1246 2.002 10.308 2.03639 10.4746 2.11408C10.6427 2.19808 10.7884 2.32093 10.8996 2.47243L10.9579 2.58908L12.7412 6.88075L17.4079 7.3141H17.4913C17.6767 7.3621 17.8481 7.45351 17.9913 7.58076C18.131 7.71351 18.2343 7.87994 18.2913 8.06409C18.3413 8.24621 18.347 8.43766 18.3079 8.62241Z"
						fill="#E4C045" />
				</svg>
			</div>
		</div>
		<div
			class="flex items-center justify-between w-full text-captionBig font-captionBig text-secondary mt-[8px]">
			<p>${review['reviewDate']}</p>
			<p>(Review on ${review['reviewFrom']})</p>
		</div>
	</div>

	<div class="flex flex-col justify-start gap-2">
		<div class="self-stretch space-y-2 font-normal leading-relaxed text-normal text-secondary">
			<div class="font-normal content-body text-normal max-h-[400px] overflow-y-auto">
				${review['reviewContent']}
			</div>
		</div>
	</div>`;
}

function openModal(content) {
	// check if modal div is present else create one
	let modalDiv = document.getElementById('modalDiv');
	if (!modalDiv) {
		modalDiv = document.createElement('div');
		modalDiv.setAttribute('id', 'modalDiv');
		document.body.appendChild(modalDiv);
	}

	// disable scrolling on body
	document.body.style.overflow = 'hidden';

	// styles for modal div
	modalDiv.className =
		'w-full h-full px-2 fixed top-0 left-0 flex justify-center items-center bg-[rgba(0,0,0,0.5)]';

	// get content div and set max width
	const contentDiv = document.createElement('div');
	contentDiv.innerHTML = content;
	contentDiv.className =
		'flex flex-col border border-solid border-grey-200 bg-grey-100 rounded-lg px-[24px] py-[16px] item-start gap-[16px]';
	contentDiv.className += ' max-w-[742px]';

	// set modal content
	modalDiv.innerHTML = contentDiv.outerHTML;

	window.addEventListener('click', (event) => {
		if (event.target === modalDiv) {
			modalDiv.remove();
			document.body.style.overflow = 'visible';
		}
	});
}

// reviews page modal
const reviewContentsBtn = document.querySelectorAll(
	"button[data-context='review-content']"
);
for (let btn of reviewContentsBtn) {
	btn.addEventListener('click', (_) => {
		const context = btn.getAttribute('data-context');
		const id = btn.getAttribute('data-id');
		const contentDiv = document.getElementById(`${context}-${id}`);
		const review = {};
		review['reviewContent'] =
			contentDiv.querySelector('.content-body').textContent;
		review['reviewFrom'] = contentDiv.querySelector(
			'.content-review-from'
		).textContent;
		review['reviewDate'] = contentDiv.querySelector(
			'.content-review-date'
		).textContent;
		review['reviewerName'] = contentDiv.querySelector(
			'.content-reviewer-name'
		).textContent;
		const content = createReviewModalContent(review);
		openModal(content);
	});
}

const reviewsContent = document.querySelector('#reviewsContent');
if (reviewsContent) {
	const articles = reviewsContent.querySelectorAll('article');
	for (let article of articles) {
		article.addEventListener('click', () => {
			const review = {};
			review['reviewContent'] =
				article.querySelector('.content-body').textContent;
			review['reviewFrom'] = article.querySelector(
				'.content-review-from'
			).textContent;
			review['reviewDate'] = article.querySelector(
				'.content-review-date'
			).textContent;
			review['reviewerName'] = article.querySelector(
				'.content-reviewer-name'
			).textContent;
			const content = createReviewModalContent(review);
			openModal(content);
		});
	}
}

function removeSeeMoreLessTogglerOnLessReviewContent(divs) {
	const reviewContentDivs =
		divs ?? document.querySelectorAll('[id^="review-content-*"]');
	if (reviewContentDivs) {
		for (let el of reviewContentDivs) {
			const contentBody = el.querySelector('.review-content-body');
			const btn = el.querySelector('.review-content-toggler');
			if (contentBody.scrollHeight <= contentBody.clientHeight) {
				btn.style.display = 'none';
			}
		}
	}
}

removeSeeMoreLessTogglerOnLessReviewContent();
