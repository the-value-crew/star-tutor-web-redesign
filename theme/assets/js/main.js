const navBtn = document.getElementById('navBtn');
navBtn.addEventListener('click', () => {
	const navMenu = document.getElementById('navMenu');
	if (navMenu.classList.contains('max-h-0')) {
		navMenu.classList.remove('max-h-0');
		navMenu.classList.add('max-h-[500px]');
	} else {
		navMenu.classList.remove('max-h-[500px]');
		navMenu.classList.add('max-h-0');
	}
});

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

		if (bottom > introOffset + height / 2) {
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

const scoreCardDup = document.getElementById('scoreCardDup');
const scoresCard = document.getElementById('scoresCard');
const mainScoreCard = document.getElementById('mainScoreCard');
const scoresCard2 = document.getElementById('scoresCard2');
const scoresCard3 = document.getElementById('scoresCard3');

const elements = [
	scoreCardDup,
	scoresCard,
	mainScoreCard,
	scoresCard2,
	scoresCard3,
];

let activeIndex = elements.findIndex((image) =>
	image.classList.contains('isActive')
);

function updateClasses() {
	elements.forEach((element, index) => {
		element.className = ''; // Reset all classes

		if (index === activeIndex) {
			element.classList.add('isActive');
		} else if (
			index ===
			(activeIndex - 1 + elements.length) % elements.length
		) {
			element.classList.add('isActiveImageLeft');
		} else if (index === (activeIndex + 1) % elements.length) {
			element.classList.add('isActiveImageRight');
		} else {
			element.classList.add('inactive');
		}
	});
}

elements.forEach((element, index) => {
	element.addEventListener('click', () => {
		if (element.classList.contains('isActiveImageRight')) {
			activeIndex = (activeIndex + 1) % elements.length;
		} else if (element.classList.contains('isActiveImageLeft')) {
			activeIndex = (activeIndex - 1 + elements.length) % elements.length;
		}
		updateClasses();

		startAutoplay();
	});
});

let autoplayId = null;

function startAutoplay() {
	if (autoplayId !== null) {
		clearInterval(autoplayId);
	}

	autoplayId = setInterval(() => {
		activeIndex = (activeIndex + 1) % elements.length;
		updateClasses();
	}, 2000);
}

updateClasses();
startAutoplay();

function openTabContent(evt, context, tabId) {
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
	document.getElementById(`${context}-post-${tabId}`).style.display = 'block';
	evt.currentTarget.className +=
		' text-semibold font-semibold border-b-2 border-brand-default';
}

document.querySelectorAll('.aboutme--tablinks')[0].click();
document.querySelectorAll('.myhobby--tablinks')[0].click();
