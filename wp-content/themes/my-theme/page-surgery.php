<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/surgery.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


<section class="page-header-section">
    <div class="container">
        <div class="breadcrumb">
            <a href="' . esc_url( http://jubha-hospital.test/ ) . '" class="breadcrumb-link">HOME</a>
            <span class="breadcrumb-separator">/</span>
            <span class="breadcrumb-current">SPECIALTIES</span>
        </div>
        <h1 class="page-title">SURGERY</h1>
    </div>
</section>


<section class="dept-section">
    <div class="dept-container">
        
        <div class="dept-content">
            <h2 class="dept-title">About Department</h2>
            <div class="dept-underline"></div>
            <p class="dept-description">
                Jubha Hospital’s General Practice (OPD) is your primary hub for 
                <strong>comprehensive, patient-centered healthcare</strong>. Our department, 
                led by a team of diverse specialists, offers expert diagnosis, treatment, 
                and preventive care for a wide range of medical conditions across all ages.
            </p>
            <p class="dept-description">
                With modern facilities and a focus on convenience, we ensure compassionate 
                and professional care, making us your trusted partner in health.
            </p>
            
        </div>

        <div class="dept-image-wrapper">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/dr1.jpg' ); ?>" alt="Director" class="dept-img">
            <
        </div>

    </div>
</section>


<section class="student-services">
    <div class="s-container">
        <h2 class="s-header">Our Services</h2>
        
        <div class="s-pills-wrapper">
            <div class="s-pill blue">
                <span class="s-icon"><i class="fas fa-user-friends"></i></span>
                <span class="s-text">General & Specialist Consultation</span>
            </div>

            <div class="s-pill green">
                <span class="s-icon"><i class="fas fa-check-circle"></i></span>
                <span class="s-text">Health Screening</span>
            </div>

            <div class="s-pill purple">
                <span class="s-icon"><i class="fas fa-syringe"></i></span>
                <span class="s-text">Vaccination</span>
            </div>

            <div class="s-pill orange">
                <span class="s-icon"><i class="fas fa-mobile-alt"></i></span>
                <span class="s-text">Teleconsultation</span>
            </div>

            <div class="s-pill red">
                <span class="s-icon"><i class="fas fa-bed"></i></span>
                <span class="s-text">Daycare Observations</span>
            </div>
        </div>
    </div>
</section>