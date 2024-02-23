const navBtn = document.getElementById("navBtn");
navBtn.addEventListener("click", () => {
  const navMenu = document.getElementById("navMenu");
  if (navMenu.classList.contains("hidden")) {
    navMenu.classList.remove("hidden");
  } else {
    navMenu.classList.add("hidden");
  }
});