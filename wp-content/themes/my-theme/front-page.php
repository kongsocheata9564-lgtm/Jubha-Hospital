<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">


<!-- Hero Slider Section -->
<!-- Hero Slider Section -->
<section class="hero-slider">
    <div class="slider-container">

        <!-- Slide 1 -->
        <div class="slide active">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/juha1.jpg" alt="Slide 1">
        </div>

        <!-- Slide 2 -->
        <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/juha2.jpg" alt="Slide 2">
        </div>

        <!-- Slide 3 -->
        <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/juha3.jpg" alt="Slide 3">
        </div>

        <!-- Slide 4 -->
        <div class="slide">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/juha4.jpg" alt="Slide 4">
        </div>

        <!-- Buttons -->
        <button class="slider-btn prev">&#10094;</button>
        <button class="slider-btn next">&#10095;</button>

        <!-- Dots -->
        <div class="slider-dots">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
            <span class="dot" data-slide="3"></span>
        </div>

    </div>
</section>

<script>
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    let currentIndex = 0;
    let autoSlide;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        slides[index].classList.add('active');
        dots[index].classList.add('active');
        currentIndex = index;
    }

    function nextSlide() {
        let nextIndex = (currentIndex + 1) % slides.length;
        showSlide(nextIndex);
    }

    function startAutoSlide() {
        autoSlide = setInterval(nextSlide, 3000); // 3 seconds
    }

    function resetAutoSlide() {
        clearInterval(autoSlide);
        startAutoSlide();
    }

    document.querySelector('.next').addEventListener('click', () => {
        nextSlide();
        resetAutoSlide();
    });

    document.querySelector('.prev').addEventListener('click', () => {
        let prevIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(prevIndex);
        resetAutoSlide();
    });

    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            showSlide(dot.dataset.slide);
            resetAutoSlide();
        });
    });

    // Start auto slide
    startAutoSlide();
</script>
