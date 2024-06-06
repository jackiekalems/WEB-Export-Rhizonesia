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
