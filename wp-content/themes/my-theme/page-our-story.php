<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/our-story.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


<section class="page-header-section">
    <div class="container">
        <div class="breadcrumb">
            <a href="' . esc_url( http://jubha-hospital.test/ ) . '" class="breadcrumb-link">HOME</a>
            <span class="breadcrumb-separator">/</span>
            <span class="breadcrumb-current">ABOUT OUR HOSPITAL</span>
        </div>
        <h1 class="page-title">OUR STORY</h1>
    </div>
</section>



<section class="hospital-intro">
    <div class="container">
        <div class="intro-grid">
            
            <div class="intro-content">
                <h2 class="section-title">Your Wellness, Our Mission</h2>
                <div class="intro-text">
                    <p>
                        <strong>Jubha Hospital</strong>, established in October 2020, is located in the Olympia Medical Hub and offers a wide range of healthcare services. These include general practice and specialist consultations, emergency services, physiotherapy, aesthetics, maternity, child wellbeing center, an imaging center, a laboratory, vaccination services, as well as inpatient and outpatient facilities.
                    </p>
                    <p>
                        Additionally, we will soon open our oncology department with 4 intensive care units and 2 cardiac care units.
                    </p>
                    <p>
                        At Jubha Hospital, we are dedicated to providing accessible health care to everyone. We treat each patient equally and with respect as an individual.
                    </p>
                </div>
            </div>

            <div class="intro-image">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/vs3.jpg' ); ?>" alt="Director">
            </div>

        </div>
    </div>

    <!-- <div class="floating-chat">
        <i class="fa-solid fa-comment-dots"></i>
    </div> -->
</section>


<!-- OUR JOURNEY SECTION -->
<section class="our-journey">
    <div class="container">

        <h2 class="section-title">Our Journey</h2>

        <!-- Cards -->
        <div class="journey-cards">

            <div class="journey-card">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/ab1.jpg' ); ?>" alt="Director">
                <p>
                    Jubha Medical Center was founded, providing essential services such
                    as COVID-19 laboratory testing, general practice consultations,
                    and outpatient care.
                </p>
            </div>

            <div class="journey-card">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/ab2.jpg' ); ?>" alt="Director">
                <p>
                    We significantly expanded our laboratory capabilities and established
                    COVID-19 Treatment and Vaccination Centers, including advanced imaging services.
                </p>
            </div>

            <div class="journey-card">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/ab3.jpg' ); ?>" alt="Director">
                <p>
                    We broadened our services with 24/7 emergency care, physiotherapy,
                    visa health checks, and comprehensive maternity services.
                </p>
            </div>

            <div class="journey-card">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/ab4.jpg' ); ?>" alt="Director">
                <p>
                    Opened an advanced operating theatre, enabling complex surgical
                    procedures and higher-level patient care.
                </p>
            </div>

        </div>

    <div class="timeline">

            <span class="timeline-line"></span>

            <div class="timeline-item">
                <div class="timeline-circle">
                    <i class="fa-solid fa-flag"></i>
                </div>
                <h4>2020</h4>
                <p>Intercare Medical Center</p>
            </div>

            <div class="timeline-item">
                <div class="timeline-circle">
                    <i class="fa-solid fa-vials"></i>
                </div>
                <h4>2021</h4>
                <p>Expansion & Pandemic Response</p>
            </div>

            <div class="timeline-item">
                <div class="timeline-circle">
                    <i class="fa-solid fa-hospital"></i>
                </div>
                <h4>2022</h4>
                <p>Service Expansion</p>
            </div>

            <div class="timeline-item">
                <div class="timeline-circle">
                    <i class="fa-solid fa-user-doctor"></i>
                </div>
                <h4>2023</h4>
                <p>Advanced Medical Care</p>
            </div>

        </div>
    </div>
</section>
