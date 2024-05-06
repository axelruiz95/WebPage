document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector(".slider");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");

    let currentIndex = 0;
    const totalSlides = document.querySelectorAll(".slide").length;

    prevBtn.addEventListener("click", function() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlider();
    });

    nextBtn.addEventListener("click", function() {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
    });

    function updateSlider() {
        const translateValue = -currentIndex * 33.333;
        slider.style.transform = `translateX(${translateValue}%)`;
    }
});