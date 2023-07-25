const shrink_btn = document.querySelector(".shrink-btn");
const sidebar_links = document.querySelectorAll(".sidebar-links a");
const active_tab = document.querySelector(".active-tab");

let activeIndex; 

shrink_btn.addEventListener("click", () => {
    document.body.classList.toggle("shrink");
    shrink_btn.classList.add("hovered");

    setTimeout(
        () => {
            shrink_btn.classList.remove("hovered");
        }, 500);
});

function moveActiveTab() {
    let topPosition = activeIndex * 58 + 2.5;
    active_tab.style.top = `${topPosition}px`;
};

function changeLink() {
    sidebar_links.forEach(sideLink => sideLink.classList.remove("active"));
    this.classList.add("active");

    activeIndex = this.dataset.active;
    moveActiveTab();
};

sidebar_links.forEach(link => link.addEventListener("click", changeLink));

// New code to set the active tab based on the current page URL
document.addEventListener("DOMContentLoaded", () => {
    const currentPage = window.location.pathname.split("/").pop();
    switch (currentPage) {
      case "index.php":
        activeIndex = 0;
        break;
      case "events.php":
        activeIndex = 1;
        break;
      // Add more cases for other pages if needed
      default:
        activeIndex = 0; // Default to Home for unknown pages
        break;
    }
  
    // Set the initial active tab
    sidebar_links.forEach((link) => {
      if (link.dataset.active === String(activeIndex)) {
        link.classList.add("active");
      }
    });
  
    // Move the active tab indicator to the initial position
    moveActiveTab();
  });