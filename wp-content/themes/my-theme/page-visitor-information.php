<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/visitor-information.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<section class="page-header-section">
    <div class="container">
        <div class="breadcrumb">
            <a href="http://jubha-hospital.test/" class="breadcrumb-link">HOME</a>
            <span class="breadcrumb-separator">/</span>
            <span class="breadcrumb-current">PATIENT INFORMATION</span>
        </div>
        <h1 class="page-title">VISITOR INFORMATION</h1>
    </div>
</section>


<section class="hospital-visitor-section">
    <div class="visitor-container">
        <div class="visitor-row">
            
            <div class="visitor-col-text">
                <h2 class="visitor-title"><?php echo 'Visitor Information'; ?></h2>
                
                <p class="visitor-intro">
                    Welcome to <strong>Jubha Hospital</strong>. We are committed to providing excellent care for our patients and ensuring a safe and comfortable environment for all visitors.
                </p>

                <ul class="visitor-features">
                    <li>
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <span>From 7 am to 10 pm daily in coordination with the patient's care team.</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-child-reaching"></i>
                        <span>Children under the age of 14 must be accompanied by an adult.</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-clipboard-check"></i>
                        <span>All visitors must follow the hospital visitation guidelines.</span>
                    </li>
                </ul>

                <p class="visitor-closing">
                    Our visiting hours are from 7 am to 10pm daily. We kindly ask that visitors respect these hours to allow our patients proper rest and care.
                </p>
            </div>

            <div class="visitor-col-image">
                <div class="image-wrapper">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/asset/vs1.jpg' ); ?>" alt="Director">
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