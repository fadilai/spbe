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
    const icon = element.querySelector("i");
    const body = element.nextElementSibling;

    if (body) {
        body.classList.toggle("show");
    }

    if (element.classList.contains("active")) {
        icon.classList.remove("bi-arrow-right-circle");
        icon.classList.add("bi-arrow-down-circle");
    } else {
        icon.classList.remove("bi-arrow-down-circle");
        icon.classList.add("bi-arrow-right-circle");
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

// Dropdown index domain
const dropdownButton = document.querySelector(".dropdown-button");
const dropdownMenu = document.querySelector(".dropdown-menu");
const nilaiSpbeElement = document.getElementById("nilai-spbe");
const tahunSpbeElement = document.getElementById("tahun-spbe");
const domainsContainer = document.getElementById("domains-container");

const dataSPBE = {
    2019: {
        nilai: "1.52",
        domains: [
            { score: "1.29", name: "Domain Kebijakan SPBE" },
            { score: "1.00", name: "Domain Tata Kelola SPBE" },
            { score: "-", name: "Domain Manajemen SPBE" },
            { score: "1.85", name: "Domain Layanan SPBE" },
        ],
    },
    2020: {
        nilai: "-",
        domains: [
            { score: "-", name: "Domain Kebijakan SPBE" },
            { score: "-", name: "Domain Tata Kelola SPBE" },
            { score: "-", name: "Domain Manajemen SPBE" },
            { score: "-", name: "Domain Layanan SPBE" },
        ],
    },
    2021: {
        nilai: "-",
        domains: [
            { score: "-", name: "Domain Kebijakan SPBE" },
            { score: "-", name: "Domain Tata Kelola SPBE" },
            { score: "-", name: "Domain Manajemen SPBE" },
            { score: "-", name: "Domain Layanan SPBE" },
        ],
    },
    2022: {
        nilai: "2.09",
        domains: [
            { score: "2.50", name: "Domain Kebijakan SPBE" },
            { score: "1.40", name: "Domain Tata Kelola SPBE" },
            { score: "1.00", name: "Domain Manajemen SPBE" },
            { score: "2.75", name: "Domain Layanan SPBE" },
        ],
    },
    2023: {
        nilai: "2.55",
        domains: [
            { score: "3.00", name: "Domain Kebijakan SPBE" },
            { score: "2.00", name: "Domain Tata Kelola SPBE" },
            { score: "1.09", name: "Domain Manajemen SPBE" },
            { score: "3.25", name: "Domain Layanan SPBE" },
        ],
    },
    2024: {
        nilai: "2.85",
        domains: [
            { score: "3.70", name: "Domain Kebijakan SPBE" },
            { score: "2.10", name: "Domain Tata Kelola SPBE" },
            { score: "1.00", name: "Domain Manajemen SPBE" },
            { score: "3.69", name: "Domain Layanan SPBE" },
        ],
    },
};

dropdownButton.addEventListener("click", () => {
    dropdownMenu.style.display =
        dropdownMenu.style.display === "none" ||
        dropdownMenu.style.display === ""
            ? "block"
            : "none";
});

document.querySelectorAll(".dropdown-item").forEach((item) => {
    item.addEventListener("click", (e) => {
        e.preventDefault();
        const year = e.target.getAttribute("data-year");
        updateData(year);
        dropdownMenu.style.display = "none";
    });
});

function updateData(year) {
    const data = dataSPBE[year];
    if (data) {
        nilaiSpbeElement.textContent = data.nilai;
        tahunSpbeElement.textContent = `Nilai SPBE Tahun ${year}`;
        domainsContainer.innerHTML = data.domains
            .map(
                (domain) => `
                <div class="domain">
                    <h5 class="text-primary">${domain.score}</h5>
                    <p>${domain.name}</p>
                </div>
            `
            )
            .join("");
    }
}

document.addEventListener("DOMContentLoaded", () => {
    updateData("2024");
});

document.addEventListener("click", (e) => {
    if (!e.target.closest(".dropdown")) {
        dropdownMenu.style.display = "none";
    }
});

// End Dropdown index domain


// Tata Kelola
 const scrollContainer = document.getElementById("scroll-container");
 scrollContainer.innerHTML += scrollContainer.innerHTML;
 let scrollAmount = 1;
 let isUserInteracting = false;
 function continuousScroll() {
     if (!isUserInteracting) {
         scrollContainer.scrollLeft += scrollAmount;
         if (scrollContainer.scrollLeft >= scrollContainer.scrollWidth / 2) {
             scrollContainer.scrollLeft = 0;
         }
     }
     requestAnimationFrame(continuousScroll);
 }
 continuousScroll();
 let isMouseDown = false;
 let startX, scrollLeft;

 scrollContainer.addEventListener("mousedown", (e) => {
     isMouseDown = true;
     startX = e.pageX - scrollContainer.offsetLeft;
     scrollLeft = scrollContainer.scrollLeft;
     isUserInteracting = true;
 });

 scrollContainer.addEventListener("mouseleave", () => {
     isMouseDown = false;
     isUserInteracting = false;
 });

 scrollContainer.addEventListener("mouseup", () => {
     isMouseDown = false;
     isUserInteracting = false;
 });

 scrollContainer.addEventListener("mousemove", (e) => {
     if (!isMouseDown) return;
     e.preventDefault();
     const x = e.pageX - scrollContainer.offsetLeft;
     const walk = (x - startX) * 3;
     scrollContainer.scrollLeft = scrollLeft - walk;
 });

 scrollContainer.style.cursor = "pointer";
// end tata kelola
