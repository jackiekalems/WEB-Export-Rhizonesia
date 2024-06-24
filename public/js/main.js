// hero section
document.addEventListener("DOMContentLoaded", function () {
    let slides = document.querySelectorAll(".hero-section .slide");
    let currentSlide = 0;

    function showSlide(index) {
        slides[currentSlide].classList.remove("active");
        currentSlide = (index + slides.length) % slides.length;
        slides[currentSlide].classList.add("active");
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    setInterval(nextSlide, 5000); // Change slide every 5 seconds
});
// end hero section
// carousel about
document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.getElementById("carouselExampleCaptions");
    const items = carousel.querySelectorAll("[data-twe-carousel-item]");
    const indicators = carousel.querySelectorAll("[data-twe-slide-to]");
    const nextButton = carousel.querySelector("[data-twe-slide='next']");
    const prevButton = carousel.querySelector("[data-twe-slide='prev']");
    let activeIndex = 0;
    let autoSlideInterval;

    function setActiveSlide(index) {
        items.forEach((item, i) => {
            item.classList.toggle("hidden", i !== index);
            item.classList.toggle("block", i === index);
        });
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle("opacity-50", i !== index);
            indicator.classList.toggle("opacity-100", i === index);
        });
        activeIndex = index;
    }

    function nextSlide() {
        const nextIndex = (activeIndex + 1) % items.length;
        setActiveSlide(nextIndex);
    }

    function prevSlide() {
        const prevIndex = (activeIndex - 1 + items.length) % items.length;
        setActiveSlide(prevIndex);
    }

    indicators.forEach((indicator, i) => {
        indicator.addEventListener("click", () => {
            setActiveSlide(i);
        });
    });

    nextButton.addEventListener("click", nextSlide);
    prevButton.addEventListener("click", prevSlide);

    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    carousel.addEventListener("mouseenter", stopAutoSlide);
    carousel.addEventListener("mouseleave", startAutoSlide);

    setActiveSlide(activeIndex);
    startAutoSlide();
});

// end carousel about
// dropdown
document.addEventListener("DOMContentLoaded", function () {
    const dropdownToggle = document.getElementById("dropdownNavbarLink");
    const dropdownMenu = document.getElementById("dropdownNavbar");

    // Fungsi untuk menampilkan dropdown
    function showDropdown() {
        if (!dropdownMenu.classList.contains("hidden")) {
            dropdownMenu.classList.remove("hidden");
        }
    }

    // Fungsi untuk menyembunyikan dropdown
    function hideDropdown() {
        dropdownMenu.classList.add("hidden");
    }

    // Event listener untuk hover pada dropdown toggle di desktop
    dropdownToggle.addEventListener("mouseenter", showDropdown);
    dropdownMenu.addEventListener("mouseleave", hideDropdown);

    // Deteksi lebar layar dan matikan dropdown jika layar adalah perangkat seluler
    function handleMobileDropdown() {
        if (window.innerWidth <= 768) {
            // Misalnya, ukuran perangkat seluler
            dropdownToggle.removeEventListener("mouseenter", showDropdown);
            dropdownMenu.removeEventListener("mouseleave", hideDropdown);
        }
    }

    // Panggil fungsi handleMobileDropdown saat halaman dimuat
    handleMobileDropdown();

    // Panggil fungsi handleMobileDropdown saat ukuran layar berubah
    window.addEventListener("resize", handleMobileDropdown);
});
// end dropdown

var swiper = new Swiper(".teamswiper1", {
    slidesPerView: 1, // Ini adalah pengaturan default untuk layar kecil
    spaceBetween: 32,
    centeredSlides: false,
    slidesPerGroupSkip: 1,
    grabCursor: true,
    loop: true,
    keyboard: {
        enabled: true,
    },
    breakpoints: {
        769: {
            slidesPerView: 2, // Mengubah jumlah slide yang terlihat menjadi 3
            slidesPerGroup: 1,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    scrollbar: {
        el: ".swiper-scrollbar",
    },
    pagination: {
        el: ".swiper-pagination",
        type: "fraction", // Menampilkan paginasi sebagai fraction
    },
});
var swiper = new Swiper(".teamswiper2", {
    slidesPerView: 1, // Ini adalah pengaturan default untuk layar kecil
    spaceBetween: 32,
    centeredSlides: false,
    slidesPerGroupSkip: 1,
    grabCursor: true,
    loop: true,
    keyboard: {
        enabled: true,
    },
    breakpoints: {
        769: {
            slidesPerView: 4, // Mengubah jumlah slide yang terlihat menjadi 3
            slidesPerGroup: 1,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    scrollbar: {
        el: ".swiper-scrollbar",
    },
    pagination: {
        el: ".swiper-pagination",
        type: "fraction", // Menampilkan paginasi sebagai fraction
    },
});

// share links
document.getElementById("shareButton").addEventListener("click", async () => {
    if (navigator.share) {
        try {
            await navigator.share({
                title: "Judul Halaman",
                text: "Deskripsi singkat halaman ini",
                url: window.location.href,
            });
            console.log("Berbagi sukses");
        } catch (error) {
            console.error("Gagal berbagi", error);
        }
    } else {
        alert("Fitur berbagi tidak didukung di browser ini.");
    }
});
document.getElementById("shareButton2").addEventListener("click", async () => {
    if (navigator.share) {
        try {
            await navigator.share({
                title: "Judul Halaman",
                text: "Deskripsi singkat halaman ini",
                url: window.location.href,
            });
            console.log("Berbagi sukses");
        } catch (error) {
            console.error("Gagal berbagi", error);
        }
    } else {
        alert("Fitur berbagi tidak didukung di browser ini.");
    }
});
document.getElementById("shareButton3").addEventListener("click", async () => {
    if (navigator.share) {
        try {
            await navigator.share({
                title: "Judul Halaman",
                text: "Deskripsi singkat halaman ini",
                url: window.location.href,
            });
            console.log("Berbagi sukses");
        } catch (error) {
            console.error("Gagal berbagi", error);
        }
    } else {
        alert("Fitur berbagi tidak didukung di browser ini.");
    }
});
document.getElementById("shareButton4").addEventListener("click", async () => {
    if (navigator.share) {
        try {
            await navigator.share({
                title: "Judul Halaman",
                text: "Deskripsi singkat halaman ini",
                url: window.location.href,
            });
            console.log("Berbagi sukses");
        } catch (error) {
            console.error("Gagal berbagi", error);
        }
    } else {
        alert("Fitur berbagi tidak didukung di browser ini.");
    }
});
document.getElementById("shareButton5").addEventListener("click", async () => {
    if (navigator.share) {
        try {
            await navigator.share({
                title: "Judul Halaman",
                text: "Deskripsi singkat halaman ini",
                url: window.location.href,
            });
            console.log("Berbagi sukses");
        } catch (error) {
            console.error("Gagal berbagi", error);
        }
    } else {
        alert("Fitur berbagi tidak didukung di browser ini.");
    }
});
// navbar
const toggleNav = document.querySelector(".nav-list");
const toggleBtn = document.querySelector(".btn-toggle");
const overlay = document.querySelector(".overlay");
const body = document.querySelector("body");
toggleBtn.addEventListener("click", () => {
    toggleNav.classList.toggle("active-nav");
    body.classList.toggle("no-scroll");
    overlay.classList.toggle("active");
    toggleBtn.classList.toggle("active-toggle");
});

overlay.addEventListener("click", () => {
    toggleNav.classList.remove("active-nav");
    body.classList.remove("no-scroll");
    overlay.classList.remove("active");
    toggleBtn.classList.remove("active-toggle");
});

// [Dropdown]
const dropdownTrigger = document.querySelector(".has-dropdown");
const dropdownMenu = document.querySelector(".sub-menu");

dropdownTrigger.addEventListener("click", (event) => {
    event.preventDefault();
    dropdownTrigger.querySelector("svg").classList.toggle("active");
    dropdownMenu.classList.toggle("active-sub");
});
