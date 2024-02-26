const navBtn = document.getElementById("navBtn");
navBtn.addEventListener("click", () => {
  const navMenu = document.getElementById("navMenu");
  if (navMenu.classList.contains("hidden")) {
    navMenu.classList.remove("hidden");
  } else {
    navMenu.classList.add("hidden");
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
const successContent = document.getElementById('statsContent');

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

  if (top < introOffset && bottom > introOffset) {
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