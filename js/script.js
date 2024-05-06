document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector(".testimonio-slider");
    const prevBtn = document.querySelector(".testimonio-prev-btn");
    const nextBtn = document.querySelector(".testimonio-next-btn");

    let currentIndex = 0;
    const totalSlides = document.querySelectorAll(".testimonio-slide").length;

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