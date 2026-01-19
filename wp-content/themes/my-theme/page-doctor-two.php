<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/doctor.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


<section class="page-header-section">
    <div class="container">
        <div class="breadcrumb">
            <a href="http://jubha-hospital.test/" class="breadcrumb-link">HOME</a>
            <span class="breadcrumb-separator">/</span>
            <span class="breadcrumb-current">FIND A DOCTOR</span>
        </div>
        <h1 class="page-title">DR. HUOTH CHANSOMALY</h1>
    </div>
</section>


<!-- DOCTOR PROFILE SIMPLE -->
<section class="doctor-simple">
    <div class="doctor-wrapper">

        <!-- IMAGE -->
        <div class="doctor-photo">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/m3.jpg' ); ?>" alt="Director" class="dept-img">
        </div>

        <!-- CONTENT -->
        <div class="doctor-content">
            <h2>Dr. Huoth Chansomaly</h2>
            <h4>General Practitioner & Pediatrician</h4>

            <p>
                Dr. Huoth Chansomaly has over 15 years of experience in pediatric and general
                medical care. She is known for her gentle, clear communication and family-focused
                approach to treatment.
            </p>

            <!-- INFO LIST -->
            <ul class="doctor-info">

                <li>
                    <i class="fas fa-language"></i>
                    <strong>Languages:</strong> Khmer, English
                </li>

                <li>
                    <i class="fas fa-briefcase-medical"></i>
                    <strong>Experience:</strong> 15+ Years
                </li>

                <li>
                    <i class="fas fa-graduation-cap"></i>
                    <strong>Education & Credentials:</strong>
                    MD – International University (Cambodia),
                    Diploma in Child Health – University of Sydney
                </li>

                <li>
                    <i class="fas fa-stethoscope"></i>
                    <strong>Clinical Expertise & Strengths:</strong>
                    Pediatric Care, Neonatal Care, Family Medicine
                </li>

                <li>
                    <i class="fas fa-users"></i>
                    <strong>Professional Memberships:</strong>
                    Cambodian Medical Council
                </li>

                <li>
                    <i class="fas fa-book-medical"></i>
                    <strong>Research Interests & Publications:</strong>
                    Child Health, Preventive Care
                </li>

            </ul>

            <a href="#" class="simple-btn">Book Appointment</a>
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
