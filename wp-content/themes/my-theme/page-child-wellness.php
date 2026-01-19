<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/surgery.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


<section class="page-header-section">
    <div class="container">
        <div class="breadcrumb">
            <a href="http://jubha-hospital.test/" class="breadcrumb-link">HOME</a>
            <span class="breadcrumb-separator">/</span>
            <span class="breadcrumb-current">SPECIALTIES</span>
        </div>
        <h1 class="page-title">CHILD WELLNESS</h1>
    </div>
</section>


<section class="dept-section">
    <div class="dept-container">
        
        <div class="dept-content">
            <h2 class="dept-title">About Department</h2>
            <div class="dept-underline"></div>
            <p class="dept-description">
                Welcome to the <strong>Jubha Hospital</strong> Child Wellbeing Center, where we are dedicated 
                to creating a nurturing environment for every child to thrive. With a foundation built on compassion, 
                innovation, and a commitment to privacy, our center prioritizes personalized care, celebrates diversity,
            </p>
            <p class="dept-description">
                Join us on a journey of growth, exploration, and joy as we empower each child to reach their fullest potential.
            </p>
            
        </div>

        <div class="dept-image-wrapper">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/dr5.jpg' ); ?>" alt="Director" class="dept-img">
            
        </div>

    </div>
</section>


<section class="student-cards-section">
    <div class="card-wrapper">
        <h2 class="section-title">Our Services</h2>
        
        <div class="card-grid">
            <div class="health-card">
                <div class="card-icon blue-bg">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3>Consultation</h3>
                <p>General & Specialist</p>
            </div>

            <div class="health-card">
                <div class="card-icon green-bg">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h3>Screening</h3>
                <p>Full Health Check</p>
            </div>

            <div class="health-card">
                <div class="card-icon purple-bg">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Vaccination</h3>
                <p>Safe Protection</p>
            </div>

            <div class="health-card">
                <div class="card-icon orange-bg">
                    <i class="fas fa-video"></i>
                </div>
                <h3>Telehealth</h3>
                <p>Online Meeting</p>
            </div>

            <div class="health-card">
                <div class="card-icon red-bg">
                    <i class="fas fa-hospital"></i>
                </div>
                <h3>Daycare</h3>
                <p>Observations</p>
            </div>
        </div>
    </div>
</section>



<section class="medical-team-section">
    <div class="container">
        
        <h2 class="section-title">OUR MEDICAL TEAM</h2>

        <div class="team-grid">
            
            <div class="team-card">
                <div class="image-wrapper">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/m2.jpg' ); ?>" alt="Director">
                </div>
                <h3>Dr. Lan Veasna</h3>
                <p>General Practitioner & Emergency</p>
                <a href="' . esc_url( http://jubha-hospital.test/doctor-one/ ) . '" class="profile-btn">
                    PROFILE <i class="fas fa-info-circle"></i>
                </a>
            </div>

            <div class="team-card">
                <div class="image-wrapper">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/m3.jpg' ); ?>" alt="Director">
                </div>
                <h3>Dr. Huoth Chansomaly</h3>
                <p>General Practitioner & OBGYN</p>
                <a href="' . esc_url( http://jubha-hospital.test/doctor-two/ ) . '" class="profile-btn">
                    PROFILE <i class="fas fa-info-circle"></i>
                </a>
            </div>

            <div class="team-card">
                <div class="image-wrapper">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/m5.jpg' ); ?>" alt="Director">
                </div>
                <h3>Dr. Sakhan Leakhena</h3>
                <p>General Practitioner & OBGYN</p>
                <a href="' . esc_url( http://jubha-hospital.test/doctor-three/ ) . '" class="profile-btn">
                    PROFILE <i class="fas fa-info-circle"></i>
                </a>
            </div>

            <div class="team-card">
                <div class="image-wrapper">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/m6.jpg' ); ?>" alt="Director">
                </div>
                <h3>Dr. Sok Tino</h3>
                <p>General Practitioner & Emergency</p>
                <a href="' . esc_url( http://jubha-hospital.test/doctor-four/ ) . '" class="profile-btn">
                    PROFILE <i class="fas fa-info-circle"></i>
                </a>
            </div>

        </div>
    </div>
</section>


<section class="promotions-section">
    <div class="promo-container">
        
        <div class="promo-header">
            <h2 class="promo-main-title">HEATH PAGKAGES</h2>
            <div class="underline"></div>
            <a href="' . esc_url( http://jubha-hospital.test/jubha-shop/ ) . '" class="visit-shop-btn">
                VIEWS ALL PAGKAGES <i class="fas fa-chevron-right"></i>
            </a>
        </div>

        <div class="promo-grid">
            
            <div class="promo-card">
                <div class="promo-image">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/h2.jpg' ); ?>" alt="Director">
                </div>
                <div class="promo-content">
                    <h3 class="promo-title">Standard Health Check Up (For Men and Women Below 30)</h3>
                    <div class="promo-category">
                        <i class="fas fa-briefcase-medical"></i> HEALTH CHECK
                    </div>
                    <p class="promo-description">Intercare Hospital's Standard Health Check-Up package for men and women...</p>
                    <!-- <a href="#" class="details-link">
                        PACKAGE DETAILS <i class="fas fa-chevron-right"></i>
                    </a> -->
                </div>
            </div>

            <div class="promo-card">
                <div class="promo-image">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/h4.jpg' ); ?>" alt="Director">
                </div>
                <div class="promo-content">
                    <h3 class="promo-title">Prostate Cancer Screening Package</h3>
                    <div class="promo-category">
                        <i class="fas fa-briefcase-medical"></i> HEALTH CHECK
                    </div>
                    <p class="promo-description">A targeted health package designed to evaluate prostate health. This...</p>
                    <!-- <a href="#" class="details-link">
                        PACKAGE DETAILS <i class="fas fa-chevron-right"></i>
                    </a> -->
                </div>
            </div>

            <div class="promo-card">
                <div class="promo-image">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/h3.jpg' ); ?>" alt="Director">
                </div>
                <div class="promo-content">
                    <h3 class="promo-title">Bone Mineral Density (BMD) Screening</h3>
                    <div class="promo-category">
                        <i class="fas fa-briefcase-medical"></i> HEALTH CHECK
                    </div>
                    <p class="promo-description">Understand the strength of your bones with our Bone Mineral...</p>
                    <!-- <a href="#" class="details-link">
                        PACKAGE DETAILS <i class="fas fa-chevron-right"></i>
                    </a> -->
                </div>
            </div>

        </div>
    </div>
</section>


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

