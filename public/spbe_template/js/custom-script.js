// Js for filter buttons
document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const cards = document.querySelectorAll(".card-item");
    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const category = button.getAttribute("data-category");
            filterButtons.forEach((btn) =>
                btn.classList.remove("active", "btn-primary")
            );
            button.classList.add("active", "btn-primary");
            cards.forEach((card) => {
                if (
                    category === "all" ||
                    card.getAttribute("data-category") === category
                ) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        });
    });
    document.querySelector(".filter-btn[data-category='all']").click();
});
// Js for filter buttons

// Js for scrollable container
document.addEventListener("DOMContentLoaded", function () {
    const container = document.querySelector(".scrollable-container");
    const wrapper = document.querySelector(".card-wrapper");
    const pagination = document.querySelector(".scroll-pagination");
    const containerWidth = container.offsetWidth;
    const totalCards = wrapper.children.length;
    const visibleCards = Math.floor(
        containerWidth / wrapper.children[0].offsetWidth
    );
    const totalDots = Math.ceil(totalCards / visibleCards);
    for (let i = 0; i < totalDots; i++) {
        const dot = document.createElement("span");
        dot.classList.add("pagination-dot");
        if (i === 0) dot.classList.add("active");
        pagination.appendChild(dot);
    }
    const dots = document.querySelectorAll(".pagination-dot");
    container.addEventListener("scroll", () => {
        const scrollLeft = container.scrollLeft;
        const currentIndex = Math.round(scrollLeft / containerWidth);

        dots.forEach((dot, index) => {
            dot.classList.toggle("active", index === currentIndex);
        });
    });
});
//   Js for scrollable container

// Js for accordion
function toggleAccordion(element) {
    element.classList.toggle("active");
    const body = element.nextElementSibling;
    if (body) {
        body.classList.toggle("show");
    }
}
// Js for accordion

// Js for scroll to header
document.addEventListener("DOMContentLoaded", function () {
    const header = document.getElementById("main-header");
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
});
// Js for scroll to header
