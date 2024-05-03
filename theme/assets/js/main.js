let swiper = new Swiper('.swiper-container', {
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
		const { offsetTop: introOffset, offsetHeight: height } = introSection;
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

		if (bottom > introOffset) {
			const progress = Math.max(
				0,
				Math.min(1, (bottom - introOffset) / (introOffset / 3))
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

const aboutMeTabLink = document.querySelectorAll('.aboutme--tablinks')[0];
if (aboutMeTabLink) aboutMeTabLink.click();

const myHobbyTabLink = document.querySelectorAll('.myhobby--tablinks')[0];
if (myHobbyTabLink) myHobbyTabLink.click();

const reviewsTabLink = document.querySelectorAll('.reviews--tablinks')[0];
if (reviewsTabLink) reviewsTabLink.click();

function expandReviewContent(event, context, divId) {
	const status = event.target.getAttribute('data-status');
	const divEl = document.getElementById(`${context}-${divId}`);
	divEl.classList.add('lg:col-span-2');
	const divContentBody = divEl.querySelector('.review-content-body');
	if (status === 'less') {
		divContentBody.classList.remove('line-clamp-3');
		event.target.innerHTML = 'See Less...';
		event.target.setAttribute('data-status', 'more');
	} else {
		divContentBody.classList.add('line-clamp-3');
		event.target.innerHTML = 'See More...';
		event.target.setAttribute('data-status', 'less');
		return;
	}
	const allReviewsDiv = divEl.parentElement.children;
	let newAllReviewsDivHTML = '';
	for (let reviewDiv of allReviewsDiv) {
		const contentBody = reviewDiv.querySelector('.review-content-body');
		const btn = reviewDiv.querySelector('.review-content-toggler');
		if (reviewDiv !== divEl) {
			reviewDiv.classList.remove('lg:col-span-2');
			contentBody.classList.add('line-clamp-3');
			btn.innerHTML = 'See More...';
			btn.setAttribute('data-status', 'less');
			btn.style.display = 'block';
			newAllReviewsDivHTML += reviewDiv.outerHTML;
		}
		if (contentBody.scrollHeight <= contentBody.clientHeight) {
			btn.style.display = 'none';
		}
	}
	divEl.parentElement.innerHTML = divEl.outerHTML + newAllReviewsDivHTML;
	window.scrollTo(0, 0);
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
