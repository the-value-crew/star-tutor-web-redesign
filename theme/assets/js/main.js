const navBtn = document.getElementById("navBtn");
navBtn.addEventListener("click", () => {
  const navMenu = document.getElementById("navMenu");
	if(navMenu.classList.contains("max-h-0")) {
		navMenu.classList.remove("max-h-0");
		navMenu.classList.add("max-h-[500px]");
	} else {
		navMenu.classList.remove("max-h-[500px]");
		navMenu.classList.add("max-h-0");
	}
});

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

function openTabContent(event, context, tabId, containerType) {
  let i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName(`${context}--tabcontent`);
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName(`${context}--tablinks`);
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" text-semibold font-semibold border-b-2 border-brand-default", "");
  }
  document.getElementById(`${context}-post-${tabId}`).style.display = containerType;
  event.currentTarget.className += " text-semibold font-semibold border-b-2 border-brand-default";
}

const aboutMeTabLink = document.querySelectorAll(".aboutme--tablinks")[0];
if(aboutMeTabLink) aboutMeTabLink.click();

const myHobbyTabLink = document.querySelectorAll(".myhobby--tablinks")[0];
if(myHobbyTabLink) myHobbyTabLink.click();


const reviewsTabLink = document.querySelectorAll(".reviews--tablinks")[0];
if(reviewsTabLink) reviewsTabLink.click();

function expandReviewContent(event, context, divId) {
	const status = event.target.getAttribute("data-status");
	const divEl = document.getElementById(`${context}-${divId}`);
	divEl.classList.add("lg:col-span-2");
	const divContentBody = divEl.querySelector(".review-content-body");
	if(status === "less") {
		divContentBody.classList.remove("line-clamp-6");
		event.target.innerHTML = "See Less...";
		event.target.setAttribute("data-status", "more");
	}
	else {
		divContentBody.classList.add("line-clamp-6");
		event.target.innerHTML = "See More...";
		event.target.setAttribute("data-status", "less");
		return;
	}
	const allReviewsDiv = divEl.parentElement.children;
	let newAllReviewsDivHTML = "";
	for(let reviewDiv of allReviewsDiv) {
		if(reviewDiv !== divEl)	{
			const contentBody = reviewDiv.querySelector(".review-content-body");
			const btn = reviewDiv.querySelector(".review-content-toggler");
			reviewDiv.classList.remove("lg:col-span-2");
			contentBody.classList.add("line-clamp-6");
			btn.innerHTML = "See More...";
			btn.setAttribute("data-status", "less");
			newAllReviewsDivHTML += reviewDiv.outerHTML;
		}
	}
	divEl.parentElement.innerHTML = divEl.outerHTML + newAllReviewsDivHTML;
}

function removeSeeMoreLessTogglerOnLessReviewContent(divs) {
	const reviewContentDivs = divs ?? document.querySelectorAll("[id^=review-content");
	if(reviewContentDivs) {
		for(let el of reviewContentDivs) {
			const contentBody = el.querySelector(".review-content-body");
			const btn = el.querySelector(".review-content-toggler");
			if(contentBody.scrollHeight <= contentBody.clientHeight) {
				btn.style.display = "none";
			}
		}
	}
}

removeSeeMoreLessTogglerOnLessReviewContent();

// async function fetchPost() {
//   const response = await fetch(`/wp-json/wp/v2/posts`);
//   const data = await response.json();
//   return data;
// }

// async function fetchComments(id) {
//   const response = await fetch(`/wp-json/wp/v2/comments?post=${id}`);
//   const data = await response.json();
//   return data;
// }

// async function fetchMedia(id) {
//   const response = await fetch(`/wp-json/wp/v2/media/${id}`);
//   const data = await response.json();
//   return data['media_details']['sizes']['medium']['source_url'];
// }

// async function fetchCategory(id) {
//   const response = await fetch(`/wp-json/wp/v2/media/${id}`);
//   const data = await response.json();
//   return data['media_details']['sizes']['medium']['source_url'];
// }

// async function createCategories(categories) {
//   let result = '';
//   for(let category of categories) {
//     const cat = await fetchCategory(category);
//     result += `<span class="text-captionBig font-captionBig bg-grey-200 text-grey-900 px-[8px] py-[2px] rounded-[16px]">${cat}</span>`;
//   }
//   return result;
// }

// async function createPost(postObj) {
//   const id = postObj['id'];
//   const title = postObj['title']['rendered'];
//   const thumbnail = postObj['featured_media'] !== 0 ? await fetchMedia(postObj['featured_media']) : '';
//   const content = postObj['content']['rendered'].substr(0, 360) + '...';
//   const link = postObj['link'];
//   const commentsResponse = await fetchComments(id);
//   const comments = commentsResponse.length;
//   const categories = await createCategories(postObj['categories']);

//   return `
//   <div class="border-2 border-grey-200 rounded-lg lg:min-w-[627px]">
//     <img class="w-full h-[304px] rounded-t-lg object-cover" src="${thumbnail}" />
//     <div class="mt-[16px] px-[20px]">
//         <h2 class="text-heading2 font-heading2"><a href="${link}">${title}</a></h2>
//         <p>${content}</p>
//     </div>
//     <div class="flex flex-col px-[20px] pb-[20px]">
//         <div class="flex items-center gap-[8px] mt-[10px]">
//             ${categories}
//             <span class="text-tertiary text-captionBig font-captionBig">8 minute read</span>
//         </div>
//         <div class="flex items-center gap-[16px] mt-[16px]">
//             <div class="flex items-center gap-[4px]">
//                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
//                     <path d="M17.7077 6.2567V11.7626C17.7077 12.1965 17.6223 12.6261 17.4562 13.0269C17.2902 13.4276 17.0468 13.7919 16.7401 14.0986C16.4333 14.4054 16.0691 14.6487 15.6683 14.8147C15.2675 14.9807 14.8379 15.0662 14.4041 15.0662H12.2018L10.3848 16.8831C10.3353 16.9358 10.2756 16.9778 10.2093 17.0066C10.143 17.0352 10.0716 17.0501 9.99935 17.0501C9.9271 17.0501 9.85568 17.0352 9.78935 17.0066C9.7231 16.9778 9.66335 16.9358 9.61393 16.8831L7.79697 15.0662H5.59459C4.71842 15.0662 3.87815 14.7181 3.25861 14.0986C2.63907 13.4791 2.29102 12.6388 2.29102 11.7626V6.2567C2.29102 5.38053 2.63907 4.54026 3.25861 3.92072C3.87815 3.30117 4.71842 2.95312 5.59459 2.95312H14.4041C15.2803 2.95312 16.1205 3.30117 16.7401 3.92072C17.3596 4.54026 17.7077 5.38053 17.7077 6.2567Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
//                 </svg>
//                 <span class="text-captionBig font-captionBig text-secondary">${comments} Comments</span>
//             </div>
//             <div class="flex items-center gap-[4px]">
//                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
//                     <path d="M4.7918 7.84375H3.80555C2.98851 7.84375 2.32617 8.50613 2.32617 9.32313V16.2269C2.32617 17.044 2.98851 17.7063 3.80555 17.7063H4.7918C5.60884 17.7063 6.27118 17.044 6.27118 16.2269V9.32313C6.27118 8.50613 5.60884 7.84375 4.7918 7.84375Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
//                     <path d="M17.6331 10.2L16.4496 16.1175C16.3594 16.5716 16.1124 16.9795 15.7518 17.2697C15.3911 17.5601 14.94 17.7142 14.4771 17.7054H8.24398C7.72085 17.7054 7.21913 17.4976 6.84922 17.1276C6.4793 16.7577 6.27148 16.256 6.27148 15.7329V9.8154C6.28733 9.43556 6.38341 9.06348 6.55339 8.72348C6.72338 8.38356 6.96343 8.0834 7.25773 7.84286L8.07633 2.9116C8.09478 2.79656 8.14014 2.68751 8.20873 2.59332C8.27732 2.49914 8.36722 2.42249 8.47097 2.36961C8.5748 2.31674 8.68963 2.28914 8.80622 2.28906C8.92272 2.28899 9.03755 2.31643 9.14147 2.36916L10.0587 2.82285C10.6646 3.12245 11.1498 3.62055 11.4333 4.23423C11.7168 4.84791 11.7816 5.54017 11.617 6.19582L11.2027 7.833H15.7001C15.9926 7.83294 16.2815 7.89794 16.5457 8.0233C16.8101 8.14867 17.0432 8.33123 17.2282 8.55781C17.4132 8.7844 17.5455 9.04931 17.6156 9.33331C17.6856 9.61731 17.6916 9.9134 17.6331 10.2Z" stroke="#7A7A7A" stroke-linecap="round" stroke-linejoin="round"/>
//                 </svg>
//                 <span class="text-captionBig font-captionBig text-secondary">24 Likes</span>
//             </div>
//         </div>
//     </div>
//   </div>
//   `;
// }

// const paginationContainer = document.getElementById("tst-pagination-container");
// if(paginationContainer) {
//   fetchPost().then(async (data) => {
//     let result = "";
//     for(let d of data) {
//       result += await createPost(d);
//     }
//     paginationContainer.innerHTML = result;
//   });
// }