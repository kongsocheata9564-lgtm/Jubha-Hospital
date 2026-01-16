<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">



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



<section class="finder-section" id="finder">

    <!-- Tabs -->
    <div class="finder-tabs">
        <div class="finder-tab active" data-mode="doctor">
            <i class="fa-solid fa-user-doctor"></i>
            <span>Find a Doctor</span>
        </div>

        <div class="finder-tab" data-mode="health">
            <i class="fa-solid fa-heart-pulse"></i>
            <span>Health Packages</span>
        </div>
    </div>

    <!-- Search Bar (ONE ONLY) -->
    <div class="finder-search">
        <input
            type="text"
            id="finderInput"
            placeholder="Search for Doctors or Specialties"
        >
        <button>
            <i class="fa-solid fa-magnifying-glass"></i>
            Search
        </button>
    </div>

</section>

<script>
const tabs = document.querySelectorAll('.finder-tab');
const section = document.getElementById('finder');
const input = document.getElementById('finderInput');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {

        // Active tab
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');

        // Mode switch
        if (tab.dataset.mode === 'health') {
            section.classList.add('health-mode');
            input.placeholder = 'Search Health Packages';
        } else {
            section.classList.remove('health-mode');
            input.placeholder = 'Search for Doctors or Specialties';
        }
    });
});
</script>


<!-- OUR SPECIALTIES SECTION -->
<section class="specialties-section">
    <div class="specialties-header">
        <div class="specialties-title">
            <h2>OUR SPECIALTIES</h2>
            <span class="title-line"></span>
            <p>
                Discover Intercare’s centers of excellence. Meet our specialized doctors
                and access advanced care, from Family Medicine to Complex Surgery.
            </p>
        </div>

        <a href="' . esc_url( http://jubha-hospital.test/specialties/ ) . '" class="btn-view-all">
            View All Specialties →
        </a>
    </div>

    <div class="specialties-slider">

        <div class="specialties-cards">

            
            <div class="specialty-card">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/dr1.jpg' ); ?>" alt="Director">
                <div class="card-content">
                    <h3>Surgery</h3>
                    <a href="#" class="btn-info">View Info →</a>
                </div>
            </div>

            
            <div class="specialty-card">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/dr2.jpg' ); ?>" alt="Director">
                <div class="card-content">
                    <h3>General Practice</h3>
                    <a href="#" class="btn-info">View Info →</a>
                </div>
            </div>

            
            <div class="specialty-card">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/dr3.jpg' ); ?>" alt="Director">
                <div class="card-content">
                    <h3>Maternity</h3>
                    <a href="#" class="btn-info">View Info →</a>
                </div>
            </div>

        </div>

    </div>

     <div class="specialties-sliders">

        <div class="specialties-cards">

            
            <div class="specialty-card">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/dr4.jpg' ); ?>" alt="Director">
                <div class="card-content">
                    <h3>Surgery</h3>
                    <a href="#" class="btn-info">View Info →</a>
                </div>
            </div>

            
            <div class="specialty-card">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/dr5.jpg' ); ?>" alt="Director">
                <div class="card-content">
                    <h3>General Practice</h3>
                    <a href="#" class="btn-info">View Info →</a>
                </div>
            </div>

            
            <div class="specialty-card">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/dr2.jpg' ); ?>" alt="Director">
                <div class="card-content">
                    <h3>Maternity</h3>
                    <a href="#" class="btn-info">View Info →</a>
                </div>
            </div>

        </div>

    </div>

    <!-- <div class="slider-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div> -->
</section>

<!-- <script>
const slider = document.querySelector('.specialties-cards');
const nextBtn = document.querySelector('.slider-arrow.right');
const prevBtn = document.querySelector('.slider-arrow.left');

const cardWidth = document.querySelector('.specialty-card').offsetWidth + 25; // card + gap

nextBtn.addEventListener('click', function () {
    slider.scrollLeft += cardWidth;
});

prevBtn.addEventListener('click', function () {
    slider.scrollLeft -= cardWidth;
});
</script> -->



<!-- HEALTH PACKAGES -->
<section class="health-packages">
    <div class="hp-container">

        <!-- LEFT TEXT -->
        <div class="hp-left">
            <h2>HEALTH<br>PACKAGES</h2>
            <div class="hp-line"></div>
            <p>
                Intercare Hospital has health packages for all your needs,
                plus special offers!
            </p>
            <a href="' . esc_url( http://jubha-hospital.test/jubha-shop/ ) . '" class="hp-btn">VIEW ALL PACKAGE</a>
        </div>

        <!-- RIGHT SLIDER -->
        <div class="hp-right">

            <!-- LEFT ARROW -->
            <span class="hp-arrow left" onclick="moveLeft()">&#10094;</span>

            <div class="hp-slider" id="hpSlider">

                <div class="hp-card">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/h1.jpg' ); ?>" alt="Director">
                    <h3>Bone Mineral Density (BMD) Screening</h3>
                    <span class="hp-tag">HEALTH CHECK</span>
                    <div class="hp-price">
                        <del>60.00$</del>
                        <strong>29.90$</strong>
                    </div>
                    <a href="#" class="btn-info">VIEW →</a>
                </div>

                <div class="hp-card">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/h2.jpg' ); ?>" alt="Director">
                    <h3>Antenatal Basic Health Check Packagee</h3>
                    <span class="hp-tag">VACCINE</span>
                    <div class="hp-price">
                        <strong>23.00$</strong>
                    </div>
                    <a href="#" class="btn-info">VIEW →</a>
                </div>

                <div class="hp-card">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/h3.jpg' ); ?>" alt="Director">
                    <h3>Standard Health Check Up (Below 30)</h3>
                    <span class="hp-tag">HEALTH CHECK</span>
                    <div class="hp-price">
                        <strong>188.00$</strong>
                    </div>
                    <a href="#" class="btn-info">VIEW →</a>
                </div>

                <div class="hp-card">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/h4.jpg' ); ?>" alt="Director">
                    <h3>Standard Health Check Up (Below 30)</h3>
                    <span class="hp-tag">HEALTH CHECK</span>
                    <div class="hp-price">
                        <strong>188.00$</strong>
                    </div>
                    <a href="#" class="btn-info">VIEW →</a>
                </div>

                <div class="hp-card">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/h5.jpg' ); ?>" alt="Director">
                    <h3>Standard Health Check Up (Below 30)</h3>
                    <span class="hp-tag">HEALTH CHECK</span>
                    <div class="hp-price">
                        <strong>188.00$</strong>
                    </div>
                    <a href="#" class="btn-info">VIEW →</a>
                </div>

                <div class="hp-card">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/h6.jpg' ); ?>" alt="Director">
                    <h3>Standard Health Check Up (Below 30)</h3>
                    <span class="hp-tag">HEALTH CHECK</span>
                    <div class="hp-price">
                        <strong>188.00$</strong>
                    </div>
                    <a href="#" class="btn-info">VIEW →</a>
                </div>

            </div>

            <!-- RIGHT ARROW -->
            <span class="hp-arrow right" onclick="moveRight()">&#10095;</span>

        </div>
    </div>
</section>

<!-- SLIDER SCRIPT -->
<script>
const slider = document.getElementById("hpSlider");

function moveLeft() {
    slider.scrollBy({ left: -320, behavior: "smooth" });
}

function moveRight() {
    slider.scrollBy({ left: 320, behavior: "smooth" });
}
</script>



<section class="healthcare-section">
    <div class="healthcare-overlay">
        <h1>
            International Standard Healthcare,<br>
            <span>Closer to Home</span>
        </h1>

        <p class="description">
            World-class diagnostics and care located right here in Phnom Penh, Cambodia.
            Access advanced technology and certified global expertise, delivered with
            genuine local compassion for your family's health needs.
        </p>

        <div class="stats-container">

            <div class="stat-box">
                <div class="icon">
                    <i class="fa-solid fa-heart-pulse"></i>
                </div>
                <h2>30K+</h2>
                <p>Patients/Customers<br>Satisfaction</p>
            </div>

            <div class="stat-box">
                <div class="icon">
                    <i class="fa-solid fa-stethoscope"></i>
                </div>
                <h2>20+</h2>
                <p>Medical Specialties</p>
            </div>

            <div class="stat-box">
                <div class="icon">
                    <i class="fa-solid fa-user-doctor"></i>
                </div>
                <h2>200+</h2>
                <p>Medical Professionals</p>
            </div>

            <div class="stat-box">
                <div class="icon">
                    <i class="fa-solid fa-truck-medical"></i>
                </div>
                <h2>24/7</h2>
                <p>Emergency, Pediatrics,<br>Radiology, Laboratory</p>
            </div>

            <div class="stat-box">
                <div class="icon">
                    <i class="fa-solid fa-shield-heart"></i>
                </div>
                <h2>40+</h2>
                <p>Insurance Partners</p>
            </div>

        </div>
    </div>
</section>





<section class="news-events-section">
    <div class="container">
        <div class="news-header">
            <span class="sub-title">NEWS & EVENTS</span>
            <h2 class="main-title">STAY UP TO DATE WITH US</h2>
            <div class="title-underline"></div>
        </div>

        <div class="news-grid">
            
            <div class="news-card">
                <div class="card-thumb">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/n1.jpg' ); ?>" alt="Director">
                    <span class="category-badge">NEWS</span>
                </div>
                <div class="card-body">
                    <p class="post-date">SEPTEMBER 27, 2025</p>
                    <h3 class="post-title">Jubha Hospital and LL Fitness Sign MOU to Promote Holistic Health and Wellness</h3>
                    <div class="card-footer">
                        <a href="#" class="read-more-link">READ MORE <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card">
                <div class="card-thumb">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/n2.jpg' ); ?>" alt="Director">
                    <span class="category-badge">EVENTS</span>
                </div>
                <div class="card-body">
                    <p class="post-date">SEPTEMBER 2, 2025</p>
                    <h3 class="post-title">Jubha Hospital Joined the 10th Angkor Empire Marathon to Provide First Aid and Physiotherapy Support</h3>
                    <div class="card-footer">
                        <a href="#" class="read-more-link">READ MORE <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-card">
                <div class="card-thumb">
                   <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/n3.jpg' ); ?>" alt="Director">
                    <span class="category-badge">NEWS</span>
                </div>
                <div class="card-body">
                    <p class="post-date">AUGUST 29, 2025</p>
                    <h3 class="post-title">MoU Between Jubha Hospital and Devalda Medical Center to Advance Healthcare Development in Cambodia</h3>
                    <div class="card-footer">
                        <a href="#" class="read-more-link">READ MORE <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="view-more-wrapper">
            <a href="#" class="btn-view-more">VIEW MORE <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
</section>




<!-- OUR PARTNERS SECTION -->
<section class="partners-section">
    <div class="container">

        <h2 class="partners-title">Our Partners</h2>

        <div class="partners-grid">

            <div class="partner-box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/br1.jpg" alt="Partner 1">
            </div>

            <div class="partner-box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/br2.jpg" alt="Partner 2">
            </div>

            <div class="partner-box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/br3.jpg" alt="Partner 3">
            </div>

            <div class="partner-box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/br4.jpg" alt="Partner 4">
            </div>

            <div class="partner-box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/br5.jpg" alt="Partner 5">
            </div>

            <div class="partner-box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/br6.jpg" alt="Partner 6">
            </div>

            <div class="partner-box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/br7.jpg" alt="Partner 7">
            </div>

            <div class="partner-box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/br8.jpg" alt="Partner 8">
            </div>

            <div class="partner-box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/br9.jpg" alt="Partner 9">
            </div>

            <div class="partner-box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/br10.jpg" alt="Partner 10">
            </div>

            <div class="partner-box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/br11.jpg" alt="Partner 11">
            </div>

            <div class="partner-box">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/br12.jpg" alt="Partner 12">
            </div>

        </div>

        <!-- <div class="partners-btn">
            <a href="#" class="btn-partner">View More Partner</a>
        </div> -->

    </div>
</section>

<!-- Connect & Subscribe Section -->
<section class="connect-subscribe">
    <div class="container">

        <!-- Left: Social Media -->
        <div class="connect">
            <h3>CONNECT WITH US</h3>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-telegram-plane"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <!-- Right: Newsletter -->
        <div class="subscribe">
            <h3>SUBSCRIBE OUR NEWSLETTER</h3>
            <form class="subscribe-form" method="post">
                <input type="email" placeholder="Enter Your Email..." required>
                <button type="submit">Subscribe</button>
            </form>
        </div>

    </div>
</section>



<?php get_footer(); ?>
